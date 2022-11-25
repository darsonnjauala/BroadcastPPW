let numero1 = document.querySelector('#numero1');
let numero2 = document.querySelector('#numero2');

let resultado = document.querySelector('span')

function sub() {
    resultado.innerHTML = parseInt(numero1.value) - parseInt(numero2.value);
}

function add() {
    resultado.innerHTML = parseInt(numero1.value) + parseInt(numero2.value);
}

function tim() {
    resultado.innerHTML = parseInt(numero1.value) * parseInt(numero2.value);
}

function div() {
    res = parseInt(numero1.value) / parseInt(numero2.value);
    if(res == Infinity){
        resultado.innerHTML = "Eh impossivel"
    }else {
        resultado.innerHTML = res;
        
    }
}

function pow() {
    resultado.innerHTML = parseInt(numero1.value) ** parseInt(numero2.value);
}

function mod() {
    resultado.innerHTML = parseInt(numero1.value) % parseInt(numero2.value);
}