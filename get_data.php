<?php

require('vendor/autoload.php');

use ShopExpress\ApiClient\ApiClient;
use ShopExpress\ApiClient\Response\ApiResponse;

$apiClient = new ApiClient('lNwzuV_Gb', 'admin', 'http://newshop.kupikupi.org/adm/api/');

$orders = $apiClient->get("orders", array(start=>0, limit=>50));

$json = json_encode($orders['orders']);
echo $json;
?>
