<?php require VIEWS . '/includes/header.php' ?>

<main class="main">
    <div class="container">
        <div class="row">
            <h1 class="py-4">Изменить сообщение:</h1>
            <form action="/messages" method="post">

                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
                <input type="hidden" name="data_updated" value="true">

                <div class="mb-3">
                    <label for="title" class="form-label"><h4>Заголовок:</h4></label>
                    <input name="title" type="text" class="form-control" id="title" value="<?= $_POST['title'] ?>" placeholder="Заголовок сообщения" required>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label"><h4>Автор:</h4></label>
                    <input name="author" type="text" class="form-control" id="author" value="<?= $_POST['author'] ?>" placeholder="Автор сообщения" required>
                </div>

                <div class="mb-3">
                    <label for="short_description" class="form-label"><h4>Краткое содержание:</h4></label>
                    <textarea name="short_description" class="form-control" id="short_description" rows="2" placeholder="Кратко опишите сообщение" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="full_description" class="form-label"><h4>Полное содержание:</h4></label>
                    <textarea name="full_description" class="form-control" id="full_description" rows="6" placeholder="Полностью опишите сообщение" required></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                </div>

            </form>
        </div>
    </div>
</main>

<?php require VIEWS . '/includes/footer.php' ?>