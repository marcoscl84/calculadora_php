<?php

if(array_key_exists("op", $_POST)) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $result = 0;

    if ($_POST['op'] == "soma")
        $result = $a + $b;
    if ($_POST['op'] == "sub")
        $result = $a - $b;
    if ($_POST['op'] == "multi")
        $result = $a * $b;
    if ($_POST['op'] == "div")
        $result = $a / $b;
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
        
    </head>
    
    <body>
        <form method="POST">
            Digite o 1º número: <br><input type="text" name="num1"><br>
            <input type="radio" name="op" value="soma" /> Soma <br>
            <input type="radio" name="op" value="sub" /> Subtração <br>
            <input type="radio" name="op" value="multi" /> Multiplicação <br>
            <input type="radio" name="op" value="div" /> Divisão <br>
            <br>
            Digite o 2º número: <br><input type="text" name="num2"><br>

            <button type="submit"> Calcular </button>
        </form>

        <script>
            <?php if(isset($result)) { ?>
                alert("Resultado: " + <?php echo $result ?>);
            <?php } ?>
        </script>
    </body>
</html>
