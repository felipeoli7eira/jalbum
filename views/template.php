<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?= $pageTitle ?? CONF_DEFAULT_PAGE_TITLE ?> </title>
        <link rel="stylesheet" href="<?= resource("dist|app.css") ?>">
    </head>
    <body>
        <main id="template" class="<?= $templateType ?? null ?>">

            <?= $v->section("content"); ?>

        </main>
        <script src="<?= resource("dist|app.js") ?>"></script>
    </body>
</html>