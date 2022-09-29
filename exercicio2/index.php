<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercico 2 </title>
</head>
<body>

    <h2> ver se o numero é divisivel por 2</h2> 

    <form action='index.php' method="post">
    <div class="div1">
    Valor : <input type="text" name="valor"><br>
    <input type="submit">
    
   
    <?php
       $val = $_POST['valor'];

  if($val % 2 == 0){
    echo "divisivel por 2";
} else {
    echo "não divisivel ";
}

 ?> 
    </form>

</body>
</html>
