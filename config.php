<?php
header('Content-Type: text/html; charset=UTF-8');

define( 'WB_LIB_PATH', realpath( dirname(__FILE__) . '/../../lib/' ) );

set_include_path( get_include_path() . PATH_SEPARATOR . WB_LIB_PATH );

define( "WB_AKEY" , '720919947' );
define( "WB_SKEY" , '9653a47047d43546cb250747695a1d7f' );
define( "WB_CALLBACK_URL" , 'http://weibosdk.sinaapp.com/callback.php' );
