
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>О компании</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-2.css" rel="stylesheet">
  </head>

  <body>
		
		<main class="main">
			<?php require 'header.php'; ?>
			<?php require 'nav.php'; ?>
		</main>
    
    <section class="about">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="service-list">
    					<h2>Наши услуги</h2>
    					<ul>
    						<li><a href="javascript:;">
    								<img class="nonactive" src="img/services/world.png" alt="">
    								<img class="active" src="img/services/world_white.png" alt="">
    								<p>Международные грузоперевозки</p>
    							</a></li>
    						<li><a href="javascript:;">
    								<img class="nonactive" src="img/services/deliver_china.png" alt="">
    								<img class="active" src="img/services/deliver_china_white.png" alt="">
    								<p>Доставка грузов из Китая</p>
    							</a></li>
    						<li><a href="javascript:;">
    								<img class="nonactive" src="img/services/box.png" alt="">
    								<img class="active" src="img/services/box_white.png" alt="">
    								<p>Таможенное оформление</p>
    							</a></li>
    						<li><a href="javascript:;">
    								<img class="nonactive" src="img/services/container.png" alt="">
    								<img class="active" src="img/services/container_white.png" alt="">
    								<p>Контейнерные перевозки</p>
    							</a></li>
    						<li><a href="javascript:;">
    								<img class="nonactive" src="img/services/deliver.png" alt="">
    								<img class="active" src="img/services/deliver_white.png" alt="">
    								<p>Доставка сборных грузов</p>
    							</a></li>
    						<li><a href="javascript:;">
    								<img class="nonactive" src="img/services/calcul.png" alt="">
    								<img class="active" src="img/services/calcul_white.png" alt="">
    								<p>Финансирование поставок</p>
    							</a></li>
    					</ul>
    				</div>
    			</div>
    		
    			<div class="col-md-8">
    				<div class="about-page">

    					<div class="description">
    						<h2>Внутренняя общая страница</h2>
    						<p>Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации систем массового участия. Товарищи! постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации существенных финансовых и административных условий.</p>
    					</div>

    					<div class="galery">
    						<h2>Галерея изображений</h2>
    						<img src="img/ship.png" alt="Корабль">
    						<img src="img/aiplane.png" alt="Самолет">
    					</div>

    					<div class="reviews">
    						<h2>Отзывы</h2>
    						<div class="review">
    							<p class="review-head">Ольга Петрова</p>
    							<p class="review-text">Спасибо вашей компании за сотрудничество, постоянно доказываете, что с вами очень приятно работать, хорошая скорость и все товары всегда в сохранности. Всем советую.</p>
    						</div>
    						<div class="review">
    							<p class="review-head">Ольга Петрова</p>
    							<p class="review-text">Спасибо вашей компании за сотрудничество, постоянно доказываете, что с вами очень приятно работать, хорошая скорость и все товары всегда в сохранности. Всем советую.</p>
    						</div>

    						<div class="form">
    							<h2>Оставить отзыв</h2>
    							<form action="">
    								<input type="text" placeholder="Как Вас зовут?">
    								<textarea name="" id="" rows="6" placeholder="Ваш отзыв"></textarea>
    								<button>Отправить</button>
    							</form>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <?php require 'inquiry for service.php'; ?>
    <?php require 'footer.php'; ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
