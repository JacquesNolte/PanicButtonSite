<?php
// $pfData includes of ALL fields posted through from PayFast, plus the empty strings
$pfData = $_POST;

print_r(json_encode($pfdata));

echo 'Item name: '.$_POST["item_name"];

echo 'Payment status: '.$_POST["payment_status"];

echo 'Gross amount paid: '.$_POST["amount_gross"];


// Construct variables 
// foreach( $pfData as $key => $val )
// {
//     if( $key != 'signature' )
//     {
//         echo $VAL;
//         // $pfParamString .= $key .'='. urlencode( $val ) .'&';
//     }
// }

// Remove the last '&' from the parameter string
// $pfParamString = substr( $pfParamString, 0, -1 );
// $pfTempParamString = $pfParamString;
// // Passphrase stored in website database
// $passPhrase = '';

// if( !empty( $passPhrase ) )
// {
//     $pfTempParamString .= '&passphrase='.urlencode( $passPhrase );
// }
// $signature = md5( $pfTempParamString );

// if($signature!=$pfData['signature'])
// {
//     die('Invalid Signature');
// }