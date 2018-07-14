<?php

class procesado{

	var $variable_input;
        var $fibo;
	public function __construct($variable,$n1,$n2) {
		$this->variable_input=$variable;
		$this->fibo=array();
		$this->fibo[0]=$n1;
		$this->fibo[1]=$n2; 
   	}
	public function fibo_test(){
		if (preg_match("/\A(0.)/",$this->variable_input) or!is_numeric($this->variable_input) or $this->variable_input<0 or strstr($this->variable_input, '.', true)){
			return array(-1,-1);
		}elseif ($this->variable_input==0){
			return array(-1,$this->fibo[0]);
		}elseif ($this->variable_input==1){
			return array($this->fibo[0],$this->fibo[1]);
		}else{
	
			for ($i=2;$i<=$this->variable_input;$i++){
				$this->fibo[$i]=$this->fibo[$i-2]+$this->fibo[$i-1];
			}
			return array($this->fibo[$this->variable_input-1],$this->fibo[$this->variable_input]);
		}
	}

}

if (isset($_GET['variable'])){
	$recibe=array();
	$fibonacci = new procesado($_GET['variable'],0,1);
	$recibe=$fibonacci->fibo_test();
	if ($recibe[0]==-1 and $recibe[1]==-1){
		echo 'Debe ingresar un numero natural';
	}elseif($recibe[0]==-1){
		echo 'No existe el termino n-1';
		echo '<br/>';
		echo 'Termino n: ',$recibe[1];	
	}else{
		echo 'Termino n-1: ',$recibe[0];
		echo '<br/>';
		echo 'Termino n:   ',$recibe[1];	
	}
	
	
}
?>
<form method='get' action='index.html'>
<input type='submit' value='Volver'>
</form>

