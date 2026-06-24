<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeStoreRequest;
use App\Http\Requests\RecipeUpdateRequest;
use App\Http\Resources\RecipeStoreResource;
use App\Http\Resources\RecipeUpdateResource;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function store(RecipeStoreRequest $request)
    {
        $recipe = Recipe::create($request->validated());

        return response()->json([
            "message" => "Recipe created successfully",
            "data" => new RecipeStoreResource($recipe)
        ], 201);
    }

    public function show(Recipe $recipe)
    {
        return response()->json([
            "message" => "Recipe information retrieved",
            "data" => $recipe
        ], 200);
    }

    public function update(RecipeUpdateRequest $request, Recipe $recipe)
    {
        $recipe->update($request->validated());

        return response()->json([
            "message" => "Recipe Info Updated ... !",
            "data" => new RecipeUpdateResource($recipe)
        ], 200);
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return response()->json([
            "message" => "Recipe Info Deleted ... !"
        ], 200);
    }
}
