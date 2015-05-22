<?php
/* Create a class for your webservice structure, in this case: Contact */
class Driver {
    function addDriver($meno, $priezvisko, $login, $heslo) 
    {
        $this->meno = $meno;
        $this->priezvisko = $priezvisko;
        $this->login = $login;
        $this->heslo = $heslo;
    }
}

/* Initialize webservice with your WSDL */
$client = new SoapClient("http://192.168.1.153:8080/IT_Camp/DriverWS?WSDL");

/* Fill your Contact Object */
//$contact = new Contact("karolko", "maly", "kaorl1", "1233456");

/* Set your parameters for the request */
//$params = array(
//  "Contact" => $contact.heslo,
//  "description" => "Barrel of Oil",
//  "amount" => 500,
//);

$meno = "karol";
$priezvisko ="maly";
$login="karol1";
$heslo = "1234";
/* Invoke webservice method with your parameters, in this case: Function1 */
$response = $client->__soapCall("addDriver", $meno, $priezvisko, $login, $heslo);

/* Print webservice response */
var_dump($response);
echo $response;
?>