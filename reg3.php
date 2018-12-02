<?php
$text = $_POST['content3'];
echo $text,'<br>';
if(preg_match_all('/(.){5}/', $text, $res1)) {
    print_r($res1[0]);
}
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 12/1/2018
 * Time: 9:12 PM
 */