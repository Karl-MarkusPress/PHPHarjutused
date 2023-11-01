//ül 7, Karl-Markus Press TARpe22 24.10.2023
<?php
function head_motted() {
    $alus = ["Täna", "Homme", "Üle Homme"];
    $oeldis = ["õnnestub", "ei õnnestu", "teeb vahet"];
    $sihitis = ["kõik", "keegi", "elus"];
    
    $valitud_alus = $alus[array_rand($alus)];
    $valitud_oeldis = $oeldis[array_rand($oeldis)];
    $valitud_sihitis = $sihitis[array_rand($sihitis)];
    
    return $valitud_alus . " " . $valitud_oeldis . " " . $valitud_sihitis;
}

// Display the generated sentence
echo head_motted();
?>
