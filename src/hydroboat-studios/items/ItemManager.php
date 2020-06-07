<?php


 * Berry (c) 2020
 * This project is licensed under GNU GENERAL PUBLIC LICENSE v3.0
 * It is free to use, and copyright free.
 *
 * @author hydroboat-studios
 *

declare(strict_types=1);

namespace src/hydroboat-studios/items;

use pocketmine\item\Item;
use pocketmine\item\ItemFactory;

class ItemManager {

    public function __construct() {
        $this->init();
    }

    public function init() {
        ItemFactory::registerItem(new SweetBerries(), true);
        ItemFactory::registerItem(new CrossBow(), true);    
        \Item::initCreativeItems();
    }
