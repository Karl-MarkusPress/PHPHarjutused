//ül 5, Karl-Markus Press TARpe22 24.10.2023
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Kasutaja Otsing</title>
</head>
<body>

    <div class="container mt-4">
        <form method="post" action="">
            <label for="otsiNimi">Otsi nime:</label>
            <input type="text" name="otsiNimi" required>
            <button type="submit" class="btn btn-primary">Otsi</button>
        </form>

        <?php
        $kasutajad = ["Alice", "Bob", "Charlie", "David"];  // Asenda selle massiivi tegelike kasutajatega

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $otsitavNimi = $_POST["otsiNimi"];

            // Kontrolli, kas nimi on massiivis
            if (in_array($otsitavNimi, $kasutajad)) {
                echo '<div class="alert alert-success mt-3" role="alert">';
                echo "Kasutaja nimega '$otsitavNimi' leitud!";
                echo '</div>';
            } else {
                echo '<div class="alert alert-danger mt-3" role="alert">';
                echo "Kasutajat nimega '$otsitavNimi' ei leitud.";
                echo '</div>';
            }
        }
        ?>
    </div>

</body>
</html>
