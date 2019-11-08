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
        
        
        $emailFrom = $email;
        $to = "andreas@dieanalysten.com";
        $subject = "New Proposal";
        $message = '<body >
            <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc">
                <table  width="100%" border="0" cellspacing="5" cellpadding="10">
                  <tr>
                    <td style="font-size:14px; color:#323232">Name</td>
                  </tr>
                  <tr>
                    <td style="font-size:16px; font-weight:bold"><strong>' . $name .'</strong></td>
                  </tr>
                  <tr>
                    <td style="font-size:14px; color:#323232">Emil :</td>
                  </tr>
                  <tr>
                    <td style="font-size:16px;  font-weight:bold"><strong>'.$email .'</strong></td>
                  </tr>
                   <tr>
                    <td style="font-size:14px; color:#323232">Telefonnummer :</td>
                  </tr>
                  <tr>
                    <td style="font-size:16px;  font-weight:bold"><strong>'.$phone.'</strong></td>
                  </tr>                 
                  <tr>
                    <td style="font-size:14px; color:#323232">Proposal :</td>
                  </tr>
                  <tr>
                    <td style="font-size:16px;  font-weight:bold"><strong>'.$porposal.'</strong></td>
                  </tr>
                </table>
            </div>
        </body>
        ';
 
 
        $headers = "From:" . $emailFrom . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
      
        mail($to,$subject,$message,$headers);

        // Mail::to('kontakt@direktmarketing-boerse.de')->send(new Contact($name, $email, $phone, $porposal));        
        return response()->json('success');   
    }
}
