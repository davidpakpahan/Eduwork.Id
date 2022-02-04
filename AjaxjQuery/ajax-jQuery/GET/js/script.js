$(document).ready(function() {
  $("form").submit(function(a) {
    a.preventDefault();
    $.get("data.html").done(function(data)
    {
         $("#info").html(data)

    })
  })
})