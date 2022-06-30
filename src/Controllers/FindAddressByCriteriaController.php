<?php

namespace Alkemy\Sepomex\Controllers;

use Alkemy\Sepomex\Models\Zipcode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FindAddressByCriteriaController extends Controller
{
    public function __invoke(Request $request)
    {

        $address = new Zipcode();

        if ($request->has("zipcode")) {
            $address = $address->whereCodigoPostal($request->input("zipcode"));
        }

        if ($request->has("zona")) {
            $address = $address->whereZona($request->input("zona"));
        }

        return $address->first() ?? response()->json(["message" => "Información no encontrada."], 404);
    }
}
