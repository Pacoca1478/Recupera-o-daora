<?php
require_once "../model/ContaModel.php";

$conta1=new ContaBancaria();
$conta1->setTitular("Juliana");
$conta1->depositar(1000);

$conta2=new ContaBancaria();
$conta2->setTitular("Godoy");
$conta2->depositar(750);

$conta3=new ContaBancaria();
$conta3->setTitular("De Sa");
$conta3->depositar(1250);

$contas=[$conta1,$conta2,$conta3];

require_once "../view/contas.php";

?>

