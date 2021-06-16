<?php

require_once 'AppController.php';

class RecipeController extends AppController
{
    public function addRecipe()
    {
        $this->render('addRecipe');
    }
}