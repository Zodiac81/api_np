<?php

require_once 'ShopProduct.php';

class CD extends ShopProduct{

	public $totalLength;

	public function get_play_length(){
		return $this->play_length;
	}

	public function getSummaryLine () {
		$base = $this->title . $this->producerMainName;
		$base.= $this->producerFirstName ;
		$base.=  $this->totalLength;
		return $base ;
	}
}