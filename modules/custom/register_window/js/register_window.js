  Drupal.behaviors.provider = {
    attach: function (context, settings) {
      // Make modal window height scaled automatically.
      $("#drupal-modal").dialog({height:'auto', width:'auto'});

    }
  };
