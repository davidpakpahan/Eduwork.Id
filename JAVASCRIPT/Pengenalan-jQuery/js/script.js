$(document).ready(function () {
    $("#berhasil .close").on("click", function () {
      $("#berhasil").fadeOut(1000);
      alert("Berhasil di close");
    });
  });