<nav class="navbar navbar-light navbar-expand-lg">
    <a href="<?= url() ?>" class="navbar-brand"> <?= CONF_APP_NAME ?> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_menu" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav_menu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= url("projetos") ?>">PROJETOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SOBRE</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-rounded bg-app text-white" href="<?= url("login") ?>">LOG IN</a>
            </li>
        </ul>
    </div>
</nav>