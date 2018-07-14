<?php
use PHPUnit\Framework\TestCase;
require_once('procesado.php');
class procesadoTest extends TestCase
{
	public function testFibonacci()
	{
		// Test de codigo Fibonacci 
		$valores=array(array(5,3,5),array(4,2,3),array(2,1,1),array(1,0,1),array(0,-1,0),array('',-1,-1));
    		for ($i=0;$i < count($valores);$i++){ 
			$fibo = new procesado($valores[$i][0],0,1);
			$this->AssertEquals(array($valores[$i][1],$valores[$i][2]),$fibo->fibo_test());
		}
	}
}
?>
