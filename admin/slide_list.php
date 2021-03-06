<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Admin panel/Mystic Blog</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../libs/materialize/css/materialize.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h3 class='center-align admin-title'>Панель администратора</h3>
			</div>
		</div>
		<div class="row">
			<nav class="admin-nav">
				<div class="nav-wrapper">
					<a href="#!" class="brand-logo"><img src="../images/tomcat.svg" alt="alt"><span>MysticBlog</span></a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<div class="wrap-dropdown-head">
						<a class="dropdown-button right" href="#!" data-activates="dropdown1"><i class="fa fa-user"></i> Привет <span>Admin</span> !<i class="material-icons right">arrow_drop_down</i></a>
						<ul id="dropdown1" class="dropdown-content">
							<li><a href="#!"><i class="fa fa-key"></i>Изменить пароль</a></li>
							<li><a href="#!"><i class="fa fa-sign-out"></i>Выход</a></li>
						</ul>
					</div><!-- /.wrap-dropdown-head -->
					<ul class="right hide-on-med-and-down">
						<li class="active"><a href="index.php">Dashbord</a></li>
						<li><a href="badges.html">Входящие(3)</a></li>
						<li><a href="profile.php">Профиль пользователя</a></li>
						<li><a href="http://blog-mystic.loc/" target="_blank">Перейти на сайт</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="sass.html">Sass</a></li>
						<li><a href="badges.html">Components</a></li>
						<li><a href="collapsible.html">Javascript</a></li>
						<li><a href="mobile.html">Mobile</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="col s12 m4 l3">
				<aside>
					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header"><i class="material-icons">place</i>Настройки сайта</div>
							<div class="collapsible-body">
								<ul class="collection">
									<li class=""><a href="#" class="collection-item">Название и слоган</a></li>
									<li class=""><a href="#" class="collection-item active">Социальные сети</a></li>
									<li class=""><a href="#" class="collection-item">Copyright</a></li>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">place</i>Страницы</div>
							<div class="collapsible-body">
								<ul class="collection">
									<li class=""><a href="#" class="collection-item">Добавить страницу</a></li>
									<li class=""><a href="#" class="collection-item active">О нас</a></li>
									<li class=""><a href="#" class="collection-item">Контакты</a></li>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">place</i>Категории</div>
							<div class="collapsible-body">
								<ul class="collection">
									<li class=""><a href="#" class="collection-item">Добавить категорию</a></li>
									<li class=""><a href="#" class="collection-item active">Список категорий</a></li>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">place</i>Слайдер</div>
							<div class="collapsible-body">
								<ul class="collection">
									<li class=""><a href="#" class="collection-item">Добавить слайд</a></li>
									<li class=""><a href="#" class="collection-item active">Список слайдов</a></li>
								</ul>
							</div>
						</li>   
						<li>
							<div class="collapsible-header"><i class="material-icons">place</i>Статьи</div>
							<div class="collapsible-body">
								<ul class="collection">
									<li class=""><a href="#" class="collection-item">Добавить статью</a></li>
									<li class=""><a href="#" class="collection-item active">Список статей</a></li>
								</ul>
							</div>
						</li>  
					</ul>
				</aside>
			</div>
			<div class="col s12 m8 l9">
				<main>
					<div class="admin-dashboard">
						<div class="header-dash"><h5>Список слайдов</h5></div>
						<div class="divider"></div>
						<div class="admin-content">
							<table class="highlight responsive-table  grey lighten-3 bordered">
								<thead>
									<tr>
										<th>Номер</th>
										<th>Заголовок слайда</th>
										<th>Картинка слайда</th>
										<th>Действие</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td>Eclair</td>
										<td><img class="responsive-img" src="../images/image_1.jpg" alt=""></td>
										<td>
											<a href="#" class="black-text"><i class="fa fa-pencil"></i></a> || 
											<a href="#" class="red-text accent-4"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Jellybean</td>
										<td><img class="responsive-img" src="../images/image_1.jpg" alt=""></td>
										<td>
											<a href="#" class="black-text"><i class="fa fa-pencil"></i></a> || 
											<a href="#" class="red-text accent-4"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Lollipop</td>
										<td><img class="responsive-img" src="../images/image_1.jpg" alt=""></td>
										<td>
											<a href="#" class="black-text"><i class="fa fa-pencil"></i></a> || 
											<a href="#" class="red-text accent-4"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>
	<footer class="page-footer">
		<div class="footer-copyright">
			<div class="container">
				© 2014 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="../libs/materialize/js/materialize.min.js"></script>
	<script src="script.js"></script>

</body>
</html>