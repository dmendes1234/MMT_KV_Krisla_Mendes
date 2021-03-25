<?php
include_once 'header.php'
?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Odbjegli Django</h2>
      <h5>Odbjegli Django (eng. Django Unchained) je američki epski vestern iz 2012. godine kojeg je napisao i režirao Quentin Tarantino.</h5>

      <div class="w3-container">
      </div>

      <div class="w3-row-padding">
        <div class="w3-container w3-third">
          <img src="images/django-poster.jpg" style="width: 320px;  cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
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

      <p style="font-style: italic; text-align: center;">Slika Odbjegli Django (.jpg)</p>


      <h3>Više o filmu Odbjegli Django</h3>
      <p>Donji linkovi će vas odvesti na stranice koje detaljnije opisuju film</p>
      <ul class="nav nav-pills flex-column">

        <li class="nav-item">
          <a class="nav-link" href="https://en.wikipedia.org/wiki/Django_Unchained" target="_blank">&#9733;Wikipedia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.imdb.com/title/tt1853728/" target="_blank">&#9733;IMDb</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.nytimes.com/2012/12/25/movies/quentin-tarantinos-django-unchained-stars-jamie-foxx.html" target="_blank">&#9733;NY Times</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>

    <div class="col-sm-8">
      <h2>TEMATIKA FILMA</h2>
      <h5>The Black, the White and the Angry</h5>
      <div class="w3-row-padding">
        <div class="w3-container w3-third">
          <img src="https://img.pngio.com/django-unchained-png-4-png-image-django-unchained-png-800_417.png" style="width: 500px;  cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
      </div>
      <p style="font-style: italic;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Slika Odbjegli Django (.png)</p>

      <p>Dr. King Schultz (Waltz), njemački lovac na glave i bivši zubar,
        kupuje roba Djanga (Foxx) kako bi mu ovaj pomogao identificirati skupinu okrutnih ubojica čiji identite samo Django zna.
        Django ubrzo od Schultza počinje učiti zanatske vještine pa zajedno odlaze u Mississippi kako bi oslobodili Djangovu ženu Broomhildu (Kerry Washington).
        Međutim, nakon što dogovor o kupnji njegove žene s nemilosrdnim vlasnikom plantaže Calvinom Candiejem (DiCaprio) propadne,
        Django će se naći uvučen u borbu za vlastiti život, život svoje žene, ali i mogućnošću za slatkom osvetom…</p>
      <br>

      <h3>Trailer</h3>
      <video width="520" controls>
        <source src="images/django_video.mp4" type="video/mp4">
        Your browser does not support HTML video.
      </video>
      <br><br>

      <h3>Main Theme</h3>
      <audio controls>
        <source src="images/django_main_theme.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <br><br>

      <h3>Nagrade i uloge</h3>
      <p>Film je pobrao hvalospjeve kritičara i nominiran je u pet kategorija za prestižnu filmsku nagradu Oscar uključujući i one za najbolji film,
        najboljeg sporednog glumca (Waltz) i najbolji originalni scenarij (Tarantino).
        Odbjegli Django osvojio je dvije nagrade Zlatni globus u kategorijama najboljeg sporednog glumca (Waltz) i najboljeg scenarija (Tarantino).</p>
      <h5>Glumačka postava</h5>
      <div class="w3-row-padding">
        <div class="w3-container w3-third">
          <img src="images/foxx.bmp" style="width: 200px; height:200px;  cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity"><br><span>Jamie Foxx</span>
        </div>
        <div class="w3-container w3-third">
          <img src="images/waltz.bmp" style="width: 200px; height:200px;  cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity"><br><span>Christoph Waltz</span>
        </div>
        <div class="w3-container w3-third">
          <img src="images/dicaprio.bmp" style="width: 200px; height:200px;  cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity"><br><span>Leonardo DiCaprio</span>
        </div>
      </div>
      <p style="font-style: italic; margin-left:200px; margin-top:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Glavna glumačka postava (.bmp)</p>

      <h3>Galerija</h3>
      <div class="w3-row-padding">
        <div class="w3-container w3-third">
          <img src="images/django1.gif" style="width: 100px; height:100px; cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="w3-container w3-third">
          <img src="images/django2.gif" style="width: 100px; height:100px;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="w3-container w3-third">
          <img src="images/django3.gif" style="width: 100px; height:100px;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="w3-container w3-third">
          <img src="images/django4.gif" style="width: 100px; height:100px;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="w3-container w3-third">
          <img src="images/django5.gif" style="width: 100px; height:100px;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="w3-container w3-third">
          <img src="images/django6.gif" style="width: 100px; height:100px;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="w3-container w3-third">
          <img src="images/django7.gif" style="width: 100px; height:100px;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="w3-container w3-third">
          <img src="images/django8.gif" style="width: 100px; height:100px;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="w3-container w3-third">
          <img src="images/django9.gif" style="width: 100px; height:100px;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
      </div>
      <p style="font-style: italic; margin-left:200px; margin-top:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Galerija slika (.gif)</p>
    </div>
  </div>
</div>

<?php
include_once 'footer.php'
?>