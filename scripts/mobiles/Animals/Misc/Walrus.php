<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class walrus extends Mobile {
	public function summon() {
		$this->name = "a walrus";
		$this->body = 0;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0xE0;
		$this->str = rand(21, 29);
		$this->dex = rand(46, 55);
		$this->int = rand(16, 20);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 4;
		$this->damage_max = 10;
		$this->resist_physical = rand(20, 25);
		$this->resist_fire = rand(5, 10);
		$this->resist_cold = rand(20, 25);
		$this->resist_poison = rand(5, 10);
		$this->resist_energy = rand(5, 10);
		$this->karma = 0;
		$this->fame = 150;
		$this->virtualarmor = 18;

}}
?>
