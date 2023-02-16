<?php
$phishing = $_POST['phishing'];
$malware = $_POST['malware'];
$engenharia_social = $_POST['engenharia_social'];
$senha_fraca = $_POST['senha_fraca'];
$software_desatualizado = $_POST['software_desatualizado'];
$dispositivos_moveis_nao_protegidos = $_POST['dispositivos_moveis_nao_protegidos'];

$score = 0;

if ($phishing == '2') {
    $score++;
    $phishing_status = "Correta";
} else {
    $phishing_status = "Incorreta";
}

if ($malware == '2') {
    $score++;
    $malware_status = "Correta";
} else {
    $malware_status = "Incorreta";
}

if ($engenharia_social == '1') {
    $score++;
    $engenharia_social_status = "Correta";
} else {
    $engenharia_social_status = "Incorreta";
}

if ($senha_fraca == '1') {
    $score++;
    $senha_fraca_status = "Correta";
} else {
    $senha_fraca_status = "Incorreta";
}

if ($software_desatualizado == '3') {
    $score++;
    $software_desatualizado_status = "Correta";
} else {
    $software_desatualizado_status = "Incorreta";
}

if ($dispositivos_moveis_nao_protegidos == '2') {
    $score++;
    $dispositivos_moveis_nao_protegidos_status = "Correta";
} else {
    $dispositivos_moveis_nao_protegidos_status = "Incorreta";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultados do Quiz de Segurança da Informação</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Resultados do Quiz de Segurança da Informação</h1>
    <p>Sua pontuação é: <?php echo $score; ?>/6</p>

    <h2>Respostas corretas:</h2>
    <ul>
        <li>Phishing: <strong><?php echo $phishing_status; ?></strong></li>
        <li>Malware: <strong><?php echo $malware_status; ?></strong></li>
        <li>Engenharia social: <strong><?php echo $engenharia_social_status; ?></strong></li>
        <li>Senha fraca: <strong><?php echo $senha_fraca_status; ?></strong></li>
        <li>Software desatualizado: <strong><?php echo $software_desatualizado_status; ?></strong></li>
        <li>Dispositivos móveis não protegidos: <strong><?php echo $dispositivos_moveis_nao_protegidos_status; ?></strong></li>
    </ul>
</body>
</html>

