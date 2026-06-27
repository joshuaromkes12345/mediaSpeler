<?php

require_once 'inc/header.php';

$film = basename($_GET['media'] ?? '');
$pad = './media/film/' . $film;
?>

<div id="videodivs">
    <video controls>
        <source src="<?= htmlspecialchars($pad) ?>" type="video/mp4">
        Je browser ondersteunt geen video.
    </video>
</div>

<script src="js/video_aanpassingen.js"></script>

<?php require_once 'inc/footer.php'; ?>