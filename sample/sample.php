<?php
namespace sample;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\ModalFormResponsePacket;
use pocketmine\plugin\PluginBase;
use RuinPray\ui\UI;
use RuinPray\ui\elements\StepSlider;
use RuinPray\ui\elements\Dropdown;
use RuinPray\ui\elements\Toggle;

class sample extends PluginBase implements Listener{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}


	//example
	public function onTap(PlayerInteractEvent $event){
		$p = $event->getPlayer();
		if($p->getInventory()->getItemInHand()->getId() === 339){
			$form = UI::createCustomForm(10101);
			$form->setTitle("send Data");
			
			//step slider
			$form->addContent((new StepSlider)
				->text("You are free?")
				->steps(["Free!!", "Why?", "Ahhhhhh", "you are banned"])
			);

			//Dropdown
			$form->addContent((new Dropdown)
				->text("Choose.")
				->options(["optionA", "optionB", "optionC", "optionAAAAAA"])
			);

			//Toggle
			$form->addContent((new Toggle)
				->text("Push it.")
				->default(true)
			);

			//send
			UI::sendForm($p, $form);
		}
	}


	public function onDataPacket(DataPacketReceiveEvent $event){
		$pk = $event->getPacket();
		if($pk instanceof ModalFormResponsePacket){
			if($pk->formId === 10101){
				$data = json_decode($pk->formData);
				var_dump($data);// Return values ​​view
				//process
			}
		}
	}
}
