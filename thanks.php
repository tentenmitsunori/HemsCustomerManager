<?php
   require "./config/db.php";
   require "./model/user.php";
   $user = new User();
   $user->create($_POST);
   mb_language("Ja");
   mb_internal_encoding("utf-8");
   $to= $_POST["email"];
   $subject="タイトルですよ";
   $content="内容を入れます\nあああ\nいいい";
   $from = "From: tentenmitsunori@gmail.com\r\n"; 
   $isSuccess = mb_send_mail($to, $subject, $content, $from, $from);
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
<meta property="og:title" content="The Digital Grid" />
<meta property="og:type" content="website" />
<meta property="og:description" content="福島県郡山市におけるデジタルグリッドの実証実験の参加者募集ページです!" />
<meta property="og:url" content="http://www.digitalgrid.org/" />
<meta property="og:email" content="admin@ml.digitalgrid.org " />
<meta property="og:image" content="http://www.digitalgrid.org/images/stories/logo.png "/>
<meta property="og:site_name" content="The Digital Grid"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/paper/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" href="stylesheets/common.css">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">Digital Grid</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="form.html">ご登録</a></li>
				<li><a href="contact.html">お問い合わせ</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
		<h4 class="text-success">ご登録ありがとうございました。</h4>


<!-- ========================================================================================================================

	
	 INSERT PHP SCRIPT HERE.


	 ======================================================================================================================== -->

			
		</div>
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
<script>(function(a,e,f,g,b,c,d){a.GoogleAnalyticsObject=b;a[b]=a[b]||function(){(a[b].q=a[b].q||[]).push(arguments)};a[b].l=1*new Date;c=e.createElement(f);d=e.getElementsByTagName(f)[0];c.async=1;c.src=g;d.parentNode.insertBefore(c,d)})(window,document,"script","//www.google-analytics.com/analytics.js","ga");ga("create","UA-54318293-1","auto");ga("send","pageview");</script>
</body>
</html>
