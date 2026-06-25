<?php 
require_once 'inc/header.php';

$key = 1;
$soort = htmlspecialchars($_GET['soort']);
$bestand = "./media/" . $soort;
$open = scandir($bestand);

echo "<main>";

echo '<h2 class="soortTitel">' . $soort . '</h2>';

?>

<table class="modern-table">
    <tr>
        <th>Index</th>
        <th>Naam</th>
    </tr>
    <?php 
    foreach ($open as $media) {
        if ($media !== '.' && $media !== '..'){
            echo '
            <tr>
                <td>'. $key . ' </td>
                <td><a class="mediaIndex" href="'. $soort .'.php?media=' . $media .'">'. $media . '</a></td>
            </tr>
            ';
            $key++;
        }
    }
    ?>
</table>

</main>

<?php require_once 'inc/footer.php';?>