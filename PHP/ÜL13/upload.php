/*ül 13, Karl-Markus Press TARpe22 24.10.2023*/

<?php
if ($_FILES['file']['error'] == 0) {
    $allowedExtensions = ['jpg', 'jpeg'];
    $uploadPath = 'uploads/';

    if (!file_exists($uploadPath)) {
        mkdir($uploadPath, 0777, true); // Create the 'uploads' directory if it doesn't exist
    }

    $fileExtension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $fileName = $_FILES['file']['name'];

    if (in_array($fileExtension, $allowedExtensions)) {
        $targetPath = $uploadPath . $fileName;
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        echo "<p>Pilt on edukalt üles laaditud.</p>";
        echo "<img src='$targetPath' alt='Üles laetud pilt'>";
    } else {
        echo "<p>Palun valige JPG või JPEG fail.</p>";
    }
} else {
    echo "<p>Viga üleslaadimisel.</p>";
}
?>
