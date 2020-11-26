<?php
	$bdd = new mysqli('localhost', 'root', '', 'livreor');
	
	if($bdd->connect_errno){
		echo 'La connexion n\'a pas abouti'.$bdd->connect_errno.'|'.$bdd->connect_error;
	}
?>

<header>
	<nav>
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="inscription.php">Inscription</a></li>
			<li><a href="connexion.php">Connexion</a></li>
			<li><a href="commentaire.php">Commentaire</a></li>
			<li><a href="livre-or.php">Livre-or</a></li>
			<li><a href="profil.php">Profil</a></li>
		</ul>
	</nav>
</header>