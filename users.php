<?php


    if ($_SERVER['REQUEST_METHOD'] == 'GET' && $parameter=='users' && !empty($value)) {  // Get User by ID

        $users = $woocommerce->get('customers/'.$value);

            echo "<pre>";
            print_r($users); 
            echo "</pre>";
    } // Get User by ID

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $parameter=='users' && empty($value)) {  // Add User 


        $data = [
            'email' => 'john.doe@example.com',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'username' => 'john.doe',
            'billing' => [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'company' => '',
                'address_1' => '969 Market',
                'address_2' => '',
                'city' => 'San Francisco',
                'state' => 'CA',
                'postcode' => '94103',
                'country' => 'US',
                'email' => 'john.doe@example.com',
                'phone' => '(555) 555-5555'
            ],
            'shipping' => [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'company' => '',
                'address_1' => '969 Market',
                'address_2' => '',
                'city' => 'San Francisco',
                'state' => 'CA',
                'postcode' => '94103',
                'country' => 'US'
            ]
        ];
        
        print_r($woocommerce->post('customers', $data));

    } // Add User  


    if ($_SERVER['REQUEST_METHOD'] == 'PUT' && $parameter=='users' && !empty($value)) {  // Add User 

        $data = [
            'first_name' => 'James',
            'billing' => [
                'first_name' => 'James'
            ],
            'shipping' => [
                'first_name' => 'James'
            ]
        ];
        
        print_r($woocommerce->put('customers/'.$value, $data));
        
    } // Add User  

?>