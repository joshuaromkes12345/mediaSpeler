<?php 
require_once 'inc/header.php';


$soort = htmlspecialchars($_GET['soort']);

echo '<h2 class="soortTitel">' . $soort . '</h2>';


?>

<?php require_once 'inc/footer.php';?>