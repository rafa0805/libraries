<?php
require_once("./lib/autoload.php");

$request = new \MyApp\Common\HttpRequest();
$response = new \MyApp\Common\HttpResponse();
$debugger = new \MyApp\Util\Debug();
$token = new \MyApp\Common\TokenHandler();

$x = $token->create();
echo $x;
var_dump($token->evaluate($x));
var_dump($_SESSION["token"]);

// $f = fopen("sample.csv", "r");
// while ($line = fgetcsv($f)) {
//   $data[] = $line;
// }
// fclose($f);

// $response->csv_out1('./sample.csv', "test02.txt");