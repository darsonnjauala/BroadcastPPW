let feedback = document.querySelector('#feedback');


function validar(){
    
    let n1 = Number(document.querySelector('#numero1').value);
    let n2 = parseInt(document.querySelector('#numero2').value);
    let n3 = parseInt(document.querySelector('#numero3').value);

    if(n1 == "" || n2 == "" || n3 == ""){
        feedback.innerHTML = 'Preencha todos os campos';
        document.getElementById('numero1'|| 'numero2' || 'numero3').focus();
        return false;
    }
}