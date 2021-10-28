function login(){
    var usuario   = $('#usuario').val();
    var password  = $('#password').val();

    console.log(usuario)
    console.log(password)
    
    if(usuario == "" || password == ""){
        console.log("Debe completar todos los campos.");

      /*$.ajax({
        url: "/TicketFest/Modal/modal.php",
        type: "POST",
        data: { numero_mensaje: "LoginCamposVacios"},
        success: function (data) {
            document.getElementById("modal").innerHTML = data;
            $(".modal").css('display', 'flex');
        }
      });*/

    }else{
        
      let user = new Usuario();
      var log = user.login(usuario, password);
      
      if(log == 1){
          location.href = "/TicketFest/Menu/Principal.php";
      }else{
        var numero_mensaje = "LoginIncorrecto";

        console.log("Error. Usuario o Contraseña Incorrectos.");
        console.log(log);

        /*$.ajax({
          url: "/TicketFest/Modal/modal.php",
          type: "POST",
          data: { numero_mensaje: numero_mensaje},
          success: function (data) {
              document.getElementById("modal").innerHTML = data;
              $(".modal").css('display','flex');
          }
        });*/
      }
    }
}