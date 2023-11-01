//ül 6, Karl-Markus Press TARpe22 24.10.2023

    <h1>Ülesanne_6</h1>

    <h2>Genereeri numbrid 1-100:</h2>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        echo $i;
        if ($i % 10 == 0) {
            echo "<br>";
        } else {
            echo ". ";
        }
    }
    ?>

    <h2>Rida:</h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "* ";
    }
    ?>

    <h2>Rida 2:</h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "*<br>";
    }
    ?>

    <h2>Ruut:</h2>
    <form method="post">
        Sisesta ruudu suurus: <input type="text" name="ruudu_suurus">
        <input type="submit" value="Kuva ruut">
    </form>
    <?php
    if (isset($_POST['ruudu_suurus'])) {
        $ruudu_suurus = (int)$_POST['ruudu_suurus'];
        for ($i = 1; $i <= $ruudu_suurus; $i++) {
            for ($j = 1; $j <= $ruudu_suurus; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }
    ?>

    <h2>Kahanevad paarisarvud 10-0:</h2>
    <?php
    for ($i = 10; $i >= 0; $i -= 2) {
        echo "$i ";
    }
    ?>

    <h2>Kolmega jagunevad arvud 1-100:</h2>
    <?php
    for ($i = 3; $i <= 100; $i += 3) {
        echo "$i ";
    }
    ?>

    <h2>Massiivid ja tsüklid:</h2>
    <?php

    $tudrukud = array("Malle", "Laura", "Maria", "Eva", "Kati");
    $poisid = array("Markus", "Jaan", "Juss", "Karl", "Andres");

    for ($i = 0; $i < count($tudrukud); $i++) {
        echo "Tüdruk: " . $tudrukud[$i] . ", Poiss: " . $poisid[$i] . "<br>";
    }

    $tudrukud_koopia = $tudrukud;
    $poisid_koopia = $poisid;

    shuffle($tudrukud_koopia);
    shuffle($poisid_koopia);

    for ($i = 0; $i < count($tudrukud_koopia); $i++) {
        echo "Tüdruk: " . $tudrukud_koopia[$i] . ", Poiss: " . $poisid_koopia[$i] . "<br>";
    }
    ?>
</body>
</html>