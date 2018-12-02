<?php
$text = $_POST['content6'];
echo $text,'<br>help';
$result = preg_match_all('/[;,:]{1}-*(\(+|\)+|\[+|\]+)/', $text, $res1);
print_r($res1[0]);
echo '<br>';
print_r( count($res1[0]));
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 12/2/2018
 * Time: 11:00 AM
 */