<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

    public $template = 'template/template';
    protected $_title;
    protected $__JS__;
    protected $__CSS__;

    
    public function before()
    {
        parent::before();
        $this->_title = 'anxlog.pl;';
        $this->__JS__ = 'public/js/';
        $this->__CSS__= 'public/css/'; 
    }
    
    public function after()
    {
        $_script = array(   
        );

        $_style = array(    $this->__CSS__.'style.css'    
        );

        $this->template->header = View::factory('template/part/header');
        $this->template->menu = View::factory('template/part/menu');
        $this->template->footer = View::factory('template/part/footer');
        
        $this->template->title    = $this->_title;
        $this->template->style   = $_style; 
        $this->template->script  = $_script; 
        
        parent::after();
    }    
}
