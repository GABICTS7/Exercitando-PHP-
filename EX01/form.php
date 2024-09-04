
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Idade para Cadastro</title>
</head>
<body>

    <?php
        $name = $_GET["name"];
        $idade = $_GET["idade"];
        $email = $_GET["email"];


        if ($idade < 18)
        echo "O cadastro não pode ser concluído, pois a idade mínima para cadastro é 18 anos";
        else 
        echo "Cadastro concluído com sucesso!";

    ?>

</body>
</html>