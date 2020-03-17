<?php 

	// If you installed via composer, just use this code to require autoloader on the top of your projects.
	require 'vendor/autoload.php';
	

	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();

	// Using Medoo namespace
	use Medoo\Medoo;
	


	$database = new Medoo([
		// required
		'database_type' => 'mysql',
		'database_name' => getenv("DATABASE_NAME"),
		'server' => getenv("DATABASE_HOST"),
		'username' => getenv("DATABASE_USER"),
		'password' => getenv("DATABASE_PASSWORD"),
	 
		// [optional]
		'charset' => 'utf8mb4',
		'collation' => 'utf8mb4_general_ci',
		'port' => getenv("DATABASE_PORT"),
	 
		// [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
		'option' => [
			PDO::ATTR_CASE => PDO::CASE_NATURAL
		],
	 
		// [optional] Medoo will execute those commands after connected to the database for initialization
		'command' => [
			'SET SQL_MODE=ANSI_QUOTES'
		]
	]);


	function dd($var)
	{
	    ob_end_clean();
	    $backtrace = debug_backtrace();
	    echo "\n<pre>\n";
	    if (isset($backtrace[0]['file'])) {
	        $filename = $backtrace[0]['file'];
	        $filename = explode('\\' , $filename);
	        echo end($filename) . "\n\n";
	    }
	    echo "---------------------------------\n\n";
	    var_dump($var);
	    echo "</pre>\n";
	    die;
	}
	// $create = $database->insert(
	// 	"usuario", 
	// 	[
	// 		"name" => "Guilherme",
	// 		"email" => "gui@gui.com",
	// 		"idade" => 18,
	// 		"telefone" => "4889239832",
	// 		"cpf"  => "32178612378"
	// 	]
	// );

	// $data = $database->select("usuario",["id","name","email","cpf"],[
	// "name[=]" => "Marcos"
	// ]);
	 
	// var_dump($data);