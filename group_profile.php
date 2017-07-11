<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 17.04.2017
 * Time: 18:51
 */

$btn_head = 'exit_head_btn';

require_once "view_helpers/header.php";

?>
<section class="container content">

    <?php require_once "view_helpers/navig.php"; ?>

    <!---------------------------------------  Сообщества  ----------------------->
    <div class="col-md-7">
        <div class="search-mess">
            <form class="form-inline" action="" role="form">
                <div class="col-sm-8"><input type="text" class="form-control" id="" placeholder="Введите поиск"></div>
                <button type="submit" class="btn btn-default">Поиск по сообществам</button>

            </form>

        </div>
        <div>
            <div>
                <div class="mess-post">
                    <a href="">
                        <img  class="foto-messeges" src="img/avatars/masha.jpg" alt="">
                        <span  href="#" class="foto-messeges-name">Все о собаках</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="mess-post">
                    <a href="">
                        <img  class="foto-messeges" src="img/pets_avatar/1.jpg" alt="">
                        <span  href="#" class="foto-messeges-name">В мире животных</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="mess-post">
                    <a href="">
                        <img  class="foto-messeges" src="img/pets_avatar/2.jpg" alt="">
                        <span  href="#" class="foto-messeges-name">Встречаемся в Серпухове</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="mess-post">
                    <a href="">
                        <img  class="foto-messeges" src="img/pets_avatar/1.jpg" alt="">
                        <span  href="#" class="foto-messeges-name">Москва ВДНХ</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="mess-post">
                    <a href="">
                        <img  class="foto-messeges" src="img/pets_avatar/3.jpg" alt="">
                        <span  href="#" class="foto-messeges-name">Милые крохи</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="mess-post">
                    <a href="">
                        <img  class="foto-messeges" src="img/avatars/masha.jpg" alt="">
                        <span  href="#" class="foto-messeges-name">Корма для животных</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="mess-post">
                    <a href="">
                        <img  class="foto-messeges" src="img/pets_avatar/1.jpg" alt="">
                        <span  href="#" class="foto-messeges-name">Веселые непоседы</span>
                    </a>
                </div>
            </div>
        </div>

    </div>







</section>



<?php
require_once "view_helpers/footer.php";
?>