<?php

namespace ImmoDev\Trampoline;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\math\Vector3;
use pocketmine\world\particle\HappyVillagerParticle;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener
{
    private Config $config;

    private float $defaultPower = 0.8;
    private string $defaultBlock = "slime_block";
    private bool $defaultParticle = true;

    public function onEnable(): void
    {
        $this->saveDefaultConfig();
        $this->config = $this->getConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);

        $trampolinePower = $this->config->get('trampoline_power', $this->defaultPower);
        $trampolineBlock = $this->config->get('trampoline_block', $this->defaultBlock);
        $slimeParticle = $this->config->get('slime_particle', $this->defaultParticle);

        // Debugging log
        $this->getLogger()->info("§aTrampoline Power: §c" . $trampolinePower);
        $this->getLogger()->info("§aTrampoline Block: §c" . $trampolineBlock);
        $this->getLogger()->info("§aSlime Particle: " . ($slimeParticle ? "§aEnabled" : "§cDisabled")); 
     }
    public function onPlayerMove(PlayerMoveEvent $event): void
    {
        $player = $event->getPlayer();
        $pos = $player->getPosition()->subtract(0, 1, 0);
        $block = $player->getWorld()->getBlock($pos);

        $trampolineBlock = strtolower($this->config->get('trampoline_block', $this->defaultBlock));

        if (strtolower(str_replace(" ", "_", $block->getName())) === $trampolineBlock) {
            $power = $this->config->get('trampoline_power', $this->defaultPower);
            $motion = new Vector3(0, $power, 0);
            $player->setMotion($motion);

            if ($this->config->get('slime_particle', $this->defaultParticle)) {
                $particle = new HappyVillagerParticle();
                $player->getWorld()->addParticle($player->getPosition(), $particle);
            }
        }
    }

    public function onDisable(): void
    {
        $this->getLogger()->info("DeActived");
    }

    public function onDamage(EntityDamageEvent $event): void
    {
        if ($event->getCause() === EntityDamageEvent::CAUSE_FALL) {
            $event->cancel();
        }
    }
}
