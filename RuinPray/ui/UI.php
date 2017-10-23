<?php

namespace RuinPray\ui;

use pocketmine\network\mcpe\protocol\ModalFormResponsePacket;
use pocketmine\network\mcpe\protocol\ModalFormRequestPacket;

use pocketmine\Player;

use RuinPray\ui\forms\CustomForm;
use RuinPray\ui\forms\SimpleForm;
use RuinPray\ui\forms\ModalForm;

class UI {

	public static function createCustomForm(Int $id){
		return new CustomForm($id);
	}

	public static function createModalForm(Int $id){
		return new ModalForm($id);
	}

	public static function createSimpleForm(Int $id){
		return new SimpleForm($id);
	}

	public static function sendForm($player, $form){
		$pk = new ModalFormRequestPacket();
		$form->encode();
		$pk->formId = $form->getId();
		$pk->formData = $form->getData();
		$player->dataPacket($pk);
	}

}