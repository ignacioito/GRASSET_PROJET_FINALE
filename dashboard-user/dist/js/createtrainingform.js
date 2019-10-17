$(function() {
  var $select = $(".1-100");
  for (i = 1; i <= 100; i++) {
    $select.append(
      $("<option></option>")
        .val(i)
        .html(i)
    );
  }
});

// // Warning before leaving the page (back button, or outgoinglink)
// window.onbeforeunload = function() {
//   return "Do you really want to leave our brilliant application?";
//   //if we return nothing here (just calling return;) then there will be no pop-up question at all
//   //return;
// };
