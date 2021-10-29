$(document).ready(function () {
    $("#bottom-menu").load('/TicketFest/web/bottom-menu.html');
});


function cerrarSesion(){
    
    let user = new Usuario();
    user.cerrarsesion();
  
    location.reload();
}

$(document).on('click', '#register', function () {

    let usuario = document.getElementById('usuario').value;
    let nombre = document.getElementById('nombre').value;
    let mail = document.getElementById('mail').value;
    let password = document.getElementById('password').value;
    let passwordconf = document.getElementById('passwordconf').value;

    let register = new Usuario();

    register.register(usuario,nombre,mail,password,passwordconf)
});