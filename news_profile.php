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
            <li><a class=" " href="#"><div class="menu_icon glyphicon glyphicon-globe"></div><p class="user_menu_text" href="#">Группы</p></a></li>
        </ul>
    </div>

<!---------------------------------Новости------------------------>
    <div class="col-md-7 news_profile">


    <div class="bas-well">
        <div><a href="news_profile.php" class="new_s"><h2>Новости</h2></a></div>
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