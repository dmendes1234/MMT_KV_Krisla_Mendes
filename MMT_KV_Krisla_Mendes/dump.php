<?php
include_once 'header.php'
?>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-4">
            <h2>Glup i gluplji</h2>
            <h5>Glup i gluplji (eng. Dumb and Dumber) je američka komedija iz 1994. godine u režiji braće Petera i Bobbyja Farrellyja, 
            koji su uz Bennetta Yellina i autori scenarija.</h5>

            <div class="w3-container">
            </div>

            <div class="w3-row-padding">
                <div class="w3-container w3-third">
                    <img src="images/dump.jpeg" style="width: 320px;  cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
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
            <p style="font-style: italic; text-align: center;">Slika Glup i gluplji (.jpeg)</p>

            <h3>Više o filmu</h3>
            <p>Donji linkovi će vas odvesti na stranice koje detaljnije opisuju film</p>
            <ul class="nav nav-pills flex-column">

                <li class="nav-item">
                    <a class="nav-link" href="https://en.wikipedia.org/wiki/Dumb_and_Dumber" target="_blank">&#9733;Wikipedia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.imdb.com/title/tt0109686/" target="_blank">&#9733;IMDb</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.rottentomatoes.com/m/dumb_and_dumber" target="_blank">&#9733;Rotten tomatoes</a>
                </li>

            </ul>
            <hr class="d-sm-none">
        </div>

        <div class="col-sm-8">

            <h2>TEMATIKA FILMA</h2>
            <h5>When two imbecils meet together</h5>
            <div class="w3-row-padding">
                <div class="w3-container w3-third">
                    <img src="https://www.relevantmagazine.com/wp-content/uploads/2017/06/Screen-shot-2013-06-19-at-10.33.06-AM.png" style="width: 500px;  cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
                </div>
            </div>
            <p style="font-style: italic;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Slika Jimm Carry i Jeff Daniels (.png)</p>

            <p>Dok se Harry bavi brigom o psima, Lloyd radi kao vozač limuzine i jednog dana vozi prekrasnu Mary, u koju se odmah zaljubi, do zračne luke. 
            Nakon što ona tamo namjerno ostavi aktovku i otputuje, Lloyd je pokupi i s Harryjem kreće na put preko cijele države kako bi stigli do zimovališta Aspen 
            u Coloradu.Nakon putovanja ispunjenog različitim dogodovštinama konačno stižu do tamo, te odmah nastoje pronaći Mary i vratiti joj aktovku. 
            No, tijekom svađe u kojoj Harry pokuša baciti aktovku u obližnje jezero, uvide da se u njoj nalazi velika količina novca. 
            Budući da više nemaju ni vlastitog novca ni mjesta za odsjesti, odluče "posuditi" dio novca koji se nalazi u aktovci. 
            Međutim, trošenje novca im izmakne kontroli i njime plate ostanak u najluksuznijem apartmanu, te ga troše za kupnju različitih nepotrebnih stvari, 
            među kojima je skupocjeni Lamborghini Diablo. No, kad se pokaže da je novac u aktovci zapravo bio namijenjen kao otkupnina u zamjenu za otetog Marynog muža, obojica se suoče s otmičarom i policijom..</p>
            <br>

            <h3>"TOP 10 BEST MOMENTS"</h3>
            <video width="520" controls>
                <source src="images/dump_n_dumper.mp4" type="video/mp4">
                Your browser does not support HTML video.
            </video>
            <br><br>

        </div>
    </div>
</div>

<?php
include_once 'footer.php'
?>