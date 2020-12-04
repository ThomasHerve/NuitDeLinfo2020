<link rel="stylesheet" href="css/details.css">
<link rel="stylesheet" href="css/comment.css">

<div>
    <p class="title"><?php echo $d["nom"]; ?></p>
    <div class="container-main">
        <div class="image-desc">
            <div class="crop">
                <img class="" src="<?php echo $d["photo"];?>" alt="GACHIMUCHI">
            </div>
            <p class="description"><?php echo $d["description"]; ?></p>
        </div>
        <div class="notes">
             <div class="moy-note">Note globale :
                <div class="Stars" style="--star-size: 75px;--rating:  <?php echo (($d["qualiteEau"] + $d["pollutionEau"] + $d["etatPlage"])/3); ?>;">★★★★★</div>
             </div>
             <div class="text-note">Qualité de l'eau :<div class="Stars" style="--star-size: 35px;--rating:  <?php echo $d["qualiteEau"]; ?>;">★★★★★</div></div>
             <div class="text-note">Pollution  de l'eau :<div class="Stars" style="--star-size: 35px;--rating: <?php echo $d["pollutionEau"]; ?>;">★★★★★</div></div>
             <div class="text-note">Etat de la plage :<div class="Stars" style="--star-size: 35px;--rating: <?php echo $d["etatPlage"]; ?>;">★★★★★</div></div>
        </div>
    </div>
</div>
<div>
    <h1>Commentaires</h1>

<!-- comments container -->
<div class="comment_block">
 <!-- used by #{user} to create a new comment -->
 <div class="create_new_comment">

    <!-- current user -->
    <div class="input_comment">
        <input type="text" placeholder="Nouveau commentaire..">
    </div>
    <div class="stars-post">
          <div class="note">
              <div class="text-note-comment margin-top-10">
                    Qualité de l'eau :
              </div>
              <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
              </div>
          </div>
          <div class="note">
            <div class="text-note-comment margin-top-10">
                  Pollution de l'eau :
            </div>
            <div class="rate2">
              <input type="radio" id="star5-2" name="rate2" value="5" />
              <label for="star5-2" title="text">5 stars</label>
              <input type="radio" id="star4-2" name="rate2" value="4" />
              <label for="star4-2" title="text">4 stars</label>
              <input type="radio" id="star3-2" name="rate2" value="3" />
              <label for="star3-2" title="text">3 stars</label>
              <input type="radio" id="star2-2" name="rate2" value="2" />
              <label for="star2-2" title="text">2 stars</label>
              <input type="radio" id="star1-2" name="rate2" value="1" />
              <label for="star1-2" title="text">1 star</label>
            </div>
        </div>
        <div class="note">
              <div class="text-note-comment margin-top-10">
                    Etat de la plage :
              </div>
              <div class="rate3">
                <input type="radio" id="star5-3" name="rate3" value="5" />
                <label for="star5-3" title="text">5 stars</label>
                <input type="radio" id="star4-3" name="rate3" value="4" />
                <label for="star4-3" title="text">4 stars</label>
                <input type="radio" id="star3-3" name="rate3" value="3" />
                <label for="star3-3" title="text">3 stars</label>
                <input type="radio" id="star2-3" name="rate3" value="2" />
                <label for="star2-3" title="text">2 stars</label>
                <input type="radio" id="star1-3" name="rate3" value="1" />
                <label for="star1-3" title="text">1 star</label>
              </div>
         </div>
        <button  class="bouton margin-top-30">
            Poster
        </button>
    </div>
 </div>
 <!-- new comment -->
 <div class="new_comment">
    <!-- build comment -->
    <ul class="user_comment">
        <div class="name">
            Boris
        </div>
        <!-- the comment body --><div class="comment_body">
            <p>Gastropub cardigan jean shorts, kogi Godard PBR&B lo-fi locavore. Organic chillwave vinyl Neutra. Bushwick Helvetica cred freegan, crucifix Godard craft beer deep v mixtape cornhole Truffaut master cleanse pour-over Odd Future beard. Portland polaroid iPhone.</p>
             <div class="text-note-comment">Qualité de l'eau :<div class="Stars" style="--star-size: 25px;--rating:5;">★★★★★</div></div>
             <div class="text-note-comment">Pollution  de l'eau :<div class="Stars" style="--star-size: 25px;--rating:4;">★★★★★</div></div>
             <div class="text-note-comment">Etat de la plage :<div class="Stars" style="--star-size: 25px;--rating:3;">★★★★★</div></div>
        </div>
    </ul>
</div>

