<?php
include_once 'src/Hello.php'; // dołączenie klasy bez autoloadera
$hello = new Hello();
echo $hello->say() . "\n"; 
var_dump($hello->say());
?>  
