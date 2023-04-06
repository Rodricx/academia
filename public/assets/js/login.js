$("#submit").on("click", function(e){
    e.preventDefault();

    let data = {
        usuario : $("#user").val(),
        senha : $("#pass").val()
    };

    $.post("../app/functions/Login.php", data, function(response){
        // To do Eliminar console
        console.log(response);
    });    

});