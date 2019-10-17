<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>4eachblog 掲示板</title>
<link rel=stylesheet type="text/css" href="style.css">
</head>
<body>
  <?php
    mb_internal_encoding("utf8");
    $pdo= new PDO("mysql:dbname=mariko;host=localhost;","root","mysql");
    $stmt=$pdo->query("select * from 4each_keijiban");
    ?>
   <header>
        <img src="4eachblog_logo.jpg" width="250">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    <main>
        <div class="allpart">
           
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
            
            <div id="confirm">
                <h3>入力フォーム</h3>
                <form method="post" action="insert.php">
                    <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" size=35 name="handlename">
                    <br>
                    </div>
                    
                    <div>    
                    <label>タイトル</label>
                    <br>
                    <input type="text" size=35 name="title">
                    <br>
                    </div>
                    
                    <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols=45 rows=5 name="comments"></textarea>
                    <br>
                    </div>
                    
                    <input type="submit" class="submit" value="投稿する">
                </form>
            </div>
              <?php
                
                while($row=$stmt->fetch()){
                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
                }
                ?>
                
               </div>
            </div>
                
            <div class="right">
            <ul>
                <h3>人気の記事</h3>
                <li>PHPオススメ本</li>
                <li>PHP　MyAdminの使い方</li>
                <li>いま人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>

            <ul>
                <h3>オススメリンク</h3>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>

            <ul>
                <h3>カテゴリ</h3>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
            </div>
    </main>
    
    <footer>
    copyright internous| 4each blog is the one which provides A to Z about programming.
    </footer>
</body>

</html>