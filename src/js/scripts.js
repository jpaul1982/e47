$(document).ready(function () {
  $("#hamburger").click(() => {
    $body = $("body");
    curState = $body.attr("data-menu");
    if (curState == "inactive") {
      $body.attr("data-menu", "active");
    } else {
      $body.attr("data-menu", "inactive");
    }
  });
});


