<!DOCTYPE html>
<html lang="en">
<head>
	<!--подключаем кодировку и заголовок элементов сайта -->
	<?php $title = "Новости обо всем";
	require_once "/blocks/head.php"; 
	$news = getNews(3);
	?>    
</head>
<body>
<!--подключаем шапку сайта -->
	<?php require_once "/blocks/header.php" ?>
	<!--колонки-->
<div id="wrapper">
	<div id="leftcol">
	<?php 
	for ($i = 0; $i < count($news); $i++) {
		if($i == 0) echo "<div class=\"bigArticle\">";
		else echo "<div class=\"article\">";
		echo '<img src="/img/articles/1.jpg" alt="Статья 1">
			<h2>Статья 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam officia impedit voluptas aliquid nisi eaque blanditiis unde neque non pariatur facere magni quia, vitae fugit placeat reprehenderit, laborum, maxime quo!</p>
			<a href="/article.php">
				<div class="more">Далее</div>
			</a>
		</div>';
		if($i == 0)
			echo "<div class=\"clear\"><br></div>";
	}
	?>
<!--
		<div class="bigArticle">
		
			<img src="/img/articles/1.jpg" alt="Статья 1">
			<h2>Статья 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam officia impedit voluptas aliquid nisi eaque blanditiis unde neque non pariatur facere magni quia, vitae fugit placeat reprehenderit, laborum, maxime quo!</p>
			<a href="/article.php">
				<div class="more">Далее</div>
			</a>
		</div>
		<div class="clear"><br> </div>
		<div class="article">
			<img src="/img/articles/2.jpg" alt="Статья 2">
			<h2>Статья 2</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus nihil sit debitis voluptatem sunt porro mollitia maxime dolore nisi explicabo assumenda, dolor minus laboriosam.</p>
			<a href="/article.php">
				<div class="more">Далее</div>
			</a>
		</div>
		<div class="article">
			<img src="/img/articles/3.jpg" alt="Статья 3">
			<h2>Статья 3</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ipsum, cum voluptatibus vitae sed libero vel voluptatem neque nemo hic repellendus, tempore recusandae eius? Impedit eligendi ratione nesciunt iusto obcaecati ad odit, omnis ipsum consequuntur eius necessitatibus eum dolorum laboriosam laborum veritatis incidunt, placeat!</p>
			<a href="/article.php">
				<div class="more">Далее</div>
			</a>
		</div>
		-->
	</div>
	<?php require_once "/blocks/rightcol.php" ?>
</div>
<!--подвал сайта -->
<!--подключаем подвал сайта -->
	<?php require_once "/blocks/footer.php" ?>


</body>
</html>