<?php
require __DIR__ . '../../vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/woocommerce-api/', 
    'ck_e8649fbd6d282dc3bc1022ad6c5ad020da14bc13', 
    'cs_d7e9b5de2f04c147d925ce01fc73f0b9d3b23e47',
    [
        'version' => 'wc/v3',
    ]
);



if($_SERVER['HTTP_HOST'] == '127.0.0.1' || $_SERVER['HTTP_HOST']== "localhost" ){
  
    $params = explode("/", $_GET['para']); 
    
    if(count($params)==2){ 
        $parameter   =   $params[0];
        $value       =   $params[1];
    }else if(count($params)==1){ 
        $parameter   =   $params[0];
        $value       =   '';
    }
     
}else{

    $params = explode("/", $_GET['para']);
    if(count($params)==2){ 
        $parameter   =   $params[0];
        $value       =   $params[1];
    }else if(count($params)==1){ 
        $parameter   =   $params[0];
        $value       =   '';
    }
}


?>