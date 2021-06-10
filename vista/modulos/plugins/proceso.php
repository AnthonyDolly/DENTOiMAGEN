<?php
require 'requests/library/Requests.php';
Requests::register_autoloader();
require 'culqi/lib/culqi.php';
$SECRET_KEY = "sk_test_5DI0ueA9cBh5tWe0";
$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));
$culqi->Charges->create(
	array(
		"amount" => $_POST['precio'],
		"capture" => true,
		"currency_code" => "PEN",
		"description" => "Tratamiento/Cita",
		"email" => $_POST['tokenemail'],
		"installments" => 0,
		"source_id" => $_POST['tokenid']
	)
);


echo 'exito';








exit;
