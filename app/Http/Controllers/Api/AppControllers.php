<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class AppControllers extends Controller
{
    public function api(Request $request){
        return $request;
    }

    /**
     * return paginated records of users
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function users()
    {
    	$users = \App\User::paginate(5);
    	return response()->json($users);
    }
}
