
<h1> Connexion</h1>

<?php 
	if(isset($d["erreur"])){
		echo '<p id="erreur">'.$d["erreur"].'</p>';
	}
?>

<form action="?r=connexion" method="post">

	<label for="identifiant" >Identitifiant </label><br>
	<input type="text" name="identifiant" id="identifiant"><br>

	<label for="mdp" >Mot de passe </label><br>
	<input type="text" name="mdp" id="mdp"><br>

	<input type="submit" name="connexion" value="Connexion"><br>
</form>

<br/><br/>

<h1>Incription</h1>
<?php 
	if(isset($d["erreurins"])){
		echo '<p id="erreurins">'.$d["erreurins"].'</p>';
	}
?>

<form action="?r=connexion" method="post">

	<label for="identifiantins" >Identitifiant </label><br>
	<input type="text" name="identifiantins" id="identifiantins"><br>

	<label for="mdpins" >Mot de passe </label><br>
	<input type="text" name="mdpins" id="mdpins"><br>

	<input type="submit" name="creeruser" value="S'inscrire"><br>
	
</form>

<?php 
	if(isset($d["infoscreer"])){
		echo '<p id="infos">'.$d["infoscreer"].'</p>';
	}
?>
