<?php
session_start();
if (!isset($_SESSION['prenom'])) {
    header('Location: login.php');
    exit();
}

$title = "Mon profile";
$nav = "monprofile";
require "header.php";

?>
<center>
    <h1>Mon profil</h1>

    <img src="./image/inconnu.jpg" alt="" height="300" width="275">
</center>


<h2>Bienvenue dans votre page de profil !</h2>
<h3>📊 Statistiques</h3>
<p><strong>Nombre total d'opérations effectuées :</strong><?php echo $_SESSION['total_operations']; ?></p>
<h3>🔢 Dernières opérations </h3>

<?php if (isset($_SESSION['derniere_addition'])): ?>
    <P><strong>Votre dernière addition faite est : </strong>
        <?php echo $_SESSION['derniere_addition']['nb1']; ?><span>+</span>
        <?php echo $_SESSION['derniere_addition']['nb2']; ?><span>=</span>
        <?php echo $_SESSION['derniere_addition']['resultat']; ?>
    </p>

<?php endif; ?>

<?php if (isset($_SESSION['derniere_soustraction'])): ?>
    <p><strong>Votre dernière soustraction faite est :</strong>
        <?php echo $_SESSION['derniere_soustraction']['nb1']; ?><span>-</span>
        <?php echo $_SESSION['derniere_soustraction']['nb2']; ?><span>=</span>
        <?php echo $_SESSION['derniere_soustraction']['resultat']; ?>
    </p>
<?php endif; ?>

<?php if (isset($_SESSION['derniere_multiplication'])): ?>
    <p><strong>Votre dernière multiplication faite est </strong>
        <?php echo $_SESSION['derniere_multiplication']['nb1']; ?><span>×</span>
        <?php echo $_SESSION['derniere_multiplication']['nb2']; ?><span>=</span>
        <?php echo $_SESSION['derniere_multiplication']['resultat']; ?>
    </p>
<?php endif; ?>

<?php if (isset($_SESSION['derniere_division'])): ?>
    <p><strong>Votre dernière division faite est :</strong>
        <?php echo $_SESSION['derniere_division']['nb1']; ?><span>÷</span>
        <?php echo $_SESSION['derniere_division']['nb2']; ?><span>=</span>
        <?php echo $_SESSION['derniere_division']['resultat']; ?>
    </p>
<?php endif; ?>

<?php if (!empty($_SESSION['historique_operations'])): ?>
    <h3 class="mt-5"> Historique complet de toutes les opérations</h3>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Opération</th>
                <th>Nombre 1</th>
                <th>Nombre 2</th>
                <th>Résultat</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($_SESSION['historique_operations'] as $calcul): ?>
                <tr>
                    <td><?php echo $calcul['operation'] ?></td>
                    <td><?php echo $calcul['nb1'] ?></td>
                    <td><?php echo $calcul['nb2'] ?></td>
                    <td><?php echo $calcul['resultat'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    <?php else: ?>
        <p class="text-muted">Aucune opération effectuée pour le moment.</p>
    <?php endif; ?>
</table>


<?php
require "footer.php";
?>