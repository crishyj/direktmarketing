<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertise;

class AdvertiseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        config(['site.page' => 'advertise']);
        $options = Advertise::all();     
        return view('advertise.index', compact('options'));
    }

    public function create(){
        config(['site.page' => 'advertise']);
        return view('advertise.create');
    }

    public function store(Request $request){

        $request->validate([
            'option'=>'required',
           
          ]);
          $options = new Advertise([
            'option' => $request->get('option')          
          ]);
          $options->save();

          return redirect('/dashboard/advertise')->with('success', 'Successfully added');
    }

    public function update(Request $request){

        $request->validate([
            'option'=>'required',           
        ]);

        $options = Advertise::find($request->get("id"));
        $options->option = $request->get('option');
        $options->save();
        return response()->json('success');
    }

    public function delete($id){
        $options = Advertise::find($id);
        if(!$options){
            return back()->withErrors(["delete" => 'Something went wrong.']);
        }
        $options->delete();
        return back()->with("success", 'Deleted Successfully');
    }
}
