
$(document).ready(function () {
    resize();
    
    $(".ticket").click(function(){
        console.log("Hola");
        location.href = "/TicketFest/Menu/Ticket.html";
    });
    
});

function resize(){
    var totalHeight = window.innerHeight;
    var height = ((totalHeight - 250) - 50) - 20;
    var height2 = height - 13;

    $(".content-tickets").css('height', height);


    $(".ticket-wrapper").css('height', height2);
}

window.onresize = resize;

