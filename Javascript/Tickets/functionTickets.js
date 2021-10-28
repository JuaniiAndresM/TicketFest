let Tckts = new Tickets();

$(document).ready(function () {
    traigoNumTickets();
});


function traigoNumTickets(){
    var tickets = Tckts.TraigoTicketsUsuario();

    if(tickets == 1){
        $("#numTickets").html("<i class='fas fa-ticket-alt'></i> " + tickets + " Ticket Creado");
    }else{
        $("#numTickets").html("<i class='fas fa-ticket-alt'></i> " + tickets + " Tickets Creados");
    }

    
}