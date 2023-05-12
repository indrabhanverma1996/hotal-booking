<?php 
return [ 
    'client_id' => 'AXurlgIAfSjBNYPeTC6pb25T3Yb0eJZEkW8JNj1QtTDAMsvKSg6LO8Uqks7727XpA0P2lEBSDdi4Hbqw',
	'secret' => 'EOfvXsnMxsdhzY5U6fCreFhjNRfTh6t4c20z4aaeSJFVoSygQor0wEzO8BEwjqPuLeFNmalLY',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];




?>