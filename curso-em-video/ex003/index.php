<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>
        Variáveis e constantes em PHP
    </h1>
    <?php 
        // Criação e Inicialização das Variáveis
        // OBS: Variável pode mudar o dado inserido.
        $name = "Kevin";
        $lastName = "Santos";

        // echo "Nome e Sobrenome: " . $name . " " . $lastName;
        // ou da forma mais "correta"
        echo "Nome e Sobrenome: $name $lastName"; // Antes da alteração dos dados.

        // Alteração do dado das variáveis
        $name = "Ramus";
        $lastName = "Lerdorf";

        echo "<br> Nome e Sobrenome: $name $lastName"; // Depois da alteração dos dados.

        // Criação e Inicialização da Constante
        // OBS: Constante não pode alterar o dado inserido.
        const COUNTRY = "Brasil";

        echo "<br> Olá, $name $lastName, você mora no " . COUNTRY;
    ?>
</body>
</html>