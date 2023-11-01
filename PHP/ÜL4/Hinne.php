//ül 4, Karl-Markus Press TARpe22 24.10.2023
    <form method="get" action="">
        Sisesta KT punktide arv: <input type="number" name="points"><br>
        <input type="submit" value="Kontrolli">
    </form>
    <?php
    if (!empty($_GET['points'])) {
        $points = $_GET['points'];

        if ($points > 10) {
            echo "SUPER!";
        } elseif ($points >= 5 && $points <= 9) {
            echo "TEHTUD!";
        } elseif ($points < 5) {
            echo "KASIN!";
        } else {
            echo "SISESTA OMA PUNKTID!";
        }
    }
    ?>
</body>
</html>