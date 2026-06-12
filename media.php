<?php 
require_once 'inc/header.php';

$key = 1;
$soort = htmlspecialchars($_GET['soort']);
$bestand = "./media/" . $soort;
$open = scandir($bestand);

echo '<h2 class="soortTitel">' . $soort . '</h2>';



?>

<table>
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
                <td><a href="#">'. $media . '</a></td>
            </tr>
            ';
            $key++;
        }
    }
    ?>
</table>

<?php require_once 'inc/footer.php';?>