<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = User::with(['userimages' => function($query) {
            $query->where('filename','imgfilename1');
        }])
            ->whereHas('subscription', function ($query) {
                $query->where('expired_at', '>', Carbon::now());
            })

            ->orderBy('created_at', 'desc')
            ->get();
    
        return view('home', ['data' => $data]);
    }
}
