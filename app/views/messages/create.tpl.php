<?php require VIEWS . '/includes/header.php' ?>

<main class="main">
    <div class="container">
        <div class="row">
            <h1 class="py-4">Новое сообщение:</h1>
            <form action="/messages" method="post">

                <div class="mb-3">
                    <label for="title" class="form-label"><h4>Заголовок:</h4></label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Заголовок сообщения" required>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label"><h4>Автор:</h4></label>
                    <input name="author" type="text" class="form-control" id="author" placeholder="Автор сообщения" required>
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
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </div>

            </form>
        </div>
    </div>
</main>

<?php require VIEWS . '/includes/footer.php' ?>