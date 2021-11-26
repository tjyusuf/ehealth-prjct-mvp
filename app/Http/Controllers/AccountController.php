<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Adrianorosa\GeoLocation\GeoLocation;


class AccountController extends Controller
{
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $geoLocation = GeoLocation::lookup(request()->ip());

        $city = $geoLocation->getCity();

          

        return view('account', compact('city'));

    }
}
