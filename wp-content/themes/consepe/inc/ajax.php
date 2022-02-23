<?php

add_action( 'wp_ajax_enviar-email', 'my_action_enviar_email' );
add_action( 'wp_ajax_nopriv_enviar-email', 'my_action_enviar_email' );

function my_action_enviar_email() {

	if (($_POST['tipo-email']) == "contato"){
		$deNome = $_POST['nome'];
		$deEmail = $_POST['email'];
		$demensagem = $_POST['mensagem'];
	    
	    $mensagem = 
			"Contato Fuji Multimarcas \n\n" . 
			"Nome: " . $deNome . "\n" .
			"E-mail: " . $deEmail . "\n" .
			"Mensagem: " . $demensagem . "\n\n".
			"Mensagem Enviada pelo Site Fuji Multimarcas";

	}else if (($_POST['tipo-email']) == "proposta") {
		$deNome = $_POST['nome'];
		$deEmail = $_POST['email'];
		$telefone = $_POST['telefone'];		
		$celular= $_POST['celular'];
		$demensagem = $_POST['mensagem'];
		$modelo = $_POST['idVeiculo'];

		$mensagem = 
			"Proposta Fuji Multimarcas \n\n" .
			"Interesse no Veículo: " . $modelo . "\n" .
			"Nome: " . $deNome . "\n" .
			"E-mail: " . $deEmail . "\n" .
			"Telefone: " . $telefone . "\n" .
			"Celular: " . $celular . "\n" .
			"Mensagem: " . $demensagem . "\n\n".
			"Mensagem Enviada pelo site Fuji Multimarcas";
	}



		$mailer = new PHPMailer();
		$mailer->IsSMTP();
		$mailer->SMTPDebug = 1;
		$mailer->Port = 587;
		$mailer->Host = 'localhost';

		//$mailer->SMTPAuth = true; //Define se haverá ou não autenticação no SMTP
		//$mailer->Username = ''; //Informe o e-mail o completo
		//$mailer->Password = ''; //Senha da caixa postal

		// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
		date_default_timezone_set('America/Sao_Paulo');

		$mailer->FromName = $deNome; //Nome que será exibido para o destinatário
		$mailer->From = $deEmail; //Obrigatório ser a mesma caixa postal indicada em "username"
		$mailer->AddReplyTo($deEmail,$deNome);
		$mailer->AddAddress('adriano@comunicandoideias.com.br'); //Destinatários

		//Conversor UTF-8 para acentuação
		//$assunto = "Página Orçamento";
		$mailer->Subject = $assunto = '=?UTF-8?B?'.base64_encode($assunto).'?=';		
		$mailer->Subject = "E-mail do Site Fuji Multimarcas" ." - ".date("H:i").'-'.date("d/m/Y");
		$mailer->Body = $mensagem;
		$mailer->CharSet = "UTF-8";

		if($mailer->Send()) { ?>
			<h3 class='enviado'>Mensagem enviada com sucesso </h3>	
		<?php }

		else { ?>
			<h3 class='erro'>A mensagem não pode ser enviada, tente novamente ou tente mais tarde </h3>
		<?php }	
}
