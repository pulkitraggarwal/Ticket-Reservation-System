<html>
    <?php
    $output = NULL;
    if (isset($_POST['submit'])) {
        $conn = new mysqli('localhost', 'root', 'roottoor', 'Project');
        $search = $_POST['search'];
        $result = $conn->query("SELECT * From reservation WHERE Code = '$search'");
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $firstname = $rows[First_name];
                $lastname = $rows[First_name];
                $movie = $rows[Movie_Title];
                $date = $rows[Date];
                $guest = $rows[Guests];

                $output = "First Name: $firstname" . "<br>" . "Last Name: $lastname" . "<br>" . "Movie Title: $movie" . "<br>" . "Date: $date" . "<br>" . "Guest: $guest" . "<br><br>" . "<div style='text-align:center'> Your reservation is confirmed for " . $date . ". Hope you enjoy your movie!";
            }
        } else {
            $output = "Sorry, No reservation found. Please, Check your Code and enter again.";
        }
    }
    ?>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CascadeStyleSheet.css">
    </head>
    <body>
        <h1><strong>Check Reservation</strong></h1>
        <div id="checkBox">
            <div>
                <form style="text-align: center" method="POST">
                    <label>Please, Enter your reservation code to check reservation:  </label> <input style="text-align: center" type="text" name="search">
                    <p></p>
                    <p></p>
                    <input style="text-align: center" class=button type="submit" name="submit" value='Search'>
                </form>  
                <?php echo $output ?>   
            </div>
            <table style="width:100; margin-left:auto; margin-right:auto;">
                <tr>
                    <td><form method="link" action="index.php"><input class="button" type="submit" value="Return to Home Page"></form></td>

                </tr>
            </table>
    </body>
</html>
