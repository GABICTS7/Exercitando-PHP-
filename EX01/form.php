
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Idade para Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $idade = $_GET["idade"];

        if (idade < 18)
        echo "A idade mínima para cadastro é 18 anos"
        else 
        echo "Cadastro concluído com sucesso!"

    ?>

</body>
</html>