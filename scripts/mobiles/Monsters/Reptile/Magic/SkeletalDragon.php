<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class SkeletalDragon extends Mobile {
	public function summon() {
		$this->name = "a skeletal dragon";
		$this->body = 104;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0x488;
		$this->str = rand(898, 1030);
		$this->dex = rand(68, 200);
		$this->int = rand(488, 620);
		$this->maxhits = rand(558, 599);
		$this->hits = $this->maxhits;
		$this->damage = 29;
		$this->damageMax = 35;
		$this->resist_physical = rand(75, 80);
		$this->resist_fire = rand(40, 60);
		$this->resist_cold = rand(40, 60);
		$this->resist_poison = rand(70, 80);
		$this->resist_energy = rand(40, 60);
		$this->karma = -22500;
		$this->fame = 22500;
		$this->virtualarmor = 80;

}}
?>
