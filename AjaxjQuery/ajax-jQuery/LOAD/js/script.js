$(document).ready(function() {
  $("form").submit(function(a) {
    a.preventDefault();
    $("#info").load("data.html");
  })
})