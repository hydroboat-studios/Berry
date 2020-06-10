<?php

declare(strict_types = 1);

namespace hydroboat-stuios\items;

use hyroboat-studios\Main;
use pocketmine\item\{
	Item, ItemFactory
};

class ItemManager {
	public static function init(){
		ItemFactory::registerItem(new SweetBerries(), true);
		ItemFactory::registerItem(new Honeycomb(), true);
		ItemFactory::registerItem(new HoneyBottle(), true);
	
