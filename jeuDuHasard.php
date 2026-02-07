<?php
session_start();
$title = "numéros gagnant";
$nav = "jeuxDuHasard";
require_once "functions/authentification.php";
require "header.php";
if (!isset($_SESSION['numeroGagnant'])):
    $_SESSION['numeroGagnant'] = rand(0, 10);
endif;
// $nombre=(int)readline("Entrez un nombre entre 0 et 10 pour gagner un lot : ");
// while($nombre !== $numeroGagnant){
//     echo "Mauvais numéro, vous n'avez pas gagné !". "\n";
//     $nombre=(int)readline("Retentez votre chance, entrez un nombre à nouveau : "); 
// }
// echo "Bravo !!! \nVous avez enfin trouvé le numéro gagnant ! \nC'était le numéro $numeroGagnant";
?>

<h1>Jeu du Hasard</h1>
<?php
if (isset($_POST['nombre'])):
    if ($_POST['nombre'] < 0 || $_POST['nombre'] > 10): ?>
        <p style="color:red">Veuillez introduire un nombre entre 0 et 10 </p>
    <?php elseif ($_POST['nombre'] > $_SESSION['numeroGagnant']): ?>
        Votre nombres est trop grand !
    <?php elseif ($_POST['nombre'] < $_SESSION['numeroGagnant']): ?>
        Votre nombres est trop petit !
    <?php else: ?>
        Vous avez trouver le numéro gagnant : <?php echo $_SESSION['numeroGagnant'];
        unset($_SESSION['numeroGagnant']);
        ; ?>
    <?php endif;
endif; ?>

<form action="/travail-d'equipe/jeuDuHasard" method="post">
    <input type="number" name="nombre" placeholder="Entre 0 et 10">
    <button type="submit">Cliquer</button>
</form>

<?php
require "footer.php";
?>