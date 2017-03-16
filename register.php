<?php
	$btn_head = 'login_head_btn';
	require_once "view_helpers/header.php";
?>

		<section class="container registration_wrapper">
		<form class="registration" action="scripts/creat_user.php" method="POST">
			<div class="form-group first_name">
				<label for="first_name">Имя:</label>
				<input type="text" name = "first_name" class="form-control first_name" placeholder="Введите Имя">
			</div>
			<div class="form-group last_name">
				<label for="last_name">Фамилия:</label>
				<input type="text" name="last_name" class="form-control last_name" placeholder="Введите Фамилию">
			</div>
			<div class="form-group email">
				<label for="exampleInputEmail1 email">Email</label>
				<input type="email" name ="email" class="form-control email" placeholder="Введите email">
			</div>
			<div class="form-group password">
				<label for="exampleInputPassword1 password">Пароль</label>
				<input type="password" name="password" class="form-control password" placeholder="Введите Пароль">
			</div>
			<div class="form-group password">
				<label for="exampleInputPassword1 password">Повторите пароль</label>
				<input type="password" name="password" class="form-control password" placeholder="Повторите пароль">
			</div>
			<button type="submit" class="btn btn-success">Зарегистрироваться</button>
			<button type="reset" class="btn btn-default">Сброс</button>
		</form>
		</section>
<?php
	require_once "view_helpers/footer.php";
?>
	
