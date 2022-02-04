
$("#form").submit (function(a) {
  a.preventDefault();
  var tulisNama = $("#nama").val();
  var pilihJenis = $("#jeniskelamin").val();
  var tulisKeterangan = $("#keterangan").val();
  $("#info").html("Nama : " + tulisNama + " <br/> Jenis Kelamin : " + pilihJenis + "<br/>Keterangan : " + tulisKeterangan);
})


