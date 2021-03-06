<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class SandVortex extends Mobile {
	public function summon() {
		$this->name = "a sand vortex";
		$this->body = 790;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(96, 120);
		$this->dex = rand(171, 195);
		$this->int = rand(76, 100);
		$this->maxhits = rand(51, 62);
		$this->hits = $this->maxhits;
		$this->damage = 3;
		$this->damageMax = 16;
		$this->resist_physical = rand(80, 90);
		$this->resist_fire = rand(60, 70);
		$this->resist_cold = rand(60, 70);
		$this->resist_poison = rand(60, 70);
		$this->resist_energy = rand(60, 70);
		$this->karma = -4500;
		$this->fame = 4500;
		$this->virtualarmor = 28;

}}
?>
