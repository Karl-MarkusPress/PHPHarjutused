//ül 5, Karl-Markus Press TARpe22 24.10.2023

<br>
<?php

$hiina_nimed = array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳", "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪", "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");

sort($hiina_nimed);

echo "Esimene nimi: " . $hiina_nimed[0] . "<br>";
echo "Viimane nimi: " . end($hiina_nimed);
?>