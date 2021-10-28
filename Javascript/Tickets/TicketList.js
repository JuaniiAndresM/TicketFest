
$(document).ready(function () {
    resize();

    cargoTickets();    
});

function resize(){
    var totalHeight = window.innerHeight;
    var height = ((totalHeight - 250) - 50) - 20;
    var height2 = height - 13;

    $(".content-tickets").css('height', height);


    $(".ticket-wrapper").css('height', height2);
}

function cargoTickets(){
    $.ajax({
        url: "../PHP/cargoTickets.php",
        success: function (response) {
            $("#load-tickets").html(response);
        }
    });
}

window.onresize = resize;

function ticket(id){
    location.href = "/TicketFest/Menu/Ticket.php?ID_Ticket=" + id;
}
