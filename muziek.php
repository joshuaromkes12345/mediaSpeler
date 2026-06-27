<?php 

require_once 'inc/header.php';

$muziek = basename($_GET['media'] ?? '');
$pad = './media/muziek/' . $muziek;

echo '<main>';

echo '<h3 class="soortTitel">'. $muziek .'</h3>';

?>

<audio controls>
    <source src="<?php echo htmlspecialchars($pad); ?>" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

</main>

<?php require_once 'inc/footer.php';?>