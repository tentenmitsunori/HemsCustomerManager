<meta charset='utf-8'>
<?php
  //dbの設定を記入
  $db = "HemsCustomerManager";	
  $link = mysql_connect('127.0.0.1', 'root', 'dumsco0522'); 
  if (!$link) {
	die('接続失敗です。'.mysql_error());
  }
  $sdb = mysql_select_db($db,$link) or die("データベースの選択に失敗しました。");

?>
