<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$c=",";

//文字作成
$str = date("Y-m-d H:i:s").$c.$name.$c.$mail.$c.$q1.$c.$q2.$c;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<li><a href="read.php">アンケート結果を確認する</a></li>

<ul>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>