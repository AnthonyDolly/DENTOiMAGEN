

<?php
$charge = $culqi->Charges->create(
  array(
    "amount" => $Pago,
    "currency_code" => "PEN",
    "email" => $TokenMail,
    "source_id" => "id del objeto Token o id del objeto Card"
  )
);
?>