

<?php
  $valor = $_POST["idtoken"];
  echo '<script> console.log( '. $valor .' ) </script>'; 

?>

<?php
	// Cargamos Requests y Culqi PHP
	require '/library/Requests.php';
	Requests::register_autoloader();
	require 'culqi/lib/culqi.php';

	// Configurar tu API Key y autenticación
	$SECRET_KEY = "pk_test_d56ceb832f281cf3";
	$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

	$culqi->Charges->create(
		array(
			"amount" => $_POST['precio'],
			"capture" => true,
			"currency_code" => "PEN",
			"description" => $_POST['producto'],
			"customer_id" => $_POST['customer_id'],
			"address" => $_POST['address'],
			"address_city" => $_POST['address_city'],
			"first_name" => $_POST['first_name'],
			"email" => $_POST['email'],
			"installments" => 0,
			"source_id" => $_POST['token']
		)
	);

	echo "exito";

	exit();
?>