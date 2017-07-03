<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 08.01.2017
 * Time: 2:36
 */
echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FLUFFYLAND</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

   <!----------------------HEADER---------------------------------------------------------------->
	<div class="site_content">
		<section class="main">
			<header>
				<div class="container">
					<div class="row header">
						<div class="col-md-9 header1">
							<a href="/" ><div class="header_logo"></div></a>
						</div>
						<div class="col-md-2 header2">';


    //------------------------ button come back-------------------------------------------


                            if ($btn_head == "reg_head_btn")
                                echo '<a href="/register.php">
                                         <button type="submit" class="btn btn-success reg_head_btn">Регистрация</button>
                                        </a>';
                            elseif ($btn_head == "login_head_btn")
                                echo '<a href="/index.php">
                                         <button type="submit" class="btn btn-success login_head_btn">Войти</button>
                                        </a>';
                            else
                                echo'<a href="/index.php">
                                         <button type="submit" class="btn btn-success exit_head_btn">Выход</button>
                                        </a>';

                        echo '</div>
                        <div class="col-md-1"></div>
					</div>
				</div>
			</header>
		</section>
';  
?>