<?php
	$guess = $_POST['letter'];
   if(stristr("envelope", $guess) != false) {
     $response = 'yes';
   } else {
     $response = 'no';
   }

   echo json_encode(array("response" => $response));
?>
  