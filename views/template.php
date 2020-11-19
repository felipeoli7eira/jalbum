<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?= $pageTitle ?? CONF_DEFAULT_PAGE_TITLE ?> </title>
        <link rel="stylesheet" href="<?= resource("libs|bootstrap|css|bootstrap.min.css") ?>">
        <link rel="stylesheet" href="<?= resource("css|app.css") ?>">
    </head>
    <body>
        <main id="template" class="<?= $templateType ?? null ?>">

            <?= $v->section("content"); ?>

        </main>
        <script src="<?= resource("libs|jquery|jquery.min.js") ?>"></script>
        <script src="<?= resource("libs|bootstrap|js|bootstrap.bundle.js") ?>"></script>
    </body>
</html>