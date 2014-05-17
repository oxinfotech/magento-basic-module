<?php

class OX_Basic_Model_Resource_Sample extends Mage_Core_Model_Resource_Db_Abstract {

    protected function _construct() {
        $this->_init('basic/sample', 'id');
    }

}
