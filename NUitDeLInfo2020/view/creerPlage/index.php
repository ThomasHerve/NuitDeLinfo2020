
<?php 
	if(isset($d["erreur"])){
		echo '<p id="erreur">'.$d["erreur"].'</p>';
	}

	if( isset($_SESSION['id'])){
		if( !empty($_SESSION['id'])){

			echo '''
				<form action="?r=connexion" method="post">

					<label for="nomplage" >Nom de la plage </label><br>
					<input type="text" name="nomplage" id="nomplage"><br>

					<label for="phototplage" > Photo</label><br>
					<input type="text" name="photoplage" id="photoplage"><br>

					<label for="descriplage" > Description</label><br>
					<input type="text" name="descriplage" id="descriplage"><br>

					<input type="submit" name="creerplage" value="Creer un plage"><br>

				</form>
				'''
		}
	}

	if(isset($d["infos"])){
		echo '<p id="infos">'.$d["infos"].'</p>';
	}
?>