<div class="header <?=($header?'header_fix2':'')?>">
	<div class="header_con">
		<div class="logo">
			<a href="/">
				<div class="logo_con lazy_bag" data-src="/assets/img/logo/logo.png"></div>
				<div class="logo_txt"><?=$site['name']?></div>
			</a>
		</div>
		<nav class="menu_dk">
			<ul class="menu_i">
				<li><a href="sana.php">Cанатории</a></li>
				<li><a href="#services">Услуги</a></li>
				<li><a href="#reviews">Отзывы</a></li>
				<li><a href="#contacts">Контакты</a></li>
			</ul>
		</nav>
		<div class="header_pj">
			<div class="header_clc">
				<div class="btn disb_zab">cвязатся</div>
			</div>
			<div class="menu_pj"><i class="far fa-bars"></i></div>
		</div>
	</div>
</div>


<!--  -->
<div class="menu_ph">
	<div class="bl_c">
		<div class="menu_ph_c">
			<div class="head_c">
				<h3>Меню</h3>
				<div class="menu_ph_ic"><i class="fas fa-times-circle"></i></div>
			</div>
			<nav class="mp_dk">
				<ul>
					<li class="mp_di">
						<a href="sana.php">Список санаториев:</a>
						<ul>
							<? $sql = db::query("select * from sanatorium where number is not null order by number asc"); ?>
							<? while($menu = mysqli_fetch_array($sql)): ?>
								<li class="mp_pi">
									<a href="/sanatorium/?id=<?=$menu['id']?>">
										<i class="fal fa-hotel"></i>
										<span><?=$menu['name_'.$lang]?></span>
									</a>
								</li>
							<? endwhile ?>
						</ul>
					</li>
					<li class="mp_di"><a href="#services">Услуги</a></li>
					<li class="mp_di"><a href="#reviews">Отзывы</a></li>
					<li class="mp_di"><a href="#contacts">Контакты</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>