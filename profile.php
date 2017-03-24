<?php
    $btn_head = 'exit_head_btn';

	require_once "view_helpers/header.php";

	?>

		<section class="container content">
			<div class="col-md-2 user_menu">
				<ul class="user_menu">
					<li><a class="user_menu_link" href="profile.php"><div class="menu_icon glyphicon glyphicon-home"></div><p class="user_menu_text" href="#">Главная</p></a></li>
					<li><a class="user_menu_link" href="messeges.php"><div class="menu_icon glyphicon glyphicon-envelope"></div><p class="user_menu_text" href="#">Сообщения</p></a></li>
					<li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon glyphicon-user"></div><p class="user_menu_text" href="#">Друзья</p></a></li>
					<li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-picture"></div><p class="user_menu_text" href="#">Фото</p></a></li>
					<li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-comment"></div><p class="user_menu_text" href="#">Новости</p></a></li>
					<li><a class="user_menu_link" href="#"><div class="menu_icon glyphicon glyphicon-cog"></div><p class="user_menu_text" href="#">Изменить</p></a></li>
					<li><a class=" " href="#"><div class="menu_icon glyphicon glyphicon-globe"></div><p class="user_menu_text" href="#">Группы</p></a></li>
				</ul>
			</div>
			<div class="col-md-3 profile_photo">

					<img class="img-responsive" src="/img/avatars/ava-i.jpg" alt="">

                    <a class="btn btn-default systemBtn" href="#">Редактировать</a>

                    <div class="foto_friends_well">
                        <div class="name-friends"><a href="#">Друзья</a></div>
                        <div>
                            <ul class="list-inline">
                                <li>
                                        <a href="profile.php"><img class="foto_friends" src="img/avatars/ava-i.jpg" alt=""></a>
                                        <div>
                                            <a href="profile.php">Андрей</a>
                                        </div>
                                </li>
                                <li>
                                        <a href="#"><img class="foto_friends" src="img/avatars/no_avatar.gif" alt=""></a>
                                        <div>
                                            <a href="#">друг</a>
                                        </div>
                                </li>
                                <li>
                                        <a href="#"><img class="foto_friends" src="img/avatars/no_avatar.gif" alt=""></a>
                                        <div>
                                            <a href="#">друг</a>
                                        </div>
                                </li>

                            </ul>
                        </div>
                        <div>
                            <ul class="list-inline">
                                <li>
                                        <a href="#"><img class="foto_friends" src="img/avatars/no_avatar.gif" alt=""></a>
                                        <div>
                                            <a href="#">друг</a>
                                        </div>
                                </li>
                                <li>
                                        <a href="#"><img class="foto_friends" src="img/avatars/no_avatar.gif" alt=""></a>
                                        <div>
                                            <a href="#">друг</a>
                                        </div>
                                </li>
                                <li>
                                        <a href="#"><img class="foto_friends" src="img/avatars/no_avatar.gif" alt=""></a>
                                        <div>
                                            <a href="#">друг</a>
                                        </div>
                                </li>

                            </ul>
                        </div>




                </div>
            </div>




			<div class="col-md-6">
                <div class="container info1">
                    <div>
                        <div>
                            <a href="#"">Статус</a>
                            <a href="">Онлайн</a>
                        </div>
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
                            <div class=""><a href=""><img  class="img-circle post_image_well" src="img/avatars/ava-i.jpg" alt=""/></a></div>
                            <div>
                                <div>
                                    <a href="" class="post_author">Панин Андрей</a>
                                </div>
                                <div>
                                    <a href="" class="post_data">17 марта 2017</a>
                                </div>
                            </div>
                        </div>
                        <div class="post_text">
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eius eos
                                        eveniet facilis fugit magnam minus nam nihil nisi odio provident quia, quibusdam
                                        quis quisquam reprehenderit sequi, ullam veritatis voluptas!
                                    </div>
                                    <div>Cupiditate dolor eaque fuga ipsa, quasi suscipit? Blanditiis deserunt esse est
                                        fuga hic iure laudantium libero minus natus nihil, odio officiis, sapiente vel!
                                        Dolore eos et impedit laudantium neque soluta.
                                    </div>
                                    <div>Assumenda delectus et illo natus nisi quasi qui tempore unde. Ex, quae,
                                        voluptatum! Adipisci autem delectus dolore esse ex harum illo incidunt inventore
                                        ipsa libero, nostrum, officia saepe similique voluptates!
                                    </div>
                                    <div>At quae, unde! Amet animi architecto aspernatur consequuntur delectus excepturi
                                        hic illum iste, laudantium molestias nam obcaecati placeat quaerat quo sequi
                                        tempore velit voluptas voluptatem? Ab aliquam animi deserunt iure?
                                    </div>
                                    <div>Dignissimos eum maxime porro quaerat recusandae. Adipisci aliquid, esse ipsam
                                        maiores quae sunt veritatis voluptate! Dignissimos dolorem doloribus fuga, iusto
                                        reiciendis voluptate! Animi et, fugiat nulla praesentium qui repellat
                                        voluptatum.
                                    </div>
                        </div>

                    </div>
                    <div class="bas-well">
                        <div>
                            <div class=""><a href=""><img  class="img-circle post_image_well" src="img/avatars/ava-i.jpg" alt=""/></a></div>
                            <div>
                                <div>
                                    <a href="" class="post_author">Панин Андрей</a>
                                </div>
                                <div>
                                    <a href="" class="post_data">17 марта 2017</a>
                                </div>
                            </div>
                        </div>
                        <div class="post_text">
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eius eos
                                eveniet facilis fugit magnam minus nam nihil nisi odio provident quia, quibusdam
                                quis quisquam reprehenderit sequi, ullam veritatis voluptas!
                            </div>
                            <div>Cupiditate dolor eaque fuga ipsa, quasi suscipit? Blanditiis deserunt esse est
                                fuga hic iure laudantium libero minus natus nihil, odio officiis, sapiente vel!
                                Dolore eos et impedit laudantium neque soluta.
                            </div>
                            <div>Assumenda delectus et illo natus nisi quasi qui tempore unde. Ex, quae,
                                voluptatum! Adipisci autem delectus dolore esse ex harum illo incidunt inventore
                                ipsa libero, nostrum, officia saepe similique voluptates!
                            </div>
                            <div>At quae, unde! Amet animi architecto aspernatur consequuntur delectus excepturi
                                hic illum iste, laudantium molestias nam obcaecati placeat quaerat quo sequi
                                tempore velit voluptas voluptatem? Ab aliquam animi deserunt iure?
                            </div>
                            <div>Dignissimos eum maxime porro quaerat recusandae. Adipisci aliquid, esse ipsam
                                maiores quae sunt veritatis voluptate! Dignissimos dolorem doloribus fuga, iusto
                                reiciendis voluptate! Animi et, fugiat nulla praesentium qui repellat
                                voluptatum.
                            </div>
                        </div>
                        </div>
                        <div class="bas-well">
                            <div>
                                <div class=""><a href=""><img  class="img-circle post_image_well" src="img/avatars/ava-i.jpg" alt=""/></a></div>
                                <div>
                                    <div>
                                        <a href="" class="post_author">Панин Андрей</a>
                                    </div>
                                    <div>
                                        <a href="" class="post_data">17 марта 2017</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post_text">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eius eos
                                    eveniet facilis fugit magnam minus nam nihil nisi odio provident quia, quibusdam
                                    quis quisquam reprehenderit sequi, ullam veritatis voluptas!
                                </div>
                                <div>Cupiditate dolor eaque fuga ipsa, quasi suscipit? Blanditiis deserunt esse est
                                    fuga hic iure laudantium libero minus natus nihil, odio officiis, sapiente vel!
                                    Dolore eos et impedit laudantium neque soluta.
                                </div>
                                <div>Assumenda delectus et illo natus nisi quasi qui tempore unde. Ex, quae,
                                    voluptatum! Adipisci autem delectus dolore esse ex harum illo incidunt inventore
                                    ipsa libero, nostrum, officia saepe similique voluptates!
                                </div>
                                <div>At quae, unde! Amet animi architecto aspernatur consequuntur delectus excepturi
                                    hic illum iste, laudantium molestias nam obcaecati placeat quaerat quo sequi
                                    tempore velit voluptas voluptatem? Ab aliquam animi deserunt iure?
                                </div>
                                <div>Dignissimos eum maxime porro quaerat recusandae. Adipisci aliquid, esse ipsam
                                    maiores quae sunt veritatis voluptate! Dignissimos dolorem doloribus fuga, iusto
                                    reiciendis voluptate! Animi et, fugiat nulla praesentium qui repellat
                                    voluptatum.
                                </div>
                            </div>
			            </div>


                    </div>
        </section>
<?php
	require_once "view_helpers/footer.php";
?>