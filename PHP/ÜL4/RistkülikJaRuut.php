//ül 4, Karl-Markus Press TARpe22 24.10.2023

    <form method="get" action="">
        Sisesta pikkus: <input type="number" name="length"><br>
        Sisesta laius: <input type="number" name="width"><br>
        <input type="submit" value="Otsusta">
    </form>
    <?php
    if (!empty($_GET['length']) && !empty($_GET['width'])) {
        $length = $_GET['length'];
        $width = $_GET['width'];

        if ($length == $width) {
            echo "See on ruut";
        } else {
            echo "See on ristkülik";
        }
    }
    ?>
</body>
</html>