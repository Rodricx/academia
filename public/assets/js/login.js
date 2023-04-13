import {closeElementMsg} from "../../../app/config/config.js";

$("#submit").on("click", function(e){
    e.preventDefault();

    $("#resposta").removeClass("alert-danger");
    $("#resposta").removeClass("alert-success");
    $("#resposta").removeClass("alert-warning");

    let data = {
        usuario : $("#user").val(),
        senha : $("#pass").val()
    };

    $.post("../app/functions/Login.php", data, function(response){
        // To do Eliminar console
        let message = JSON.parse(response);
        $(".message").removeClass("hidden");
        $("#resposta").text(message.msg);
        $("#resposta").addClass(message.class);
        $("#user").addClass(message.css);

        //Colocar no config
        setTimeout(() => {
            $(".message").addClass("hidden");
        }, 3000);

        // runTime(".message", "addClass", "hidden", 5000);

    });    

});

closeElementMsg(".message", "hidden");

// Colocar no config
let date = new Date();
$("#data-atual").text(date.getFullYear());