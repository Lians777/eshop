<?php 


class animal {
	public $svoris = "5";
	public $amzius;
	public $vardas;

}


class dog extends animal {
	public $amzius = "12";
	public $vardas = "lenciugas";
	public $shit = "home";

	public function animals {
		echo "mai dog ";
	}

}

class cat extends animal {
	public $amzius = "7";
	public $metai = "pupa";
	public $shit = "lauaks";
}



$dog = new dog();
$dog = new cat();

