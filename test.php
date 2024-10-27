<?php

include_once 'member.php';
include_once 'pleno.php';
include_once 'semipleno.php';

/**$nuevoSocio=new Member(123);
echo $nuevoSocio->calculateAge('2004-07-16');*/

$members=[new FullMember(123), new SemiMember(456)];
foreach ($members as $member){
    echo $member->calcularCuota("2022-08-06")."\n";
}