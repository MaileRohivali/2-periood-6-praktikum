<?php require("validation.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>2. periood 6.-7. praktikum</title>
	<style>
		.form_field{
			margin-top:10px;
		}
		.form-error{
			color: red;
		}
		.form-notice{
			color: green;
		}
		.form_message{
			font-weight:bold;
		}
	</style>
</head>
<body>
	<pre><?php print_r($_POST); ?></pre>
	<?php $names = array("kaspar", "frank", "maile");
	in_array("Kaspar", $names);
	?>
	<?php echo strlen($username); ?>
	<form action="index.php" method="post">
		<div class="form_field">
				<?php if ($isSubmitted){
					echo $usernameMessage;}?>
		<label for="username">Kasutajanimi:</label>
			<input id="username" type="text" name="username">
		</div>
		<div class="form_field">
				<?php if ($isSubmitted){
					echo $ageMessage;}?>
		<label for="age">Vanus:</label>
			<input id="age" type="number" name="age">
		</div>
		<div class="form_field">
				<?php if ($isSubmitted){
					echo $carMessage;}?>
				<label for="name">	Auto: </label>
			<input id="car" type="text" name="car">
		</div>
		</div>

		<div class="form_field">
			<input type="submit" name="submit" value="Saada">
		</div>
	</form>
</body>
</html>