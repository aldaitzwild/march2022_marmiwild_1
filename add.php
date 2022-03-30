<?php

require_once 'config.php';
require __DIR__ . '/src/models/recipe-model.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $recipe = array_map('trim', $_POST);

    if (empty($errors)) {
        saveRecipe($recipe);
        header('Location: /');
        die();
    }
}

require __DIR__ . '/src/views/form.php';