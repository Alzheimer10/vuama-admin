<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * return paginated records of services
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $services = Service::orderBy('created_at', 'desc');
        return response()->json($services->paginate(100));
    }

    /**
     * return paginated records of Service
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return response()->json($service);
    }

    /**
     * Remove the specified Service from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        if (empty($service)) {
        }
        return response()->json($service->delete());
    }


    /**
     * Store a newly created Service in storage.
     *
     * @param CreateestudianteRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['status'] = $input['status'] === 'true' ? true : false;
        $service = Service::create($input);
        return response()->json($service);
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $input['status'] = $input['status'] === 'true' ? true : false;
        $service = Service::findOrFail($input['id']);
        if (empty($service))
            return $this->sendError('Servicio no encontrado');
        $service = $service->update($input);
    	return response()->json($service);
    }
}
