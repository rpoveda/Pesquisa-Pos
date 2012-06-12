<?php 

	require_once 'Banco.class.php';
	require_once 'Pesquisa.class.php';

	class PesquisaDAO
	{
		
		function __construct()
		{
			# code...
		}

		private function isValid(Pesquisa $pesquisa){
			if($pesquisa->nome == null)
				return false;
			else if($pesquisa->idade == null)
				return false;
			else if($pesquisa->sexo == null)
				return false;
			else if($pesquisa->cidade == null)
				return false;
			else if($pesquisa->timePreferido == null)
				return false;
			else if($pesquisa->freqntJogos == null)
				return false;
			else if($pesquisa->freqntJogosSB == null)
				return false;
			else if($pesquisa->facilidadeCompraIngresso == null)
				return false;
			else
				return true;
		}

		private function protege_injection(Pesquisa $pesquisa){
			$pesquisa->nome = $this->monta_string($pesquisa->nome);
			$pesquisa->email = $this->monta_string($pesquisa->email);
			$pesquisa->idade = $this->monta_string($pesquisa->idade);
			$pesquisa->sexo = $this->monta_string($pesquisa->sexo);
			$pesquisa->cidade = $this->monta_string($pesquisa->cidade);
			$pesquisa->estado = $this->monta_string($pesquisa->estado);
			$pesquisa->timePreferido = $this->monta_string($pesquisa->timePreferido);
			$pesquisa->freqntJogos = $this->monta_string($pesquisa->freqntJogos);
			$pesquisa->freqntJogosSB = $this->monta_string($pesquisa->freqntJogosSB);
			$pesquisa->naoGostaJogos = $this->monta_string($pesquisa->naoGostaJogos);
			$pesquisa->naoFreqntJogos = $this->monta_string($pesquisa->naoFreqntJogos);
			$pesquisa->facilidadeCompraIngresso = $this->monta_string($pesquisa->facilidadeCompraIngresso);
			$pesquisa->avisadoJogosCidade = $this->monta_string($pesquisa->avisadoJogosCidade);
			$pesquisa->avisadoJogosFora = $this->monta_string($pesquisa->avisadoJogosFora);

			return $pesquisa;
		}

		private function monta_string($str){
			if (!is_numeric($str)) {
		        $str = get_magic_quotes_gpc() ? stripslashes($str) : $str;
		        //$str = mysql_real_escape_string($str);
		    }else
		    	$str = (int)$str;

		    return $str;
		}

		function insert(Pesquisa $pesquisa)
		{

			$banco = new Banco();
			$conn = $banco->ConectaBanco();

			if(!$this->isValid($pesquisa))
				return false;

			$pesquisa_formatada = $this->protege_injection($pesquisa);

			if($pesquisa->email != null && $this->verifica_email($pesquisa->email))
				return false;

			try {
				$banco = new Banco();
				if($conn){
					$command = "insert into cadastro (nome, email, sexo, cidade, estado, timePreferido, freqntJogos, freqntJogosSB, ";
					$command .= "naoGostaJogos, naoFrequentJogos, facilidadeCompraIngressos, avisaJogosCidade, avisaJogosFora, idade) ";
					$command .= " values ";
					$command .= " ('{$pesquisa_formatada->nome}', '{$pesquisa_formatada->email}', '{$pesquisa_formatada->sexo}', ";
					$command .= " '{$pesquisa_formatada->cidade}', '{$pesquisa_formatada->estado}', '{$pesquisa_formatada->timePreferido}', ";
					$command .= " '{$pesquisa_formatada->freqntJogos}', '{$pesquisa_formatada->freqntJogosSB}', '{$pesquisa_formatada->naoGostaJogos}', ";
					$command .= " '{$pesquisa_formatada->naoFreqntJogos}', '{$pesquisa_formatada->facilidadeCompraIngresso}', '{$pesquisa_formatada->avisadoJogosCidade}', ";
					$command .= " '{$pesquisa_formatada->avisadoJogosFora}', {$pesquisa_formatada->idade} )";

					$insertBanco = mysql_query($command);
					mysql_close($banco->AbreConexao());
					if(!$insertBanco)
						return false;
					else
						return true;
				}
			} catch (Exception $e) {
				mysql_close($banco->AbreConexao());
				return false;
			}
		}

		function totalResposta(){
			$banco = new Banco();
			$conn = $banco->ConectaBanco();
			try {
				if($conn){
					$command = mysql_query("select count(codigo) 'total' from cadastro");
					$total = mysql_result($command, 0);
					mysql_close($banco->AbreConexao());
					return $total;
				}
			} catch (Exception $e) {
				mysql_close($banco->AbreConexao());
				return 0;
			}
		}

		private function verifica_email($strEmail){
			$banco = new Banco();
			try{
				if($banco->ConectaBanco()){
					$command = mysql_query("select count(codigo) from cadastro where email = '{$strEmail}'");
					$ret = mysql_result($command, 0);
					mysql_close($banco->AbreConexao());
					return $ret;
				}
			}catch(Exception $e){
				$banco = new Banco();
				return 0;
			}
		}
	}

 ?>