<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CascadeStyleSheet.css">
    </head>
    <body>
        <h1><strong>Movie Universe</strong></h1>
        <p></p>
        <table style="width:100; margin-left:auto; margin-right:auto;">
            <tr>
                <td><form method="link" action="reservationForm.php"><input class="button" type="submit" value="Make Reservation"></form></td>
                <td><form method="link" action="checkRes.php"><input class="button" type="submit" value="Check Reservation"></form></td>
                <td><button class="button" id="contactBtn">Contact Us!</button></td><
            <div id="contactModal" class="modal">
                <div class="modal-content">
                    <span class="close">x</span><p id='p1'>Call Us</p>
                    <p id='p2'>(321)877-9204)</p>
                    <p id='p1'>Email Us</p>
                    <p id='p2'>movieuniverse@gmail.com</p>
                    <p id='p1'>Write Us</p>
                    <p id='p2'>Movie Universe</p>
                    <p id='p2'>321 Jog Park,</p>
                    <p id='p2'>Star City,HQ 41231</p>       
                </div>
            </div>
        </tr>
    </table>
    <p></p>
    <p><span style="text-decoration: underline;color: #ffff00;">Now Showing (Click for more info)</span></p>
    <table style="height: 200px; width:100%";>
        <tbody>
            <tr>
                <td><img onclick="showDiv('RogueOne')" class="imageview" src="http://my.fit.edu/~paggarwal2014/Project/Rogue%20One.jpg" alt="Rogue One" width="200" height="295" /></td>
                <td><img onclick="showDiv('Moana')" class="imageview" src="http://my.fit.edu/~paggarwal2014/Project/Moana.jpg" alt="Moana" width="200" height="295" /></td>
                <td><img onclick="showDiv('FantasicBeasts')" class="imageview" src="http://my.fit.edu/~paggarwal2014/Project/Fantastic%20Beasts.jpg" alt="Fantastic Beasts" width="200" height="295" /></td>
                <td><img onclick="showDiv('DrStrange')" class="imageview" src="http://my.fit.edu/~paggarwal2014/Project/Dr.Strange.jpg" alt="Dr.Strange" width="200" height="295" /></td>
            </tr>
        </tbody>
    </table>
    <p></p>
    <p></p>
    <p></p>
    <div>
        <div class="synopsisBox" id="RogueOne" >
            <h2 id="subtitle">Rogue One</h2>
            <p id="synopsisTitle">Synopsis</p>
            <p id="synopsisDetail">The thrilling untold saga of the band of rebels who stole the Death Star's secret blueprints on behalf of the Alliance is told in this electrifying Star Wars spin-off. </p>
        </div>
    </div>
    <p></p>
    <div>
        <div class="synopsisBox" id="Moana" >
            <h2 id="subtitle">Moana</h2>
            <p id="synopsisTitle">Synopsis</p>
            <p id="synopsisDetail">Young navigator Moana, the daughter of a Polynesian tribal chief, is chosen to find a precious artifact that could save her people. She teams with demigod Maui to locate a legendary island, and together the pair explore fantastical lands and encounter incredible sea creatures in this animated adventure from Disney.</p>
        </div>
    </div>
    <p></p>
    <div>
        <div class="synopsisBox" id="FantasicBeasts" >
            <h2 id="subtitle">Fantastic Beasts & Where to Find Them.</h2>
            <p id="synopsisTitle">Synopsis</p>
            <p id="synopsisDetail"> This spin-off of the Harry Potter franchise jumps back in time to explore the wizarding world of 1926 New York, which is being threatened by both mystical acts of destruction and a group of extremist No-Majs</p>
        </div>
    </div>
    <p></p>
    <div>
        <div class="synopsisBox" id="DrStrange" >
            <h2 id="subtitle">Dr. Strange</h2>
            <p id="synopsisTitle">Synopsis</p>
            <p id="synopsisDetail">After a car accident leaves him with nerve damage that ends his career as a New York neurosurgeon, Stephen Strange travels to Kathmandu in the hope of finding an otherworldly cure for his injuries.</p>
        </div>
    </div>
    <script>
        var modal = document.getElementById('contactModal');
        var btn = document.getElementById("contactBtn");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function () {
            modal.style.display = "block";
        }
        span.onclick = function () {
            modal.style.display = "none";
        }
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        function showDiv(id) {
            document.getElementById('RogueOne').style.display = "none";
            document.getElementById('DrStrange').style.display = "none";
            document.getElementById('FantasicBeasts').style.display = "none";
            document.getElementById('Moana').style.display = "none";
            document.getElementById(id).style.display = "block";
        }
    </script>
</body>
</html>