<?php
	require_once "scripts/connect_mysql.php";
	$btn_head = 'login_head_btn';
	
	
		
	if(isset($_POST['do_signup'])){

		// Проверка на ошибки в регистрации
		$errors = [];
		if (trim($_POST['login']) == '') {
			$errors[] = 'Введите Логин!';
		}
		if (trim($_POST['first_name']) == '') {
			$errors[] = 'Введите Имя!';
		}
		if (trim($_POST['last_name']) == '') {
			$errors[] = 'Введите Фамилию!';
		}
		if (trim($_POST['email']) == '') {
			$errors[] = 'Введите Email!';
		}
		if ($_POST['password'] == '') {
			$errors[] = 'Введите Пароль!';
		}
		if ($_POST['password_2'] != $_POST['password'] ) {
			$errors[] = 'Повторно введенный пароль не верно!';
		}
		
		
		// Проверка на отсутствие ошибок
		if (empty($errors)) {
			
			/*ini_set("display_errors",1);
			error_reporting(E_ALL);*/

		// Получение данных
			$login = $_POST['login'];
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			$insert_sql = "INSERT INTO `users` ( `login`, `first_name`, `last_name`, `email`, `password`) VALUES ( '{$login}', '{$first_name}', '{$last_name}', '{$email}', '{$password}')";
			$result = mysqli_query($link, $insert_sql ) or die(mysqli_errno());

			header('Location: profile.php?user_id=' . mysqli_insert_id($link));

			exit();
			

		}else{

			$errors_all = '<div style ="color: red; text-align: center;">' . array_shift($errors).'</div><hr>';

		}
	 }
	require_once "view_helpers/header.php";
?>

		<section class="container registration_wrapper">
		<?php 
				echo $errors_all;
		 ?>
		<form class="registration" action="register.php" method="POST">
			<div class="form-group first_name">
				<label for="login">Логин:</label>
				<?php
				echo '<input type="text" name = "login" class="form-control login" placeholder="Введите Логин" value="',$data['login'],'">';
				?>
			</div>
			<div class="form-group first_name">
				<label for="first_name">Имя:</label>
				<?php
				echo '<input type="text" name = "first_name" class="form-control first_name" placeholder="Введите Имя" value="', $data['first_name'], '">';
				?>
			</div>
			<div class="form-group last_name">
				<label for="last_name">Фамилия:</label>
				<?php
				echo '<input type="text" name="last_name" class="form-control last_name" placeholder="Введите Фамилию" value="', $data['last_name'], '">';
				?>
			</div>
			<div class="form-group email">
				<label for="exampleInputEmail1 email">Email</label>
				<?php
				echo '<input type="email" name ="email" class="form-control email" placeholder="Введите email" value="', $data['email'], '">';
				?>	
			</div>
			<div class="form-group password">
				<label for="exampleInputPassword1 password">Пароль</label>
				
				<?php
				echo '<input type="password" name="password" class="form-control password" placeholder="Введите Пароль" value="' , $data['password'], '">';
			?>

			</div>
			<div class="form-group password">
				<label for="exampleInputPassword1 password">Повторите пароль</label>
				<?php
				echo '<input type="password" name="password_2" class="form-control password" placeholder="Повторите пароль" value="' , $data['password_2'], '">';
				?>
			</div>
			<button type="submit" class="btn btn-success" name="do_signup">Зарегистрироваться</button>
			<button type="reset" class="btn btn-default"  name="do_resert">Сброс</button>
		</form>
		</section>
<?php     
	require_once ("view_helpers/footer.php");
?>