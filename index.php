<?php

$form = isset($_GET["cel"]);
$form_2 = isset($_GET["validar"]);

if($form){
    $cel = $_GET["cel"];
    $far = round($cel * 1.8 + 32, 2);
    $kel = round($cel + 273.15, 2);
}

?>

<!DOCTYPE html>

<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Exercicio 94.2
        </title>
        <link rel="stylesheet" href="estilo.css">
    </head>

    <body>

        <h1>Conversor de Temperaturas</h1>

        <div class="caixa">

            <form action="">

                <input type="number" name="cel" required placeholder="Celsius" step="0.01" autocomplete="off">
                <input type="submit" value="Calcular">
                <br><br>
                <label for="validar">Sem a imagem</label>
                <input type="checkbox" name="validar">

            </form>
    
            <a href="index.php">
                <button>Reset</button>
            </a>
        </div>

        <?php if($form): ?>

            <div class="caixa">

                <h2><?php echo $cel . " ºC"?></h2>
                <h2><?php echo $far . " ºF"?></h2>
                <h2><?php echo $kel . " ºK"?></h2>
                <br>

                <?php if(!$form_2): ?>

                    <?php 
                    if ($cel <= 0) {
                        echo "<img src='gelo.jpg' alt='gelo'>"; //width e style = border-radius: esta no .css
                    }
                    elseif ($cel < 100) {
                        echo "<img src='agua.jpg' alt='agua'>";
                    }
                    else {
                        echo "<img src='vapor.jpg' alt='vapor'>";
                    }
                    ?>

                <?php endif; ?>

            </div>

        <?php endif; ?>
    </body>
</html>