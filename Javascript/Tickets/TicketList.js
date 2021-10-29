
$(document).ready(function () {
    resize();

    cargoTickets();
    
    $(".step2-create").hide();
    $(".step3-create").hide();
    $(".integrantes-list").hide();
});

function resize(){
    var totalHeight = window.innerHeight;
    var height = ((totalHeight - 250) - 50) - 20;
    var height2 = height - 13;

    $(".content-tickets").css('height', height);


    $(".ticket-wrapper").css('height', height2);

    var height3 = height2 - 60;
    $(".integrantes-list").css('height', height3);
    $(".participantes").css('height', (height3 - 80));
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

function step1_continue(){
    var titulo = $("#titulo").val()
    var date = $("#fecha").val()

    if(titulo != "" && date != "" ){
        console.log(titulo);
        console.log(date);
        $("#nombre_ticket").text(titulo);
        step2_transition();
    }else{
        console.log("Complete todos los campos.");
    }
    
}
function step2_transition(){
    $(".complete").css("width", "50%");
    $(".step2").css("background-color", "#0090ff");

    $(".step1-create").hide();
    $(".step2-create").show();
}

function step2_add(){
    var nombre = $("#nombre_participante").val();
    var cantidad = $("#cantidad_participantes").val();
    var valor = $("#valor_participante").val();

    if(nombre != "" && cantidad != "" && valor != ""){
        console.log(nombre);
        console.log(cantidad);
        console.log(valor);

        add_user(nombre, cantidad, valor);
    }else{
        console.log("Complete todos los campos.");
    }
}

function add_user(nombre, cantidad, valor){
    $(".participantes").append('<div class="participante"><div class="participante-img"><i class="fas fa-user-friends"></i></div><div class="participante-body"><h2>' + nombre  + '</h2><div class="info"><p><i class="fas fa-user"></i> ' + cantidad  + '</p><p><i class="fas fa-money-bill-wave"></i> $' + valor  + '</p></div></div><div class="delete"><button><i class="fas fa-times"></i></button></div></div>');
}

function step2_list(){
    $(".step2-create").hide();
    $(".integrantes-list").css('display','flex');
}

function step2_list_hide(){
    $(".step2-create").show();
    $(".integrantes-list").css('display','none');
}


function step2_continue(){
    var nombre = $("#nombre_participante").val();
    var cantidad = $("#cantidad_participantes").val();
    var valor = $("#valor_participante").val();

    if(nombre != "" && cantidad != "" && valor != ""){
        console.log(nombre);
        console.log(cantidad);
        console.log(valor);

        step3_transition(nombre, cantidad, valor);
    }else{
        console.log("Complete todos los campos.");
    }
}
function step3_transition(){
    $(".complete").css("width", "100%");
    $(".step3").css("background-color", "#0090ff");

    $(".step2-create").hide();
    $(".step3-create").show();
}

function step3_continue(){
    var password = $("#password").val();
    var password_check = $("#password-check").val();

    if(password != "" && password_check != ""){
        completed_transition();
    }else{
        console.log("Complete todos los campos.");
    }
}
function completed_transition(){
    location.href = "/TicketFest/Form/Completed.html";
}
