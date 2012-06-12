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
	
	public $pesquisaDAO;

	function __construct()
	{
		$this->pesquisaDAO = new PesquisaDAO();
	}

	public function testInsertSemNome(){
		$pesquisa = new Pesquisa();
		$pesquisa->nome = null;
		$this->assertEquals(false,$this->pesquisaDAO->insert($pesquisa));
	}

	public function testInsertSemIdade(){
		$pesquisa = new Pesquisa();
		$pesquisa->nome = "Rafael Poveda";
		$pesquisa->idade = null;
		$this->assertEquals(false, $this->pesquisaDAO->insert($pesquisa));
	}

	public function testInsertSemSexo(){
		$pesquisa = new Pesquisa();
		$pesquisa->nome = "Rafael Poveda";
		$pesquisa->idade = "23";
		$pesquisa->sexo = null;
		$this->assertEquals(false, $this->pesquisaDAO->insert($pesquisa));
	}

	public function testInsertSemCidade(){
		$pesquisa = new Pesquisa();
		$pesquisa->nome = "Rafael Poveda";
		$pesquisa->idade = "23";
		$pesquisa->sexo = "M";
		$pesquisa->cidade = "";
		$this->assertEquals(false, $this->pesquisaDAO->insert($pesquisa));
	}

	public function testInsertSemTimePreferido(){
		$pesquisa = new Pesquisa();
		$pesquisa->nome = "Rafael Poveda";
		$pesquisa->idade = "23";
		$pesquisa->sexo = "M";
		$pesquisa->cidade = "Sorocaba";
		$pesquisa->timePreferido = "";
		$this->assertEquals(false, $this->pesquisaDAO->insert($pesquisa));
	}

	public function testInsertSemFreqnJogos(){
		$pesquisa = new Pesquisa();
		$pesquisa->nome = "Rafael Poveda";
		$pesquisa->idade = "23";
		$pesquisa->sexo = "M";
		$pesquisa->cidade = "Sorocaba";
		$pesquisa->timePreferido = "Palmeiras";
		$pesquisa->freqntJogos = "";
		$this->assertEquals(false, $this->pesquisaDAO->insert($pesquisa));
	}

	public function testInsertSemFreqntJogosSB(){
		$pesquisa = new Pesquisa();
		$pesquisa->nome = "Rafael Poveda";
		$pesquisa->idade = "23";
		$pesquisa->sexo = "M";
		$pesquisa->cidade = "Sorocaba";
		$pesquisa->timePreferido = "Palmeiras";
		$pesquisa->freqntJogos = "N";
		$pesquisa->freqntJogosSB = "";
		$this->assertEquals(false, $this->pesquisaDAO->insert($pesquisa));
	}

	public function testInsertSemFacilidadeCompraIngressos(){
		$pesquisa = new Pesquisa();
		$pesquisa->nome = "Rafael Poveda";
		$pesquisa->idade = "23";
		$pesquisa->sexo = "M";
		$pesquisa->cidade = "Sorocaba";
		$pesquisa->timePreferido = "Palmeiras";
		$pesquisa->freqntJogos = "N";
		$pesquisa->freqntJogosSB = "N";
		$pesquisa->facilidadeCompraIngresso = "";
		$this->assertEquals(false, $this->pesquisaDAO->insert($pesquisa));
	}

	public function testRecebendoTodosOsValores(){
		$pesquisa = new Pesquisa();
		$pesquisa->nome = "Rafael Poveda";
		$pesquisa->idade = "23";
		$pesquisa->sexo = "M";
		$pesquisa->cidade = "Sorocaba";
		$pesquisa->timePreferido = "Palmeiras";
		$pesquisa->freqntJogos = "N";
		$pesquisa->freqntJogosSB = "N";
		$pesquisa->facilidadeCompraIngresso = "S";
		$pesquisa->avisadoJogosCidade = "S";
		$pesquisa->avisadoJogosFora = "S";
		$this->assertEquals(true, $this->pesquisaDAO->insert($pesquisa));
	}

	public function testInsertComEmailJaCadastrado(){
		$pesquisa = new Pesquisa();
		$pesquisa->nome = "Rafael Poveda";
		$pesquisa->email = "raffael.poveda@gmail.com";
		$pesquisa->idade = "23";
		$pesquisa->sexo = "M";
		$pesquisa->cidade = "Sorocaba";
		$pesquisa->timePreferido = "Palmeiras";
		$pesquisa->freqntJogos = "N";
		$pesquisa->freqntJogosSB = "N";
		$pesquisa->facilidadeCompraIngresso = "S";
		$pesquisa->avisadoJogosCidade = "S";
		$pesquisa->avisadoJogosFora = "S";
		$this->assertEquals(false, $this->pesquisaDAO->insert($pesquisa));
	}

	public function testTotalDeRespostasInseridas(){
		$total_assert = 0;
		$this->assertNotEquals(0, $this->pesquisaDAO->totalResposta());
	}
}

 ?>