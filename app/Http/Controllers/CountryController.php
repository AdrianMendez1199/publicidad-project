<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Province;
class CountryController extends Controller
{
    /**
     * this function is a relation province-country
     * @param integer $countryId
     * @return Eloquent
     */
    public function getProvinceByCountry(int $countryId) {
        return Country::with('province')
        ->where('id', $countryId)
        ->get()
        ->pluck('province');
    }

    /**
     * this function return relation province-neighborhood
     * @param integer $provinceId
     * @return void
     */
    public function getNeighborhoodByProvince(int $provinceId) {
        return Province::with('neighborhood')
         ->where('id', $provinceId)
         ->get()
         ->pluck('neighborhood');
    }
}
