// script.js

function mostrarMensagemSucesso() {
    var overlay = document.querySelector('.overlay');
    overlay.style.display = 'block';

    setTimeout(function() {
        overlay.style.display = 'none';
    }, 3000); // Tempo em milissegundos para ocultar a mensagem após 3 segundos
}