<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class khaldunsummoner extends Mobile {
	public function summon() {
		$this->name = "zealot of khaldun";
		$this->body = 0;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(351, 400);
		$this->dex = rand(101, 150);
		$this->int = rand(502, 700);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 5;
		$this->damage_max = 15;
		$this->resist_physical = rand(35, 40);
		$this->resist_fire = rand(25, 30);
		$this->resist_cold = rand(50, 60);
		$this->resist_poison = rand(25, 35);
		$this->resist_energy = rand(25, 35);
		$this->karma = -10000;
		$this->fame = 10000;
		$this->virtualarmor = 36;

}}
?>
