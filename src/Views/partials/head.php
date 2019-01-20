<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= SITE_NAME ?></title>

    <link href="<?= $this->getStylesheet('main'); ?>" rel="stylesheet">

</head>

<body>

<main class="todoapp">
    <?php
        $all_completed = true;
        foreach ($todos as $todo) {
            if ($todo['completed'] == 'false') {
               $all_completed = false;
            }
        }
    ?>
    <?= includeWith('/partials/nav.php', compact('all_completed', $all_completed)) ?>
