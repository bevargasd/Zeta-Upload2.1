<?php
	$config = include('./config.php');
	require('./mojang-api.class.php');
	$ping = MojangAPI::ping($config['server']['ip'], $config['server']['port']); 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $config['theme']['title'] ?></title>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="css/animations.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" intergrity="sha256-rx5u3IdaOCszi7Jb18XD9HSn8bNiEgAqWJbdBvIYYyU=" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	</head>