
let resultado = document.querySelector('#result');
let resultado2 = document.querySelector('#result2');
let n1 = document.querySelector('#numero1');
let n2 = document.querySelector('#numero2');
let n3 = document.querySelector('#numero3');

function executar(){
    let numero1 = parseInt(n1.value);
    let numero2 = parseInt(n2.value);
    let numero3 = parseInt(n3.value);

    nrs1 = {numero1, numero2, numero3};
    let maior;


    if (numero1 > numero2 && numero1 > numero3) {
        maior = numero1;
    }else if(numero2 > numero1 && numero2 > numero3){
        maior = numero2; 
    }else if(numero3 > numero1 && numero3 > numero2){
        maior = numero3; 
    }else if(numero3 == numero1 && numero3 == numero2){
        msg = "Os numeros sao iguais."; 
        resultado.innerHTML = msg;
    }
    if(maior != null){
        resultado.innerHTML = `O maior numero eh = ${maior}`;
    }

    for(i = 0; i <= nrs1.length; i++){
        console.log(i);
        if(rs1[i] < nrs1[2]){
            resultado2.innerHTML += ` ${nrs[i]}`;

        }
    }
}

