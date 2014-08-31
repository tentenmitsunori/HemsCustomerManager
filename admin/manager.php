<?php
   require "../config/db.php";
   require "../model/user.php";
   $user = new User();
   $users = $user->getAll();
?>



<!doctype html>
<html lang="ja-JP">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="福島県郡山市におけるデジタルグリッドの実証実験の参加者募集ページです!">
<meta name="author" content="Digital Grid">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="icon" href="favicon.ico">
<title>The Digital Grid</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/paper/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<style>
body { padding-top: 80px; padding-bottom: 40px; }
footer { text-align: center; }
</style>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="manager.php">Digital Grid Administrator</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="../index.html">トップページ</a></li>
				<li><a href="../form.html">登録ページ</a></li>
				<li><a href="../contact.html">問い合わせページ</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4 class="text-primary">登録者一覧</h4>
			<!-- PHP starts here -->
			<table class="table table-condensed table-striped">
				<thead>
					<tr>
						<th>姓</th>
						<th>名</th>
						<th>姓(かな)</th>
						<th>名(かな)</th>
						<th>メールアドレス</th>
						<th>電話番号</th>
						<th>住所</th>
					</tr>
				</thead>
				<tbody>
				<?php while ($row = mysql_fetch_assoc($users)) { ?>
					<tr>
						<td><?php echo $row["last_name"] ?></td>
						<td><?php echo $row["first_name"] ?></td>
						<td><?php echo $row["last_name_ja"] ?></td>
						<td><?php echo $row["first_name_ja"] ?></td>
						<td><?php echo $row["email"] ?></td>
						<td><?php echo $row["phone"] ?></td>
						<td><?php echo $row["address"] ?></td>
					</tr> 
				<?php } ?>
				</tbody>
			</table>
			<!-- PHP ends here -->

		</div><!-- col-md-12 -->
	</div><!-- row -->
</div><!-- container -->

<!-- Footer -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<hr>
			<footer>
				<p>&copy; The University of Tokyo -  Presidential Endowed Chair for Electric Power Network Innovation by Digital Grid 2014</p>
			</footer>			
		</div>
	</div>
</div>

<!-- Javascript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>










