<?php

ini_set("soap.wsdl_cache_enabled", "0");

require_once __DIR__ . "/vendor/autoload.php";

$class = "Bookcatalog\BookService";

$wsdl = "currency-1842.wsdl";

$server=new SoapServer($wsdl,['uri'=>"http://localhost/SA-1842/Server.php"]);

$server->setClass($class);

$server->handle();

?>
