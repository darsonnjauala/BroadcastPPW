
let resultado = document.querySelector('.resultado');
let resultad = document.querySelector('.resultad');

function media(){
    let n1 = parseFloat(numero1.value);
    let n2 = parseFloat(numero2.value);
    med = (n1 + n2)/2;

    if(med > 16){
        resultado.innerHTML = `A media eh: ${med}. \n Aluno aprovado`;
        
    }else{
        resultado.innerHTML = `A media eh: ${med}. Aluno reprovado!`; 
    }

    if(n1 > n2 || n1 == n2){
        resultad.innerHTML = ""
        for(let i = n2; i <= n1; i++){
            resultad.innerHTML += ` ${i}`;
        }
    }else if(n1 < n2){
        resultad.innerHTML = ""
        for(let i = n1; i <= n2; i++){
            resultad.innerHTML += ` ${i}`;
        }
    }
}

function limpar() {
    resultad.innerHTML = "";
}