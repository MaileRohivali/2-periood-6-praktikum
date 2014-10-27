<?php
	$isSubmitted = isset($_POST["submit"]);
	
	if ($isSubmitted){
		$username = $_POST['username'];
	}
	
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		$age = $_POST["age"];
		$car = $_POST["car"];
	}
	
	$min =2 ;
	$max = 20;
	//Kasutajanime olemasolu, min ja max väärtuste kontroll
	if (!isset($username) || $username ==""){
	 	$usernameMessage = '<div class="form_message form-error">Kasutajanime väli ei tohi olla tühi</div>';
	 } elseif (strlen($username) < $min) {
	 	# code...
	 	$usernameMessage = '<div class="form_message form-error">Kasutajanimi peab olema vähemalt ' . $min . 'kaks tähemärki pikk</div>';
	 } elseif (strlen($username) > $max){
	 	$usernameMessage = '<div class="form_message form-error">Kasutajanimi ei tohi olla rohkem kui ' . $max . 'tähemärki pikk</div>';
	 }
	 else {
	 	$usernameMessage = '<div class="form_message form-notice">Kasutajanimi sobis</div>';

	 }

	 //Vanuse andmetüübi kontroll
	 if (isset($age) and is_numeric($age)) {
	 	$ageMessage = '<div class="form_message form-notice">Vanus sobis</div>';
	 } else {
	 	$ageMessage = '<div class="form_message form-error">Vanus peab olema numbriline väärtus</div>';
	 }

	 //Rühma kuuluvuse kontroll
	 $cars = array("sapakas", "siks", "mosse");
	 if (isset($car) and in_array(strtolower($car), $cars)) {
	 	$carMessage = '<div class="form_message form-notice">Auto sobis</div>';
	 } else{
	 	$carMessage = '<div class="form_message form-error">Auto ei kuulu valikusse</div>';
	 
	}
 ?>