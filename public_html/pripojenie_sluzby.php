<?php
if(!extension_loaded("soap")){
  dl("php_soap.dll");
}

ini_set("soap.wsdl_cache_enabled","0");
$server = new SoapServer("http://192.168.1.153:8080/IT_Camp/DriverWS?WSDL");

function addDriver($yourName){


  return "Hello, ".$yourName;
}

$server->AddFunction("doHello");
$server->handle();
?>