<?php
$phishing = isset($_POST['phishing']) ? $_POST['phishing'] : '2';
$malware = isset($_POST['malware']) ? $_POST['malware'] :'2' ;
$engenharia_social = isset($_POST['engenharia_social']) ? $_POST['engenharia_social']: '1';
$senha_fraca = isset($_POST['senha_fraca']) ? $_POST['senha_fraca'] : '1';
$software_desatualizado = isset($_POST['software_desatualizado']) ?  $_POST['software_desatualizado'] : '3';
$dispositivos_moveis_nao_protegidos = isset($_POST['dispositivos_moveis_nao_protegidos']) ? $_POST['dispositivos_moveis_nao_protegidos'] : '2' ;
$score = 0;

if ($phishing  == '2') {
    $score++ ;
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
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
     <title>Resultados do Quiz de Segurança da Informação</title>
     <link rel="stylesheet" href="estilos\style_2.css">
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

