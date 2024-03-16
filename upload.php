<?php


// Verifica se um arquivo foi enviado
if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    var_dump($arquivo); echo "<br>";

    // Verifica se não houve erro no upload
    if ($arquivo['error'] === UPLOAD_ERR_OK) {
        // Define o diretório de destino para salvar o arquivo ZIP
        $diretorio_destino = 'C:/Users/gabri/OneDrive/Área de Trabalho/teste/';

        // Verifica se o diretório de destino existe, se não, cria-o
        if (!file_exists($diretorio_destino)) {
            mkdir($diretorio_destino, 0755, true);
        }

        // Move o arquivo temporário para o diretório de destino
        $caminho_destino = $diretorio_destino . $arquivo['name'];
        if (move_uploaded_file($arquivo['tmp_name'], $caminho_destino)) {

            echo 'Arquivo ZIP enviado com sucesso!';

        } else {

            echo 'Ocorreu um erro ao enviar o arquivo.';

        }
    } else {
        echo 'Erro no upload do arquivo: ' . $arquivo['error'];
    }
}
?>