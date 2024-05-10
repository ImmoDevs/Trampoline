<?php

namespace ImmoDev\Trampoline;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\PlayerMoveEvent;
use pocketmine\player\Player;
use pocketmine\math\Vector3;
use pocketmine\block\BlockTypeIds;

class Main extends PluginBase implements Listener {

	public function onEnable(): void {
		$this->getLogger()->info("Plugin actived");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onMove(PlayerMoveEvent $event): void {
		$player = $event->getPlayer();
		$pos = $player->getPosition()->subtract(0, 1, 0);
        $block = $player->getWorld()->getBlock($pos);
        if ($block->getTypeId() == BlockTypeIds::SLIME) {
            $motion = new Vector3(0, 1, 0);
			$player->setMotion($motion);
        }
	}

	public function onDisable(): void {
        $this->getLogger()->info("Plugin deactived");
    }
}