<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Resultados do Quiz de Segurança da Informação</title>
  </head>
  <body>
    <h1>Resultados do Quiz de Segurança da Informação</h1>
    <?php
    $pontuacao = 0;
    $respostas_corretas = array(
      "phishing" => "b",
      "malware" => "b",
      "engenharia_social" => "b",
      "senha_fraca" => "b",
      "software_desatualizado" => "b",
      "dispositivos_moveis_nao_protegidos" => "a"
    );
    foreach ($respostas_corretas as $ameaca => $resposta_correta) {
      if (isset($_POST[$ameaca]) && $_POST[$ameaca] == $resposta_correta) {
        $pontuacao++;
        echo "<p>Resposta correta para $ameaca</p>";
      } else {
        echo "<p>Resposta incorreta para $ameaca</p>";
      }
    }
    echo "<p>Sua pontuação final é $pontuacao</p>";
    ?>
  </body>
</html>


