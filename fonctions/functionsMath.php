<?php

// function addition(string $nb1, string $nb2): array
// {

//     $tab = [

//         "type" => "addition",
//         "nb1" => $nb1,
//         "nb2" => $nb2,
//         "resultat" => (float)$nb1 + (float)$nb2,

//     ];


//     return $tab;
// }


// function soustraction(string $nb1, string $nb2): array
// {

//     $tab = [

//         "type" => "soustraction",
//         "nb1" => $nb1,
//         "nb2" => $nb2,
//         "resultat" => (float)$nb1 - (float)$nb2,

//     ];


//     return $tab;
// }



// function multiplication(string $nb1, string $nb2): array
// {

//     $tab = [

//         "type" => "multiplication",
//         "nb1" => $nb1,
//         "nb2" => $nb2,
//         "resultat" => (float)$nb1 * (float)$nb2,

//     ];


//     return $tab;
// }


// function division(string $nb1, string $nb2): array
// {

//     $tab = [

//         "type" => "division",
//         "nb1" => $nb1,
//         "nb2" => $nb2,
//         "resultat" => (float)$nb1 / (float)$nb2,

//     ];


//     return $tab;
// }

 


// functionsMath.php - Version conversion avce l'ia de deepseek
function initRates() {
    if (!isset($_SESSION['conversion_rates'])) {
        $_SESSION['conversion_rates'] = [
            'USD' => 1.08,   // 1 EUR = 1.08 USD
            'JPY' => 160.50, // 1 EUR = 160.50 JPY
            'GBP' => 0.85,   // 1 EUR = 0.85 GBP
            'CDF' => 2950.00, // 1 EUR = 2950 CDF
            'MAD' => 10.70,   // 1 EUR = 10.70 MAD
            'CHF' => 0.95     // 1 EUR = 0.95 CHF
        ];
    }
}

function convertCurrency($amount, $from, $to) {
    $rates = $_SESSION['conversion_rates'];
    
    if ($from === 'EUR') {
        return $amount * $rates[$to];
    } elseif ($to === 'EUR') {
        return $amount / $rates[$from];
    } else {
        // Conversion entre devises non-EUR
        $inEuros = $amount / $rates[$from];
        return $inEuros * $rates[$to];
    }
}

