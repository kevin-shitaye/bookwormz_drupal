/**
 * @file
 * G2 reviews widget js logic.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  // Define the global ajax endpoing for processing pagination and filtering.
  var endpoint = '/g2-reviews-widget/ajax';

  /**
   * A product reviews widget processing.
   */
  Drupal.behaviors.g2ReviewsWidget = {
    attach: function (context, settings) {
      // Attach common processing.
      g2ReviewsWidgetReadMore(context);
      g2ReviewsWidgetPaginator(context, settings);
      g2ReviewsWidgetFilters(context, settings);
    }
  };

  /**
   * Reviews widget filters processing.
   */
  function g2ReviewsWidgetFilters(context, settings) {
    var wrapper = $('.g2-product-review-filters', context);
    var product_id = wrapper.parent().data('product_id');

    if (wrapper.length) {
      wrapper.find('div.form-item label, input[type="checkbox"]').on('click', function () {
        // Handle the case when user clicks on the label.
        if ($(this).is('label')) {
          var input = $(this).prev();
          // Trigger input click event.
          input.trigger('click');
        }
        else {
          var input = $(this);
        }

        var filter_name = input.data('filter_name');
        var value = input.val();
        var checked = input.is(':checked');

        if (settings.g2reviewsWidgets[product_id]) {
          Drupal
            .ajax({
              url: endpoint + '/' + product_id,
              submit: {
                widget_config: settings.g2reviewsWidgets[product_id],
                filter: {name: filter_name, value: value, checked: checked}
              }
            })
            .execute();

          // Delete the config once ajax request was performed, so, we'll get a
          // new config after it.
          delete settings.g2reviewsWidgets[product_id];
        }
      });
    }

    $(document).ajaxComplete(function () {
      var buttons = $('.g2-product-review-filters button', context);
      if (buttons.length) {
        buttons.each(function () {
          var checked_options = [];
          // Get only checked elements.
          $(this).parent().find('input').each(function () {
            if ($(this).is(':checked')) {
              checked_options.push($(this).next().text());
            }
          });
          // Update filter label value.
          if (checked_options.length) {
            checked_options = $(this).data('filter_label') + ': ' + checked_options.join(', ');
            $(this).text(checked_options);
          }
        });
      }
    });
  }

  /**
   * Reviews widget paginator processing.
   */
  function g2ReviewsWidgetPaginator(context, settings) {
    var wrapper = $('.g2-product-reviews-widget-pager', context);
    var next = wrapper.find('.g2-js-next');
    var previous = wrapper.find('.g2-js-previous');
    var product_id = wrapper.parent().data('product_id');
    var page = wrapper.find('.g2-current-page').data('page');

    if (next.length) {
      // Go to the next page.
      next.on('click', function () {
        Drupal
          .ajax({
            url: endpoint + '/' + product_id,
            submit: {
              widget_config: settings.g2reviewsWidgets[product_id],
              page: (page + 1)
            }
          })
          .execute();
      });
    }

    if (previous.length) {
      // Go to the previous page.
      previous.on('click', function () {
        Drupal
          .ajax({
            url: endpoint + '/' + product_id,
            submit: {
              widget_config: settings.g2reviewsWidgets[product_id],
              page: (page - 1)
            }
          })
          .execute();
      });
    }
  }

  /**
   * Reviews widget Show more/less button processing.
   */
  function g2ReviewsWidgetReadMore(context) {

    // Loop each set of questions/answers wrappers, so, check where do we need
    // to show the "Show more" button.
    $('.g2-content', context).each(function () {
      // First, we clone the actual element in order to get it original height.
      // By default it has overflow:hidden which doen't show us the real height,
      // that's why we need to set height:auto for the cloned element.
      var $clonedContent = $(this)
        .clone()
        .css({ display: "none", height: "auto" });

      $('body').append($clonedContent);
      // Get the correct height and then remove the cloned element.
      var contentHeight = $clonedContent.height();
      $clonedContent.remove();

      // If wrapper has less information then the actual box size then we remove
      // the "Show more" element.
      if (contentHeight < 429) {
        $(this).next().remove();
        $(this).removeClass('g2-hidecontent');
        // Correct the wrapper height in case there is less content.
        $(this).parents('.g2-product-review-item-list').css({
          "min-height": "initial"
        });
      }
    });

    $('p.g2-show-more', context).on('click', function () {
      var $this = $(this);
      var $content = $this.prev("div.g2-content");
      var linkText = $this.text();

      if (linkText === Drupal.t('Show more')) {
        linkText = Drupal.t('Show less');
        $content.removeClass("g2-hidecontent");
        $content.addClass("g2-showcontent");
      }
      else {
        linkText = Drupal.t('Show more');
        $content.removeClass("g2-showcontent");
        $content.addClass("g2-hidecontent");
      };
      $this.text(linkText);
    });
  }

})(jQuery, Drupal, drupalSettings);

