import {closeElementMsg} from "../../../app/config/config.js";
import {displayDate} from "../../../app/config/config.js";
import {iterateElement} from "../../../app/config/config.js";
import {timeToRun} from "../../../app/config/config.js";

$("#submit").on("click", function(e){
    e.preventDefault();

    $("#resposta").removeClass("alert-danger");
    $("#resposta").removeClass("alert-success");
    $("#resposta").removeClass("alert-warning");
    $(".field").removeClass("alert alert-danger");
    $(".field").removeClass("alert alert-success");
    $(".field").removeClass("alert alert-warning");

    let data = {
        user : [$("#user").attr("type"), $("#user").val(), $("#user").attr("id")],
        pass : [$("#pass").attr("type"), $("#pass").val(), $("#pass").attr("id")]
    };

    $.post("../app/functions/Login.php", data, function(response){
        let message = JSON.parse(response);
        $(".message").removeClass("hidden");
        $("#resposta").addClass(message.class);
        $("#resposta").text(message.msg);
        iterateElement(message.field, message.class, "#");
        timeToRun(".message", "hidden", 3000);

    });    

});

closeElementMsg(".message", "hidden");
$("#data-atual").text(displayDate().Ano);