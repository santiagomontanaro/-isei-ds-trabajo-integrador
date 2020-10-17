<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once 'modelo/CuentaCorriente.php';
require_once 'modelo/Proveedor.php';

$p1 = new Proveedor();
$p1 -> RazonSocial = 'Coca cola';
$p1 -> Cuit = '20-98765432-2';
$p1 -> Email = 'cocabusiness@gmail.com';

$cc1 = new CuentaCorriente();
$cc1 -> NumeroCuentaCorriente = 1;
$cc1 -> Saldo = '$45.000';
$cc1 -> Proveedor = $p1;

$p2 = new Proveedor();
$p2 -> RazonSocial = 'Pepsi';
$p2 -> Cuit = '20-98765432-2';
$p2 -> Email = 'pepsibusiness@gmail.com';

$cc2 = new CuentaCorriente();
$cc2 -> NumeroCuentaCorriente = 2;
$cc2 -> Saldo = '$50.000';
$cc2 -> Proveedor = $p2;

$p3 = new Proveedor();
$p3 -> RazonSocial = 'Sprite';
$p3 -> Cuit = '20-98765432-2';
$p3 -> Email = 'spritebusiness@gmail.com';

$cc3 = new CuentaCorriente();
$cc3 -> NumeroCuentaCorriente = 3;
$cc3 -> Saldo = '$99.000';
$cc3 -> Proveedor = $p3;

$p4 = new Proveedor();
$p4 -> RazonSocial = 'Manaos';
$p4 -> Cuit = '20-98765432-2';
$p4 -> Email = 'vamomanaos@gmail.com';

$cc4 = new CuentaCorriente();
$cc4 -> NumeroCuentaCorriente = 4;
$cc4 -> Saldo = '$150.000';
$cc4 -> Proveedor = $p4;

$lcc = array();
$lcc [] = $cc1;
$lcc [] = $cc2;
$lcc [] = $cc3;
$lcc [] = $cc4;

echo json_encode($lcc);