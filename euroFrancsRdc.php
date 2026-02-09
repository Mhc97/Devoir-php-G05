<?php

session_start();
$title = "Conversion";
$nav = "euroFrancsRdc";
require "./header.php";
require "./fonctions/functionsMath.php";

if (!connected($_SESSION)) {

    header("Location: ./login.php");
}



?>

<div class="calcul">

    <h3>Conversion</h3>


    <form id="formSwitch" method="post">

        <div class="switch">


            <h1 class="devise" data-devise="eur"> Euros </h1>

            <button type="submit">


                <div class="svg-container green">


                    <svg width="21px" height="21px" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(4 2)">
                            <path d="m4.5 8.5-4 4 4 4" />
                            <path d="m12.5 12.5h-12" />
                            <path d="m8.5.5 4 4-4 4" />
                            <path d="m12.5 4.5h-12" />
                        </g>
                    </svg>

                </div>

            </button>


            <h1 class="devise" data-devise="cdf">Francs Rdc</h1>

        </div>

    </form>

    <form id="formConvert" action="">


        <div class="input">

            <input type="number" placeholder="Veuillez introduire le montant a convertir">

        </div>

        <button type="submit" class="blue"> Convertir </button>


    </form>

    <div id="result">

    

    </div>

    <h3 class="background"> 💡 Ce formulaire vous permet de convertir des euros en francs rdc et inversement </h3>

</div>

<?php

require "./footer.php"

?>