jQuery(document).ready(function($) {

  // Reset the search form
  $("#edit-sitewide").blur();

  // Sets up the list navigation on /discover
  $("#discoverList").listnav({ 
    includeAll: false,  
    includeNums: true,
    noMatchText: 'There are no artists in our database whose names begin with that letter.',
    showCounts: false,
    prefixes: ['the','a']
  });

  // Position the Feedback link element
//  $("#block-feedback-form .feedback-link").prependTo("footer");
  $("body.node-type-article #block-feedback-form .feedback-link").text('Broken video?').prependTo("article .below-content");

});
