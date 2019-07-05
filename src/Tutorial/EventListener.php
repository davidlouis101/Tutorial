<?php

namespace Tutorial;

use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat as C;

class EventListener implements Listener{

    public function onJoin(PlayerJoinEvent $e): void{
        $player = $e->getPlayer();

        $e->setJoinMessage(""); //set default join message to nothing
        $player->sendMessage("Hi");
        Server::getInstance()->broadcastMessage(C::AQUA . $player->getName() . " " . C::GREEN . " has joined");
    }

    public function onQuit(PlayerQuitEvent $e): void{
        $player = $e->getPlayer();

        $e->setQuitMessage(""); //set default quit message to nth
        Server::getInstance()->broadcastMessage(C::AQUA . $player->getName() . " " . C::RED . " has left");
    }
}