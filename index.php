<?php
use ignateva\{Square, MyLog};

require "vendor/autoload.php";

try {
MyLog::log("Program version " . trim(file_get_contents("version")));
$a = readline();
$b = readline();
$c = readline();

$sqr = new Square();
    MyLog::log("The equation is: ". $a.'x^2 + '.$b.'x + '.$c.' = 0'. PHP_EOL);

    $res = $sqr->solve($a, $b, $c);

} catch (RuntimeException $e){
   MyLog::log("Error".$e->getMessage());
}
MyLog::write();
