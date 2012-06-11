<?php 
// Especifique o caminho do PHPUnit
require_once '/usr/share/pear/PHPUnit/Autoload.php';
// Especifique o caminho da classe a ser testada
require_once 'PesquisaDAO.class.php';
require_once 'Pesquisa.class.php';

/**
* 
*/
class PesquisaDAOTest extends PHPUnit_Framework_TestCase
{
	
	function __construct()
	{
		# code...
	}

	public function testePassando(){
		$this->assertEquals(true, true);
	}

	public function testInsert(){
		$pesquisaDAO = new PesquisaDAO();
		$pesquisa = new Pesquisa();

		$this->assertEquals(false, $pesquisaDAO->insert($pesquisa));

	}
}

 ?>