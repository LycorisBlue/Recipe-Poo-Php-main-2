<?php
require_once 'config.php';

class Recipe {
    private $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    }

    public function getAllRecipes() {
        $query = "SELECT * FROM recipes";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRecipeById($id) {
        $query = "SELECT * FROM recipes WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createRecipe($data) {
        $query = "INSERT INTO recipes (title, descript) VALUES (:title, :descript)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':descript', $data['description']);
        $stmt->execute();
    }

    public function updateRecipe($id, $data) {
        $query = "UPDATE recipes SET title = :title, descript = :descript WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':descript', $data['description']);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function deleteRecipe($id) {
        $query = "DELETE FROM recipes WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
