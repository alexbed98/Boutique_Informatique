<?php

include_once 'src/data.php';
$products = $data['products-cards']['products'];
$productsSearch = [];

$search = '';

if (!empty($_GET['search'])) {

    $search = trim(strtolower($_GET['search']));

    $filterBySearch = function ($product) use ($search) {
        return (str_contains(strtolower($product['title']), $search));
    };

    $productsSearch = array_filter($products, $filterBySearch);

    $products = $productsSearch;
}

?>

<div class="row">

    <?php foreach ($products as $prod): ?>
        <!--Colonne-Column-->
        <div class="col-lg-4 d-flex align-items-stretch">

            <!--Carte-Card-->
            <div class="card mt-4">
                <picture>
                    <source srcset="<?= IMG . $prod['images']['sources'][0]['srcset'] ?>"
                        media="<?= $prod['images']['sources'][0]['media'] ?>">
                    <source srcset="<?= IMG . $prod['images']['sources'][1]['srcset'] ?>"
                        media="<?= $prod['images']['sources'][1]['media'] ?>">
                    <source srcset="<?= IMG . $prod['images']['sources'][2]['srcset'] ?>"
                        media="<?= $prod['images']['sources'][2]['media'] ?>">
                    <img src="<?= IMG . $prod['images']['default']['src'] ?>" class="card-img-top"
                        alt="<?= $prod['images']['default']['alt'] ?>">
                </picture>

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?= $prod['title'] ?></h5>
                    <p class="card-text"><?= $prod['description'] ?></p>
                    <a href="" class="btn btn-primary mt-auto align-self-start">Ajouter au panier</a>
                </div>
            </div>

        </div>
        <!--Colonne-->
    <?php endforeach; ?>

</div>