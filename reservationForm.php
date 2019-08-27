<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CascadeStyleSheet.css">
    </head>
    <body>
        <h1><strong>Reservation Form</strong></h1>
        <div>
            <form name = "reservationForm" action="insert.php" method = "post">
                <div class="center" id="formBox">
                    <label>First Name</label> 
                    <input type="text" name="firstname" required>
                    <p></p>
                    <label>Last Name</label> 
                    <input type="text" name="lastname" required>
                    <p></p>
                    <label>Email Address</label> 
                    <input type="email" name="email" required>
                    <p></p>
                    <label>Movie</label> 
                    <select name="movtitles" required>
                        <option value="Unknown">Select Movie</option>
                        <option value="Rogue One">Rogue One</option>
                        <option value="Moana">Moana</option>
                        <option value="Fantastic Beasts">Fantastic Beasts</option>
                        <option value="Dr. Strange">Dr. Strange</option>
                    </select>
                    <p></p>
                    <label>Telephone</label> 
                    <input type="text" name="tel" onkeyup="
                            var tel = this.value;
                            if (tel.match(/^\d{3}$/) !== null) {
                                this.value = tel + '-';
                            } else if (tel.match(/^\d{3}\-\d{3}$/) !== null) {
                                this.value = tel + '-';
                            }" maxlength="12" required>
                    <p></p>
                    <label>Date</label> 
                    <input type="date" name="date" required>
                    <p></p>
                    <label>Number of Guests</label>
                    <select name="guests">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <p></p>
                    <form method="link" action="insert.php">
                        <button class="button">Make Reservation</button>
                    </form>
                </div>
            </form>
        </div>
    </body>
</html>