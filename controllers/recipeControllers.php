<?php
require_once './models/Recipe.php';

class RecipeController {
    private $recipeModel;

    public function __construct() {
        $this->recipeModel = new Recipe();
    }

    public function index() {
        $recipes = $this->recipeModel->getAllRecipes();
        require 'views/index.php';
    }

    public function create() {
        require 'views/create.php';
    }

    public function store() {
        $data = [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            // Ajoutez d'autres champs selon vos besoins
        ];
        $this->recipeModel->createRecipe($data);
        header('Location: index.php');
    }

    public function edit($id) {
        $recipe = $this->recipeModel->getRecipeById($id);
        require 'views/edit.php';
    }

    public function update($id) {
        $data = [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            // Ajoutez d'autres champs selon vos besoins
        ];
        $this->recipeModel->updateRecipe($id, $data);
        header('Location: index.php');
    }

    public function delete($id) {
        $this->recipeModel->deleteRecipe($id);
        header('Location: index.php');
    }
}
?>
