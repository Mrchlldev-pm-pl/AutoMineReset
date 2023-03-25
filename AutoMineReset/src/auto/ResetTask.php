<?php

namespace auto;

use auto\Main;
use pocketmine\scheduler\Task;

class ResetTask extends Task {
  
  private $main;
  
  public function __construct(Main $main) {
    $this->main = $main;
  }
  
  public function onRun(): void {
    $this->main->resetmine();
  }
}
