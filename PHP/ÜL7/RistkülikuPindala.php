//ül 7, Karl-Markus Press TARpe22 24.10.2023

    <form method="post" action="">
        <label for="pikkus">Pikkus:</label>
        <input type="text" name="pikkus" id="pikkus" required>

        <label for="laius">Laius:</label>
        <input type="text" name="laius" id="laius" required>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the form is submitted

        // Get user input
        $pikkus = $_POST["pikkus"];
        $laius = $_POST["laius"];

        // Validate input (you might want to add more validation)
        if (is_numeric($pikkus) && is_numeric($laius)) {
            // Call the function and echo the result
            echo "Ristküliku pindala on: " . ristküliku_pindala($pikkus, $laius);
        } else {
            // Display an error message if input is not numeric
            echo "Palun sisestage arvulised väärtused!";
        }
    }

    function ristküliku_pindala($pikkus, $laius) {
        return $pikkus * $laius;
    }
    ?>
</body>
</html>

