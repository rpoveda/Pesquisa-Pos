<?php 

// Especifique o caminho do PHPUnit
require_once '/usr/share/pear/PHPUnit/Autoload.php';
// Especifique o caminho da classe a ser testada
require_once 'Banco.class.php';

/**
* 
*/
class BancoTest extends PHPUnit_Framework_TestCase
{
	
	function __construct()
	{
		# code...
	}

	public function testePassando(){
		$this->assertEquals(true, true);
	}

	public function testAbraConexaoMySql(){
		$banco = new Banco();

		$this->assertNotEquals(false, $banco->AbreConexao());
	}

	public function testAbreConexaoMysqlComSenhaInvalida(){
		$banco = new Banco();
		$banco->set('pass', '1234');

		$this->assertEquals(false, $banco->AbreConexao());
	}

	public function testAbreConexaoComBanco(){
		$banco = new Banco();

		$this->assertNotEquals(null, $banco->ConectaBanco());
	}

	public function testAbreConexaoComBancoInexistente(){
		$banco = new Banco();

		$banco->set('db', 'essatabelanaoexiste');

		$this->assertEquals(null, $banco->ConectaBanco());
	}
}

?>