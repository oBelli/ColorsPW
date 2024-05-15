<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php_ProgramaçãoWeb</title>
</head>
<body>
    <div>
        <?php
        $favcolor = $_POST ["favcolor"];
        switch ($favcolor) {
            case  "verde":
                echo  "<p class='verde'>Sua Cor é Verde</p>";
                break;
                case "amarelo":
                    echo "<p class='amarelo'>Sua Cor é Amarelo</p>";
                    break;
                    case "azul":
                        echo "<p class='azul'>Sua Cor é Azul</p>";
                        break;
                        
        }
        ?>
    </div>
    <div class="btn">
        <a class='voltar' href="index.html">Voltar</a>
    </div>
</body>
</html>