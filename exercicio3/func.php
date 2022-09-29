<?php
include ("index.php");

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