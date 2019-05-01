<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовый магазин</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/templates/style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <span class="navbar-brand">Магазин</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Главная</a>
            </li>
        </ul>

        <? if (!isset($_SESSION['level'])): ?>
        <form action="auth/" class="form-inline" method="post">
            <input name="name" class="form-control mr-sm-2" type="text" placeholder="Логин" required>
            <input name="password" class="form-control mr-sm-2" type="password" placeholder="Пароль" required>
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Войти</button>
        </form>
        <? else: ?>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/logout">Выход</a>
                </li>
            </ul>
        <? endif; ?>

    </div>
</nav>

<div class="container">