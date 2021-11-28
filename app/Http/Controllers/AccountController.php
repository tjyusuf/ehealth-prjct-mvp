<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class AccountController extends Controller
{
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

//         dd($geoLocation = Location::get(request()->ip()));

//         $city = $geoLocation->cityName;
        $city = "Kaduna";

          

        return view('account', compact('city'));

    }
}
