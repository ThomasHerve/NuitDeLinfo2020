<link rel="stylesheet" href="css/details.css">

<div>
    <p class="title"><?php echo $d["nom"]; ?></p>
    <div class="container-main">
        <div class="image-desc">
            <div class="crop">
                <img class="" src="<?php echo $d["photo"];?>" alt="GACHIMUCHI">
            </div>
            <p class="description"><?php echo $d["description"]; ?></p>
        </div>
        <p>Qualité de l'eau : <?php echo $d["qualiteEau"]; ?></p>
        <p>Pollution  de l'eau : <?php echo $d["pollutionEau"]; ?></p>
        <p>Etat de la plage : <?php echo $d["etatPlage"]; ?></p>
    </div>
</div>