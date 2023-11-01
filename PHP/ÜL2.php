//ül 2, Karl-Markus Press TARpe22 24.10.2023


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="arv1">Esimene arv:</label>
    <input type="number" name="arv1" required>

    <label for="arv2">Teine arv:</label>
    <input type="number" name="arv2" required>

    <button type="submit" name="calculate">Arvuta</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculate"])) {
    // Get user input
    $arv1 = $_POST["arv1"];
    $arv2 = $_POST["arv2"];

    // Liidame
    $summa = $arv1 + $arv2;
    echo "Liitmine: $arv1 + $arv2 = $summa <br>";

    // Lahutame
    $vahe = $arv1 - $arv2;
    echo "Lahutamine: $arv1 - $arv2 = $vahe <br>";

    // Korrutame
    $korrutis = $arv1 * $arv2;
    echo "Korrutamine: $arv1 * $arv2 = $korrutis <br>";

    // Jagame (kui $arv2 ei ole null)
    if ($arv2 != 0) {
        $jagatis = $arv1 / $arv2;
        echo "Jagamine: $arv1 / $arv2 = $jagatis <br>";

        // Leiame jäägi
        $jaak = $arv1 % $arv2;
        echo "Jäägi leidmine: $arv1 % $arv2 = $jaak <br>";
    } else {
        echo "Teine arv ei tohi olla null jagamisel! <br>";
    }
}
?>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kui vorm on esitatud, töötle sisend
    $millimeetrid = $_POST["millimeetrid"];

    // Teisendamine
    $sentimeetrid = $millimeetrid / 10;
    $meetrid = $millimeetrid / 1000;

    // Väljastamine vormindatud kujul
    echo "Sisestatud millimeetrid: $millimeetrid mm <br>";
    echo "Teisendatud sentimeetriteks: " . number_format($sentimeetrid, 2) . " cm <br>";
    echo "Teisendatud meetriteks: " . number_format($meetrid, 2) . " m <br>";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="millimeetrid">Sisesta millimeetrid:</label>
    <input type="text" name="millimeetrid" id="millimeetrid" required>
    <input type="submit" value="Teisenda">
</form>

<hr>

<h2>Sisesta täisnurkse kolmnurga küljepikkused:</h2>
    <form action="" method="get">
        <label for="a">Külg a (cm):</label>
        <input type="text" name="a" required>
        <br>
        <label for="b">Külg b (cm):</label>
        <input type="text" name="b" required>
        <br>
        <label for="c">Hüpotenuus c (cm):</label>
        <input type="text" name="c" required>
        <br>
        <input type="submit" value="Arvuta">
    </form>

    <?php
    // Kontrolli, kas vorm on esitatud
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Kontrolli, kas küljepikkused on määratletud ja mitte tühjad
        if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c']) && !empty($_GET['a']) && !empty($_GET['b']) && !empty($_GET['c'])) {
            // Kontrolli, kas sisestatud väärtused on numbrid
            if (is_numeric($_GET['a']) && is_numeric($_GET['b']) && is_numeric($_GET['c'])) {
                // Kasutaja sisestatud küljepikkused
                $a = $_GET['a'];
                $b = $_GET['b'];
                $c = $_GET['c'];

                // Ümbermõõt
                $perimeter = $a + $b + $c;

                // Pindala
                $area = 0.5 * $a * $b;

                // Ümarda täisarvuni
                $perimeter = round($perimeter);
                $area = round($area);

                // Väljasta tulemused
                echo "<h2>Tulemused:</h2>";
                echo "Täisnurkse kolmnurga ümbermõõt on $perimeter cm ja pindala on $area cm².";
            } else {
                echo "<p>Sisestatud väärtused peavad olema numbrid.</p>";
            }
        } else {
            // Kui küljepikkused ei ole korrektselt määratletud, väljasta veateade
            echo "<p>Pange tähele, et kõik küljepikkused peavad olema määratletud ja mitte tühjad.</p>";
        }
    }
    ?>

</body>
</html>

