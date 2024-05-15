<?php
require_once 'contrato.php';

$contrato1 = new Contrato(Date('d-m-Y'), "15-06-2024", 17);
echo $contrato1->showContract();
 