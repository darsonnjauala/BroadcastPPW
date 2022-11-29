
let resultado = document.querySelector('.resultado');

function media(){
    let n1 = parseFloat(window.prompt("Nota 1: "));
    let n2 = parseFloat(window.prompt("Nota 2: "));
    med = (n1 + n2)/2;

    if(med > 16){
        resultado.innerHTML = `A media eh: ${med}. \n Aluno aprovado`;
        
    }else{
        resultado.innerHTML = `A media eh: ${med}. \n Aluno reprovado!`; 
    }

    for(let i = 0; i < n1; i++){
        resultado.innerHTML = n1++;
    }
}