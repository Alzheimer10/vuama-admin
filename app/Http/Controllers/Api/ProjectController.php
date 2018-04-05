<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use \Carbon\Carbon;
class ProjectController extends Controller
{

    /**
     * return paginated records of Projects
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function projects(Request $request)
    {
        $projects = Project::orderBy('created_at', 'desc');

        if(!is_null($request->services)){
            $projects = $projects->whereIn('service_id', explode(',', $request->services));
        }
        if(!is_null($request->status)){
            $projects = $projects->whereIn('status',explode(',', $request->status));
        }
        if(!is_null($request->types)){
            $projects = $projects->whereIn('type', explode(',', $request->types));
        }
        if(!is_null($request->dataPicker)){
            $dataPicker    =   explode(',', $request->dataPicker);
            $projects = $projects->whereBetween('created_at',[
                Carbon::parse($dataPicker[0])->format('Y-m-d 00:00:00'),
                Carbon::parse($dataPicker[1])->format('Y-m-d 23:59:59')
            ]);
        }
        return response()->json($projects->paginate(10));
    }
}
