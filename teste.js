function alternarDisplay(className, intervalo) {
    var elemento = document.querySelector('.' + className);
  
  
    setInterval(function () {
        elemento.style.display = 'none !important';
        document.getElementById('demo').innerHTML = "abcd";
    }, intervalo);
  }
  
  // Exemplo de uso: alternar a classe 'minha-classe' a cada 1000 milissegundos (1 segundo)
  alternarDisplay('dropdown-content', 10)