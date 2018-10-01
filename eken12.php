<?php
$dbname = 'ehondb';        // データベース名
$host = 'localhost:8000';        // ホスト
$dsn = 'mysql:dbname='.$dbname.';host='.$host.';charset=utf8';
$user = null;
$password = null;
$dbh = new PDO($dsn,$user,$password);
$KEY = mysql_real_escape_string($_POST['tword']);
$require = "SELECT * FROM tosho2 WHERE title LIKE '%{$KEY}%'";//SQL文作成
$recordSet = mysqli_query($db, $require);//DBとSQL文を実行
while ($table = mysqli_fetch_assoc($recordSet)) {
?>

<!DOCTYPE html>
    <html lang="ja">
<head>
    <meta charset="utf-8">
    <title>検索結果</title>
</head>
<body>
<?php
while ($table = mysqli_fetch_assoc($recordSet)) {
?>

<p><?php print(htmlspecialchars($table['title'])); ?></p>

</body>
</html>
<?php
return;}//*//
?>
