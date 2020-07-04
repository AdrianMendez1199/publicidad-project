<?php

namespace App\Http\Controllers;

use App\User;
use App\Country;
use Carbon\Carbon;

class HomeController extends Controller
{
   
    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $countries = Country::select('country', 'id')
        ->get();

            
        $user = User::with(['userimages' => function($query) {
            $query->where('filename','imgfilename1');
        }, 'subscription' => function($query) {
            $query->where('plan_id' , 1);
        }])
            ->whereHas('subscription', function ($query) {
                $query->where('expired_at', '>', Carbon::now());
            })
            ->orderBy('created_at', 'desc')
            ->get();
    
        return view('home', ['data' => $user, 'countries' => $countries]);
    }
}
