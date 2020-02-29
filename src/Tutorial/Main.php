<?php

namespace Tutorial;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
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

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
	    //$sender is a player
        switch($command){
            case "YT":
            $sender->sendMessage("YT : Crow Balde");
            break;
            case "Discord":
            $sender->sendMessage("Discord : https://discord.gg/fV93frR");
            break;
        }
        return true;
    }
}
