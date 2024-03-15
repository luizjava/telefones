function gerarLinks() {
    var numerosInput = document.getElementById('numeros').value;
    var numeros = numerosInput.split(',');

    var linksContainer = document.getElementById('linksContainer');
    linksContainer.innerHTML = ''; // Limpa o conteúdo anterior

    if (numerosInput.trim() === '') {
        linksContainer.innerHTML = "<p style='color:red;'>Por favor, insira os números de telefone.</p>";
        return;
    }

    numeros.forEach(function(numero){
        numero = numero.replace(/\D/g, ''); // Remove caracteres não numéricos
        if (numero.trim() !== '') {
            var link = "https://wa.me/" + numero;
            var linkElement = document.createElement('a');
            linkElement.href = link;
            linkElement.textContent = link;
            linkElement.setAttribute('target', '_blank'); // Abrir em uma nova aba
            linksContainer.appendChild(linkElement);
            linksContainer.appendChild(document.createElement('br'));
        }
    });
}