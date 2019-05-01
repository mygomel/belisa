<?php include 'header.php'; ?>

        <h1 class="text-center">Товары</h1>

        <div class="card-deck">
            <? foreach ($this->products as $product): ?>

                <div class="card shadow-sm">

                    <h5 class="card-header"><?= $product['name'] ?></h5>
                    <div class="card-body">
                        <p class="card-text"><?= $product['description'] ?? "Нет описания" ?></p>
                    </div>

                    <div class="card-footer d-flex">
                        <div class="flex-grow-1">
    <? if (isset($_SESSION['level']) && @$_SESSION['level']>=5): ?>
                            <small><a href="/edit/<?= $product['id'] ?>">Изменить</a> <a href="/delete/<?= $product['id'] ?>">Удалить</a></small>
    <? endIf; ?>
                        </div>
                        <div><?= $product['price'] ?> руб.</div>
                    </div>

                </div>

            <? endforeach; ?>

        </div>


        <? if (isset($_SESSION['level'])): ?>

        <button class="btn btn-info m-3" type="button" data-toggle="collapse" data-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
            Добавить товар
        </button>

        <div class="collapse" id="collapseExample">
            <div class="card-body">

                <form action="/add" method="POST">
                    <div class="form-group">
                        <label>Название*</label>
                        <input type="text" name="name" class="form-control" maxlength="200" required>
                    </div>
                    <div class="form-group">
                        <label>Описание</label>
                        <textarea name="description" class="form-control" rows="3" maxlength="10000"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Цена*</label>
                        <input type="number" name="price" class="form-control" step="0.01" maxlength="10" required>
                        <small class="form-text text-muted">* Обязательные к заполнению поля.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>


            </div>
        </div>
        <? endIf; ?>





<? include 'footer.php';
