<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 12.04.2017
 * Time: 19:47
 */

$btn_head = 'exit_head_btn';

require_once "view_helpers/header.php";

?>
<section class="container content">

    <?php require_once "view_helpers/navig.php"; ?>


    <!---------------------------------Изменение профиля---------------------------------------------->

    <div class="col-md-7">
        <form class="" action="" method="POST" role="form">
            <p>Изменить данные профиля</p>
            <div class="form-group">
                <label for="first_name">Имя:</label>
                <input type="text" name = "first_name" class="form-control first_name" placeholder="Введите Имя">
                <label for="last_name">Фамилия:</label>
                <input type="text" name="last_name" class="form-control last_name" placeholder="Введите Фамилию">
            </div>
            <button type="submit" class="btn btn-success">Сохранить</button>
            <button type="reset" class="btn btn-default">Сброс</button>
        </form>
        <form class="" action="" method="POST" role="form">

            <div class="form-group email">
                <label for="exampleInputEmail1 email">Email</label>
                <input type="email" name ="email" class="form-control email" placeholder="Введите email">
            </div>
            <div class="form-group password">
                <label for="exampleInputPassword1 password">Старый пароль</label>
                <input type="password" name="password" class="form-control password" placeholder="Введите Пароль">
            </div>
            <div class="form-group password">
                <label for="exampleInputPassword1 password">Новый пароль</label>
                <input type="password" name="password" class="form-control password" placeholder="Введите Пароль">
            </div>
            <div class="form-group password">
                <label for="exampleInputPassword1 password">Повторите пароль</label>
                <input type="password" name="password" class="form-control password" placeholder="Введите Пароль">
            </div>
            <button type="submit" class="btn btn-success">Сохранить</button>
            <button type="reset" class="btn btn-default">Сброс</button>

        </form>
    </div>





</section>



<?php
require_once "view_helpers/footer.php";
?>