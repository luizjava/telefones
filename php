<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links do WhatsApp</title>
</head>
<body>
    <h2>Links do WhatsApp gerados:</h2>
    <?
    
        // Verifica se o campo de números não está vazio
        if (!empty($_POST['numeros'])) {
            $numeros = explode(",", $_POST['numeros']); // Separa os números pela vírgula
            $links = array(); // Array para armazenar os links

            foreach ($numeros as $numero) {
                $numero = preg_replace('/\D/', '', $numero); // Remove caracteres não numéricos
                if (!empty($numero)) {
                    $link = 'https://wa.me/'. $numero; // Gera o link do WhatsApp
                    echo $link; // Imprime o link
                }
            }
        } else {
            echo "Por favor, insira os números de telefone.</p>";
        }
    
   ?>
</body>
</html>
    
