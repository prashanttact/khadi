<?php
return array(
    //----------------------------
    // set your paypal credential 
    //----------------------------

    'client_id' =>'AZ_ntagxo0bRSEkgR7NO0rs3kK4-LSxP2nXUrdymWE4IXUXjpGFhpDXcYy1Wntkf0uBjqjj_GmFyEhBi',
    'secret' => 'ECzuYGBIBkMeFR3_d4ulKxqVOiBN8_G69bactniJO1vgfboTjEqXNREvLOsx3K62oZVct9JWNFunFfvU',

    //----------------
    // SDK Setup
    //---------------

    'settings' => array(
    
    // Set Paypal Mode 2 option 'Live' or 'sandbox'

    'mode' => 'sandbox',

    // Set maximum request time

    'http.ConnectionTimeOut' => 1000,
    
    // Set log Enabled or not

    'log.LogEnabled' => true,

    // Specify the file that want to write on

    'log.FileName' => storage_path() . '/logs/paypal.log',

    //-----------------------------------------------------------------
    //Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
    //Logging is most verbose in the 'FINE' level and decreases as you
    //-----------------------------------------------------------------

    'log.LogLevel' => 'FINE'
    ),
);

?>