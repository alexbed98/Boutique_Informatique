<?php

$data = [
    "html" => [
        "lang" => "fr",
    ],
    "head" => [
        "title" => "La boutique informatique",
        "favicon" => "favicon.ico"
    ],
    "banner" => [
        "src" => "banner.jpg",
        "alt" => "La meilleure boutique informatique !",
    ],
    "top-menu" => [
        "logo" => [
            "src" => "boutique-logo.png",
            "link" => "/",
            "alt" => "Accueil de la boutique",
        ],
        "pages" => [
            "home" => [
                "link" => "/",
                "text" => "Accueil",
            ],
            "about" => [
                "link" => "/a-propos.php",
                "text" => "À propos",
            ],
            "products" => [
                "link" => "/produits.php",
                "text" => "Produits",
            ],
            "services" => [
                "link" => "/services.php",
                "text" => "Services",
                "subpages" => [
                    [
                        "link" => "/services.php",
                        "text" => "Services",
                    ],
                    [
                        "link" => "/services/location.php",
                        "text" => "Location",
                    ],
                    [
                        "link" => "/services/achat.php",
                        "text" => "Achat",
                    ],
                ],
            ],
            "contact" => [
                "link" => "/contact.php",
                "text" => "Contact",
            ],
        ],
    ],
    "page-heading" => [
        "text" => "La boutique d'informatique sur la rive-nord",
    ],
    "products-cards" => [
        "products" => [
            [
                "id" => "laptop1",
                "title" => "Laptop 1",
                "description" => "In nulla velit ad adipisicing incididunt nulla amet proident qui consequat aute. Cillum irure sit quis Lorem consectetur officia elit laborum exercitation labore nisi et aliqua. Tempor culpa consequat minim ipsum do veniam consectetur ullamco ad.",
                "images" => [
                    "default" => [
                        "src" => "pexels-pixabay-40185.jpg",
                        "alt" => "Laptop 1",
                    ],
                    "sources" => [
                        [
                            "srcset" => "pexels-pixabay-40185-520.jpg",
                            "media" => "(max-width:768px)",
                        ],
                        [
                            "srcset" => "pexels-pixabay-40185-700.jpg",
                            "media" => "(max-width:992px)",
                        ],
                        [
                            "srcset" => "pexels-pixabay-40185-450.jpg",
                            "media" => "(min-width:993px)",
                        ],
                    ],
                ],
                "price" => 1299
            ],
            [
                "id" => "mobile1",
                "title" => "Mobile 1",
                "description" => "Esse in voluptate exercitation ea. Lorem sit duis ipsum voluptate ullamco eu cillum eu occaecat dolore. Esse velit laborum nulla in labore ut aliquip ut aliqua non voluptate. Proident do pariatur velit consectetur labore et dolore ullamco dolor fugiat reprehenderit eiusmod voluptate.",
                "images" => [
                    "default" => [
                        "src" => "pexels-fotios-photos-1092644.jpg",
                        "alt" => "Mobile 1",
                    ],
                    "sources" => [
                        [
                            "srcset" => "pexels-fotios-photos-1092644-520.jpg",
                            "media" => "(max-width:768px)",
                        ],
                        [
                            "srcset" => "pexels-fotios-photos-1092644-700.jpg",
                            "media" => "(max-width:992px)",
                        ],
                        [
                            "srcset" => "pexels-fotios-photos-1092644-450.jpg",
                            "media" => "(min-width:993px)",
                        ],
                    ],
                ],
                "price" => 699
            ],
            [
                "id" => "pc1",
                "title" => "PC 1",
                "description" => "Lorem ut ea esse commodo laborum labore culpa. Aute exercitation proident et dolor reprehenderit cupidatat qui eu excepteur incididunt sit. Exercitation nisi ea laboris deserunt pariatur fugiat velit incididunt. Sit aliquip ad do voluptate aliquip.",
                "images" => [
                    "default" => [
                        "src" => "pexels-joshsorenson-1714208.jpg",
                        "alt" => "",
                    ],
                    "sources" => [
                        [
                            "srcset" => "pexels-joshsorenson-1714208-520.jpg",
                            "media" => "(max-width:768px)",
                        ],
                        [
                            "srcset" => "pexels-joshsorenson-1714208-700.jpg",
                            "media" => "(max-width:992px)",
                        ],
                        [
                            "srcset" => "pexels-joshsorenson-1714208-450.jpg",
                            "media" => "(min-width:993px)",
                        ],
                    ],
                ],
                "price" => 2299
            ],
            [
                "id" => "pc2",
                "title" => "PC 2",
                "description" => "Lorem qui nostrud pariatur eu irure sunt fugiat labore minim ullamco ad qui dolor commodo. Officia nulla exercitation reprehenderit ea ut nisi magna velit anim adipisicing eu esse. Deserunt id excepteur minim qui eu mollit cillum in non mollit sint esse proident tempor. Commodo occaecat non voluptate nulla velit cupidatat aliqua. Qui ut do quis laborum minim id commodo do irure occaecat anim mollit.",
                "images" => [
                    "default" => [
                        "src" => "pexels-joshsorenson-1714208.jpg",
                        "alt" => "PC 2",
                    ],
                    "sources" => [
                        [
                            "srcset" => "pexels-joshsorenson-1714208-520.jpg",
                            "media" => "(max-width:768px)",
                        ],
                        [
                            "srcset" => "pexels-joshsorenson-1714208-700.jpg",
                            "media" => "(max-width:992px)",
                        ],
                        [
                            "srcset" => "pexels-joshsorenson-1714208-450.jpg",
                            "media" => "(min-width:993px)",
                        ],
                    ],
                ],
                "price" => 4599
            ],
        ],
    ],
    "footer-menu" => [
        "pages" => [
            "home" => [
                "link" => "/",
                "text" => "Accueil",
            ],
            "products" => [
                "link" => "/produits.php",
                "text" => "Produits",
            ],
            "contact" => [
                "link" => "/contact.php",
                "text" => "Contact",
            ],
        ],
    ],
    "copyright" => [
        "text" => "La boutique informatique inc.",
    ],
    "extra-texts" => [
        "add-cart" => "Ajouter au panier",
        "search" => "Recherche",
    ],
];