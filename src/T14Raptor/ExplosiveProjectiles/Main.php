<?php

namespace T14Raptor\ExplosiveProjectiles;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\level\Explosion;

class Main extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onProjectileHit(ProjectileHitEvent $event) {
        $explosion = new Explosion($event->getEntity()->getPosition(), 10);
        $event->getEntity()->kill();
        $explosion->explodeA();
        $explosion->explodeB();
    }
}