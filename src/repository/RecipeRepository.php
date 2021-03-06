<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Recipe.php';

class RecipeRepository extends Repository
{

    public function getRecipe(string $id): ?Recipe
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM recipes WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $recipe = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($recipe == false) {
            return null;
        }

        return new Recipe(
            $recipe['title'],
            $recipe['description'],
            $recipe['image'],
            $recipe['ingredient'],
            $recipe['kcal']
        );
    }

    public function addRecipe(Recipe $recipe): void
    {
        $database = new Database();

        $stmt = $database->connect()->prepare('
            SELECT id FROM users WHERE email= :email
        ');

        $stmt->bindParam(':email', json_decode($_COOKIE["user"], true) ['email'], PDO::PARAM_STR);

        $stmt -> execute();

        $tmp = $stmt->fetch(PDO::FETCH_ASSOC);

        $userID = $tmp['id'];

        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO recipes (title, description, created_at, id_assigned_by, image, ingredient, kcal)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ');



        $assignedById = $userID;

        $stmt->execute([
            $recipe->getTitle(),
            $recipe->getDescription(),
            $date->format('Y-m-d'),
            $assignedById,
            $recipe->getImage(),
            $recipe->getIngredient(),
            $recipe->getKcal()
        ]);
    }

    public function getRecipes(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM recipes
        ');



        $stmt->execute();
        $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);


        foreach ($recipes as $recipe){
            $result[] = new Recipe(
                $recipe['title'],
                $recipe['description'],
                $recipe['image'],
                $recipe['ingredient'],
                $recipe['kcal']
            );
        }
        return $result;
    }
}