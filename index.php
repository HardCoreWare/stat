<?php

require_once('tinystat.php');

$data = array(1,2,1,1,2,1,1,1,3,4,5,1,-1,2,0,3,4);
$stat = new tinystat();

$sum = $stat->sum($data);
$dataset=implode(", ",$data);
$average = $stat->average($data);
$desvstd = $stat->std_dev($data);
$varcoef= $stat->var_coef($data);
$var = $stat->variance($data);
$range = $stat->range($data);
$median = $stat->median($data);
$frec1 = $stat->abs_frec($data,1);

$av = strval($average);
$de = strval($desvstd);
$ra = strval($range);
$me = strval($median);
$va = strval($var);
$fr1 =strval($frec1);

echo("dataset:  ".$dataset."<br>");
echo("range:    ".$ra."<br>");
echo("median:   ".$me."<br>");
echo("average:  ".$av."<br>");
echo("std desv: ".$de."<br>");
echo("variance: ".$va."<br>");
echo("frec(1):  ".$fr1."<br>");

?>