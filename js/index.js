$( "#options" ).click(function() {
  $( ".create-div" ).slideUp( "slow", function() {
    // Animation complete.
  });
  $( ".login-div" ).slideDown( "slow", function() {
    // Animation complete.
  });
  $( "#forgot-div" ).hide();
});

/// create Div .
$( "#create" ).click(function() {
  $( ".login-div" ).slideUp( "slow", function() {
    // Animation complete.
  });
  $( ".create-div" ).slideDown( "slow", function() {
    // Animation complete.
  });
});

//// Send Mail Div
$( "#register" ).click(function() {
  $( ".msg-div" ).slideDown( "slow", function() {
    // Animation complete.
  });
  $( ".create-div" ).slideUp( "slow", function() {
    // Animation complete.
  });
})

//// Send Mail Div
$( "#sendmail" ).click(function() {
  $( ".msg-div" ).slideUp( "slow", function() {
    // Animation complete.
  });
  $( ".login-div" ).slideDown( "slow", function() {
    // Animation complete.
  });
})

/// Forgot Password Div .
$( "#forgot" ).click(function() {
  $( ".login-div" ).slideUp( "slow", function() {
    // Animation complete.
  });
  $( ".forgot-div" ).slideDown( "slow", function() {
    // Animation complete.
  });
});

/// Forgot Password Div .
$( "#resetpass" ).click(function() {
  $( ".forgot-div" ).slideUp( "slow", function() {
    // Animation complete.
  });
  $( ".forgot-msg-div" ).slideDown( "slow", function() {
    // Animation complete.
  });
});

/// Forgot Password Div .
$( "#sendmailforgot" ).click(function() {
  $( ".forgot-msg-div" ).slideUp( "slow", function() {
    // Animation complete.
  });
  $( ".login-div" ).slideDown( "slow", function() {
    // Animation complete.
  });
});
