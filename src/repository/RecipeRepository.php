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
            $recipe['image']
        );
    }

    public function addRecipe(Recipe $recipe): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO recipes (title, description, created_at, id_assigned_by, image)
            VALUES (?, ?, ?, ?, ?)
        ');

        $assignedById = 1;
        $stmt->execute([
            $recipe->getTitle(),
            $recipe->getDescription(),
            $date->format('Y-m-d'),
            $assignedById,
            $recipe->getImage()
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
            );
        }
        return $result;
    }
}