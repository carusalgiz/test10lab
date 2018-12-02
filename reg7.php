<?php
$text = $_POST['content7'];
echo $text,'<br>';
if (preg_match(
    '/^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/',
    $text)) {
    echo "IP address is good.";
} else {
    echo "IP address incorrect.";
}
print_r($res1[0]);
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 12/2/2018
 * Time: 11:11 AM
 */