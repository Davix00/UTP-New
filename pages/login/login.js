function loguearse() {
  var email = document.getElementById("email").value
  var contra = document.getElementById("contra").value
  var parametros = {
    email: email,
    contra: contra   
  };
  $.ajax({
    data: parametros,
    url: "query.php",
    type: "post",
    success: function (response) {
      console.log(response);
    },
  });
}
