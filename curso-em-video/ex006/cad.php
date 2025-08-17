<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do formulário</h1>
    </header>
    <main>
        <?php 
            $name = $_GET["name"] ?? "Sem nome";
            $lastName = $_GET["lastName"] ?? "Desconhecido";
            echo "É um prazer te conhecer, <strong>$name $lastName</strong>!";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>