$(document).ready(function () {
    $("#bottom-menu").load('/TicketFest/web/bottom-menu.html');
});


function cerrarSesion(){
    
    let user = new Usuario();
    user.cerrarsesion();
  
    location.reload();
}