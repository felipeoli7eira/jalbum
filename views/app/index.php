<?php $v->layout("template", [ "pageTitle" => CONF_APP_NAME . " | homePage", "templateType" => "app" ]) ?>

<?= $v->insert("components/app/navbar") ?>