<?php
 
 $n1 = $_POST["nota1"];
 $n2 = $_POST["nota2"];
 $n3 = $_POST["nota3"];
 $media = ($n1+$n2+$n3)/3;
 
 if($media > 6){
    echo "Aprovado! A nota foi: ", $media;
 }
 else{
    echo "Reprovado! A nota foi: ", $media;
 }