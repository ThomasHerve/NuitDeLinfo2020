<div>
<?php
foreach ($d as $key => $value){
?>
    <p><?php echo $value["note"]; ?></p>
    <p><?php echo $value["nom"]; ?></p>
    <img class="" src="<?php echo $value["photo"];?>" alt="GACHIMUCHI">
<?php
}
?>
</div>