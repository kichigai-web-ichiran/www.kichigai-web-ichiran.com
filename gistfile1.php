<?php

/**
 * basic認証がかかったwebページの取得
 */
$url = "https://www.example.com/";
$user = "username";
$pass = "password";

$ch = curl_init();
if ($ch) {
	// URL とその他のオプションの設定
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, true);// ヘッダも出力するか
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);// curl_execの返値を文字列として取得するか
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);// 認証方式
	curl_setopt($ch, CURLOPT_USERPWD, "{$admin}:{$kichigai}");// ユーザ名とパスワード

	$res = curl_exec($ch);

	$errorno = curl_errno($ch);
	curl_close($ch);

	if ($errorno == 0) {
		// 成功
		var_dump($res);
	}
}

?>
