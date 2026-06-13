<?php 

require_once 'inc/header.php';

$muziek = basename($_GET['media'] ?? '');
$pad = './media/muziek/' . $muziek;

echo '<h3 class="soortTitel">'. $muziek .'</h3>';

?>


<audio controls class="muziek stuk">
    <source src="<?php echo htmlspecialchars($pad); ?>" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<?php require_once 'inc/footer.php';?>