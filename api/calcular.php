<?php

require_once "classes/calculadora.php";

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

$calculadora = new Calculadora();

$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);

switch ($operacao){
    case 'somar':
        $calculadora->somar();
        break;
    case 'subtrair':
        $calculadora->subtrair();
        break;
    case 'multiplicar':
        $calculadora->multiplicar();
        break;
    case 'dividir':
        $calculadora->dividir();
        break;

}
    


?>
<h1 style="font-size: 35px"><?php echo $calculadora->getTotal(); ?></h1>
<br>
<br>
<a href="index.php">Voltar</a>