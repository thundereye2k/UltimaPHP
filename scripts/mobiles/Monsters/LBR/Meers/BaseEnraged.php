<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class baseenraged extends Mobile {
	public function summon() {
		$this->name = "an eagle";
		$this->body = 0;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0x2ee;
		$this->str = rand(50, 200);
		$this->dex = rand(50, 200);
		$this->int = 0;
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 0;
		$this->damage_max = 0;
		$this->resist_physical = 0;
		$this->resist_fire = 0;
		$this->resist_cold = 0;
		$this->resist_poison = 0;
		$this->resist_energy = 0;
		$this->karma = -1000;
		$this->fame = 0;
		$this->virtualarmor = 0;

}}
?>