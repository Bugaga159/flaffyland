<?php
    $btn_head = 'exit_head_btn';


    require_once "scripts/connect_mysql.php";
    $user_id = $_REQUEST['user_id'];
    $select_query = "SELECT * FROM `users` WHERE  `user_id` = " . $user_id;
    $result = mysqli_query($link, $select_query);
    if(!$result){
        /*$row =mysqli_fetch_array($result);
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];*/

        $user_error_message = "возникла проблема, связанная с подключением " .
            "к базе данных, содержащей нужную информацию.";
        $system_error_message = mysqli_error($link);
        header("Location: profile_error.php?error_message={$user_error_message}&system_error_message={$system_error_message}");
    exit();


    } else{
        //die("Ошибка обнаружения пользователя с ID {$user_id}");
       /* $user_error_message = "возникла проблема, связанная с подключением " .
            "к базе данных, содержащей нужную информацию.";
        $system_error_message = mysqli_error($link);
        header("Location: profile_error.php?error_message={$user_error_message}&system_error_message={$system_error_message}");
*/
        $row =mysqli_fetch_array($result);
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
    }




	require_once "view_helpers/header.php";

	?>

		<section class="container content">
        
			 <?php require_once "view_helpers/navig.php"; ?>

			<div class="col-md-3 profile_photo">
                    
				<div class="ImageGrid">
                
                    <a data-fancybox="gallery" href="/img/avatars/ava-i.jpg"><img class="img-responsive" src="/img/avatars/ava-i.jpg" alt=""></a>

                </div>

                    <a class="btn btn-default systemBtn" href="#">Редактировать</a>

                    <div class="foto_friends_well">
                        <div class="name-friends"><a href="#">Друзья</a></div>
                        <div>
                            <ul class="list-inline">
                                <li>
                                        <a href="profile.php"><img class="foto_friends" src="img/avatars/ava-i.jpg" alt=""></a>
                                        <div>
                                            <a href="profile.php"><?php echo $first_name; ?></a>
                                        </div>
                                </li>
                                <li>
                                        <a href="#"><img class="foto_friends" src="img/avatars/masha.jpg" alt=""></a>
                                        <div>
                                            <a href="#"><?php echo $first_name; ?></a>
                                        </div>
                                </li>
                                <li>
                                        <a href="#"><img class="foto_friends" src="img/avatars/roma.jpg" alt=""></a>
                                        <div>
                                            <a href="#"><?php echo $first_name; ?></a>
                                        </div>
                                </li>

                            </ul>
                        </div>
                        <div>
                            <ul class="list-inline">
                                <li>
                                        <a href="#"><img class="foto_friends" src="img/avatars/no_avatar.gif" alt=""></a>
                                        <div>
                                            <a href="#"><?php echo $first_name; ?></a>
                                        </div>
                                </li>
                                <li>
                                        <a href="#"><img class="foto_friends" src="img/avatars/no_avatar.gif" alt=""></a>
                                        <div>
                                            <a href="#"><?php echo $first_name; ?></a>
                                        </div>
                                </li>
                                <li>
                                        <a href="#"><img class="foto_friends" src="img/avatars/no_avatar.gif" alt=""></a>
                                        <div>
                                            <a href="#"><?php echo $first_name; ?></a>
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
                        <div><a href="#"><?php echo $last_name. " ". $first_name; ?></a></div>
                        <div>
                            <a>Город: </a><a>Серпухов</a>

                        </div>
                    </div>


                </div>
                <div class="well-my-foto">
                    <div class="well-my-foto-in">
                        <a href="#"><h3>Мои фотографии</h3></a>
                        <div class="row">
                       
                    <!------------- фото из альбома------------------------>

                        <div class="ImageGrid">
                            <div class="col-md-3">
                                <a data-fancybox="gallery" href="img/pets_avatar/1.jpg"><img class="img-responsive" src="img/pets_avatar/1.jpg" alt=""></a>
                            </div>
                            <div class="col-md-3">
                                <a data-fancybox="gallery" href="img/pets_avatar/2.jpg"><img class="img-responsive" src="img/pets_avatar/2.jpg" alt=""></a>
                            </div>
                            <div class="col-md-3">
                                <a data-fancybox="gallery" href="img/pets_avatar/3.jpg"><img class="img-responsive" src="img/pets_avatar/3.jpg" alt=""></a>
                            </div>
                            <div class="col-md-3">
                                <a data-fancybox="gallery" href="img/pets_avatar/1.jpg"><img class="img-responsive" src="img/pets_avatar/1.jpg" alt=""></a>
                            </div>

                        </div>
                            <!-- <div class="col-md-3">
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
                        </div>-->

                    </div>
                </div>
                <div class="content-well">
                    <div class="list-inline nav-well">
                        <ul class="list-inline">
                            <li><a href="#">Мои записи</a></li>
                            <li><a href="#">Записи групп</a></li>
                            <li></li>
                            <li class="pull-right">

                                <a href="#"><div class="menu_icon glyphicon glyphicon-search"></div>
                                    <a class="nav-well" href="#">Поиск</a></a></li>
                        </ul>
                    </div>
                    <div class="bas-well">
                        <div>
                            <div class=""><a href=""><img  class="img-circle post_image_well" src="img/avatars/ava-i.jpg" alt=""/></a></div>
                            <div>
                                <div>
                                    <a href="" class="post_author"><?php echo $last_name . ' '. $first_name; ?></a>
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
                                    <a href="" class="post_author"><?php echo $last_name . ' '. $first_name; ?></a>
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
                                        <a href="" class="post_author"><?php echo $last_name . ' '. $first_name; ?></a>
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