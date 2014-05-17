<?php

class OX_Basic_Model_Resource_Sample_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {

    protected function _construct() {
        $this->_init('basic/sample');
    }

}