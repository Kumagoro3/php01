<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="sample.css">
<title>File読み出し</title>
</head>
<body>

<?php

$filename = 'data/data.txt';
// ファイル読み込み
$contents = file_get_contents($filename);
// 読み込んだデータを1行ずつ処理
$rows = explode(",",$contents);
// $str = mb_convert_encoding($rows,"utf-8","sjis");

function h($s){
    return htmlspecialchars($s, ENT_QUOTES);
}

?>


<h1>アンケート結果</h1>
<table>
<tr>
<th>回答時刻</th>
<th>氏名</th>
<th>メールアドレス</th>
<th>好きな食べ物</th>
<th>行きたい旅行先</th>
</tr>
<?php
// foreach ($contents as $content){
//     echo("<tr>");
//   }
// foreach ($rows as $row) {
//     echo('<td>'.$row.'</td>'.'<td>'.$row.'</td>');
// }
// foreach ($contents as $content){
//     echo("</tr>");
//   }
for($i = 0; $i<99; $i++){
    echo("<tr>");
    for($j = 0+($i*5); $j < 5+($i*5); $j++){ 
        echo("<td style='text-align: center;'>".$rows[$j]."</td>");
       } 
    echo("</tr>");
}


// echo($rows[0]);
?>
</table>

<ul>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>