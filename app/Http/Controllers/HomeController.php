<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Number;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function store(Request $request)
    {
        $first_name = $request -> input('first_name');
        $last_name = $request -> input('last_name');


        for($count = 0; $count < count($first_name); $count++) {
            Contact::create([
                'first_name' => $first_name[$count],
                'last_name' => $last_name[$count],
                'user_id' => auth()->id() 
            ]);
        }

        $number_type = $request -> input('number_type');
        $number = $request -> input('number');

        if($number_type) {
            for($countN = 0; $countN < count($number_type); $countN++) {
                Number::create([
                    'number_type' => $number_type[$countN],
                    'number' => $number[$countN],
                    'contact_id' => Contact::where('first_name', $first_name)->first()->id
                ]);
            }
        }

        return redirect('/');
    }

}
