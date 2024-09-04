<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Notas</title>
</head>
<body>

    <?php
        $nota = $_GET["nota"];

        switch ($nota){
            case "10":
            echo "A";
            break;
            case "9":
            echo "B";
            break;
            case "8" or "7":
            echo "C";
            break;
            case "6" or "5":
            echo "D";
            break;
            default:
            echo "E";
        }
    ?>
    
</body>
</html>