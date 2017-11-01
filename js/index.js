$( "#options" ).click(function() {
  $( ".create-div" ).slideUp( "slow", function() {
    // Animation complete.
  });
  $( ".login-div" ).slideDown( "slow", function() {
    // Animation complete.
  });
});

/// Forgot Password Div .
$( "#create" ).click(function() {
  $( ".login-div" ).slideUp( "slow", function() {
    // Animation complete.
  });
  $( ".create-div" ).slideDown( "slow", function() {
    // Animation complete.
  });
});

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
  $( ".login-div" ).slideDown( "slow", function() {
    // Animation complete.
  });
});
