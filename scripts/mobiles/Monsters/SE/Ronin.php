<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class ronin extends Mobile {
	public function summon() {
		$this->name = "a ronin";
		$this->body = 0;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(326, 375);
		$this->dex = rand(31, 45);
		$this->int = rand(101, 110);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 17;
		$this->damage_max = 25;
		$this->resist_physical = rand(55, 75);
		$this->resist_fire = rand(40, 60);
		$this->resist_cold = rand(35, 55);
		$this->resist_poison = rand(50, 70);
		$this->resist_energy = rand(55, 75);
		$this->karma = -8500;
		$this->fame = 8500;
		$this->virtualarmor = 0;

}}
?>
