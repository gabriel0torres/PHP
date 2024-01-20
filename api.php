<?php

/*

Método 1

$url = "https://cep.awesomeapi.com.br/json/09960500";
$jsonData = file_get_contents($url);

if ($jsonData !== false) {
    $data = json_decode($jsonData, true); // Decodifica o JSON como um array associativo

    if ($data !== null) {

        var_dump($data); echo "<br>";
        // Agora você pode acessar os dados no array associativo
        echo "CEP: " . $data['cep'] . "<br>";
        echo "Logradouro: " . $data['address'] . "<br>";
        echo "Cidade: " . $data['city'] . "<br>";
        // ... outros campos que você queira mostrar
    } else {
        echo "Erro ao decodificar o JSON.";
    }
} else {
    echo "Erro ao obter os dados do URL.";
}
*/

$url = "https://cep.awesomeapi.com.br/json/09960500";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($httpCode == 200) {
    $data = json_decode($response, true);

    if ($data !== null) {
        // Dados foram recebidos corretamente
        echo "CEP: " . $data['cep'] . "<br>";
        echo "Logradouro: " . $data['address'] . "<br>";
        echo "Cidade: " . $data['city'] . "<br>";
        // ... outros campos que você queira mostrar
    } else {
        echo "Erro ao decodificar o JSON.";
    }
} elseif ($httpCode == 400) {
    echo "Erro 400: Requisição inválida.";
} elseif ($httpCode == 404) {
    echo "Erro 404: Página não encontrada.";
} else {
    echo "Erro desconhecido: Código HTTP " . $httpCode;
}

curl_close($ch);

?>