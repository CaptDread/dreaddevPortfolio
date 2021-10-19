<?php
if (!isset($title)){
    $title = "Default Title";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge" />
		<title><?php echo $title; ?> | DreadDev</title>
		<meta name="Web development & creative technology made by not just another coder, but a Nomadic Digital Pirate. Capt Dread Dev has years of experience working with many different programming languages, software types, and even IT." content="Domingo Dunlaps portfolio of wonderment" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&family=Montserrat:wght@300&family=Roboto&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" href="dist/css/main.css" />
		<script src="https://kit.fontawesome.com/a032c809c9.js" crossorigin="anonymous"></script>
	</head>

	<!-- FIx mobile rendering -->

	<body>
		<header class="home_head">
			<a href="index.php" class="logoLink">
				<figure class="head_logo">
					<img class="dreadlogo" src="dist/img/logoOpen.png" alt="The Classic DreadDev Logo">
				</figure>
			</a>
			<h1>dread dev</h1>
			<nav class="hide-small" id="inactive">
				<ul>
					<li><a href="index.php">home</a></li>
					<li><a href="about.php">about</a></li>
					<li><a href="contactme.php">contact me</a></li>
				</ul>
			</nav>
			<div class="hide-large burg_btn" id="closed">
				<div class="topBun"></div>
				<div class="botBun"></div>
			</div>
		</header>