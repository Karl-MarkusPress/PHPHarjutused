//ül 12, Karl-Markus Press TARpe22 24.10.2023
<br>
<?php
$maleSalaries = [];
$femaleSalaries = [];

$filename = 'tootajad.csv';

if (($handle = fopen($filename, 'r')) !== FALSE) {
    $lineNumber = 0; // To track the line number in the CSV file
    while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
        $lineNumber++;
        
        // Check if the array has at least three elements
        if (count($data) >= 3) {
            $name = $data[0];
            $gender = $data[1];
            $salary = $data[2];

            if ($gender === 'm') {
                $maleSalaries[] = $salary;
            } elseif ($gender === 'n') {
                $femaleSalaries[] = $salary;
            }
        } else {
            echo "Invalid data in the CSV file on line $lineNumber. Skipping row.<br>";
        }
    }
    fclose($handle);

    $maleAverageSalary = count($maleSalaries) > 0 ? array_sum($maleSalaries) / count($maleSalaries) : 0;
    $femaleAverageSalary = count($femaleSalaries) > 0 ? array_sum($femaleSalaries) / count($femaleSalaries) : 0;
    $maxMaleSalary = count($maleSalaries) > 0 ? max($maleSalaries) : 0;
    $maxFemaleSalary = count($femaleSalaries) > 0 ? max($femaleSalaries) : 0; 


    echo "Meeste keskmine palk: $maleAverageSalary<br>";
    echo "Naiste keskmine palk: $femaleAverageSalary<br>";
    echo "Meeste suurim palk: $maxMaleSalary<br>";
    echo "Naiste suurim palk: $maxFemaleSalary<br>";
} else {
    echo "Andmefaili ei leitud.";
}
?>

