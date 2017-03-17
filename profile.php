<?php
    $btn_head = 'exit_head_btn';

	require_once "view_helpers/header.php";

	?>

		<section class="container content">
			<div class="col-md-2 user_menu">
				<ul class="user_menu">
					<li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-home"></div><p class="user_menu_text" href="#">Главная</p></a></li>
					<li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-envelope"></div><p class="user_menu_text" href="#">Сообщения</p></a></li>
					<li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon glyphicon-user"></div><p class="user_menu_text" href="#">Друзья</p></a></li>
					<li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-picture"></div><p class="user_menu_text" href="#">Фото</p></a></li>
					<li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-comment"></div><p class="user_menu_text" href="#">Новости</p></a></li>
					<li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-cog"></div><p class="user_menu_text" href="#">Изменить</p></a></li>
					<li><a class=" " href="#"><div class="menu_icon glyphicon glyphicon-globe"></div><p class="user_menu_text" href="#">Группы</p></a></li>
				</ul>
			</div>
			<div class="col-md-2">
				<div class="profile_photo">
					<img class="img-responsive" src="/img/avatars/no_avatar.gif" alt="">
					<div class="pets_avatars_wrapper">
						<div class="pet_avatar_wrapper">
							<a href="#">
								<img class="img-responsive pet_avatar" src="/img/pets_avatar/1.jpg" alt="">
							</a>
						</div>
						<div class="pet_avatar_wrapper">
							<a href="#">
								<img class="img-responsive pet_avatar" src="/img/pets_avatar/2.jpg" alt="">
							</a>
						</div>
						<div class="pet_avatar_wrapper">
							<a href="#">
								<img class="img-responsive pet_avatar" src="/img/pets_avatar/3.jpg" alt="">
							</a>
						</div>
					</div>
					<a class="btn btn-default systemBtn" href="#">Редактировать</a>
				</div>
				<div class="friends_wrapper">
					
				</div>
			</div>
			<div class="col-md-7">
                <div class="container info1">
                    <div>
                        <div><a href="#"">Статус</a></div>
                        <div><a href="#">Панин Андрей</a></div>
                        <div>
                            <a>Город: </a><a>Серпухов</a>

                        </div>
                    </div>


                </div>
                <div class="well-my-foto">
                    <div class="well-my-foto-in">
                        <a href="#"><h3>Мои фотографии</h3></a>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/pets_avatar/1.jpg" alt="..." class="img-rounded my-foto">
                            </div>
                            <div class="col-md-3">
                                <img src="img/pets_avatar/2.jpg" alt="..." class="img-rounded my-foto">
                            </div>
                            <div class="col-md-3">
                                <img src="img/pets_avatar/3.jpg" alt="..." class="img-rounded my-foto">
                            </div>
                            <div class="col-md-3">
                                <img src="img/pets_avatar/1.jpg" alt="..." class="img-rounded my-foto">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="content-well">
                    <div class="list-inline nav-well">
                        <ul class="list-inline">
                            <li><a href="#">Мои записи</a></li>
                            <li><a href="#">Записи групп</a></li>
                            <li></li>
                            <li class="pull-right"><a href="#"><div class="menu_icon glyphicon glyphicon-search"></div><a class="nav-well" href="#">Поиск</a></a></li>
                        </ul>
                    </div>
                    <div class="bas-well">
                        <div>
                            <div><a href=""><img  class="img-circle" src="img/avatars/no_avatar.gif" alt=""/></a></div>
                        </div>
                        <div></div>
                    </div>
                </div>


			</div>
		</section>
<?php
	require_once "view_helpers/footer.php";
?>