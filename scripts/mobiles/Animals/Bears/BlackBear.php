<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class blackbear extends Mobile {
	public function summon() {
		$this->name = "a black bear";
		$this->body = 211;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0xA3;
		$this->str = rand(76, 100);
		$this->dex = rand(56, 75);
		$this->int = rand(11, 14);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 4;
		$this->damage_max = 10;
		$this->resist_physical = rand(20, 25);
		$this->resist_fire = 0;
		$this->resist_cold = rand(10, 15);
		$this->resist_poison = rand(5, 10);
		$this->resist_energy = 0;
		$this->karma = 0;
		$this->fame = 450;
		$this->virtualarmor = 24;

}}
?>
