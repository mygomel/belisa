<?php include 'header.php'; ?>


    <h1 class="text-center">Изменение товара #<?= $this->result['id'] ?></h1>


    <form action="/edit/<?= $this->result['id'] ?>" method="POST">
        <div class="form-group">
            <label>Название*</label>
            <input type="text" name="name" class="form-control" maxlength="200" value="<?= $this->result['name'] ?>" required>
        </div>
        <div class="form-group">
            <label>Описание</label>
            <textarea name="description" class="form-control" rows="6" maxlength="10000"><?= $this->result['description'] ?></textarea>
        </div>
        <div class="form-group">
            <label>Цена*</label>
            <input type="number" name="price" class="form-control" value="<?= $this->result['price'] ?>" step="0.01" maxlength="10" required>
            <small class="form-text text-muted">* Обязательные поля.</small>
        </div>
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>


<? include 'footer.php';
