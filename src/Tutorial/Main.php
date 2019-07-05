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
            case "test":
            $sender->sendMessage("BABY GURL XD");
            break;
            case "lul":
            $sender->sendMessage("BABY GURLLLLLLLLLLLLLLLLLLLL");
            break;
            case "feed":
            if($sender->getFood() == 20){
                $sender->sendMessage(C::RED . "You don't need food.");
                return false;
            }
            $sender->setFood(20);
            $sender->sendMessage(C::GREEN . "You have been fed!");
            break;
            case "heal":
            if($sender->getHealth() == $sender->getMaxHealth()){
                $sender->sendMessage(C::RED . "You don't need health, you are full.");
                return false;
            }
            $sender->setHealth($sender->getMaxHealth());
            $sender->sendMessage(C::GREEN . "You have been healed!");
            break;
            case "fly":
            if($sender->getAllowFlight()){ //check if player fly is enabled
                $sender->setAllowFlight(false); //Disables your fly mode
                $sender->sendMessage(C::GREEN . "You have disabled your flight mode.");
                return false;
            }
            $sender->setAllowFlight(true); //Enables your fly mode
            $sender->sendMessage(C::GREEN . "You have enabled your flight mode.");
            break;
            case "clearinv":
            $sender->getArmorInventory()->clearAll(); //Clears your armor inventory
            $sender->getInventory()->clearAll(); //Clears your inventory
            $sender->sendMessage(C::GREEN . "Cleared your inventory.");
            break;
        }
        return true;
    }
}