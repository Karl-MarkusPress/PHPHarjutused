//ül 4, Karl-Markus Press TARpe22 24.10.2023

    <form method="get" action="">
        Sisesta esimene number: <input type="number" name="num1"><br>
        Sisesta teine number: <input type="number" name="num2"><br>
        <input type="submit" value="Jaga">
    </form>
    <?php
    if (!empty($_GET['num1']) && !empty($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        if ($num2 == 0) {
            echo "Hoiatus: Nulliga jagamine ei ole lubatud!";
        } else {
            $result = $num1 / $num2;
            echo "Tulemus: $result";
        }
    }
    ?>
</body>
</html>