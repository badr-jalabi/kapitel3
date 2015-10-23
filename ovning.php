<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
<?php

        /*Artimetiska operatorer*/
        $tal1 = 12;
        $tal2 = 13;

        $summa = $tal1 + $tal2;
        $produkt = $tal1 * $tal2;
        $sub = $tal1 - $tal2;
        $division = $tal1 / $tal2;

        /* Modulus*/
        $modulus = $tal1 % $tal2; // 30 = 2 * 13 + 4
            echo "<p>modulus = $modulus</p>";

        /* Logiska operatorer */
        $harFemFingrar = true;
        $harSexTar = false;

        $sats = $harFemFingrar and $harSexTar;
            echo "<p>sats är $sats</p>";

        if ($losenord == "12345") {
            echo "<p>Du är inloggad</p>";
        }

        if ($losenord == "12345"){
            echo "<p>Du är inloggad</p>";
        } else {
            echo "<p>Fel! Försök igen!</p>";
        }

        if ($losenord == "12345"){
            echo "<p>Du är inloggad</p>";
        } elseif ($losenord == "67890") {
            echo "<p>Du är inloggad</p>";
        }

        if ($tal1 != 0){
            echo "<p>Talet är inte noll</p>";
        } elseif ($tal1 < 0) {
            echo"<p>Talet är mindre än noll</p>";
        } elseif ($tal1 > 0) {
            echo"<p>Talet är större än noll";
        }

        if ($tal1 > 20 && $tal1 < 50) {
            echo"<p>Talet är mellan 20 och 50.</p>";
        }

        if ($harFemFingrar && $harSexTar) {
            echo "<p>Svaret är sant</p>";
        } else {
            echo"<p>Svaret är falskt</p>";
        }

        /* Loopar */
        for ($i = 1; $i <= 10; $i++) { // $i + 1 = $i++
            echo"<p>i = $i</p>";
        }

        $i = 0;
        while ($i <= 10) {
            echo "<p>i = $i</p>";
            $i++;
        }
?>
    </body>
</html>
