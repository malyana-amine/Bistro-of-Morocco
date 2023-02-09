<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plate;

class PlateController extends Controller
{
    
    



    public function home(Request $request)
    {
        // $request = $request->all();
        // Food::create($request);
        return view('add');
    }


    public function store(Request $request)
    {
        $request = $request->all();
        Plate::create($request);
        return redirect()->route('dashboard');
    }



    public function index()
    {
        // $users = User::all();
        // dd('Hello From controler') ;
        // return view('users.index', compact('users'));

        $data = Plate::all();
        // $data = 'ahmes';
        return view('dashboard')->with('data',$data);
    }




}
