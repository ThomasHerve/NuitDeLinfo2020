<link rel="stylesheet" href="css/plage.css">

<div class="container-fluid">
    <div class="row search-content">
        <div class="col-lg-6">
            <div class="text text-1">Trouvez</div>
            <div class="text text-2">votre plage de rêve</div>
            <div class="row inline all-width">
                <button class="mybtn" type="submit"><i class="fa color-white fa-search"></i></button>
                <input class="myinput" type="text" placeholder="Votre plage" aria-label="Search">
            </div>
        </div>

        <div class="img-container col-md-offset-3 col-lg-3">     
            <img src="img/Search_graphic.svg" alt=""> 
        </div>
    </div>
</div>

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