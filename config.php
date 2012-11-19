<?php
header('Content-Type: text/html; charset=UTF-8');

// 调试模式开关
define( 'DEBUG_MODE', false );

if ( !function_exists('curl_init') ) {
    echo '您的服务器不支持 PHP 的 Curl 模块，请安装或与服务器管理员联系。';
    exit;
}

define( "WB_AKEY" , '720919947' );
define( "WB_SKEY" , '9653a47047d43546cb250747695a1d7f' );
define( "WB_CALLBACK_URL" , 'http://weibosdk.sinaapp.com/callback.php' );

if ( DEBUG_MODE ) {
    error_reporting(E_ALL);
    ini_set('display_errors', true);
}
