<?php

class TestController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {

    }

    public function createAction()
    {
        $testForm = new Application_Form_Test();
       // var_dump($testForm,true);
        //$request = $this->getRequest();

        $this->view->testForm = $testForm;
    }

}