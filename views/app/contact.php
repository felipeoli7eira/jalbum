<?php $v->layout("../template", ["pageTitle" => CONF_APP_NAME . " | contato", "templateType" => "app"]) ?>

<?= $v->insert("../components/app/navbar") ?>

<div class="container-fluid contact-view text-center">
    <img src="<?= resource("img|undraw_Mailbox_re_dvds.svg") ?>" alt="Contato" class="img-view-contact mt-5">

    <h2 class="h2 h2-responsive text-black-50 fw-300 mt-5">Meios de contato</h2>
    <p>Entre em contato por meio do canal mais conveniente para você</p>

    <nav class="d-flex flex-wrap justify-content-center contacts-links">
        <a href="#" class="btn btn-success">WhatsApp</a>
        <a href="#" class="btn btn-info"> Telegam: felipeOli7eira_t</a>

        <a href="#" class="btn btn-primary">Linkedin: felipeOli7eira</a>
        <a href="#" class="btn btn-danger">Instagram: felipeOli7eira</a>

        <a href="#" class="btn btn-primary">Facebook: felipeOli7eira</a>
    </nav>
</div>
