<?php

// Definir as respostas corretas para cada ameaça
$phishing = true;
$malware = true;
$engenharia_social = true;
$senha_fraca = false;
$software_desatualizado = true;
$dispositivos_moveis_nao_protegidos = true;

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Inicializar a pontuação do usuário
  $pontuacao = 0;

  // Verificar cada resposta selecionada pelo usuário
  if (isset($_POST['phishing']) && $_POST['phishing'] == '1') {
    $pontuacao++;
  }
  if (isset($_POST['malware']) && $_POST['malware'] == '1') {
    $pontuacao++;
  }
  if (isset($_POST['engenharia-social']) && $_POST['engenharia-social'] == '1') {
    $pontuacao++;
  }
  if (isset($_POST['senha-fraca']) && $_POST['senha-fraca'] == '0') {
    $pontuacao++;
  }
  if (isset($_POST['software-desatualizado']) && $_POST['software-desatualizado'] == '1') {
    $pontuacao++;
  }
  if (isset($_POST['dispositivos-moveis-nao-protegidos']) && $_POST['dispositivos-moveis-nao-protegidos'] == '1') {
    $pontuacao++;
  }

  // Exibir a pontuação do usuário e a resposta correta para cada ameaça
  echo "<p>Você acertou $pontuacao de 6 ameaças.</p>";
  echo "<ul>";
  echo "<li>Phishing: " . ($phishing ? "Correta" : "Incorreta") . "</li>";
  echo "<li>Malware: " . ($malware ? "Correta" : "Incorreta") . "</li>";
  echo "<li>Engenharia Social: " . ($engenharia_social ? "Correta" : "Incorreta") . "</li>";
  echo "<li>Senha Fraca: " . ($senha_fraca ? "Correta" : "Incorreta") . "</li>";
  echo "<li>Software Desatualizado: " . ($software_desatualizado ? "Correta" : "Incorreta") . "</li>";
  echo "<li>Dispositivos Móveis não Protegidos: " . ($dispositivos_moveis_nao_protegidos ? "Correta" : "Incorreta") . "</li>";
  echo "</ul>";
}

?>
