<?php 

require_once 'src/Page.php';

?>

<header>

    <!--Bannière-Banner-->
    <img src="/public/img/banner.jpg" class="img-fluid" alt="La meilleure boutique informatique !">

    <!--Bloc Navigation Menu principal-Navigation Block Top Menu-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fourth navbar example">
        <div class="container-fluid">

            <a class="navbar-brand" href="/"><img src="/public/img/boutique-logo.png" class="img-fluid"
                    alt="Accueil de la boutique"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
                aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link <?= ACTIVE_PAGE === Page::Home ? 'active' : ''; ?>" aria-current="page" href="<?php echo Page::Home->url() ?>"><?php echo Page::Home->text() ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ACTIVE_PAGE === Page::Products ? 'active' : ''; ?>" href="<?php echo Page::Products->url() ?>"><?php echo Page::Products->text() ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Services</a></li>
                            <li><a class="dropdown-item" href="">Location</a></li>
                            <li><a class="dropdown-item" href="">Achat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ACTIVE_PAGE === Page::Contact ? 'active' : ''; ?>" href="<?php echo Page::Contact->url() ?>"><?php echo Page::Contact->text() ?></a>
                    </li>
                </ul>

                <form role="search" action="<?= Page::Products->url()?>">
                    <input name="search" class="form-control" type="search" placeholder="Recherche" aria-label="Search">
                </form>

            </div>
        </div>
    </nav>
    <!--Bloc Navigation Menu principal-Navigation Block Top Menu-->

</header>