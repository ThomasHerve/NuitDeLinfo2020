<body id = "body">
<div>
<?php
foreach ($d as $value){
    echo("<p>".$value."</p>");
}
?>
<div>
Je suis un texte non leetable
</div>
<div id="leetable">
Je suis un texte leetable
</div>

<div>
	<?php
	echo $_SESSION['id'];
	?>
</div>

<script type="text/javascript" src="js/LeetConvert.js"></script>
<script type="text/javascript" src="js/AmongUs/Const.js"></script>
<script type="text/javascript" src="js/AmongUs/Personnage.js"></script>
<script type="text/javascript" src="js/AmongUs/Mediator.js"></script>



</div>
</body>

