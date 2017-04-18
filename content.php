<?php
$i = trim($_POST['page']);
$tpl = '<div class="collection__look_catalog">
					<div class="collection__catalog-images first_catalog-images">
						<div class="catalog-images-background">
							<img src="images/catalog-1.jpg" alt="Логотип" class="catalog-img">
						</div>
						<div class="collection-about">
							<p class="about-p">Вечерний браслет</p>
							<p class="collection-price">3000 руб.</p>
							<a data="1" class="order submit look_order_button">Заказать</a>
						</div>
					</div>
					<div class="collection__catalog-images">
						<div class="catalog-images-background">
							<img src="images/catalog-2.jpg" alt="Логотип" class="catalog-img">
						</div>
						<div class="collection-about">
							<p class="about-p">Вечерний браслет</p>
							<p class="collection-price">3000 руб.</p>
							<a data="2" class="submit look_order_button">Заказать</a>
						</div>
					</div>
					<div class="collection__catalog-images">
						<div class="catalog-images-background">
							<img src="images/catalog-3.jpg" alt="Логотип" class="catalog-img">
						</div>
						<div class="collection-about">
							<p class="about-p">Вечерний браслет</p>
							<p class="collection-price">3000 руб.</p>
							<a href="#" class="submit look_order_button">Заказать</a>
						</div>
					</div>
				</div>';
// $tpl = 	<div> 11111
// 		</div>;
switch ($i) {
    case 2:
        echo $tpl;
        break;
    case 3:
        echo $tpl;
        break;
    case 4:
        echo "";
        break;
}

?>