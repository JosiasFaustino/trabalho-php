<?php 
	
 class Aluno{
	private $p1;
	private $ma1;
	private $mb1;
	
	private $p2;
	private $ma2;
    private $mb2;
	
	var $mf;
	
	//Construtor
	
	public function _construtor(){
		$this->p1 = $p1;	
        $this->ma1 = ma1;
        $this->mb1 = mb1;
		$this->p2 = 0;
        $this->ma2 = 0;
        $this->mb2 = 0;
		$this->mf = 0;
	}

	//Fim Construtor	
	
	//GET and SEETRS N1
	public function getP1(){return $this->p1;}	
	public function setP1($p1){$this->p1 = $p1;}
	
	public function getMa1(){return $this->ma1;}
	public function setMA1($ma1){$this->ma1 = $ma1;}

	public function getMb1(){return $this->mb1;}
	public function setMb1($mb1){$this->mb1 = $mb1;}
	
	
	//GET and SEETRS N2
	public function getP2(){return $this->p2;}	
	public function setP2($p2){$this->p2 = $p2;}
	
	public function getMa2(){return $this->ma2;}
	public function setMA2($ma2){$this->ma2 = $ma2;}

	public function getMb2(){return $this->mb2;}
    public function setMb2($mb2){$this->mb2 = $mb2;}
    	
	public function CalculaMediaN1(){
	
		$this->a1 = (($this->p1*0.7) + ($this->ma1*0.2) + ($this->mb1*0.1));
		
	}
	
	public function CalculaMediaN2(){
	
		$this->a2 = (($this->p2*0.7) + ($this->ma2*0.2) + ($this->mb2*0.1));	
    }

    public function VerificaFrequencia(){
        $a = ($this->qtdFaltas*100);
        $x= ($a/$this->qtdAulas);
        $freqTotal = 100 - $x;
    }
    
    public function CalculaMediaFinal(){
		
		$mf = ($this->a1 + $this->a2*2)/3;
		echo "<br><b>MEDIA FINAL: </b>".number_format($mf,2)."<br><br>";

		if($mf > 5 ) {
			echo "<br><b>APROVADO!</b>";
		}
		elseif ($mf < 3) {
			echo "<br><b>REPROVADO POR NOTA!</b>";

		} 
		else {
			echo "<br><b>RECUPERAÇÃO!</b>";
			
		}
	}
	

	public function imprimir(){
		echo "<b>NOTAS N1</b><br>";
		echo "Nota P1: ".$this->p1."<br>";
		echo "Nota MA1: ".$this->ma1."<br>";
		echo "Nota MB1: ".$this->mb1."<br><br>";
		echo "<b>NOTAS N2</b><br>";
		echo "Nota P2: ".$this->p2."<br>";
		echo "Nota MA2: ".$this->ma2."<br>";
		echo "Nota MB2: ".$this->mb2."<br><br>";
        echo "<b>Média A1: </b>".$this->a1."<br><br>";
        echo "<b>Média A2: </b>".$this->a2."<br>";
	}
}
