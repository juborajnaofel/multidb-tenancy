<?php 
require_once(__DIR__.'/src/boot/boot.php');


if($subdomain){
	$tenancy->createTenant('testtenancy_'.$subdomain);
	$db->switchTenant('testtenancy_'.$subdomain);
	echo "Inside Tenant";
}else {
    echo "Inside Central";
}
