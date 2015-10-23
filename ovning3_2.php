<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
<?php
        // Kontrollera om vi får data eller inte
        if (!empty($_REQUEST['id']) && !empty($_REQUEST['pass'])) {

        //Plocka ut datat
        $id = $_REQUEST['id'];
        $pass = $_REQUEST['pass'];

        //Kontrollera användarnamn och lösenord
        if($id == "badr" && $pass == "jalabi") {


?>
        <!-- Visa formuläret första gången och om fel användarnamn eller lösenordet är fel -->
        <form action="ovning3_2.php" method="post">
            <fieldset>
                <legend>Inloggnings sida</legend>
                <label>Användarnamn :</label>
                <input type="text" name="id">
                <label>Lösenord :</label>
                <input type="password" name="pass"><br>

                <input type="submit" value="Logga in">
            </fieldset>
        </form>
<?php
        } else {
?>
        <!-- När användarnamn och lösenord är rätt visa texten inloggad -->
        <h2>Du är inloggad!</h2>
<?php
        }
            }
?>
        <form action="ovning3_2.php" method="post">
            <fieldset>
                <legend>Inloggnings sida</legend>
                <label>Användarnamn :</label>
                <input type="text" name="id">
                <label>Lösenord :</label>
                <input type="password" name="pass"><br>

                <input type="submit" value="Logga in">
            </fieldset>
        </form>
    </body>
</html>
