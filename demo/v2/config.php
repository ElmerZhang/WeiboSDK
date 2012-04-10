<?php
header('Content-Type: text/html; charset=UTF-8');

define( 'WB_LIB_PATH', realpath( dirname(__FILE__) . '/../../lib/' ) );

set_include_path( get_include_path() . PATH_SEPARATOR . WB_LIB_PATH );

define( "WB_AKEY" , 'xxxxxxxxxx' );
define( "WB_SKEY" , 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx' );
define( "WB_CALLBACK_URL" , 'http://xxxxxxxxxxxxx/demo/v2/callback.php' );
