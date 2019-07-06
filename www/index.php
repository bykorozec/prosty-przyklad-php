<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Przykład</title>
  </head>
  <body>
<?php
include_once 'vendor/autoload.php';
$hello = new Hello();
echo "<h4>" . $hello->say() . "</h4>" . "<br/>"; 
//phpinfo();
?>  
  </body>
</html>
