function id (valor_campo){
    return document.getElementById(valor_campo);
}

function getValor(valor_campo){
    let valor = document.getElementById(valor_campo).value;
    return parseFloat(valor);
    
}

function tot(){
    let total1 = (getValor('nNoites') + getValor('nHospedes')) * 80; 
    let valorReal= total1.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'})
    id('contaTot').value = valorReal;
}