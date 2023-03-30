<?php

$km = readline("km = ");
$litro = readline("litro = ");



$MEDIA = $km / $litro;


echo  number_format($MEDIA,3,".",".") .  " km/l";
