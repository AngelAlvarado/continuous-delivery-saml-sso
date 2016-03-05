<?php

$config = array(

    'admin' => array(
        // SAML will use this authentication source to do its own authentication.
        // The module used for this is core:AdminPassword, but it can be replaced with
        // any authentication source.
        'core:AdminPassword',
    ),

    'openidp' => array( //we will named our SP 'openidp'
        'saml:SP', //we want to use SAML for this SP
        'entityID' => 'http://192.168.33.99/simplesaml/idp', //this is the ID for this SP, later on it will be used in the IdP
        'privatekey' => 'saml.pem', //stored in simplesaml/cert
        'certificate' => 'saml.crt', //stored in simplesaml/cert
    ),

    'molanco-authentication' => array(
        'exampleauth:UserPass',
        'admin1:admin1' => array(
            'email' => array('admin1@molanco.com'),
            'roles' => array('2', '3'),
        ),
        'admin2:admin2' => array(
            'email' => array('admin2@molanco.com'),
            'roles' => array('2', '4'),
        ),
    ),

);
