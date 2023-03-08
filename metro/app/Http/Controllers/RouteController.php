<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RouteModel;
use App\Http\Resources\RouteResource;

class RouteController extends Controller
{
    function getRoutesAPI()
    {

        $result = RouteModel::all(); //RouteModel[] =>json
        return RouteResource::collection($result);
    }
    function getRoutesAPIByRouteId($id)
    {

        $result = RouteModel::findOrFail($id); //RouteModel[] =>json
        return new RouteResource($result);
    }
}
