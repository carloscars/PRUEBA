<?php
require_once('lib/nusoap.php');
 
//This is your webservice server WSDL URL address
$wsdl = "http://carloskars.nonhost.com/Test//save.php?wsdl";
 
//create client object
$client = new nusoap_client($wsdl, 'wsdl');
 
$err = $client->getError();
$email=$_POST["email"];
$comment=$_POST["comment"];
$err = $client->getError();

if ($err) {
	// Display the error
	echo '<h2>Constructor error</h2>' . $err;
	// At this point, you know the call that follows will fail
        exit();
}
 
//$result1= $client->call('agregarCliente', array("Juan","Hernandez" ,"perimetral","2323"));
$result1= $client->call('Agregar', array("$emai","$comment"));
//$result1= $client->call('consultarPago', array("$folio","$nombre","$apellido"));


?>