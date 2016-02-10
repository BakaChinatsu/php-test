<?php
/**
 * Created by PhpStorm.
 * User: Amamiya Chinatsu's
 * Date: 2016/2/3
 * Time: 22:14
 */
$varString = $_GET['text1'];
$varA1 = $_GET['input1'];
$firstSub = substr($varString, 0,$varA1);
$secondSub = substr($varString, 18);
echo $firstSub." ".$secondSub;
?>