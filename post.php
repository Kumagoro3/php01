<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
	<h1>アンケートをします！</h1>
<form action="write.php" method="post">
	<ul>
		<li>お名前: <input type="text" name="name"></li>
		<li>EMAIL: <input type="text" name="mail"></li>
		<li>Q1:好きな食べ物は？ <input type="text" name="q1"></li>
		<li>Q2:行きたい旅行先は？ <input type="text" name="q2"></li>
	</ul>
	<input type="submit" value="送信">
</form>
<ul>
<li><a href="index.php">目次</a></li>
<li><a href="read.php">アンケート結果を確認する</a></li>
</ul>
</body>
</html>