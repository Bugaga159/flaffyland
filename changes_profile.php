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

    <!--------------------------------------   Навигация    --------------------------------->

    <div class="col-md-2 user_menu">
        <ul class="user_menu">
            <li><a class="user_menu_link" href="profile.php"><div class="menu_icon glyphicon glyphicon-home"></div><p class="user_menu_text" href="#">Главная</p></a></li>
            <li><a class="user_menu_link" href="messeges.php"><div class="menu_icon glyphicon glyphicon-envelope"></div><p class="user_menu_text" href="#">Сообщения</p></a></li>
            <li><a class="user_menu_link" href="friends.php"><div class="menu_icon glyphicon glyphicon glyphicon-user"></div><p class="user_menu_text" href="#">Друзья</p></a></li>
            <li><a class="user_menu_link" href="image_user.php"><div class="menu_icon glyphicon glyphicon-picture"></div><p class="user_menu_text" href="#">Фото</p></a></li>
            <li><a class="user_menu_link" href="news_profile.php"><div class="menu_icon glyphicon glyphicon-comment"></div><p class="user_menu_text" href="#">Новости</p></a></li>
            <li><a class="user_menu_link" href="changes_profile.php"><div class="menu_icon glyphicon glyphicon-cog"></div><p class="user_menu_text" href="#">Изменить</p></a></li>
            <li><a class=" " href="group_profile.php"><div class="menu_icon glyphicon glyphicon-globe"></div><p class="user_menu_text" href="#">Группы</p></a></li>
        </ul>
    </div>


    <!---------------------------------Изменение профиля---------------------------------------------->

    <div class="col-md-7">
        <form class="" action="" method="POST" role="form">
            <a href="">Изменить данные профиля</a>
            <div class="form-group">
                <label for="first_name">Имя:</label>
                <input type="text" name = "first_name" class="form-control first_name" placeholder="Введите Имя">
                <label for="last_name">Фамилия:</label>
                <input type="text" name="last_name" class="form-control last_name" placeholder="Введите Фамилию">
            </div>

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