//ül 12, Karl-Markus Press TARpe22 24.10.2023
<?php
function onLubatudLeht($leht) {
    $lubatudLehed = ['leht1', 'leht2', 'leht3', 'leht4'];
    return in_array($leht, $lubatudLehed);
}

if (isset($_GET['leht'])) {
    $leht = $_GET['leht'];
    if (onLubatudLeht($leht)) {
        $lehtFail = $leht . '.html';
        if (file_exists($lehtFail)) {
            include($lehtFail);
        } else {
            echo 'Lehte ei eksisteeri!';
        }
    } else {
        echo 'Turvalisuse viga: Ei ole lubatud juurdepääs!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 10</title>
</head>
<body>
    <h1>Ülesanne 10</h1>
    <p>Vali üks järgmistest lehtedest:</p>
    <ul>
        <li><a href="http://127.0.0.1:5500/%C3%9CL10/Leht1.html">Leht 1</a></li>
        <li><a href="http://127.0.0.1:5500/%C3%9CL10/Leht2.html">Leht 2</a></li>
        <li><a href="http://127.0.0.1:5500/%C3%9CL10/Leht3.html">Leht 3</a></li>
        <li><a href="http://127.0.0.1:5500/%C3%9CL10/Leht4.html">Leht 4</a></li>
    </ul>
</body>
</html>