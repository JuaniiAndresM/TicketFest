function step1_continue(){
    var email = $("#Email").val()

    if(email != ""){
        step2_transition();
    }else{
        console.log("Complete todos los campos.");
    }
    
}
function step2_transition(){
    $(".complete").css("width", "50%");
    $(".step2").css("background-color", "#0090ff");

    $(".form-inputs").hide();
    $(".step2-form").show();
}


function step2_continue(){
    var code = $("#code").val()

    if(code != ""){
        step3_transition();
    }else{
        console.log("Complete todos los campos.");
    }
}
function step3_transition(){
    $(".complete").css("width", "100%");
    $(".step3").css("background-color", "#0090ff");

    $(".step2-form").hide();
    $(".step3-form").show();
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