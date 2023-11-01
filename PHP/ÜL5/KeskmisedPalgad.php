//ül 5, Karl-Markus Press TARpe22 24.10.2023
<?php
$palgad = [1220, 1213, 1295, 1312, 1298, 1354, 1296, 1286, 1292, 1327, 1369, 1455];

// Keskmine palga arvutamine
$keskmine_palk = array_sum($palgad) / count($palgad);

echo "2018. aasta palgade keskmine: " . round($keskmine_palk, 2); // round kasutatakse, et näidata keskmist kahe koordinaadiga pärast koma
?>
