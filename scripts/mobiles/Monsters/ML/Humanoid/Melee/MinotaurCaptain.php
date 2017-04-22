<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class minotaurcaptain extends Mobile {
	public function summon() {
		$this->name = "a minotaur captain";
		$this->body = 280;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(401, 425);
		$this->dex = rand(91, 110);
		$this->int = rand(31, 50);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 11;
		$this->damage_max = 20;
		$this->resist_physical = rand(65, 75);
		$this->resist_fire = rand(35, 45);
		$this->resist_cold = rand(40, 50);
		$this->resist_poison = rand(40, 50);
		$this->resist_energy = rand(40, 50);
		$this->karma = -7000;
		$this->fame = 7000;
		$this->virtualarmor = 28;

}}
?>
