<?php
include(__DIR__.'/../connections/connection.php');
include(__DIR__.'/../tenancy/tenancy.php');
require_once(__DIR__.'../../../config/config.php');

$db = new DatabaseConnection($dbConfig);
$db->connectCentral();
$tenancy = new Tenancy($db);

$subdomain = $tenancy->currentSubdomain();

// $tenancy->createTenant('testtenancy_'.$subdomain);
// $db->switchTenant('testtenancy_'.$subdomain);
?>
