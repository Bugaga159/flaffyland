<?php
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
                    <li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-picture"></div><p class="user_menu_text" href="#">Фото</p></a></li>
                    <li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-comment"></div><p class="user_menu_text" href="#">Новости</p></a></li>
                    <li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-cog"></div><p class="user_menu_text" href="#">Изменить</p></a></li>
                    <li><a class=" " href="#"><div class="menu_icon glyphicon glyphicon-globe"></div><p class="user_menu_text" href="#">Группы</p></a></li>
                </ul>
            </div>














        </section>



<?php
    require_once "view_helpers/footer.php";
?>
