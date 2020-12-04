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
<div id="among-us">
</div>
<div id="myPlages" class="cards">
<?php

foreach ($d as $key){
?>
    <div class="a">
    <a href="/NuitDeLinfo2020/NUitDeLInfo2020/?r=detailsplage&p=<?php echo $key->id;?>">
    <div class="card">
        <div class="crop">
            <img class="image-plage" src="<?php echo $key->photo_plage; ?>" alt="GACHIMUCHI">
        </div>
        <div id='leetable' class="white text-2 my-center"><?php echo $key->nom_plage; ?></div>
        <div class="my-center">
            <div class="Stars" style="--star-size: 35px;--rating: <?php echo ($key->note_eau_chimique + $key->note_eau_dechet + $key->note_dechet)/3; ?>;">★★★★★</div>
        </div>
    </div>
    </a>
    </div>
<?php
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/filtre.js"></script>

</div>

</div>
