<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Address;
class UserController extends Controller
{

    /**
     * return paginated records of users
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $users = User::orderBy('created_at', 'desc');
        return response()->json($users->paginate(100));
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update($user, Request $request)
    {
        $user = User::findOrFail($user);
        $user->update($request->all());
        return response()->json($user);
    }

}
