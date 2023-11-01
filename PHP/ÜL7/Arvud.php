//ül 7, Karl-Markus Press TARpe22 24.10.2023
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arvude Genereerimine</title>
</head>
<body>

    <form method="post" action="">
        <label for="algus">Algus:</label>
        <input type="number" name="algus" required>

        <label for="lopp">Lõpp:</label>
        <input type="number" name="lopp" required>

        <label for="samm">Samm:</label>
        <input type="number" name="samm" required>

        <input type="submit" value="Genereeri">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vorm on esitatud, töötle kasutaja sisendit
        $algus = $_POST["algus"];
        $lopp = $_POST["lopp"];
        $samm = $_POST["samm"];

        // Kutsu funktsiooni genereeriArvud ja näita tulemus
        $arvud = genereeriArvud($algus, $lopp, $samm);
        echo implode(", ", $arvud);
    }

    function genereeriArvud($algus, $lopp, $samm) {
        $arvud = [];

        if ($samm <= 0) {
            return "Samm peab olema suurem kui null!";
        }

        for ($i = $algus; $i <= $lopp; $i += $samm) {
            $arvud[] = $i;
        }

        return $arvud;
    }
    ?>

</body>
</html>
