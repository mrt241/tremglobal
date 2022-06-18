<?php

require_once 'sistem/config.php';

$fname   = $_POST["fname"];
$email   = $_POST["email"];
$pnumber = $_POST["pnumber"];
$address = $_POST["address"];



if($fname == "" && $email == "" && $pnumber == "" && $address == ""){

echo '2';

}
$kontrol = $db->query("SELECT * FROM customer WHERE email='{$email}'");

if (filter_var($email, FILTER_VALIDATE_EMAIL) == false || ($kontrol->rowCount() > 0)) {

      echo '3';
} 
	

else {

$query = $db->prepare("INSERT INTO customer SET
fullname = ?,
email = ?,
phone = ?,
address = ?,
state = ?");
$insert = $query->execute(array($fname, $email, $pnumber, $address, "1"));

if ($insert) {
	
	echo '1';
}

else{
	echo '2';
}


}


?>
