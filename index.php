<?php
require_once 'config.php';
require_once 'controllers/recipeControllers.php';

$recipeController = new RecipeController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $recipeController->index();
        break;
    case 'create':
        $recipeController->create();
        break;
    case 'store':
        $recipeController->store();
        break;
    case 'edit':
        $recipeController->edit($_GET['id']);
        break;
    case 'update':
        $recipeController->update($_POST['id']);
        break;
    case 'delete':
        $recipeController->delete($_GET['id']);
        break;
    default:
        $recipeController->index();
        break;
}
?>
