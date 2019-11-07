<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class SupplierController extends Controller
{
    public function contact_request(){
        return view('supplier.contact');
    }

    public function contact_send(Request $request){      

        $validate_array = array(
            'name'=>'required|string',
            'email'=>'required',
            'phone'=>'required',
            'proposal'=>'required|string'           
        );
        
        $request->validate($validate_array); 
        
        $name =$request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $porposal = $request->get('proposal');

        Mail::to('kontakt@direktmarketing-boerse.de')->send(new Contact($name, $email, $phone, $porposal));        
        return response()->json('success');   
    }
}
