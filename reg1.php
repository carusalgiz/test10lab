<?php
$text = $_POST['content1'];
$res1 = array();
echo $text,'<br>'."hell";
if(preg_match_all('/a+b*/', $text, $res1)) {
    echo '<div>'.print_r($res1).'</div>';
}

/**
 * Created by PhpStorm.
 * User: frank
 * Date: 12/1/2018
 * Time: 8:45 PM
 */