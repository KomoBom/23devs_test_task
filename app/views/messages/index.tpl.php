<?php require VIEWS . '/includes/header.php' ?>

<main class="main py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <?php foreach ($messages as $message): ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><a href="messages?id=<?= $message['id'] ?>"><?= $message['title'] ?></a></h5>
                            <p class="card-text"><?= $message['short_description'] ?></p>
                            <a href="messages?id=<?= $message['id'] ?>" class="btn btn-primary">Читать комментарии</a>
                        </div>
                    </div>
                <?php endforeach; ?>

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?= $pagination->getHtml(); ?>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</main>

<?php require VIEWS . '/includes/footer.php' ?>