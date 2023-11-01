//ül 4, Karl-Markus Press TARpe22 24.10.2023

    <form method="get" action="">
        Sisesta esimese inimese vanus: <input type="number" name="age1"><br>
        Sisesta teise inimese vanus: <input type="number" name="age2"><br>
        <input type="submit" value="Leia vanem">
    </form>
    <?php
    if (!empty($_GET['age1']) && !empty($_GET['age2'])) {
        $age1 = $_GET['age1'];
        $age2 = $_GET['age2'];

        if ($age1 == $age2) {
            echo "Mõlemad on ühevanused";
        } elseif ($age1 > $age2) {
            echo "Esimene inimene on vanem";
        } else {
            echo "Teine inimene on vanem";
        }
    }
    ?>
</body>
</html>