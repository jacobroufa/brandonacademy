(function($) {

// Reset the search form
  Drupal.behaviors.baBlur = {
    attach: function (context, settings) {
      $('#edit-sitewide', context).blur();
    }
  };

// Sets up the list navigation on /discover
  Drupal.behaviors.baDiscoverLN = {
    attach: function (context, settings) {
      $('#discoverList', context).listnav({ 
        includeAll: false,  
        includeNums: true,
        noMatchText: 'There are no artists in our database whose names begin with that letter.',
        showCounts: false,
        prefixes: ['the','a']
      });
    }
  };

// Position the Feedback link element
  Drupal.behaviors.feedbackLink = {
    attach: function (context, settings) {
      $('body.node-type-article #block-feedback-form .feedback-link', context).text('Broken video?').prependTo('article .below-content');
    }
  };

// Front Page Recent Tutorials Carousel
  Drupal.behaviors.recentTutorials = {
    attach: function (context, settings) {
      $('#recent-tutorials .recent-tutorials', context).jcarousel({
        wrap: 'circular',
        scroll: 1,
        initCallback: recentCarousel,
        buttonNextHTML: null,
        buttonPreviousHTML: null,
      });

      function recentCarousel(carousel) {
        $('#next', context).bind('click', function() {
          carousel.next();
          return false;
        });
        $('#previous', context).bind('click', function() {
          carousel.prev();
          return false;
        });
      }; 
    }
  };

})(jQuery);
