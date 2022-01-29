<?php 
    require __DIR__ . '/vendor/autoload.php';
    
    use Automattic\WooCommerce\Client;
    
    $woocommerce = new Client(
        'http://localhost/woocommerce-api/', 
        'ck_e8649fbd6d282dc3bc1022ad6c5ad020da14bc13', 
        'cs_d7e9b5de2f04c147d925ce01fc73f0b9d3b23e47',
        [
            'version' => 'wc/v3',
        ]
    );
    
?>

<?php 

$allProduct = $woocommerce->get('products');


echo "<pre>";
    print_r($allProduct); 
echo "</pre>";

?>