//ül 8, Karl-Markus Press TARpe22 24.10.2023

    <?php
    // Funktsioon kuupäeva ja kellaaja kuvamiseks
    function kuupaevJaKell() {
        return date("d.m.Y H:i");
    }

    // Funktsioon kasutaja vanuse arvutamiseks
    function kasutajaVanus($sunniaasta) {
        $praeguneAasta = date("Y");
        $vanus = $praeguneAasta - $sunniaasta;
        return $vanus;
    }

    // Funktsioon päevade arvutamiseks kooliaasta lõpuni
    function paeviKooliaastaLopuni() {
        $praeguneKuu = date("n");
        $kooliaastaLopp = ($praeguneKuu >= 9) ? ($praeguneKuu >= 9 && $praeguneKuu <= 12 ? date("Y") + 1 : date("Y")) : date("Y");
        $kooliaastaLopp .= "-06-30"; // Kooliaasta lõpeb 30. juunil

        $paevadeArv = ceil((strtotime($kooliaastaLopp) - time()) / (60 * 60 * 24));
        return $paevadeArv;
    }

    // Kui vorm on esitatud, töötle kasutaja sünniaega
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sunniaasta = $_POST["sunniaasta"];

        // Kutsu funktsiooni kasutajaVanus
        $vanus = kasutajaVanus($sunniaasta);

        // Kutsu funktsiooni paeviKooliaastaLopuni
        $paevadeArv = paeviKooliaastaLopuni();
    }
    ?>

    <div class="container mt-4">
        <h2>Kuupäev ja kellaaeg:</h2>
        <p><?php echo kuupaevJaKell(); ?></p>
    </div>

    <div class="container mt-4">
        <h2>Kasutaja vanus:</h2>
        <form method="post" action="">
            <label for="sunniaasta">Sünniaasta:</label>
            <input type="number" name="sunniaasta" required>
            <button type="submit" class="btn btn-primary">Leia vanus</button>
        </form>
        <?php if (isset($vanus)) : ?>
            <p>Kasutaja vanus: <?php echo $vanus; ?></p>
        <?php endif; ?>
    </div>

    <div class="container mt-4">
        <h2>Päevi kooliaasta lõpuni:</h2>
        <?php if (isset($paevadeArv)) : ?>
            <p>Kooliaasta lõpuni on jäänud <?php echo $paevadeArv; ?> päeva!</p>
        <?php endif; ?>
    </div>

</body>
</html>
