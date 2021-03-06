<?php
class View
{
    private $_controller;
    private $_action;

    public $rendered = false;

    public function __construct($controller,$action)
    {
        $this->_controller = $controller;
        $this->_action = $action;
    }

    public function render($view = null)
    {   
        if(!isset($view)){
            $view = $this->_action;
        }
        $this->rendered = true;
        require(ROOT.DS.'App'.DS.'View'.DS.$this->_controller.DS.$view.'.php');
    }

    public function disableRender()
    {
        $this->view->rendered=false;
    }
}