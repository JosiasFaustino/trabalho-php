<?php 
	
 class Aula extends Aluno{
    private $qtdAulas;
    private $freqTotal;
    private $qtdFaltas;
    
    
    //Construtor
	
	public function _construtor(){
        
        
	}

	//Fim Construtor	
	
	//GET and SEETRS 
	public function getQtdAulas(){return $this->qtdAulas;}	
    public function setQtdAulas($qtdAulas){$this->qtdAulas = $qtdAulas;}
    
    public function getQtdFaltas(){return $this->qtdFaltas;}
    public function setQtdFaltas($qtdFaltas){$this->qtdFaltas = $qtdFaltas;}
    
    public function getMf(){return $this->mf;}
	public function setMf($mf){$this->mf = $mf;}
	
    public function VerificaFrequencia(){
        $a = ($this->qtdFaltas*100);
        $x= ($a/$this->qtdAulas);
        $freqTotal = 100 - $x;
        echo ("<br><b>A Frenquência é: </b>".$freqTotal."%");
        if($freqTotal < 75) {
            echo "<br><b>REPROVADO POR FALTA!</b>";
        }
           
    }
    
	public function imprimeAula(){
		echo "<br><b>DADOS DA AULA</b><br>";
        echo "<b>Quantidade de Aulas dadas: </b> ".$this->qtdAulas."<br>";
        echo "<b>Quantidade de faltas:</b> ".$this->qtdFaltas."<br>";
        
    }
    
}
