//ül 7, Karl-Markus Press TARpe22 24.10.2023

<?php
function muuda_kasutajanimi($kasutajanimi) {
    return strtolower($kasutajanimi);
}

function genereeri_email($kasutajanimi) {
    return $kasutajanimi . "@hkhk.edu.ee";
}

function genereeri_kood() {
    return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 7);
}
?>

    <?php
    

    // Example usage:
    $kasutajanimi = "KarlMarkusPress";

    // Call the functions
    $muudetud_kasutajanimi = muuda_kasutajanimi($kasutajanimi);
    $genereeritud_email = genereeri_email($muudetud_kasutajanimi);
    $genereeritud_kood = genereeri_kood();

    // Display the results
    echo "<p>Muudetud kasutajanimi: " . $muudetud_kasutajanimi . "</p>";
    echo "<p>Genereeritud e-post: " . $genereeritud_email . "</p>";
    echo "<p>Genereeritud kood: " . $genereeritud_kood . "</p>";
    ?>

</body>
</html>
