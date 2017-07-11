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