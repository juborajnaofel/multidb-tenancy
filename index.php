<?php 
require_once(__DIR__.'/src/boot/boot.php');


if($subdomain){
    echo "Inside Tenant";
}else {
    echo "Inside Central";
}