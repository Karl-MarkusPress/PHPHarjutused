//ül 3, Karl-Markus Press TARpe22 24.10.2023

<?php

echo '<form method="post" action="">
    Sisesta trapetsi alus1 pikkus (a): <input type="text" name="alus1"><br>
    Sisesta trapetsi alus2 pikkus (b): <input type="text" name="alus2"><br>
    Sisesta trapetsi kõrgus (h): <input type="text" name="korgus"><br>
    Sisesta rombi külg (s): <input type="text" name="romb"><br>
    <input type="submit" value="Arvuta">
</form>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alus1 = $_POST["alus1"];
    $alus2 = $_POST["alus2"];
    $korgus = $_POST["korgus"];
    $romb = $_POST["romb"];

    $trapetsi_pindala = ($alus1 + $alus2) * $korgus / 2;

    $rombi_umbermoot = 4 * $romb;

    echo "Trapetsi pindala on " . round($trapetsi_pindala, 1) . " ruutühikut<br>";
    echo "Rombi ümbermõõt on " . round($rombi_umbermoot, 1) . " ühikut<br>";
}
?>