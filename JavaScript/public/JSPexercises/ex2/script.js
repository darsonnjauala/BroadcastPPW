let resultado = document.querySelector('#result');
let n1 = document.querySelector('#numero1');
let n2 = document.querySelector('#numero2');

function executar(){
    let numero1 = parseInt(n1.value);
    let numero2 = parseInt(n2.value);

    if (numero1 % 2 == 0 && numero2 % 2 == 0) {
        soma = numero1 + numero2; 
        resultado.innerHTML = `Soma = ${soma}`;
    }else if(numero1 % 2 == 1 && numero2 % 2 == 1){
        multi = numero1 * numero2;
        resultado.innerHTML =`Produto = ${multi}`;    
    }else if(numero1 % 2 == 0 && numero2 % 2 == 1){
        sub = numero1 - numero2;
        resultado.innerHTML = `Resto = ${sub}`;    
    }else{
        msg = "Invalid";
        resultado.innerHTML = msg;
    }
}

