<?php
require_once 'src/Page.php';
?>

<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="<?php echo Page::Home->url() ?>" class="nav-link px-2 text-body-secondary">
                <?php echo Page::Home->text() ?></a></li>
        <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="<?php echo Page::Products->url() ?>">
                <?php echo Page::Products->text() ?></a></li>
        <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="<?php echo Page::Contact->url() ?>">
                <?php echo Page::Contact->text() ?></a></li>
    </ul>
    <p class="text-center text-body-secondary">© 2025 La boutique informatique inc.</p>
</footer>