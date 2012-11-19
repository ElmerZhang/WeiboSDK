<?php
session_start();

include_once( 'config.php' );
include_once( 'saetv2.ex.class.php' );

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );
$o->set_debug( DEBUG_MODE );

if (isset($_REQUEST['code'])) {
	$keys = array();

	// 验证state，防止伪造请求跨站攻击
	$state = $_REQUEST['state'];
	if ( empty($state) || $state !== $_SESSION['weibo_state'] ) {
		echo '非法请求！';
		exit;
	}
	unset($_SESSION['weibo_state']);

	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = WB_CALLBACK_URL;
	try {
		$token = $o->getAccessToken( 'code', $keys ) ;
	} catch (OAuthException $e) {
	}
}

if ($token) {
	$_SESSION['token'] = $token;
	setcookie( 'weibojs_'.$o->client_id, http_build_query($token) );
?>
授权完成,<a href="weibolist.php">进入你的微博列表页面</a><br />
<?php
} else {
?>
授权失败。
<?php
}
?>
