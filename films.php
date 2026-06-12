<?php

require_once 'inc/header.php';

$film = basename($_GET['media'] ?? '');
$pad = './media/films/' . $film;

?>

<video controls width="1500">
    <source src="<?= htmlspecialchars($pad) ?>" type="video/mp4">
    Je browser ondersteunt geen video.
</video>

<?php require_once 'inc/footer.php'; ?>