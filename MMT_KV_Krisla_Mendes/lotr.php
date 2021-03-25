<?php
  include_once 'header.php'
?>


<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>The Lord of the Rings</h2>
      <h5>The Lord of the Rings ili Gospodar prstenova je Lukin omiljeni film!</h5>

     <!------- W3 animacija za prekaz slike u stvanoj veličini ----------->

        <div class="w3-container">
                    </div>

                    <div class="w3-row-padding">
                        <div class="w3-container w3-third">
                            <img src="images/lotr1.jpg" style="width: 320px;  cursor:pointer" 
                            onclick="onClick(this)" class="w3-hover-opacity">
                        </div>
                    </div>

                    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                        <div class="w3-modal-content w3-animate-zoom">
                            <img id="img01" style="width:100%">
                        </div>
                    </div>

                    <script>
                    function onClick(element) {
                    document.getElementById("img01").src = element.src;
                    document.getElementById("modal01").style.display = "block";
                    }
                    </script>

                <!------- KRAJ: W3 animacija za prekaz slike u stvanoj veličini ----------->
                
      <p style="font-style: italic; text-align: center;">Slika Gospodara prstenova (.jpg)</p>


      <h3>Više o Gospodarima prstenova</h3>
      <p>Donji linkovi će vas odvesti na stranice koje detaljnije opisuju film</p>
      <ul class="nav nav-pills flex-column">
        
        <li class="nav-item">
          <a class="nav-link" href="https://en.wikipedia.org/wiki/The_Lord_of_the_Rings_(film_series)" target="_blank">&#9733;Wikipedia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.imdb.com/title/tt0120737/" target="_blank">&#9733;IMDb</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://lotr.fandom.com/wiki/The_Lord_of_the_Rings" target="_blank">&#9733;FANDOM</a>
        </li>
        
      </ul>
      <hr class="d-sm-none">
    </div>



    <div class="col-sm-8">
      <h2>TEMATIKA FILMA</h2>
      <h5>Što se zbiva u filmu?</h5>
        <div class="w3-row-padding">
            <div class="w3-container w3-third">
                <img src="images/lotr2.png" style="width: 500px;  cursor:pointer" 
                onclick="onClick(this)" class="w3-hover-opacity">
            </div>
        </div>
        <p style="font-style: italic;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Slika prstena (.png)</p>
     
      <p>Priča Gospodara prstenova odvija se tijekom Trećeg doba Međuzemlja. 
          To područje nastanjuju ljudi i druge humanoidne rase (hobiti, vilenjaci,
           patuljci i orci) kao i mnoga druga stvarna i fantastična stvorenja. Priča se vrti 
           oko Prstena moći kojeg je stvorio Gospodar tame Sauron i od tihih početaka u Shireu
            grana se preko Međuzemlja prateći tijek Rata za Prsten kroz oči glavnih likova, a
             posebice glavnog protagonista Froda Bagginsa.</p>
      <br>
      <h5>Dodatna stvar koja mi se sviđa je epska glazba koja prati kroz film.</h5>
        <audio controls>
            <source src="images/lotr_music.ogg" type="audio/ogg">
            <source src="images/lotr_music.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <br><br>
      <h2>TRILOGIJA</h2>
      <h5>Koliko dijelova film ima?</h5>
        <div class="w3-row-padding">
            <div class="w3-container w3-third">
                <img src="images/lotr3.tif" style="width: 500px;  cursor:pointer" 
                onclick="onClick(this)" class="w3-hover-opacity">
            </div>
        </div>
        <p style="font-style: italic;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Slika Trilogije (.tif)</p>
     
      <p>Trilogija je pojam koji označava tri umjetnička djela
           koja su međusobno povezana po prirodi izraza ili po temi.
            Tako je trilogija najčešća u antičkom i novijem dramskom
             stvaralaštvu, susreće se i kod drugih književnih vrsta. </p>
      <br>
      <h5>Moj omiljeni film iz trilogije je prvi dio:"Prstenova družina"</h5>
      <p>Ovaj film mi se sviđa jer nas uvodi u priću. Vrlo je mirno i opuštajuće za gledati.</p>

      <div class="w3-row-padding">
            <div class="w3-container w3-third">
                <img src="images/lotr4.gif" style="width: 500px;  cursor:pointer" 
                onclick="onClick(this)" class="w3-hover-opacity">
            </div>
        </div>
        <p style="font-style: italic;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Slika Prstenove družine (.gif)</p>
        
        <h3>Ikonična scena iz filma</h3>
        <p>Jedna od najpoznatijih scena iz filma je kada prsten pada u vulkan te dobro pobjeđuje zlo!</p>
    
        <video width="520" controls>
        <source src="images/lotr_video.mp4" type="video/mp4">
        <source src="images/lotr_video.ogg" type="video/ogg">
        Your browser does not support HTML video.
        </video>
        <br><br>



      
    </div>
  </div>
</div>


<?php
  include_once 'footer.php'
?>