<?php

class OX_Basic_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function testAction() {
        $collection = Mage::getModel('basic/sample')->getCollection();
        foreach ($collection as $model) {
            echo $model->getTitle();
            echo '<br />';
        }
    }

}