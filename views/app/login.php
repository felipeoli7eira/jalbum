<?php $v->layout("../template", [ "pageTitle" => CONF_APP_NAME . " | LOG IN", "templateType" => "app"  ]) ?>

<div class="d-flex flex-column justify-content-center login-view">

    <form method="POST" action="<?= url("login") ?>" name="login" class="col col-9 col-xs-10 col-sm-10 col-md-4 col-lg-3 mx-auto login-form">

        <img src="<?= resource("img|undraw_secure_login.svg") ?>" alt="LogIn" width="200" class="d-block mx-auto mb-3">

        <div class="alert alert-danger m-0 d-none"></div>
        <div class="alert alert-success m-0 d-none"></div>
    
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <img src="<?= resource("icons|envelope.svg") ?>" alt="E-mail" width="20">
                </div>
            </div>
            <input type="email" name="umail" value="felipe@gmail.com" class="form-control" placeholder="E-mail" required autofocus>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <img src="<?= resource("icons|lock.svg") ?>" alt="Senha" width="20">
                </div>
            </div>
            <input type="password" name="upwd" value="1237657" class="form-control" placeholder="Senha" required>
        </div>

        <div class="form-ground mt-3 text-right">
            <button type="submit" name="sub" class="btn bg-app text-white py-2">Log In</button>
        </div>

        <nav class="mt-5">
            <a href="<?= url_back() ?>" class="btn btn-light">
                <img src="<?= resource("icons|arrow-left.svg") ?>" alt="voltar" width="15px">
                voltar
            </a>
        </nav>
    </form>
</div>

<?php $v->start("js") ?>

    <script type="module" src="<?= resource("js|main.js") ?>"></script>

<?php $v->end() ?>