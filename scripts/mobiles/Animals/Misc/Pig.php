<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class pig extends Mobile {
	public function summon() {
		$this->name = "a pig";
		$this->body = 0;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0xC4;
		$this->str = 0;
		$this->dex = 0;
		$this->int = 0;
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 2;
		$this->damage_max = 4;
		$this->resist_physical = rand(10, 15);
		$this->resist_fire = 0;
		$this->resist_cold = 0;
		$this->resist_poison = 0;
		$this->resist_energy = 0;
		$this->karma = 0;
		$this->fame = 150;
		$this->virtualarmor = 12;

}}
?>
