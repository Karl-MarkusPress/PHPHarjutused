//ül 7, Karl-Markus Press TARpe22 24.10.2023
<?php
function on_oige_pikkus($isikukood) {
    return strlen($isikukood) === 11;
}

function leia_sugu_sunniaeg($isikukood) {
    if (on_oige_pikkus($isikukood)) {
        $sugu = $isikukood[0] % 2 === 0 ? "Naine" : "Mees";
        $sunniaeg = substr($isikukood, 5, 2) . "." . substr($isikukood, 3, 2) . "." . substr($isikukood, 1, 2);
        return ["Sugu" => $sugu, "Sünniaeg" => $sunniaeg];
    }
    return null;
}
?>


<?php
$isikukood = "50412200228";

if (on_oige_pikkus($isikukood)) {
    $info = leia_sugu_sunniaeg($isikukood);
    if ($info !== null) {
        echo "Sugu: " . $info["Sugu"] . "<br>";
        echo "Sünniaeg: " . $info["Sünniaeg"];
    } else {
        echo "Vigane isikukood!";
    }
} else {
    echo "Vigane pikkus!";
}
?>
