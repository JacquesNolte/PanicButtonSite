<?php

    $cartTotal = 699;
    $data = array(
        'merchant_id' => $_POST['merchant_id'],
        'merchant_key' => $_POST['merchant_key'],
        'return_url' => $_POST['return_url'],
        'cancel_url' => $_POST['cancel_url'],
        'notify_url' => $_POST['notify_url'],
        'name_first' => $_POST['name_first'],
        'name_last' => $_POST['name_last'],
        'email_address' => $_POST['email_address'],
        'cell_number'=> $_POST['cell_number'],
        'unique_payment_id' => $_POST['unique_payment_id'],
        'item_name' => $_POST['item_name']
    );

    $getString = substr( $pfOutput, 0, -1 );

    $data['signature'] = md5( $getString );

    echo(json_encode($data));
