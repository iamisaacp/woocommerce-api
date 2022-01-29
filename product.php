<?php
   
   if ($_SERVER['REQUEST_METHOD'] == 'GET' && $parameter=='products' && !empty($value) ) {  // Get Product by ID

    $allProduct = $woocommerce->get('products/'.$value);

        echo "<pre>";
        print_r($allProduct); 
        echo "</pre>";
    } // Get Product by ID

if ($_SERVER['REQUEST_METHOD'] == 'DELETE' && $parameter=='products' && !empty($value)) { // Delete Product If Delete Request Method is detected

    print_r($woocommerce->delete('products/'.$value, ['force' => true])); 

}  // END Delete Product If Delete Request Method is detected



if($_SERVER['REQUEST_METHOD'] == 'GET' &&  $parameter=='products' && empty($value)  ){  // Display all product if no parameter 

    $allProduct = $woocommerce->get('products');

    echo "<pre>";
    print_r($allProduct); 
    echo "</pre>";

}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($value) &&  $parameter=='products'  ) {

$data = [
    'name' => 'Premium Quality',
    'type' => 'simple',
    'regular_price' => '21.99',
    'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
    'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
    'categories' => [
        [
            'id' => 16
        ],
        [
            'id' => 17
        ],
        [
            'id' => 22
        ]
    ],
    'images' => [
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
        ],
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
        ]
    ]
];


print_r($woocommerce->post('products', $data));

}




?>