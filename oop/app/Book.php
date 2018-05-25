<?php

require_once 'ShopProduct.php';

class Book extends ShopProduct{

	public $numPages;

	public function __construct($title, $productMainName, $productFirstName, $price =0, $numPages){
			parent::__construct($title, $productMainName, $productFirstName, $price);
			$this->numPages = $numPages;
	}

	public function get_pageNum(){
		return $this->numPages;
	}

	function getSummaryLine () {
		$base = $this->title . $this->producerMainName;
		$base.= $this->producerFirstName ;
		$base.=  $this->numPages ;
		return $base ;
	}

}
