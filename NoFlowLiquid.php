<?php

/**
 * @name NoFlowLiquid
 * @main NoFlowLiquid\NoFlowLiquid
 * @author SYNK
 * @version x
 * @api x
 * @description x
 */


namespace NoFlowLiquid;


use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\Server;
use pocketmine\block\Liquid;
use pocketmine\event\block\BlockSpreadEvent;


class NoFlowLiquid extends PluginBase implements Listener
{

	public function onEnable () : void
	{
		Server::getInstance()->getPluginManager()->registerEvents ($this, $this);
	}

	public function onSpread(BlockSpreadEvent $event) : void
	{
		if (!$event->getSource() instanceof Liquid)	
			return;
		$event->setCancelled(true);
	}

}
