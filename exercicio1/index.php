<?php include "funcoes1.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
</head>
<body>
    <form method="post">
        <div id="div1">
            <label>Informe o primeiro numero:</label>
            <input type="text" name="n1" id="n1">
            <br>
            <label>Informe o segundo numero:</label>
            <input type="text" name="n2" id="n2">
            <br>
            <label>Informe o terceiro numero:</label>
            <input type="text" name="n3" id="n3">
            <br>
            <input type="submit" value="Enviar" name="enviar" id="enviar">
            <br>
            <input type="text" name="resultado" id="resultado" value="<?php echo $soma ?>" placeholder="Resultado" style="<?php echo $color ?>" readonly>
            <br>
            <a href="/avaliacao">Votlar</a>
        </div>
    </form>
</body>
</html>