
let resultado = document.querySelector('#resultado');
let distancia = document.querySelector('#distancia');
let tempo = document.querySelector('#tempo');
let comb = document.querySelector('#combustivel');

function executar(){
    let combustivel = comb.value;
    let km = parseFloat(distancia.value);
    let h = parseFloat(tempo.value);
    let litros;

    switch(combustivel){
        case 'diesel':
            litros = h * km / 12;
            resultado.innerHTML = litros ;
            break;
        case 'gasolina':
            litros = h * km / 10;
            resultado.innerHTML = litros;
            break;
        default:
            resultado.innerHTML = "Selecione um combustivel." + combustivel;
            
            break;

    }

}

