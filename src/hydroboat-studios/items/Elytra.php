<?php

declare(strict_types = 1);

namespace hydroboat-studios\items;

use pocketmine\item\{
	Durable, Item
};

class Elytra extends Durable {
	public function __construct($meta = 0){
		parent::__construct(Item::ELYTRA, $meta, "Elytra Wings");
	}

	public function getMaxDurability(): int{
		return 433;
	}
}
