<?php
abstract class Controller{
	public $request;

	public function __construct($request){
		$this->request = $request;
	}
}