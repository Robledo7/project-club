<?php

include_once 'member.php';
include_once 'pleno.php';
include_once 'semipleno.php';

/**$nuevoSocio=new Member(123);
echo $nuevoSocio->calculateAge('2004-07-16');*/

$valorCuota=new FullMember(123);
echo $valorCuota->calcularCuota('2004-07-16');

$valorCuota=new SemiMember(456);
echo $valorCuota->calcularCuota('2004-07-16');