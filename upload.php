<?php
$targetDir = __DIR__ . "/uploads/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

if(isset($_FILES['file'])){
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)){
        // Substitua pelo seu subdomínio
        echo "https://mylinkcrb.ct.ws/uploads/" . basename($_FILES["file"]["name"]);
    } else {
        echo "Erro ao enviar arquivo.";
    }
} else {
    echo "Nenhum arquivo enviado.";
}
?>
