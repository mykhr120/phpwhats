<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>ealgo31.php</title>
    </head>
<body>
    
    <h2>アルゴリズム　２語のキーワード処理</h2>

    <?php
    $kword = $_POST ['kword'];
    if ($kword<>null)
    {echo "入力されたキーワード　⇨ ",$kword,"<BR>";}
    else {echo "キーワードが入力されていません。"; exit; }
    $kigou1 = "　"; //全角　スペース
    $kigou2 = " "; //半角 スペース
    $slash1 = "/"; //半角スラッシュ
    $slash2 = "//"; //半角スラッシュ2文字
    $moji1 = $kword;
    $moji2 = str_replace($kigou1,$slash1,$moji1);
    $moji3 = str_replace($kigou2,$slash2,$moji2);
    echo "全角と半角のスペースを半角スラッシュに ⇨ ",$moji3,"<BR>";
    $moji4 = str_replace($slash2,$slash1,$moji1);
    $moji5 = str_replace($slash2,$slash1,$moji2);
    echo "連続するスラッシュを一つに ⇨ ",$moji5,"<BR>";
 $pos = strpos($moji5,$slash1);
 $word1 = substr($moji5,0,$pos);
 $word2 = substr($moji5,$pos + 1);
    echo "最初の語　⇨ ",$word1,"<BR>";
    echo "最後の語　⇨ ",$word2,"<BR>";
    
    
    ?>
    
    
</body>

</html>