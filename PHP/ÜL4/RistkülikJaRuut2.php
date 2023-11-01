//ül 4, Karl-Markus Press TARpe22 24.10.2023

    <form method="get" action="">
        Sisesta külg: <input type="number" name="side"><br>
        <input type="submit" value="Otsusta">
    </form>
    <?php
    if (!empty($_GET['side'])) {
        $side = $_GET['side'];

        if ($side > 0) {
            if ($side * $side == $side) {
                echo "See on ruut";
            } else {
                echo "See on ristkülik";
            }
        } else {
            echo "Sisesta positiivne arv";
        }
    }
    ?>
</body>
</html>