<?php
session_start();
?>

<div class="content__body">
    <?php for ($i = 0; $i < count($args['posts']); $i++) : ?>
        <?php // ! ПРИВЕДЕНИЕ ТИПОВ
        if (isset($_SESSION['first_created_post_id']) && (int) $args['posts'][$i]->getId() == (int) $_SESSION['first_created_post_id']) :
        ?>
            <div class="content__post active">
                <h1 class="content__post-title"><?= $args['posts'][$i]->getTitle() ?></h1>
                <p class="content__post-desc"><?= $args['posts'][$i]->getDescription() ?></p>
            </div>
        <?php else : ?>
            <div class="content__post">
                <h1 class="content__post-title"><?= $args['posts'][$i]->getTitle() ?></h1>
                <p class="content__post-desc"><?= $args['posts'][$i]->getDescription() ?></p>
            </div>
        <?php endif ?>
    <?php endfor; ?>
</div>