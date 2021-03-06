<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Forgot Password</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="../libs/materialize/css/materialize.css">
	</head>
	<body>
		<main class="valign-wrapper wrap-login-panel">
			<div class="login-panel">
				<h5 class="center-align">Восстановление пароля</h5>
				<div class="container">
					<div class="row">
						<div class="col s12">
							<form method="post" id="image-test">
								<div class='row'>
									<div class='col s12'>
									</div>
								</div>
								<div class='row'>
									<div class='input-field col s12'>
										<input type='email' name='email' id='email'>
										<label for='email'>Введите ваш email</label>
									</div>
									<label style='float: right;'>
									<a class='red-text accent-4 fogot-link' href='login.php'><b>Войти</b></a>
									</label>
								</div>
								<div class='row'>
									<div class="col s12 center-align">
										<input type="submit" class="btn waves-effect red accent-4" value="Восстановить">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- /.login-panel -->
		</main><!-- /.wrap-login-panel -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../libs/materialize/js/materialize.min.js"></script>
		<script>
			var options = 
			[ {
				selector: '#image-test', 
				offset: 50, callback: function(el) { Materialize.fadeInImage($(el)); 
				} } 
				]; 
				Materialize.scrollFire(options);
		</script>
	</body>
</html>