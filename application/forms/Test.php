<?php

class Application_Form_Test extends Zend_Form
{
    public function init()
    {
        $this->addElement('text', 'name', array('label' => 'Name :', 'required' => 'true'));
    }
}