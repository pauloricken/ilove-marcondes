<html lang="pt-br">
<link rel="stylesheet" href="pod.css">
<h4>valor disponível:50.00</h4>
<table>
    <tr>
        <td>produto</td>
        <td>valor/kg</td>
    </tr>
    <tr>
        <td>laranja</td>
        <td>3</td>
    </tr>
    <tr>
        <td>batata</td>
        <td>4</td>
    </tr>
    <tr>
        <td>cenoura</td>
        <td>2</td>
    </tr>
</table>



<form method="post">
    kg do repolho:<br><input type="text" value="0" name="repolho">
    <br>
    <br>
    kg da melancia:<br><input type="text" value="0" name="melancia">
    <br>
    <br>
    kg da maça:<br><input type="text" value="0" name="maca">
    <br>
    <br>
    <input type="submit" value="calcular" name="calc">
</form>

<?php
if(isset($_POST['calc'])){

    $repolho=$_POST['repolho']*3;
    $melancia=$_POST['melancia']*4;
    $maca=$_POST['maca']*2;

    $total =$repolho + $melancia + $maca;

    if($total>50){

        $sem=$total-50;

        $resposta="faltaram ".$sem." reias";

        $cor="red";

    }
    else if($tot<50){

        $sem=50-$total;

        $resposta="sobraram ".$sem." reais";

        $cor="blue";

    }
    else{

        $rrespolta="saldo insuficiente joazinho";

        $cor="green";

    }

    echo "<h3>valor da compra:".$total."</h3><br>";
    echo "<h3 style='color:".$cor.";'>".$resposta."</h3>";

}
?>
</html>