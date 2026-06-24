<?php

namespace App\Http\Controllers;

use App\Http\Requests\FollowStoreRequest;
use App\Http\Requests\FollowUpdateRequest;
use App\Http\Resources\FollowStoreResource;
use App\Http\Resources\FollowUpdateResource;
use App\Models\Follow;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function store(FollowStoreRequest $request)
    {
        $follow = Follow::create($request->validated());

        return response()->json([
            "message" => "Follow created",
            "data" => new FollowStoreResource($follow)
        ], 201);
    }

    public function show(Follow $follow)
    {
        return response()->json([
            "message" => "اطلاعات دنبال کردن دریافت شد",
            "data" => $follow
        ], 200);
    }

    public function update(FollowUpdateRequest $request, Follow $follow)
    {
        $follow->update($request->validated());

        return response()->json([
            "message" => "Follow Info Updated ... !",
            "data" => new FollowUpdateResource($follow)
        ], 200);
    }

    public function destroy(Follow $follow)
    {
        $follow->delete();

        return response()->json([
            "message" => "Follow Info Deleted ... !",
        ], 200);
    }
}

