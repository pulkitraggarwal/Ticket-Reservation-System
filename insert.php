<html>
    <?php
    $db = mysql_connect("localhost", "root", "roottoor");
    if (!$db) {
        die("Connection Fialed");
    }
    $db_select = mysql_select_db("Project", $db);
    if (!$db_select) {
        die("Could Not Connect to Database");
    }

    function generateToken($length = 10) {
        return substr(str_shuffle('ABCDEFGHIJKLMNPQRSTUVWXYZ1234567890'), rand(0, 60 - $length), $length);
    }

    $token = generateToken($length = 10);
    $sql = "INSERT INTO reservation (First_name, Last_name, Email, Movie_Title, Telephone, Date, Guests, Code)
            VALUES
            ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[movtitles]','$_POST[tel]','$_POST[date]','$_POST[guests]', '$token')";

    if (!mysql_query($sql)) {
        die('Error, Unable to make reservation. Please try Again Later' . mysql_error());
    }
    ?>  
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CascadeStyleSheet.css">
    </head>
    <body>
        <div>
            <h1><strong>Confirmation Page </strong></h1>
            <div style="text-align: center"class="synopsisBox" id="Confirmation Page">
                <h2 id="subtitle">Confirmation Code</h2>
                <p id="code"><?php echo $token ?></p>
                <p></p>
                <p id="synopsisTitle"></p>
                <p style="text-align: center" id="synopsisDetail">Please, Provide the Confirmation Code at the front desk to collect your tickets. You can check your Reservation using this code aswell. Thank you for reserving your tickets. We hope you have a great day!  </p>
            </div>
            <table style="width:100; margin-left:auto; margin-right:auto;">
                <tr>
                    <td><form method="link" action="index.php"><input class="button" type="submit" value="Return to Home Page"></form></td>
                    <td><form method="link" action="reservationForm.php"><input class="button" type="submit" value="Make Another Reservation"></form></td>
                </tr>>
            </table>

        </div>
    </body>
</html>
