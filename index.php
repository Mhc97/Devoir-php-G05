<?php

session_start();

if (isset($_POST["reset"])){

session_destroy();
header("Location: ./");

}

$title="Accueil";
$nav="accueil";
require "./header.php";


?>

    <div class="main">


        <img src="./assets/images/photo-1716878906849-17ed9e9e6186.jpg">



        <div class="txt">


            <h3>Bienvenue sur CFI Tech Calculator</h3>

            <p>
                CFI Tech Calculator est une application web moderne qui vous permet d'effectuer des opérations mathématiques de base (addition, soustraction, multiplication, division) tout en gardant un historique complet de vos calculs. Connectez-vous pour accéder à toutes les fonctionnalités et suivre vos opérations mathématiques.

            </p>

            <p class="gris">

                Développé dans le cadre du mini projet PHP-HTML.

            </p>


        </div>

    </div>

    <div class="card">

        <div class="itemcard">

        <span class="icon"> 🔐 </span>
  
            <h3> Sécurisé</h3>

            <span>

                Système de connexion sécurisé avec gestion des sessions

            </span>

        </div>

        <div class="itemcard">

        <span class="icon"> 📊 </span>

            
            <h3> Historique </h3>

            <span>

                Gardez une trace de toutes vos opérations mathématiques

            </span>



        </div>

        <div class="itemcard">

            <span class="icon"> 🧮 </span>

            
            <h3> Calculatrice </h3>

            <span>

                Quatre opérations de base à votre disposition

            </span>



        </div>


    </div>



<?php

require "footer.php"

?>