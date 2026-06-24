<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Resources\CategoryStoreResource;
use App\Http\Resources\CategoryUpdateResource;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(CategoryStoreRequest $request)
    {
        $category = Category::create($request->validated());

        return response()->json([
            "message" => "Category created",
            "data" => new CategoryStoreResource($category)
        ], 201);
    }

    public function show(Category $category)
    {
        return response()->json([
            "message" => "اطلاعات دسته‌بندی دریافت شد",
            "data" => $category
        ], 200);
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->update($request->validated());

        return response()->json([
            "message" => "Category Info Updated ... !",
            "data" => new CategoryUpdateResource($category)
        ], 200);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            "message" => "Category Info Deleted ... !",
        ], 200);
    }
}
