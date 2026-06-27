<?php

require_once 'inc/header.php';

$film = basename($_GET['media'] ?? '');
$pad = './media/film/' . $film;
?>



<div id="videodivs">
    <video controls width="1500">
        <source src="<?= htmlspecialchars($pad) ?>" type="video/mp4">
        Je browser ondersteunt geen video.
    </video>
</div>

<?php require_once 'inc/footer.php'; ?>