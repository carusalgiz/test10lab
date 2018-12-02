<?php
$text = $_POST['content4'];
echo $text,'<br>';
$result = preg_match_all('/((\b(\S+)))(?:\s+\2)+/', $text, $res1);
print_r( $res1[0]);

/**
 * Created by PhpStorm.
 * User: frank
 * Date: 12/1/2018
 * Time: 9:57 PM
 */