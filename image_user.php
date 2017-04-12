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
            <li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-comment"></div><p class="user_menu_text" href="#">Новости</p></a></li>
            <li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-cog"></div><p class="user_menu_text" href="#">Изменить</p></a></li>
            <li><a class=" " href="#"><div class="menu_icon glyphicon glyphicon-globe"></div><p class="user_menu_text" href="#">Группы</p></a></li>
        </ul>
    </div>



<!-------------------------------------   Фото пользователя -------------------------->

        <div class="col-md-7">
            <div class="ImageGrid">
                <a data-fancybox="gallery" href="img/pets_avatar/1.jpg"><img src="img/pets_avatar/1.jpg" class="img_profile_all"></a>
                <a data-fancybox="gallery" href="img/pets_avatar/2.jpg"><img src="img/pets_avatar/2.jpg" class="img_profile_all"></a>
                <a data-fancybox="gallery" href="img/pets_avatar/3.jpg"><img src="img/pets_avatar/3.jpg" class="img_profile_all"></a>
                <a data-fancybox="gallery" href="img/pets_avatar/3.jpg"><img src="img/pets_avatar/3.jpg" class="img_profile_all"></a>
                <a data-fancybox="gallery" href="img/pets_avatar/2.jpg"><img src="img/pets_avatar/2.jpg" class="img_profile_all"></a>

            </div>




        </div>







</section>



<?php
    require_once "view_helpers/footer.php";
?>