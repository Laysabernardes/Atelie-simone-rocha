<!DOCTYPE html>
<meta charset="utf-8">

<html>

	<head>
		<title> Encomendas</title>

		<link href="style.css" rel="stylesheet"/>
		<link rel="shortcut icon" href="imagem/croche.png" type="image/x-icon">

		<meta name="keywords" content=" sousplat de crochê,tapete de croche, jogo de banheiro de crochê ">

		<!-- Google tag (gtag.js) -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=G-68P5GZ19QK"></script>
			<script>
	  			window.dataLayer = window.dataLayer || [];
	  			function gtag(){dataLayer.push(arguments);}
	  			gtag('js', new Date());
				gtag('config', 'G-68P5GZ19QK');
	        </script>
	</head>

	<body id="topo">

		<?php
			session_start();
			if (isset($_SESSION['mensagem'])) {
				echo '<p>' . $_SESSION['mensagem'] . '</p>';
				unset($_SESSION['mensagem']);
			}
		?>

		<iframe src="header.html" frameborder="0" scrolling="no" id="meu-iframe"></iframe>	
		<br>

		 <h1>Faça sua Encomenda: </h1> 
		 		<p>Preecha o <b>formulario</b> para adiquirir uma malhavilhosa peça de crôche. É não se preocupe, este formulário é apenas um contato inicial, e tem como intuito o controle de demanda. Logo mais, entraremos em contato para conversarmos sobre mais detalhes, fornecer explicações e tirar duvidas sobre sua peça.</p>

		       <form action="recebe-formulario.php" method="post" style="margin-left:135px">

		       <label for="nome_id">Nome: </label>
			       <input
						id="nome_id" 
						type="text" 
						name="nome"
						placeholder="Insira seu nome."
						required><br>
		        
		        <label for="email_id">Email: </label>
			        <input
			            id="email_id" 
			            type="email" 
			            name="email"
			            placeholder="Insira seu e-mail."
			            required><br>

		        <label for="telefone_id">Telefone: </label>
			        <input
			            id="telefone_id" 
			            type="tel" 
			            name="telefone"
			            placeholder="Insira seu telefone."
			            required><br>	

		        <label for="cor_id">Cor da Peça: </label>
				<input id="cor_id" name="cor" type="color"><br><br>

		        <label for="mensagem_id">Descreva como quer sua peça: </label><br>
					<textarea 
						id="mensagem_id" 
						name="mensagem"
						rows="5"
						cols="50"
						maxlength="300"
		                placeholder="Descreva como quer sua peça:"
		                required
		            ></textarea><br>

		        <input 
		        	id="cm_id" 
		        	type="checkbox" 
		        	value="sim" 
		        	name="newsletter" 
		        	checked>
		        		<label for="cm_id">Deixe a caixa marcada para receber nossos e-mails </label><br>
		    
		        <input type="submit" value="Enviar">
		    </form>  

	    <br><br>
  			<a href="#topo" style="margin: 40px; text-decoration: none;background:#840032;color:#ffffff;border-radius: 10px;"><b> &nbsp;&nbsp;Voltar ao topo&nbsp;&nbsp;</b></a>
  		<br><br>
  		
		<iframe src="footer.html" frameborder="0" scrolling="no" id="meu-iframe"></iframe>
	</body>
</html>
