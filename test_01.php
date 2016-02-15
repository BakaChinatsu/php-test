<?php
/**
 * Created by PhpStorm.
 * User: Amamiya Chinatsu's
 * Date: 2016/2/3
 * Time: 22:14
 */
//Get the input -> text1
$varString = $_GET['text1'];
$varA1 = $_GET['input0'];
$varA01 = $varA1 - 1;
$varA2 = $_GET['input1'];
$firstSub = substr($varString, $varA01,$varA2);
//$secondSub = substr($varString, 18);
//echo $firstSub." ".$secondSub;
echo $firstSub ;
?>