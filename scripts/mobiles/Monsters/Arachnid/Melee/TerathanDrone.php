<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class terathandrone extends Mobile {
	public function summon() {
		$this->name = "a terathan drone";
		$this->body = 71;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(36, 65);
		$this->dex = rand(96, 145);
		$this->int = rand(21, 45);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 6;
		$this->damage_max = 12;
		$this->resist_physical = rand(20, 25);
		$this->resist_fire = rand(10, 20);
		$this->resist_cold = rand(15, 25);
		$this->resist_poison = rand(30, 40);
		$this->resist_energy = rand(15, 25);
		$this->karma = -2000;
		$this->fame = 2000;
		$this->virtualarmor = 24;

}}
?>
