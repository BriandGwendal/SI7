<?php
//bibliothèque de test
use PHPUnit\Framework\TestCase;
class MathTest extends TestCase {
	public function testDouble(){
		//verifie si le double de 2 est égale à 4
		$this->assertEquals(4, \App\Math::double(2));
	}
	public function testTtc(){
		//verifie si le prix ttc de 1 est égale à 
		$this->assertEquals(1.2, \App\Math::ttc(1));
	}
	public function testVerif(){
		$this->assertLessThan(2, 1);
	}
}
?>