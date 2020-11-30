<?php
	if(!isset($_SESSION['login'])){
		$_SESSION['connected'] = 'Vous devez être connecté pour poster un commentaire';
	}
	else{$_SESSION['connected'] = '';}
?>

<html lang="fr">
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="CSS/index.css">
		<meta charset="UTF-8">
		<title>Livre d'or</title>
	</head>
	<body>
		<?php include 'mainheader.php' ?>
		<main class="mainlivreor">
			<h2><?php echo $_SESSION['connected']; ?></h2>
		</main>
		<?php include 'mainfooter.php' ?>
	</body>
</html>