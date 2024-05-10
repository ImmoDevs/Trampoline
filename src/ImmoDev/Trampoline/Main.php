<?php

namespace ImmoDev\Trampoline;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\world\particle\HappyVillagerParticle;
use pocketmine\math\Vector3;
use pocketmine\block\BlockTypeIds;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener {

	public $config;

	public function onEnable(): void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
		$this->getLogger()->info("Plugin Actived");
	}

	public function onDisable(): void {
		$this->getLogger()->info("Plugin DeActived");
	}

	public function onMove(PlayerMoveEvent $event): void {
		$player = $event->getPlayer();
		$pos = $player->getPosition()->subtract(0, 1, 0);
        $block = $player->getWorld()->getBlock($pos);
        if ($block->getTypeId() == BlockTypeIds::SLIME) {
			$power = $this->getConfig()->get('trampoline_power', 0.8);
            $motion = new Vector3(0, $power, 0);
			$player->setMotion($motion);

			$particle = new HappyVillagerParticle();
			$player->getWorld()->addParticle($player->getPosition(), $particle);
        }
	}

	public function onDamage(EntityDamageEvent $event): void {
		if ($event->getcause () === EntityDamageEvent::CAUSE_FALL) {
			$event->cancel();
		}
	}
}