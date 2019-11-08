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
            'title'=>'required',
            'desc'=>'required',
            'list1'=>'required',
            'list2'=>'required',
            'list3'=>'required'           
          ]);
          $options = new Advertise([
            'title' => $request->get('title'),
            'desc' => $request->get('desc'),
            'list1' => $request->get('list1'),
            'list2' => $request->get('list2'),
            'list3' => $request->get('list3')           
          ]);
          $options->save();

          return redirect('/dashboard/advertise')->with('success', 'Successfully added');
    }

    public function update(Request $request){

        $request->validate([
            'title'=>'required',
            'desc'=>'required',
            'list1'=>'required',
            'list2'=>'required',
            'list3'=>'required'        
        ]);

        $options = Advertise::find($request->get("id"));
        $options->title = $request->get('title');
        $options->desc = $request->get('desc');
        $options->list1 = $request->get('list1');
        $options->list2 = $request->get('list2');
        $options->list3 = $request->get('list3');
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
