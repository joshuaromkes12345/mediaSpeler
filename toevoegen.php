<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!isset($_POST["soort"]) || !isset($_FILES["bestand"])) {
        print_r($_POST);
        die("Formulier niet correct verstuurd");
    }

    $soort = $_POST["soort"];
    $bestand = $_FILES["bestand"];

    if ($bestand["error"] !== 0) {
        print_r($bestand);
        die("upload fout");
    }

    $tmp = $bestand["tmp_name"];

    $map = "./media/" . $soort . "/";
    if (!is_dir($map)) {
        mkdir($map, 0777, true);
    }

    $ext = pathinfo($bestand["name"], PATHINFO_EXTENSION);
    $nieuweNaam = uniqid() . "." . $ext;

    $pad = $map . $nieuweNaam;
}



require_once 'inc/header.php';

?>

<main id="toevoegen_form">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="soort">Soort:</label>
        <select name="soort" id="soort">
            <option value="muziek">Muziek</option>
            <option value="film">Film</option>
        </select>
        <input type="file" id="bestand" name="bestand"
       accept=".mp3,.mp4 ">
        <input type="submit" value="toevoegen">
    </form>
</main>

<?php require_once 'inc/footer.php'; ?> 