<?php

declare(strict_types = 1);

namespace hydroboat-studios\blocks;

use hydroboat-stuios\Main;
use pocketmine\block\Block;
use pocketmine\block\BlockFactory;

class BlockManager {
	public static function init(): void{
		Main::getPluginLogger()->debug("Registering Blocks...");
		BlockFactory::registerBlock(new ShulkerBox(Block::UNDYED_SHULKER_BOX), true);
		BlockFactory::registerBlock(new ShulkerBox(), true);
    BlockFactory::registerBlock(new Hopper(), true);
    BlockFactory::registerBlock(new Cauldron(), true);
