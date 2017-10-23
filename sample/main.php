<?php
namespace sample;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\ModalFormResponsePacket;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use RuinPray\ui\UI;
use RuinPray\ui\elements\StepSlider;

class main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onPlayer(PlayerInteractEvent $event){
		$p = $event->getPlayer();
		if($p->getInventory()->getItemInHand()->getId() === 339)
			$form = UI::createCustomForm(1001);
			$form->setTitle("メッセージ送信");
			$form->addContent((new StepSlider($this))
				->text("今暇?")
				->steps(["暇", "忙しい！", "なにそれ", "帰ってください"])
				->defaultIndex("暇")
			);
			UI::sendForm($event->getPlayer(), $form);
	}


	public function onDataPacket(DataPacketReceiveEvent $event){
		$pk = $event->getPacket();
		$p = $event->getPlayer();
		if($pk instanceof ModalFormResponsePacket){
			if($pk->formId === 1001){
				$data = json_decode($pk->formData);
				var_dump($data);
				//処理
			}
		}
	}
}