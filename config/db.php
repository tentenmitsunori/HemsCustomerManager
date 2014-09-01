<?php
  //dbの設定を記入
  $db = "digitalgrid_hems";	
  $link = mysql_connect('127.0.0.1', 'root', 'password'); 
  if (!$link) {
	die('接続失敗です。'.mysql_error());
  }
  mysql_set_charset('utf8');
  $sdb = mysql_select_db($db,$link) or die("データベースの選択に失敗しました。");

?>
