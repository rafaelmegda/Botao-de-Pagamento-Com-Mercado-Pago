<?php
	define('titulo_site', 'PAGAMENTO'); 
	define('url_site', 'http://localhost/ENDEREÇO DO SEU SITE/');
	define('client_id', 'COLOQUE AQUI O SEU CLIENT_ID');
	define('client_secret', 'COLOQUE AQUI O SEU CLIENT_SECRET');
	define('email', 'INFORME OS EMAILS QUE RECEBERAM AS INFORMAÇÕES DE PGTO');


	function sendMail($nome, $sobrenome, $email, $telefone, $valor, $status){
		$to = email;
		$subject = '['.titulo_site.'] PAGAMENTO EFETUADO!'; 
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		$message = '<html><body>';
		$message .= 
		'
		<h1>EI, VOCÊ TEM UM NOVO PAGAMENTO!</h1>
		<hr>
		<h2>Dados do pagante:</h2>
		<p><b>Nome:</b> '.$nome.' '.$sobrenome.'</p>
		<p><b>Email:</b> '.$email.' </p>
		<p><b>Telefone:</b> '.$telefone.' </p>
		<p><b>Valor:</b> <code> R$ '.$valor.' </code>
		<p><b>Status:</b> '.$status.' </p>
		<hr>
		<p>Obs: AGUARDE A CONFIRMAÇÃO DE PAGAMENTO POR PARTE DO MERCADO PAGO PARA LIBERAR SEU PRODUTO.</p>
		</p>';
		$message .= '</body></html>';

		mail($to, $subject, $message, $headers);
	}
?>
