<?php

//TODO: Secure this somewhere? Bind as user?

require_once 'Net/LDAP2.php';
    // The configuration array:
    $config = array (
        'binddn'    => 'cn=admin,dc=plug,dc=org,dc=au',
        'bindpw'    => 'plug',
        'basedn'    => 'dc=plug,dc=org,dc=au',
        'host'      => 'localhost'
    );

    // Connecting using the configuration:
    $ldap = Net_LDAP2::connect($config);

    // Testing for connection error
    if (PEAR::isError($ldap)) {
        die('Could not connect to LDAP-server: '.$ldap->getMessage());
    } 


?>
