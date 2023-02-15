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


    // public function store(Request $request)
    // {



        




    //         $image = $request->file('image');
    //         // if ($image) {
    //             $filename = time().'.'.$image->getClientOriginalExtension();
    //             Image::make($image)->resize(300, 300)->save(public_path('/images/products/'.$filename));
    //         // }
        
    //     // dd($request-> input());


    //             $Plate = new Plate;
    //             $Plate->name = $request->input('name');
    //             $Plate->image = $filename;
    //             $Plate->price = $request->input('price');
    //             $Plate->save();





    //     // $request = $request->all();
    //     // Plate::create($request);
    //     return redirect()->route('dashboard');
    // }


    public function store(Request $request){
        $product = new Plate();
        $input = $request->all();
        if($image = $request->file('image')){
           $destination_path = 'images/';
           $image_name = time() . '.' . $image->getClientOriginalExtension();
           $image->move($destination_path,$image_name);
           $input['image'] = "$image_name";
        }
        dd($image_name);
        $product->fill($input);
        $product->save();
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

    public function update()
    {
        return view('updatePlate');
    }

}
