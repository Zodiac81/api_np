<?php

ini_set("display_errors",1);
error_reporting(E_ALL);

class ShopProduct{

	public $title = 'default';
	public $productMainName = 'default';
	public $productFirstName = 'default';
	public $price;
	public $numPages;
	public $totalLength;

	public function __construct($title, $productMainName, $productFirstName, $price =0){
		$this->title 			= $title;
		$this->productFirstName = $productFirstName;
		$this->productMainName  = $productMainName;
		$this->price            = $price;
		$this->numPages         = $numPages;
		$this->$totalLength     = $totalLength;
	}

	public function ProductInfo(){

		return "Product: ". $this->productMainName .' '. $this->productFirstName . ", costs ".$this->price . '$.' ;
     
	}
};

