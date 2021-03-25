<?php
include_once 'header.php'
?>


<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>How the Grinch Stole Christmas</h2>
      <h5>How the Grinch Stole Christmas ili Kako je Grinch ukrao Božić je Lukin drugi najdraži film!</h5>

      <!------- W3 animacija za prekaz slike u stvanoj veličini ----------->

      <div class="w3-container">
      </div>

      <div class="w3-row-padding">
        <div class="w3-container w3-third">
          <img src="images/grinch.jpg" style="width: 320px;  cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
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

      <p style="font-style: italic; text-align: center;">Slika Grinch-a (.jpg)</p>


      <h3>Više o Grinchu</h3>
      <p>Donji linkovi će vas odvesti na stranice koje detaljnije opisuju film</p>
      <ul class="nav nav-pills flex-column">

        <li class="nav-item">
          <a class="nav-link" href="https://en.wikipedia.org/wiki/How_the_Grinch_Stole_Christmas_(2000_film)" target="_blank">&#9733;Wikipedia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.imdb.com/title/tt0170016/" target="_blank">&#9733;IMDb</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://seuss.fandom.com/wiki/How_the_Grinch_Stole_Christmas" target="_blank">&#9733;FANDOM</a>
        </li>

      </ul>
      <hr class="d-sm-none">
    </div>



    <div class="col-sm-8">

      <h2>GRINCH!</h2>
      <h5>"I HATE CRHISTMASS!!!"</h5>
      <div class="w3-row-padding">
        <div class="w3-container w3-third">
          <img src="images/grinch2.png" style="width: 500px;  cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
      </div>
      <p style="font-style: italic;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Slika Grincha - glumac Jim Carray (.png)</p>

      <p>Stanovnici gradića Who odbacili su Grincha (J. Carrey) dok je bio dijete
        zbog njegove ružnoće i zlobe. Nakon toga, on se povukao u spilju izvan mjesta
        i zamrzio ljude, što osobito dolazi do izražaja u vrijeme blagdana, kada su svi sretni,
        opušteni i međusobno se darivaju. Naravno, ni gradić Who nije ravnodušan prema njemu,
        te im on nikada nije dobrodošao. Jednoga dana stvari se promijene nakon što Grinch
        upozna Cindy Lou (T. Momsen), naivnu i dobrodušnu djevojčicu kojoj on slučajno spasi život.
        Ona ga odluči pozvati na Badnju večer u grad, iako zna da on ne pripada njezinim ljudima.
        Maštovita je to priča koja je ubrzo postala američki božićni klasik zbog šarmantnog,
        iako u početku zločestog lika koji svojom probuđenom toplinom osvoji sve ljude iz svoje
        okoline koji zajedno slave Božić. Ovaj film, iako ponešto izmijenjena sadržaja, bio je
        2000. godine najgledaniji film u Sjedinjenim Državama, a nalazi se i u Guinnessovoj
        knjizi rekorda kao najunosniji božićni film svih vremena. Režirao ga je poznati redatelj
        Ron Howard (Splash, Cocoon, Appolo 13, Beautiful Mind), a glavnu ulogu, zlokobnoga Grincha,
        tumači slavni komičar Jim Carrey, izvrsno se snašavši u ulozi.</p>
      <br>


      <h3 style="font-style: italic;">"Ovaj film mi vraća sva najbolja sjećanja iz djetinjstva."</h3>
      <p>A dolje je kratki prikaz filma. Božić nije Božič ako se bar jednom ne pogleda Grinch! ;)</p>
      <video width="520" controls>
        <source src="images/grinch_video.mp4" type="video/mp4">
        <source src="images/grinch_video.ogg" type="video/ogg">
        Your browser does not support HTML video.
      </video>
      <br><br>





    </div>
  </div>
</div>


<?php
include_once 'footer.php'
?>