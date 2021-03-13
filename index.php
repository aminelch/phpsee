<?php 

require 'vendor/autoload.php'; 

use PhpSee\Helpers\Str;


$generatedStr=  Str::randomString(50, false,true) . PHP_EOL;

echo strlen($generatedStr) .PHP_EOL ;
echo $generatedStr; 
