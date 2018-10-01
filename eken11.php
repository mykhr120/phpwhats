<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>eken11.php</title>
    </head>
<body>

<?php

$dbname = 'ehondb';        // データベース名
$host = 'localhost:8080';        // ホスト
$dsn = 'mysql:dbname='.$dbname.';host='.$host.';charset=utf8';
$user = null;
$password = null;
$hitno = 0;
$tword = $_POST['tword'];
echo "参考 受け取ったパラメタ：".$tword."<BR><BR>;
$dbh = new PDO($dsn,$user,$password);
$stmt = $dbn->query($sql);
$string = '%'.$tword.'%';
echo ".$string.";
if ($string <> null)
{ $sql = "SELECT * FROM tosho2 WHERE title LIKE '%'.ぐりとぐら.'%' "; }
 echo "参考　作成したSELECT文：".$sql."<BR><BR>";
 $stmt = $dbh -> prepare($sql);
 $stmt -> execute();
 while ($data = $stmt -> fetch(PDO::FETCH_ASSOC)) {
 $rno = $data ['rno']; $title = $data ['title'];
 $link = $data ['link'];
 echo "<H2>検索結果</H2>";
 echo "$rno )","題名：".$title."<BR>";
 $hitno = $hitno + 1;
 }
if ($hitno==0) { echo "<p> <BR> *** 該当するものがありません。</p>"; }
$dbh = null;

    ?>

</body>

</html>
