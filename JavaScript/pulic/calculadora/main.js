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
    resultado.innerHTML = parseInt(numero1.value) / parseInt(numero2.value);
}

function pow() {
    resultado.innerHTML = parseInt(numero1.value) ** parseInt(numero2.value);
}

function mod() {
    res = parseInt(numero1.value) % parseInt(numero2.value);
    if(res == 0){
        resultado.innerHTML = "Eh impossivel"
    }else {

        resultado.innerHTML = res;
    }
}