<?php 
	require("../load.php");
	// dd($_POST);

	if($_POST["name"] === "" && $_POST["email"] === "" && $_POST["telefone"] === ""){
		$create = $database->insert(
			"usuario", 
			[
				"name" => $_POST["name"],
				"email" => $_POST["email"],
				"idade" => $_POST["idade"],
				"telefone" => $_POST["telefone"],
				"cpf"  => $_POST["cpf"]
			]
		);

		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	else{
		echo "ta errado";
		echo "<br>";
		echo "<a href='/'>Home</a>";
	}