;
/**
 * @file
 * G2 reviews ajax loader element.
 */

(function ($) {

  /**
   * The ajax loader element.
   */
  var ajaxLoader = $('\
    <div class="g2-ajax-loader">\
      <div class="g2-ajax-loader__inner">\
        <div class="g2-ajax-loader__content"><span class="spinner"></span></div>\
      </div>\
    </div>');

  /**
   * Add a custom trigger when beforeSend fires.
   */
  Drupal.Ajax.prototype.beforeSend = function (xmlhttprequest, options) {
    if (options.url) {
      var urlParts = options.url.split('/');
      if (urlParts[1] == 'g2-reviews-widget') {
        // Firstly, find the ajax loader element and remove it. Then, attach the
        // loader to the body selector.
        $('body').find('.g2-ajax-loader').remove();
        $('body').prepend(ajaxLoader);
      }
    }

    if (this.$form) {
      options.extraData = options.extraData || {};
      options.extraData.ajax_iframe_upload = '1';
      var v = $.fieldValue(this.element);

      if (v !== null) {
        options.extraData[this.element.name] = v;
      }
    }
    $(this.element).prop('disabled', true);

    if (!this.progress || !this.progress.type) {
      return;
    }

    var progressIndicatorMethod = "setProgressIndicator".concat(this.progress.type.slice(0, 1).toUpperCase()).concat(this.progress.type.slice(1).toLowerCase());

    if (progressIndicatorMethod in this && typeof this[progressIndicatorMethod] === 'function') {
      this[progressIndicatorMethod].call(this);
    }
  }

  /**
   * Remove ajax loader once the ajax request was performed.
   */
  $(document).ajaxComplete(function () {
    $('body').find('.g2-ajax-loader').remove();
  });

  $(document).ajaxError(function () {
    $('body').find('.g2-ajax-loader').remove();
  });

})(jQuery);

;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Drupal, drupalSettings) {
  function mapTextContentToAjaxResponse(content) {
    if (content === '') {
      return false;
    }

    try {
      return JSON.parse(content);
    } catch (e) {
      return false;
    }
  }

  function bigPipeProcessPlaceholderReplacement(placeholderReplacement) {
    var placeholderId = placeholderReplacement.getAttribute('data-big-pipe-replacement-for-placeholder-with-id');
    var content = placeholderReplacement.textContent.trim();

    if (typeof drupalSettings.bigPipePlaceholderIds[placeholderId] !== 'undefined') {
      var response = mapTextContentToAjaxResponse(content);

      if (response === false) {
        once.remove('big-pipe', placeholderReplacement);
      } else {
        var ajaxObject = Drupal.ajax({
          url: '',
          base: false,
          element: false,
          progress: false
        });
        ajaxObject.success(response, 'success');
      }
    }
  }

  var interval = drupalSettings.bigPipeInterval || 50;
  var timeoutID;

  function bigPipeProcessDocument(context) {
    if (!context.querySelector('script[data-big-pipe-event="start"]')) {
      return false;
    }

    once('big-pipe', 'script[data-big-pipe-replacement-for-placeholder-with-id]', context).forEach(bigPipeProcessPlaceholderReplacement);

    if (context.querySelector('script[data-big-pipe-event="stop"]')) {
      if (timeoutID) {
        clearTimeout(timeoutID);
      }

      return true;
    }

    return false;
  }

  function bigPipeProcess() {
    timeoutID = setTimeout(function () {
      if (!bigPipeProcessDocument(document)) {
        bigPipeProcess();
      }
    }, interval);
  }

  bigPipeProcess();
  window.addEventListener('load', function () {
    if (timeoutID) {
      clearTimeout(timeoutID);
    }

    bigPipeProcessDocument(document);
  });
})(Drupal, drupalSettings);;
