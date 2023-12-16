<?php require VIEWS . '/includes/header.php' ?>

<main class="main mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?= $message['title'] ?></h5>
                        <p class="card-text">Автор : <?= $message['author'] ?></p>
                        <p class="card-text">Краткое содержание: <?= $message['short_description'] ?></p>
                        <p class="card-text">Полное содержание: <?= $message['full_description'] ?></p>

                        <form action="/messages" method="post">
                            <input type="hidden" name="_method" value="PATCH">

<!--                        Данные поля нужны только для того, чтобы форма помнила свои значения при редактировании-->
                            <input type="hidden" name="title" value="<?= $message['title'] ?>">
                            <input type="hidden" name="author" value="<?= $message['author'] ?>">

                            <input type="hidden" name="id" value="<?= $message['id'] ?>">
                            <button type="submit" class="btn btn-link">Изменить</button>
                        </form>

                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title p-2">Комментарии:</h4>
                    <?php foreach ($comments as $comment): ?>
                        <div class="card m-2">
                            <div class="card-body">
                                <div class="blockquote">
                                    <p><?= $comment['content'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Добавить комментарий:</h5>
                        <form action="messages/comment" method="post">
                            <input type="hidden" name="message_id" value="<?= $message['id'] ?>">
                            <div class="mb-3">
                                <input name="content" type="text" class="form-control" id="content" placeholder="Поделитесь своим мнением" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require VIEWS . '/includes/footer.php' ?>