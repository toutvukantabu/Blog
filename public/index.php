<?php 

require '../vendor/autoload.php';
use GuzzleHttp\Psr7\ServerRequest;
require '../vendor/autoload.php';

$app = new \Framework\App();

$response= $app->run(ServerRequest::fromGlobals());

?>