<?php

namespace Arabic;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;

 class Main extends PluginBase implements Listener{
 
  public function onEnable(){
  $this->getServer()->getPluginManager()->registerEvent($this, $this);
   }
   
    public function onKill(PlayerDeathEvent $e){
    $cause = $e->getEntity()->getLastDamageCause();
    if($cause instanceof EntityDamageByEntityEvent){
    $killer = $cause->getDamager();
    
     $killer = $e->getDamage();
      }
      
      public function onJoin(PlayerJoinEvent $e){
      $player = $e->getPlayer();
      $e->setJoinMessage
      
    
         
