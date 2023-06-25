<?php

namespace auto;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\console\ConsoleCommandSender;
use pocketmine\lang\Language;

use pocketmine\event\Listener;

use auto\ResetTask;

class Main extends PluginBase implements Listener {
  
  private $task1;
  
  public function onEnable(): void{
    $this->getLogger()->info("Plugin Enable");
    $this->task1 = new ResetTask($this);
    $this->getScheduler()->scheduleRepeatingTask($this->task1, 18000);
  }
  
  public function onDisable(): void{
    $this->getLogger()->info("Plugin Disable");
  }
  
  public function resetmine() : void{
    $this->getServer()->broadcastMessage("§l§a»» Tempat Mining Akan Direset! Silahkan Keluar Dari Area Mining");
    $this->getServer()->dispatchCommand(new ConsoleCommandSender(Server::getInstance(), new Language("eng")), 'minereset resetall');
    $this->getServer()->dispatchCommand(new ConsoleCommandSender(Server::getInstance(), new Language("eng")), 'minereset resetall');  
  }
}
