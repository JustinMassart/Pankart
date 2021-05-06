<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php is_front_page() ? bloginfo('description') : wp_title('Easy Spacy •'); ?></title>
    <!-- Assets -->
    <link rel="stylesheet" href="<?= pankart_asset('css/theme.css'); ?>">
    <script src="<?= pankart_asset('js/app.js'); ?>"></script>
    <!-- WordPress -->
    <?php wp_head(); ?>
</head>
<body>
<header class="top">
    <h1 class="top__title"><?= is_front_page() ? 'Membres' : trim(wp_title('', false)); ?></h1>
</header>