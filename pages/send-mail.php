<?php

$resposta = array( 'confirmacao' => true, 'mensagem' => 'E-mail enviado com sucesso!' );

$camposObrigatorios = array( "nome", "e-mail", "assunto", "mensagem");
$mensagemEnvio = "Contato enviado pelo site Lynd <br><br>";

foreach ( $_POST as $key => $value ){
	if ( in_array( $key, $camposObrigatorios)){
		if( $value == null ){
			$resposta['mensagem'] = "O campo {$key} precisa ser preenchido <br>";
			$resposta['confirmacao'] = false;
		}
	}
	$mensagemEnvio .= "{$key}: {$value} <br><br>";
}

$to = "desenvolvimento1@ineosistemas.com.br";

$subject = "Contato enviado pelo site Lynd";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-utf-8' . "\r\n";
$headers .= 'From: contato@website' . "\r\n";

if( $resposta['confirmacao'] ){
	if ( !mail($to, $subject, $mensagemEnvio, $headers )){
		$resposta['confirmacao'] = false;
		$resposta['mensagem'] = 'Falha no envio. ';
	}
}

echo json_encode( $resposta );