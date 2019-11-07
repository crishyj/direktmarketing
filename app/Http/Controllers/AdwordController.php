<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adword;

class AdwordController extends Controller
{
    public function index(){
        config(['site.page' => 'adword']);
        $adword = Adword::first();       
        return view('dashboard/adword', compact('adword'));
    }

    public function edit(Request $request){
        $request->validate([
            'title'=>'required',
            'desc' => 'required',
            'list1' => 'required',
            'list2' => 'required',
            'list3' => 'required',
        ]);        
        $adwords = Adword::first();
        $adwords->title = $request->get("title");
        $adwords->desc = $request->get("desc");
        $adwords->list1 = $request->get("list1");
        $adwords->list2 = $request->get("list2");
        $adwords->list3 = $request->get("list3");     

        $adwords->save();
      
        return redirect('/dashboard/adword')->with('success', 'Successfully saved');
    }
}
