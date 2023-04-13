// Função que ao ser exportada, automaticamente habilitará o clique sobre um determinado elemento de mensagem
export function closeElementMsg(element, property){
    $(element).click(() => {
        $(element).addClass(property);
    });
}

function displayDate(data){
    // to do a ideia é montar a data em formato objeto
    let date = new Date();
    $(data).text(date.getFullYear());
}