
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