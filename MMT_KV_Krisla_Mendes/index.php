<?php
include_once 'header.php'
?>

<div class="container" style="margin-top:30px">

    <div class="row">

        <div class="col-sm-12">
            <h2>O stranici</h2>
            <h5 style="text-align: center;">Na ovoj web stranici prezentirat ćemo vam naše omiljene filmove u sklopu predmeta
                Multimedijska tehnika na fakultetu elektrotehnike, računarstva i informacijskih tehnologija u Osijeku.
                &#9733;
                </h4>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-6">
            <h2>O nama</h2>
            <h5>Luka Krisla:</h5>
            <!------- W3 animacija za prekaz slike u stvanoj veličini ----------->

            <div class="w3-container">
            </div>

            <div class="w3-row-padding">
                <div class="w3-container w3-third">
                    <!------- samo dodaš sliku u images po nazovim dario.jpg ----------->
                    <img src="images/luka.jpg" style="width: 200px; height: 200px; object-fit: cover; cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
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
            <p>Lukin omiljeni flim je Gospodar prstenova, a drugi najdraži film je Grinch.</p>
            <!------- KRAJ: W3 animacija za prekaz slike u stvanoj veličini ----------->
            <h3>Detalji</h3>
            <ul class="nav nav-pills flex-column">

                <li class="nav-item">
                    <p class="zivot-tekst">Mjesto i datum rođenja:</p>
                    <a class="zivot-link" href="https://www.virovitica.hr" target="_blank">&nbsp;&#9733;Virovitica</a>
                    <p>&nbsp;&nbsp; 22.04.1997.</p>

                </li>
                <li class="nav-item">
                    <p class="zivot-tekst">Mjesto stanovanja:</p>
                    <a class="zivot-link" href="https://www.virovitica.hr" target="_blank">&nbsp;&#9733;Daruvar</a>
                    <a class="zivot-link" href="https://www.osijek.hr" target="_blank">i Osijek</a>
                    <br><br>
                </li>
                <li class="nav-item">
                    <p class="zivot-tekst">Školovanje:</p>
                    <a class="zivot-link" href="http://os-vnazora-daruvar.skole.hr" target="_blank">&nbsp;&#9733;Osnovna škola Vladimira Nazora Daruvar</a>
                    <br><br>
                </li>
                <li class="nav-item">
                    <p class="zivot-tekst">Stručno obrazovanje:</p>
                    <a class="zivot-link" href="https://www.tsd.hr/site/" target="_blank">&nbsp;&#9733;Tehnička škola Daruvar</a>
                    <p>&nbsp;&nbsp; Tehničar za raučunarstvo</p>
                </li>
                <li class="nav-item">
                    <p class="zivot-tekst">Visoko obrazovanje::</p>
                    <a class="zivot-link" href="https://www.ferit.unios.hr" target="_blank">&nbsp;&#9733;Fakultet elektrotehnike, računarstva i informacijskih tehnologija</a>
                    <p>&nbsp;&nbsp; Inženjer računarstva</p>
                </li>


            </ul>
            <hr class="d-sm-none">
        </div>

        <div class="col-sm-6">
            <h2>&nbsp;</h2>
            <h5>Dario Mendeš:</h5>
            <!------- W3 animacija za prekaz slike u stvanoj veličini ----------->

            <div class="w3-container">
            </div>

            <div class="w3-row-padding">
                <div class="w3-container w3-third">
                    <img src="images/dario.jpg" style="width: 200px; height: 200px; object-fit: cover; cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
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
            <p style="display: inline;">Dariovi omiljeni filmovi su Odbjegli Django (Django Unchained) te Glup i gluplji.</p>

            <h3>&nbsp;</h3>
            <ul class="nav nav-pills flex-column">

                <li class="nav-item">
                    <p class="zivot-tekst">Mjesto i datum rođenja:</p>
                    <a class="zivot-link" href="https://grad-vinkovci.hr" target="_blank">&nbsp;&#9733;Vinkovci</a>
                    <p>&nbsp;&nbsp; 04.10.1998.</p>

                </li>
                <li class="nav-item">
                    <p class="zivot-tekst">Mjesto stanovanja:</p>
                    <a class="zivot-link" href="https://www.vukovar.hr" target="_blank">&nbsp;&#9733;Vukovar</a>
                    <a class="zivot-link" href="https://www.osijek.hr" target="_blank">i Osijek</a>
                    <br><br>
                </li>
                <li class="nav-item">
                    <p class="zivot-tekst">Školovanje:</p>
                    <a class="zivot-link" href="http://os-blage-zadre-vu.skole.hr/" target="_blank">&nbsp;&#9733;Osnovna škola Blage Zadre Vukovar</a>
                    <br><br>
                </li>
                <li class="nav-item">
                    <p class="zivot-tekst">Srednje obrazovanje:</p>
                    <a class="zivot-link" href="http://gimnazija-vukovar.skole.hr/" target="_blank">&nbsp;&#9733;Gimnazija Vukovar</a>
                    <p>&nbsp;&nbsp; Opći smjer</p>
                </li>
                <li class="nav-item">
                    <p class="zivot-tekst">Visoko obrazovanje::</p>
                    <a class="zivot-link" href="https://www.ferit.unios.hr" target="_blank">&nbsp;&#9733;Fakultet elektrotehnike, računarstva i informacijskih tehnologija</a>
                    <p>&nbsp;&nbsp; Inženjer računarstva</p>
                </li>
            </ul>
            <hr class="d-sm-none">
        </div>
    </div>
</div>
<?php
include_once 'footer.php'
?>