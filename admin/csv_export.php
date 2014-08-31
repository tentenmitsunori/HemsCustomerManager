<?php
    require "../config/db.php";
    require "../model/user.php";
    $user = new User();
    $users = $user->getAll();
	$csv_data = '';
	//配列にデータが入っている場合は1行の文字列にしてカンマ区切りのデータにしましょう
	//末尾は改行コードで。''じゃなく、""でくくりましょう。
	while ($row = mysql_fetch_assoc($users)) {
		$csv_data.= $row["last_name"]
		.','.$row["first_name"]
		.','.$row["last_name_ja"]
		.','.$row["last_name_ja"]   
		.','.$row["first_name_ja"]
		.','.$row["email"]
		.','.$row["phone"]
		.','.$row["address"]."\n";
	}
	//出力ファイル名の作成
	$csv_file = "csv_". date ( "Ymd" ) .'.csv';

	//文字化けを防ぐ
	$csv_data = mb_convert_encoding ( $csv_data , "sjis-win" , 'utf-8' );

	$fileName = "user.csv";
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename=' . $fileName);
	echo $csv_data;
?>
