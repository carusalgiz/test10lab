<?php
$text = $_POST['content'];
$res1 = array();
echo $text,'<br>';
if(preg_match_all('/\/*\**/', $text, $res1)) {
   print_r($res1);
}
/**;
 * Created by PhpStorm.
 * User: frank
 * Date: 12/1/2018
 * Time: 8:06 PM
 */