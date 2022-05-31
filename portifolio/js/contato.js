function validaForm() {

    var nome = document.getElementById('nome'); 
    var email = document.getElementById('email');
    var mensagem = document.getElementById('mensagem');
    var erro = document.getElementById('erro');
    //var campoErro = document.getElementById('campoErro'); 

    // sempre para comer a validacao, limpa-se o campos de erro!
    erro.innerHTML = '';
    nome.classList.remove('campoErro');
    email.classList.remove('campoErro');
    mensagem.classList.remove('campoErro');

    if (nome.value == '') {
        erro.innerHTML = 'Preencha o nome!';
        nome.classList.add('campoErro');
        nome.focus();
        return false; 
    }
    
    if (email.value == '') {
        erro.innerHTML = 'Preencha o e-mail!';
        email.classList.add('campoErro');
        email.focus();

        return false; 
}
var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


// ponto de exclamacao nega a sentenca 
    if (!regex.test(email.value)) {
        erro.innerHTML = 'e-mail inválido!';
        email.classList.add('campoErro');
        mensagem.focus();

        return false;

    }




    if (mensagem.value == '') {
        erro.innerHTML = 'Preencha a mensagem!';  
        mensagem.classList.add('campoErro');
        mensagem.focus();

        return false;

}




// o retorno com false ipede que o formularia seja enviado 
// futuramente se tudo ocorrer tudo bem na validacao a resposta final devera ser um retur true
    return false; 




}

