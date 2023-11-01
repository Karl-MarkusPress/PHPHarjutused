//ül 7, Karl-Markus Press TARpe22 24.10.2023

<?php
function uudiskirja_saatmine() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kasutajanimi = $_POST["kasutajanimi"];
        $email = $_POST["email"];
        
        $teade = "Tere, $kasutajanimi! Täname uudiskirjaga liitumise eest.";
        mail($email, "Uudiskirjaga liitumise kinnitus", $teade);
    }
}

function uudiskirjaga_liitumine_vorm() {
    return '
    <form action="uudiskiri.php" method="post">
        <label for="kasutajanimi">Kasutajanimi:</label>
        <input type="text" name="kasutajanimi" id="kasutajanimi">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit" value="Liitu uudiskirjaga">
    </form>';
}

uudiskirja_saatmine();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Uudiskiri</title>
</head>
<body>
    <h1>Tere tulemast meie uudiskirja!</h1>
    <p>Liitu meie uudiskirjaga, et saada viimased uudised ja teated.</p>
    <?php echo uudiskirjaga_liitumine_vorm(); ?>
</body>
</html>