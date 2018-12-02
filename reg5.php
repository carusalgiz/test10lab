<?php
$text = $_POST['content5'];
echo $text,'<br>';
$result = preg_match_all('/#([0-9,A-F]){6}/', $text, $res1);
print_r( $res1[0]);
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 12/1/2018
 * Time: 11:08 PM
 */