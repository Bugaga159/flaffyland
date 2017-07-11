<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 03.04.2017
 * Time: 23:57
 */
    $btn_head = 'exit_head_btn';


    if(isset($_REQUEST['error_message'])){
        $error_message = $_REQUEST['error_message'];
    }else{
        $error_message = 'вы здесь оказались из-за сбоя в работе программы.';
    }

    if(isset($_REQUEST['system_error_message'])){
        $system_error_message = preg_replace ("/\\\\/", '', $_REQUEST['system_error_message']);
    }else{
        $system_error_message = "Сообщения о системных ошибках отсутствуют.";
    }

    require_once "view_helpers/header.php";

?>

    <section class="container error-container">
        <div>
            <h1>Нам очень жаль...</h1>
            <p><img src="img/error.png" class="error" alt="">
                ... но произошел небольшой сбой. Вероятно,<span class="error_message"><?php echo $error_message; ?></span></p>
            <p>
            Не волнуйтесь, мы в курсе происходящего и предпримем все необходимые меры.
                Если же вы хотите связаться с нами и узнать подробности произошедшего или
                вас что-нибудь беспокоит в сложившейся ситуации, пришлите нам <a href="#">сообщение</a>
                , и мы неприменно откликнемся.
            </p>
            <?php
               echo "<p>Было получено следующее сообщение об ошибке системного уровня: <b>{$system_error_message}</b></p>";
            ?>
        </div>


    </section>










<?php

    require_once "view_helpers/footer.php";

?>

