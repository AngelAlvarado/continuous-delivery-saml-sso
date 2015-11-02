<?php
$db_url='mysql://taxnotes:taxnotes@localhost/taxnotes';
$databases=array('default' => array(
    'default' => array(
        'database' => 'taxnotes',
        'username' => 'taxnotes',
        'password' => 'taxnotes',
        'driver' => 'mysql',
        'host' => 'localhost',
    ),
),);
require_once DRUPAL_ROOT . '/sites/default/vendor/autoload.php';
