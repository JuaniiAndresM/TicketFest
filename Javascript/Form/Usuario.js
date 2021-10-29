class Usuario{
    login(usuario, password){ 
        var x= false;
        $.ajax({
            async: false,
            type: "POST",
            url: "../PHP/Login.php",
            data: {usuario: usuario, pass: password},
            success: function(log){
                var txt = log;
                x = txt;
            },
            error: function (request, error) {
                console.log(arguments);
                console.log(request.responseText);
                console.log(error);
            }
        });
        return x;
    }
    register(usuario,nombre,mail,password,passwordconf){
        $.ajax({
            type: "POST",
            url: "../PHP/register.php",
            data: {USERNAME: usuario,NAME: nombre,MAIL: mail,PASSWORD: password, PASSWORDCONF: passwordconf},
            success: function (response) {
                console.log(response)
            }
        });
    }
    cerrarsesion(){
        $.ajax({
            async: false,
            type: "POST",
            url: "../PHP/CerrarSesion.php",
            success: function(log){
                
            } 
        });
    }
}
