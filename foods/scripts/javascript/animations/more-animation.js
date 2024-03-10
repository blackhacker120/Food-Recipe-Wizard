/* This .js file permits to show the features of the project, using a particular animation */
var TEXTS = ["The Black Hacker is Cooking!!!", "Health is Wealth", "Food-Recipe-Wizard"];
var index = 0;

// Note that jquery library has been used
$(function() {
  setInterval(function() {
    $('#more-text-change').fadeOut(2000, function() {
      $(this).text(TEXTS[index++]).fadeIn(2000);
      if (index === TEXTS.length)
        index = 0;
    });
  }, 6000);
});