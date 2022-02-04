$(document).ready(function () {
    $("form").on("submit", function (event) {
      event.preventDefault();

      var formNilai = $(this).serialize();

      $.post("form_post.php", formNilai, function (data) {
        $("#info").html(data);
      });
    });
  })