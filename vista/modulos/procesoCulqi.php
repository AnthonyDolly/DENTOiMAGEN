


<?php
$charge = $culqi->Charges->create(
 array(
     "amount" => $totalPago,
     "currency_code" => "PEN",
     "email" => $tokenemail,
     "source_id" => "id del objeto Token o id del objeto Card"
   )
);
?>