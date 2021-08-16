<?php

namespace App\webService;

class ViaCep
{
    /**
     * Metodo responsavel por consultar um cep ViaCep
     *
     * @param string $cep
     * @return array
     */
    public static function consultaCep($cep)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "viacep.com.br/ws/{$cep}/json/",
            // CURLOPT_URL => 'https://viacep.com.br/ws/' . $cep . '/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        $array = json_decode($response, true);

        return isset($array['cep']) ? $array : null;
    }
}
