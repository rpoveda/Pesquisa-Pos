<html>
<head>
	<title>Pesquisa</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
		.container{margin-top:30px;}
		input[type=text]{height: 25px;}
	</style>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('.well').submit(function(){
				$('#redes_sociais').fadeIn('slow');
				$('.alert-info').fadeOut('fast');
				$('fieldset').fadeOut('fast');
				return false;
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="alert alert-info">
			<h3>Pesquisa para projeto da pos graduacao de desenvolvimento para web</h3>
			<span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </span>
		</div>
		<fieldset>
			<legend>Formulario</legend>
			<form class="well">
			<div class="control-group">
				<label for="nome">Nome</label>
				<input type="text" name="nome" id="nome" />
			</div>
			<div class="control-group">
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email" />
			</div>
			<div class="control-group">
				<label for="idade">Idade</label>
				<input type="text" name="idade" id="idade" />
			</div>
			<div class="control-group">
				<label>Sexo</label>
				<select>
					<option></option>
					<option>Masculino</option>
					<option>Feminino</option>
				</select>
			</div>
			<div class="control-group">
				<label for="cidade">Cidade</label>
				<input type="text" name="cidade" id="cidade" />
			</div>
			<div class="control-group">
				<label for="estado">Estado</label>
				<input type="text" name="estado" id="estado" />
			</div>
			<div class="control-group">
				<label for="timePreferido">Time preferido</label>
				<input type="text" name="timePreferido" id="timePreferido" />
			</div>
			<div class="control-group">
				<input type="checkbox" name="freqntJogos" id="freqntJogos" style="float:left"/>
				<label>Frequenta Jogos?</label>

				<div>
					<input type="checkbox" name="freqntJogosSB" id="freqntJogosSB" style="float:left" />
					<label>Frequenta jogos Sao Bento?</label>
				</div>
				<br />
			</div>
			<div class="control-group">
				<label>O que nao gosta dos jogos</label>
				<textarea type="text" name="naoGostaJogos" id="naoGostaJogos" ></textarea>
			</div>
			<div class="control-group">
				<label>Por que nao frequenta jogos?</label>
				<textarea type="text" name="naoFreqntJogos" id="naoFreqntJogos"></textarea>
			</div>
			<div class="control-group">
				<input type="checkbox" name="facilidadeCompraIngresso" id="facilidadeCompraIngresso" style="float:left; display:block;" />
				<label>Iria a mais jogos se fosse facil a compra de ingressos?</label>
			</div>
			<div class="control-group">
				<input type="checkbox" name="avisadoJogosCidade" id="avisadoJogosCidade" style="float:left;" />
				<label>Gostaria de ser avisados sobre jogos do Sao Bento em casa?</label>
			</div>
			<div class="control-group">
				<input type="checkbox" name="avisadoJogosFora" id="avisadoJogosFora" style="float:left;" />
				<label>Gostaria de ser avisado sobre jogos do Sao Bento fora de casa?</label>
			</div>
			<div class="form-actions">
				<input type="reset" class="btn btn-danger" value="Limpar" />
				<input type="submit" class="btn" value="Enviar" id="btnEnviar" />
			</div>
			</form>
		</fieldset>
		<div class="alert" id="redes_sociais" style="display:none">
			<h3>Que tal nos ajudar nas redes sociais?</h3>
			<span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </span>
		</div>
	</div>
</body>
</html>