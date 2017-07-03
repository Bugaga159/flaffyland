<?php
	$btn_head = 'login_head_btn';
	require_once "view_helpers/header.php";
	require_once "scripts/connect_mysql.php";
	
	
		$data = $_POST;
	if(isset($data['do_signup'])){

		// Проверка на ошибки в регистрации
		$errors = array();
		if (trim($data['login']) == '') {
			$errors[] = 'Введите Логин!';
		}
		if (trim($data['first_name']) == '') {
			$errors[] = 'Введите Имя!';
		}
		if (trim($data['last_name']) == '') {
			$errors[] = 'Введите Фамилию!';
		}
		if (trim($data['email']) == '') {
			$errors[] = 'Введите Email!';
		}
		if ($data['password'] == '') {
			$errors[] = 'Введите Пароль!';
		}
		if ($data['password_2'] != $data['password'] ) {
			$errors[] = 'Повторно введенный пароль не верно!';
		}
		
		
		// Проверка на отсутствие ошибок
		if (empty($errors)) {
			
			/*ini_set("display_errors",1);
			error_reporting(E_ALL);*/

		// Получение данных
			$login = $data['login'];
			$first_name = $data['first_name'];
			$last_name = $data['last_name'];
			$email = $data['email'];
			$password = password_hash($data['password'],PASSWORD_DEFAULT);

			$insert_sql = "INSERT INTO `users` (`login`,`first_name`, `last_name`, `email`, `password`) VALUES ('{$login}','{$first_name}', '{$last_name}', '{$email}','{$password}')";
			$result = mysqli_query($link, $insert_sql) or die(mysqli_error());

			header("Location: /profile.php?user_id=" . mysqli_insert_id($link));
			exit();
		}else{
			echo '<div style ="color: red; text-align: center;">' . array_shift($errors).'</div><hr>';
		}
	} 

?>
		
		<section class="container registration_wrapper">
		<form class="registration" action="/register.php" method="POST">
			<div class="form-group first_name">
				<label for="login">Логин:</label>
				<input type="text" name = "login" class="form-control login" placeholder="Введите Логин" value="<?php echo $data['login']; ?>">
			</div>
			<div class="form-group first_name">
				<label for="first_name">Имя:</label>
				<input type="text" name = "first_name" class="form-control first_name" placeholder="Введите Имя" value="<?php echo $data['first_name']; ?>">
			</div>
			<div class="form-group last_name">
				<label for="last_name">Фамилия:</label>
				<input type="text" name="last_name" class="form-control last_name" placeholder="Введите Фамилию" value="<?php echo $data['last_name']; ?>">
			</div>
			<div class="form-group email">
				<label for="exampleInputEmail1 email">Email</label>
				<input type="email" name ="email" class="form-control email" placeholder="Введите email" value="<?php echo $data['email']; ?>">
			</div>
			<div class="form-group password">
				<label for="exampleInputPassword1 password">Пароль</label>
				<input type="password" name="password" class="form-control password" placeholder="Введите Пароль" value="<?php echo $data['password']; ?>">
			</div>
			<div class="form-group password">
				<label for="exampleInputPassword1 password">Повторите пароль</label>
				<input type="password" name="password_2" class="form-control password" placeholder="Повторите пароль" value="<?php echo $data['password_2']; ?>">
			</div>
			<button type="submit" class="btn btn-success" name="do_signup">Зарегистрироваться</button>
			<button type="reset" class="btn btn-default" >Сброс</button>
		</form>
		</section>
<?php

            mysqli_close($link);

	require_once "view_helpers/footer.php";
?>
	
