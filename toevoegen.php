<?php require_once 'inc/header.php';?>

<main id="toevoegen_form">
    <form id="uploadForm">
        <label for="soort">Soort:</label>
        <select name="soort" id="soort">
            <option value="muziek">Muziek</option>
            <option value="film">Film</option>
        </select>
        <input type="file" id="bestand" name="bestand"
        accept=".mp3,.mp4,.mov">
        <button id="submit" type="submit">Toevoegen</button>
    </form>
</main>

<p id="status"></p>

<script src="js/upload_chunks.js"></script>

<?php require_once 'inc/footer.php'; ?> 