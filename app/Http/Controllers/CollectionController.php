<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectionStoreRequest;
use App\Http\Requests\CollectionUpdateRequest;
use App\Http\Resources\CollectionStoreResource;
use App\Http\Resources\CollectionUpdateResource;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function store(CollectionStoreRequest $request)
    {
        $collection = Collection::create($request->validated());
        $token = $collection->createToken('Api/CollectionLogin');

        return response()->json([
            "message" => "Collection created",
            "token"=>$token->plainTextToken,
            "data" => new CollectionStoreResource($collection)
        ], 201);
    }

    public function show(Collection $collection)
    {
        return response()->json([
            "message" => "اطلاعات کالکشن دریافت شد",
            "data" => $collection
        ], 200);
    }

    public function update(CollectionUpdateRequest $request, Collection $collection)
    {
        $collection->update($request->validated());

        return response()->json([
            "message" => "Collection Info Updated ... !",
            "data" => new CollectionUpdateResource($collection)
        ], 200);
    }

    public function destroy(Collection $collection)
    {
        $collection->delete();

        return response()->json([
            "message" => "Collection Info Deleted ... !",
        ], 200);
    }
}
