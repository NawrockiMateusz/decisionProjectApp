<?php


class Recipe
{
    private $title;
    private $description;
    private $image;
    private $kcal;
    private $ingredient;

    public function __construct($title, $description, $image, $ingredient,$kcal)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->kcal = $kcal;
        $this->ingredient = $ingredient;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getImage(): string
    {
        return $this->image;
    }


    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function getKcal()
    {
        return $this->kcal;
    }


    public function setKcal($kcal): void
    {
        $this->kcal = $kcal;
    }

    public function getIngredient(): string
    {
        return $this->ingredient;
    }


    public function setIngredient($ingredient): void
    {
        $this->ingredient = $ingredient;
    }


}