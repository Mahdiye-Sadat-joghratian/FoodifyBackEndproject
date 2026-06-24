<?php

namespace App\Observers;


use App\Models\Recipe;

class RecipeObserver
{
    public function creating(Recipe $recipe )
    {
        $recipe->recipe_code=mt_rand('11111' , '999999');
    }
    /**
     * Handle the product "created" event.
     */
    public function created(Recipe $recipe): void
    {
        //
    }

    /**
     * Handle the product "updated" event.
     */
    public function updated(Recipe $recipe): void
    {
        //
    }

    /**
     * Handle the product "deleted" event.
     */
    public function deleted(Recipe $recipe): void
    {
        //
    }

    /**
     * Handle the product "restored" event.
     */
    public function restored(Recipe $recipe): void
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     */
    public function forceDeleted(Recipe $recipe): void
    {
        //
    }
}
