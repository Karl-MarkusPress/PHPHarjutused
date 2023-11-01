//ül 9, Karl-Markus Press TARpe22 24.10.2023

    <?php
    // Funktsioon nime korrektseks vormindamiseks
    function vormindaNimi($nimi) {
        return ucfirst(strtolower($nimi));
    }

    // Funktsioon iga tähe järgi punktide lisamiseks
    function lisapunktid($tekst) {
        $tulemus = "";
        $tahed = str_split($tekst);

        foreach ($tahed as $t2ht) {
            $tulemus .= $t2ht . ".";
        }

        return $tulemus;
    }

    // Funktsioon ropete sõnade asendamiseks tärnidega
    function tsenseeriRopudSonad($sisestatudTekst) {
        $ropudSonad = ["roop", "loll", "jura","perse","persse","vitt","kurat","Munn","Munnid"]; // Lisage siia vajalikud ropud sõnad
        return str_ireplace($ropudSonad, "****", $sisestatudTekst);
    }

    // Funktsioon emaili loomiseks
    function looEmail($eesnimi, $perenimi) {
        $email = strtolower(str_replace(["ä", "ö", "ü", "õ"], ["a", "o", "y", "o"], $eesnimi[0] . $perenimi) . "@tthk.ee");
        return $email;
    }

    // Kui vorm on esitatud, töötle kasutaja nime
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kasutajaNimi = $_POST["kasutajaNimi"] ?? "";
        $sisestatudTekst = $_POST["sisestatudTekst"] ?? "";
        $eesnimi = $_POST["eesnimi"] ?? "";
        $perenimi = $_POST["perenimi"] ?? "";

        // Kutsu funktsiooni vormindaNimi
        $vormindatudNimi = vormindaNimi($kasutajaNimi);

        // Kutsu funktsiooni lisapunktid
        $punktidegaNimi = lisapunktid($vormindatudNimi);

        // Kutsu funktsiooni tsenseeriRopudSonad
        $tsenseeritudTekst = tsenseeriRopudSonad($sisestatudTekst);

        // Kutsu funktsiooni looEmail
        $loomiseksEmail = looEmail($eesnimi, $perenimi);
    }
    ?>

    <div class="container mt-4">
        <h2>Tervitus:</h2>
        <form method="post" action="">
            <label for="kasutajaNimi">Sisesta oma nimi:</label>
            <input type="text" name="kasutajaNimi" required>
            <button type="submit" class="btn btn-primary">Tervita</button>
        </form>
        <?php if (isset($vormindatudNimi)) : ?>
            <p>Tere, <?php echo $vormindatudNimi; ?>!</p>
            <p><?php echo $punktidegaNimi; ?></p>
        <?php endif; ?>
    </div>

    <div class="container mt-4">
        <h2>Tekstiväli:</h2>
        <form method="post" action="">
            <label for="sisestatudTekst">Sisesta sõnum:</label>
            <textarea name="sisestatudTekst" rows="4" required></textarea>
            <button type="submit" class="btn btn-primary">Tsenseeri</button>
        </form>
        <?php if (isset($tsenseeritudTekst)) : ?>
            <p>Tsenseeritud sõnum: <?php echo $tsenseeritudTekst; ?></p>
        <?php endif; ?>
    </div>

    <div class="container mt-4">
        <h2>Emaili loomine:</h2>
        <form method="post" action="">
            <label for="eesnimi">Sisesta eesnimi:</label>
            <input type="text" name="eesnimi" required>

            <label for="perenimi">Sisesta perenimi:</label>
            <input type="text" name="perenimi" required>

            <button type="submit" class="btn btn-primary">Loo email</button>
        </form>
        <?php if (isset($loomiseksEmail)) : ?>
            <p>Loodud email: <?php echo $loomiseksEmail; ?></p>
        <?php endif; ?>
    </div>

</body>
</html>
