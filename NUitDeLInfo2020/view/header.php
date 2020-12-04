<!DOCTYPE html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title></title>
			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link rel="icon" type="image/png" href="img/favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" /><![endif]-->
			<link rel="stylesheet" href="css/style.css">
		</head>

		<body>
			<div class="header">
				<a href="/NuitDeLinfo2020/NUitDeLInfo2020//?r=plage">
					<img class="logo" src="img/Logo.svg" alt="">
				</a>
				<div>
					<img class="title" src="img/title.png" alt="">
				</div>
                <?php
				if( isset($_SESSION['id'])){
                    if($_SESSION['id']) {
                        echo "<div class = 'connected'><div class='connect-text'>Connecté en temps que ".include_once "model/DTLUsers.php";
                            $u=new DTLUSERS();print $u->getById($_SESSION['id'])->pseudo."</div>";
                            echo "<form action='' method='post'>
                                <input type='submit' name='deconnexion' value='deconnection'><br>
                             </form>
                            </div>
                            ";
                    }
					}
                    else {
                        echo "<div class = 'connected'><a class='connect-text ' href='/NuitDeLinfo2020/NUitDeLInfo2020//?r=connexion'><div>Connexion</div></a></div>";
                    }
                ?>
			</div>
		
			<div class="content">
