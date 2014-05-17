<?php

$installer = $this;
$installer->startSetup();
$installer->run("
    
CREATE TABLE `{$installer->getTable('basic/sample')}` (
        `id` int(11) NOT NULL auto_increment,
        `title` text,
        `filename` varchar(255) NOT NULL default '',
        `date` datetime default NULL,
        `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
        PRIMARY KEY  (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        
    ");

$installer->endSetup();