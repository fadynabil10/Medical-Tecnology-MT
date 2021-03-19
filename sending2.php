<?php

$Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';

        $QuantidadeCaracteres = strlen($Caracteres);

        $QuantidadeCaracteres--;



        $Hash=NULL;







    for($x=1;$x<=32;$x++){

        $Posicao = rand(0,$QuantidadeCaracteres);

        $Hash .= substr($Caracteres,$Posicao,1);

    }



	echo $Hash;

?>
