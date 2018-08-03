<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/08/03
 * Time: 8:24
 */

namespace SkinData;


use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public static $path;

    public function onEnable(): void
    {
        self::$path = $this->getDataFolder();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $event)
    {
        $datafile = new DataFile($event->getPlayer()->getName());
        $datafile->write('skindata.txt', base64_encode($event->getPlayer()->getSkin()->getSkinData()));
    }
}