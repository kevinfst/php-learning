<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Manipulação de Strings</h1>
    <?php 
        $name = "Kevin";
        $lastName = "Santos";
        echo "$name $lastName \u{1F596}<br>"; // Exemplo de Double quoted
        echo '$name $lastName \u{1F596}<br>'; // Exemplo de Single quoted

        echo "<br>";
        
        // Concatenação de const
        const CITY = "Praia Grande";
        echo "Moro em " . CITY . "<br>";

        echo "<br>";

        // Desafio - Tentar escrever Rodrigo "Minotauro" Nogueira
        $nom = "Rodrigo";
        $snom = "Nogueira";
        echo $nom . ' "Minotauro" ' . $snom;
        // Ou também dessa forma
        echo "<br>$nom \"Minotauro\" $snom"; // Isso se chama sequência de escape

        /* ESCAPE SEQUENCES (Para aspas duplas)

        \n - Nova linha
        \t - Tabulação horizontal
        \\ - Barra invertida
        \$ - Sinal de cifrão - Caso queira mostrar o $ dentro de aspas duplas, para evitar de interpretar como se fosse uma variável.
        \u{} - Codepoint Unicode
        
        */

        echo "<br>";

        // Exemplo de ESCAPE SEQUENCE
        $num = 10;
        echo "<br> O valor dentro de \$num é igual a $num";
    ?>
</body>
</html>