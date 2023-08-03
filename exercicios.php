Exercicio 1<br>
<br>
<?php
$valor1 = 2;
$valor2 = 7;
$resultado = $valor1 * $valor2;

echo $resultado;
?>

<br>________________________________
<br>

Exercicio 2 <br>
<br>
<?php
$valor1 = 7;
$valor2 = 3;
$valor3 = 9;
$media = ($valor1 + $valor2 + $valor3) / 3 ;
echo "Media calculada: <br>
$media";

"<br>";
?>
<br>___________________________
<br>

Exercicio 3 <br>
<br>
<?php

$preco = 320;
$acrescimo = 1.12 * $preco;
$parcelas = $acrescimo / 10;

echo "Valor total da compra: R$ $acrescimo";
echo "<br/>Valor das parcelas: R$ $parcelas";
    ?>

<br>___________________________
<br>
Exercicio 4<br>
<br>

Numero 7 e: <br>
<?php

$numero = 7;

if($numero % 2 == 0){
    echo "Numero Par";
}
else{
    echo "Numero impar";
}
?>
<br>___________________________
<br>

Exercicio 5<br>
<br>
A = 7
B = 21
<br>
<?php
$a = 7;
$b = 21;
if($a > $b){
    echo "A maior que B";
}
else{
    echo "A menor que B";
}
?>
<br>___________________________
<br>

Exercicio 6<br>
<br>
<?php

$numero = 0;
if ($numero == 0){
    echo "Valor igual";
}
 else if($numero < 0){
    echo "Valor Negativo";
 }
 else {
    echo "Numero Positivo";
 }
 ?>
 <br>___________________________
<br>

Exercicio 6<br>
<br>
<?php

$numMes = 8;

switch($numMes){
    case 1:
        echo "Janeiro";
        break;
    case 2:
        echo "Fevereiro";
        break;
    case 3:
        echo "Marco";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Maio";
        break;
    case 6:
        echo "Junho";
        break;
    case 7:
        echo "Julho";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Setembro";
        break;
    case 10:
        echo "Outubro";
        break;
    case 11:
        echo "Novembro";
        break;
    case 12:
        echo "Dezembro";
        break;
    default:
        echo "Mes invalido";
        break;
}

