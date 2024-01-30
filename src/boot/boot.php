<?php
include(__DIR__.'/../connections/connection.php');
include(__DIR__.'/../tenancy/tenancy.php');

$db = new DatabaseConnection();
$db->connectCentral();
$tenancy = new Tenancy($db);

$subdomain = $tenancy->currentSubdomain();

$tenancy->createTenant('testtenancy_'.$subdomain);
$db->switchTenant('testtenancy_'.$subdomain);

?>
