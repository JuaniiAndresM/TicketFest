class Tickets{
    TraigoTicketsUsuario(){ 
        
        var x= false;
        $.ajax({
            async: false,
            type: "POST",
            url: "../PHP/Tickets.php",
            data: {Opcion: 1},
            success: function(log){
                var txt = log;
                x = txt;
            }
        });
        return x;
    }
}
