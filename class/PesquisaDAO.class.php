<?php 

	require_once 'Banco.class.php';
	require_once 'Pesquisa.class.php';

	class PesquisaDAO
	{
		
		function __construct()
		{
			# code...
		}

		function insert(Pesquisa $pesquisa)
		{
			try {
				$banco = new Banco();
				if($banco->ConectaBanco()){
					$command = ("in into cadastro (nome) values ('joazinhotrintanovo')");

					$insertBanco = mysql_query($command);
					if(!$insertBanco)
						return false;
					else
						return true;
				}
			} catch (Exception $e) {
				return false;
			}
		}

		function totalResposta(){
			try {
				
			} catch (Exception $e) {
				return 0;
			}
		}


	}

 ?>