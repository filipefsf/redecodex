// script.js

function mostrarMensagemSucesso() {
    var overlay = document.querySelector('.overlay');
    overlay.style.display = 'block';

    setTimeout(function() {
        overlay.style.display = 'none';
    }, 3000); // Tempo em milissegundos para ocultar a mensagem após 3 segundos
}

function mostrarMensagemEmailInvalido() {
    var overlay = document.querySelector('.overlayEmail');
    overlay.style.display = 'block';

    setTimeout(function() {
        overlay.style.display = 'none';
    }, 3000); // Tempo em milissegundos para ocultar a mensagem após 3 segundos
}

function mostrarMensagemSenhaInvalida(local) {
    if(local == "registro"){
        var overlay = document.querySelector('.overlaySenhaCaracter');
    } else if(local=="login") {
        var overlay = document.querySelector('.overlaySenha');
    } else if(local=="registroVal"){
        var overlay = document.querySelector('.overlaySenhaVal');
    }
    
    overlay.style.display = 'block';

    setTimeout(function() {
        overlay.style.display = 'none';
    }, 3000); // Tempo em milissegundos para ocultar a mensagem após 3 segundos
}