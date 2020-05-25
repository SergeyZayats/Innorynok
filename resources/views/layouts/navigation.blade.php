<!DOCTYPE html>
<html lang="en">
<head>
<title>ИННОРЫНОК | Образование</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/login_style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/js/script.js"></script>

</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/" style="color:#B9C7FF">
        <font size="3">
        ИННОРЫНОК | Образование 
        <span class="glyphicon glyphicon-education"></span>
        </font>
        </a>
      </div>

    <ul class="nav navbar-nav">

       <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#11ffc9">
       <font size="3">
       Курсы и уроки
       <span class="glyphicon glyphicon-menu-hamburger"></span>
       </font>
       </a>

        <ul class="dropdown-menu">
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Языки программирования <b class="caret"></b></a>

            <ul class="dropdown-menu">
<!--            <li><a href="#">Java</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">C++</a></li>
                <li><a href="#">C</a></li>
                <li><a href="#">C#</a></li>
                <li><a href="#">Ruby</a></li>                               -->
                <li><a href="/программирование/php/.">PHP</a></li>
                <li><a href="/программирование/javascript/.">JavaScript</a></li>
            </ul>
          </li>
<!--    </ul>
      </li>
    </ul>


 
                  <a href="/программирование/php" class="dropdown-toggle" data-toggle="dropdown">PHP<b class="caret"></b></a>

                    <ul class="dropdown-menu">

                      <li><a href="/программирование/php/основы">Основы языка</a></li>
                      <li><a href="/программирование/php/ООП">ООП</a></li>
                      <li><a href="/программирование/php/паттерны">Шаблоны проектирования</a></li>

                      <li>
                        <a href="/программирование/php/CMS" class="dropdown-toggle" data-toggle="dropdown">CMS <b class="caret"></b></a>

                        <ul class="dropdown-menu">
                            <li><a href="/программирование/php/CMS/Wordpress">Wordpress</a></li>
                            <li><a href="/программирование/php/CMS/Drupal">Drupal</a></li>
                        </ul>
                      </li>

                      <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Frameworks <b class="caret"></b></a>

                        <ul class="dropdown-menu">
                            <li><a href="#">Laravel</a></li>
                            <li><a href="#">Symfony</a></li>
                            <li><a href="#">Codeigniter</a></li>
                        </ul>
                      </li>


                    </ul>
                </li>
            </ul>
          </li>
-->          
           <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Менеджмент <b class="caret"></b></a>

            <ul class="dropdown-menu">
                <li><a href="/менеджмент/продукт/.">Управление продуктом </a></li>
            </ul>
          </li>         
<!--  
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Бизнес <b class="caret"></b></a>

            <ul class="dropdown-menu">
                <li><a href="#">Бизнес-анализ</a></li>
                <li><a href="#">Анализ данных</a></li>
                <li><a href="#">Маркетинг</a></li>
            </ul>
          </li>
--> 
        </ul>
      </li>
    </ul>

<!-- 
   
    <form action="/search" method="POST" id="simple_search" class="navbar-form navbar-left">
      <div class="form-group">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="text" name="search_phrase" class="form-control" placeholder="Я хочу найти...">
      </div>
      <button type="submit" class="btn btn-default">Искать</button>
    </form>

-->


    <ul class="nav navbar-nav navbar-right">

    <!-- Authentication Links -->
    @if ($authData['logged_in'] !== true)

      <li><a href="#" data-toggle="modal" data-target="#login-modal" style="color:#01DF3A"><font size="3"><span class="glyphicon glyphicon-log-in"></span> Войти</font></a></li>

      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="loginmodal-container">
            <h1>Посмотреть свой дневник</h1><br>
            <form action="/login" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <input type="submit" class="login loginmodal-submit" value="Открыть дневник">
            </form>
          </div>
        </div>
      </div>

      <li><a href="#" data-toggle="modal" data-target="#register-modal" style="color:#FF8000"><font size="3"><span class="glyphicon glyphicon-user"></span> Зарегистрироваться</font></a></li>

      <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="loginmodal-container">
            <h1>Зарегистрировать свой дневник</h1><br>
            <form action="/register" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <input type="submit" class="login loginmodal-submit" value="Создать дневник">
            </form>
          </div>
        </div>
      </div>
  
  @else
      
      <li><a href="/user-profile" style="color:#01DF3A"><font size="3"><span class="glyphicon glyphicon-book"></span> Дневник {{$authData['login']}}</font></a></li>
      <li><a href="/logout" style="color:#B22222"><font size="3"><span class="glyphicon glyphicon-log-in"></span> Выйти </font></a></li>

  @endif

    </ul>
  </div>
</nav>