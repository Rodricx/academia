// Função que ao ser exportada, automaticamente habilitará o clique sobre um determinado elemento de mensagem.
export function closeElementMsg(element, property){
    $(element).click(() => {
        $(element).addClass(property);
    });
}

// Função exporta datas em formatos BR e EUA, também permite capturar trechos específicos como dia, mes e ano.
export function displayDate(){
    let date = new Date();
    let mes = (date.getMonth() + 1) < 9 ? "0" + (date.getMonth() + 1) : date.getMonth() + 1;
    let datas = {
        Ano : date.getFullYear(),
        Mes : mes,
        Dia : date.getDate(),
        dataBr : date.getDate() + "/" + mes + "/" + date.getFullYear(),
        dataAm : date.getFullYear() + "-" + mes + "-" + date.getDate() 
    };
    return datas;
}


// Função responsável por aplicar classes em elementos que possuam atributos com a mesma nomenclátura
export function iterateElement(element, paramClass, symbol){
    console.log(element);
    $(element).each(function(k, v){
        $(symbol + v).addClass(paramClass);
        console.log(symbol + v);
    });
}


// Função permite adicionar uma classe por um determinado tempo escolhido pelo desevolvedor
export function timeToRun(element, paramClass, time){
    setTimeout(() => {
        $(element).each(function(k ,v){
            $(element).addClass(paramClass);
        });
    }, time);
}