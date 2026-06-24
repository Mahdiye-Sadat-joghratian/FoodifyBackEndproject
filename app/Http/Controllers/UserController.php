<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserStoreResource;
use App\Http\Resources\UserUpdateResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(UserStoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $data['follower_count'] = 0;
        $data['following_count'] = 0;

        $user = User::create($data);
        $token = $user->createToken('Api/User')->plainTextToken;

        return response()->json(
            [
                "message" => "User created",
                "token" => $token,
                "data" => $user
            ],
            201
        );
    }

    public function show(User $user)
    {
        return response()->json(
            [
                "message" => "اطلاعات دریافت شد",
                "data" => $user
            ],
            200
        );
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $data = $request->validated();

        if (isset($data['password']) && $data['password']) {
            $data['password'] = Hash::make($data['password']);

        } else {
            unset($data['password']);
        }

        $user->update($data);

        return response()->json(
            [
                "message" => "User Info Updated ... !",
                "data" => $user
            ],
            200
        );
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(
            [
                "message" => "User Info Deleted ... !",
            ],
            200
        );
    }
}




