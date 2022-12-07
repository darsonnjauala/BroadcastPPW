let resultado = document.querySelector("#resultado")

function gerar(){
    let rand = Math.floor(Math.random()*50);
    resultado.innerHTML = rand;
}

function abrirJanela(){
    window.open("http://www.apolitecnica.ac.mz", "_blank");
}

function abrirPag(){
    window.open("outro.html","_blank");
}
function alterarTitulo(){
    let titulo = document.querySelector("#title")    
    titulo.innerHTML = "JS World!!!"
}    