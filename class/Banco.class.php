<?php 

	/**
	* 
	*/
	class Banco
	{
		
		private $host = '127.0.0.1:3306';
		private $user = 'root';
		private $pass = '';
		private $db = 'pesquisa_pos';

		function __construct()
		{
			# code...
		}

		function set($prop, $value){
			$this->$prop = $value;
		}

		function AbreConexao(){
			try {
				$con = mysql_connect($this->host, $this->user, $this->pass);
				if(!$con)
					return false;
				else
					return $con;
			} catch (Exception $e) {
				return false;
			}

		}

		function ConectaBanco(){
			if($this->AbreConexao()){
				return $db = mysql_select_db($this->db);
			}else
				return null;
		}
	}

?>