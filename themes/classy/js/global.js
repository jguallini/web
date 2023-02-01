(function ($, Drupal, undefined) {
    Drupal.behaviors = {
        attach: function (context, settings) {
        }
    }
})(jQuery, Drupal)

for (var clickButton of
    document.getElementsByClassName("btn btn-primary"))
    clickButton.addEventListener("click", alertMeessage);
    function alertMeessage() {
       alert("This site its a Challenge for Balidea!");
    }