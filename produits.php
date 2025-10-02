<?php
    include_once 'core/error-exception.php';
    require_once 'src/Page.php';
    require_once 'src/initialization.php';

    const ACTIVE_PAGE = Page::Products;
?>

<!DOCTYPE html>
<html lang="fr"></html>

<?php include_once TEMPLATE.'/head.php';?>

<body>

    <!--Contenant principal pour largeur du contenu-Main container-->
    <div class="container">

        <?php include_once TEMPLATE.'/header.php'; ?>

        <main>
            <h1 class="py-3 mt-3">La boutique d'informatique sur la rive-nord</h1>

            <!--Ligne qui contient des colonnes-Row-->

            <?php include_once TEMPLATE.'/products.php'; ?>

            <!--Ligne-->

        </main>

        <!--Bloc pied de page-Footer block-->

        <?php include_once TEMPLATE.'/footer.php'; ?>

        <!--Bloc pied de page-Footer block-->

    </div>
    <!--Contenant principal-->

</body>

</html>