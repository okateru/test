<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>4each blog 掲示板</title>
	<link rel="stylesheet"type="text/css"href="style.css">
</head>
	<body>
		
		<?php
			mb_internal_encoding("utf8");
			$pdo=new PDO("mysql:dbname=contactform;host=localhost;","root","mysql");
			$stmt=$pdo->query("select *from 4each");
			while($row=$stmt->fetch()){
				echo $row['handlename'];
				echo $row['title'];
				echo $row['comments'];
			}
		?>
		
			
		<header>
			<img src="4eachblog_logo.jpg">
		</header>
		<main>
			<ul>
				<li>トップ</li>
				<li>プロフィール</li>
				<li>4eachについて</li>
				<li>登録フォーム</li>
				<li>問い合わせ</li>
				<li>その他</li>
			</ul>		
		<div class="left">
			<form method="post" action="insert.php" class="form">
			<section>
				<h3>ハンドルネーム</h3>
				<input type="text" class="text" name="handlename" size="50">
			</section>
			<section>
				<h3>タイトル</h3>
				<input type="text"  class="text"name="title" size="50">
			</section>
			<section>
				<h3>コメント</h3>
				<textarea name="comments" rows="10" cols="40"></textarea>
			</section>
			<section>
				<input type="submit" class="submit" value="投稿する">
			</section>
			</form>
		</div>
		<div class="right">
			<section>
				<p class="title">人気の記事</p>
			</section>
			<section>
				<br>
				<p>PHPオススメ本</p>
				<br>
				<p>PHP　Myadminの使い方</p>
				<br>
				<p>今人気のエディタTop5</p>
				<br>
				<p>HTMLの基礎</p>
				<br>
			</section>	
			<section>
				<p class="title">オススメリンク</p>
			</section>
			<section>
				<br>
				<p>インターノウス株式会社</p>
				<br>
				<p>XAMPPのダウンロード</p>
				<br>
				<p>Eclipseのダウンロード</p>
				<br>
				<p>Braketsのダウンロード</p>
				<br>
			</section>
			<section>
				<p class="title">カテゴリ</p>
			</section>
			<section>
				<br>
				<p>HTML</p>
				<br>
				<p>PHP</p>
				<br>
				<p>MySQL</p>
				<br>
				<p>JavaScript</p>
				<br>
			</section>	
		</div>		
		</main>
		<fooder>
			<p>copyright internous|4each blog is the one which provides a to z about programming.</p>
		</fooder>
	</body>
</html>