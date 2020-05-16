<?php

namespace App\Http\Controllers;

use App\City;
use App\Location;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getCities()
    {
        $data = City::get();


        return response()->json($data);
    }

    /**
     * Retrieve states data
     * @param Request $request
     * @return JsonResponse
     */
    public function getLocations(Request $request)
    {
        $data = Location::where('city_id', $request->city_id)->get();

        return response()->json($data);
    }
}
