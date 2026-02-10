<?php

function getApi(string $value1, string $value2, string $multiplicator): mixed
{

    $euro = curl_init();

    curl_setopt_array(
        $euro,
        [
            CURLOPT_URL => "https://cdn.jsdelivr.net/npm/@fawazahmed0/currency-api@latest/v1/currencies/" . $value1 . ".json",
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 2,
        ]
    );
    $data = curl_exec($euro);

    if (!$data) {

        return curl_error($euro);

    }

    $data = json_decode($data);

    $tabConversion = [

        "conversion" => $data->$value1->$value2 * $multiplicator,
        "date" => $data->date,

    ];

    return $tabConversion;


}
?>