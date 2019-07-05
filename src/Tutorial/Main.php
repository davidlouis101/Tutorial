<?php

namespace Tutorial;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase{

	public function onLoad(): void{
		$this->getLogger()->info(C::GREEN . "Loading Tutorial");
	}

    public function onEnable(): void{
        $this->getLogger()->info(C::YELLOW . "Enabled Tutorial");
    }

    public function onDisable(): void{
        $this->getLogger()->info(C::RED . "Disabled Tutorial");
    }
}