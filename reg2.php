<?php
$text = $_POST['content2'];
$var = $_POST['var'];
echo $text,'<br>';
if(preg_match_all('/('.$var.'){3}/', $text, $res1)) {
    print_r($res1[0]);
}
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 12/1/2018
 * Time: 9:01 PM
 */