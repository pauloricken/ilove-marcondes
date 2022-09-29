<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 5

    </title>
</head>
<body>
    <?php
    $val = 8654;
    $parcelas = [24,36,48,60];
    $taxa = 1.5;
    $juros = 0;
 
    foreach ($parcelas as $parcela) {
        $res = $val + (($val *($taxa/100)) * $parcela);
        $taxa = $taxa + 0.5;
        var_dump($res);
    }
?>

</body>
</html>