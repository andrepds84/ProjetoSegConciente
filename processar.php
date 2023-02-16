<?php
// Recebe a resposta do usuário na seção de phishing
if(isset($_POST['phishing'])) {
	$respostaPhishing = $_POST['phishing'];
	
	// Faz algo com a resposta (por exemplo, verificar se está correta)
	if($respostaPhishing == 2) {
		echo "Resposta correta!";
	} else {
		echo "Resposta incorreta. Tente novamente.";
	}
}  
?>
