<?php

use WebServer\Result\Page;

/**
 * @var Page $this
 * @var Page $page
 * @var array $pageData
 * @var string $title
 * @var array $cssList
 * @var array $scriptList
 * @var array $imageList
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <?php if (!empty($cssList)): ?>
        <?php foreach ($cssList as $css): ?>
            <link rel="stylesheet" href="<?= $css ?>" media="all">
        <?php endforeach ?>
    <?php endif ?>
    <?php if (!empty($scriptList)): ?>
        <?php foreach ($scriptList as $script): ?>
            <script src="<?= $script ?>" defer></script>
        <?php endforeach ?>
    <?php endif ?>
    <meta name="viewport" content="width=device-width, height=device-width, initial-scale=1">
</head>
<body>
<header>
    <div>
        <?= __FILE__ . PHP_EOL ?>
    </div>
</header>
<main>
    <div>
        <?php try {
            $page->viewContent();
        } catch (Exception $error) {} ?>
    </div>
</main>
<footer></footer>
</body>
</html>
