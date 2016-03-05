<?php
/**
 * SAML 2.0 IdP configuration for simpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-hosted
 */

$metadata['__DYNAMIC:1__'] = array(
        /*
         * '__DEFAULT__' to use the IP (192.168.33.99) of the host by default
         */
        'host' => '__DEFAULT__',

        /*  Stored into the folder cer */
        'privatekey' => 'idp.pem',
        'certificate' => 'idp.crt',

        /*
         * In authsources.php we created this authenticated source
         */
        'auth' => 'molanco-authentication',
);
