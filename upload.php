<?php

$index = (int)$_POST["index"];
$total = (int)$_POST["total"];
$soort = $_POST['soort'];
$filename = basename($_POST["filename"]);

$tmp = $_FILES["chunk"]["tmp_name"];

$dir = "temp/" . $filename;

if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

$mediaDir = "media/" . $soort;

if (!is_dir($mediaDir)) {
    mkdir($mediaDir, 0777, true);
}

// chunk opslaan
move_uploaded_file($tmp, "$dir/$index.part");


// check of alle chunks bestaan
$allExist = true;

for ($i = 0; $i < $total; $i++) {
    if (!file_exists("$dir/$i.part")) {
        $allExist = false;
        break;
    }
}

if ($allExist) {
    // waar het bestand heen moet gaan
    $output = fopen($mediaDir . "/" . $filename, "wb");
    // loopt door de chunks heen
    for ($i = 0; $i < $total; $i++) {

        $inputPath = "$dir/$i.part";

        $input = fopen($inputPath, "rb");
        if (!$input) continue;
        
        while (!feof($input)) {
            fwrite($output, fread($input, 8192));
        }
        fclose($input);
    }
    fclose($output);

    for ($i = 0; $i < $total; $i++) {
        unlink("$dir/$i.part");
    }

    rmdir($dir);
}

?>