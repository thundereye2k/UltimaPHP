<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class gaman extends Mobile {
	public function summon() {
		$this->name = "a gaman";
		$this->body = 248;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(146, 175);
		$this->dex = rand(111, 150);
		$this->int = rand(46, 60);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 6;
		$this->damage_max = 11;
		$this->resist_physical = rand(50, 70);
		$this->resist_fire = rand(30, 50);
		$this->resist_cold = rand(30, 50);
		$this->resist_poison = rand(40, 60);
		$this->resist_energy = rand(30, 50);
		$this->karma = -2000;
		$this->fame = 2000;
		$this->virtualarmor = 0;

}}
?>
