<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Adword;
use App\Mail\CustomerVerify;
use Illuminate\Support\Facades\Mail;
class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::all();
        $adword = Adword::first();    
        return view('index', compact('customer', 'adword'));
    }

    public function category(){
        return view('customer.category');
    }

    public function country(){
        return view('customer.country');
    }

    public function supplier(){
        return view('customer.supplier');
    }

    public function description(){
        return view('customer.description');
    }

    public function register(){
        return view('customer.register');
    }

    public function create(Request $request){

        $validate_array = array(
            'Name'=>'required|string',
            'email'=>'required',
            'Telefonnummer'=>'required',
            'company'=>'required|string',
           
        );
        
        $request->validate($validate_array);     
        $verify = rand(100000,999999);

         Customer::create([
            'name' => $request->get('Name'),
            'email' => $request->get('email'),
            'phone' => $request->get('Telefonnummer'),
            'company' => $request->get('company'),
            'budget' => $request->get('budget'),
            'email_marketing' => $request->get('email_marketing'),
            'callcenter' => $request->get('callcenter'),
            'postal_Address' => $request->get('postal_Address'),
            'germany' => $request->get('germany'),
            'austria' => $request->get('austria'),
            'switzerland' => $request->get('switzerland'),
            'supplier_company' => $request->get('supplier_company'),
            'supplier_personal' => $request->get('supplier_personal'),
            'title' => $request->get('title'),
            'target_group_desc' => $request->get('target_group_desc'),
            'verfy_code' => $verify
        ]);             
        
        //  Mail::to($request->get('email'))->send(new CustomerVerify($verify, $request->get('name')));
        $name = $request->get('email');
        $email = $request->get('email');
        $Telefonnummer = $request->get('Telefonnummer');
        $company = $request->get('company');
        $budget = $request->get('budget');
        $title = $request->get('title');
        $target_group_desc = $request->get('target_group_desc');
        
        
        
        $emailFrom = $email;
        $to = "andreas@dieanalysten.com";
        $subject = "New Job Posted";
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
                    <td style="font-size:16px;  font-weight:bold"><strong>'.$Telefonnummer.'</strong></td>
                  </tr>
                  <tr>
                    <td style="font-size:14px; color:#323232">company :</td>
                  </tr>
                  <tr>
                    <td style="font-size:16px;  font-weight:bold"><strong>'.$company.'</strong></td>
                  </tr>
                  <tr>
                    <td style="font-size:14px; color:#323232">budget :</td>
                  </tr>
                  <tr>
                    <td style="font-size:16px;  font-weight:bold"><strong>'.$budget.'</strong></td>
                  </tr>
                  <tr>
                    <td style="font-size:14px; color:#323232">title :</td>
                  </tr>
                  <tr>
                    <td style="font-size:16px;  font-weight:bold"><strong>'.$title.'</strong></td>
                  </tr>
                  <tr>
                    <td style="font-size:14px; color:#323232">target_group_desc :</td>
                  </tr>
                  <tr>
                    <td style="font-size:16px;  font-weight:bold"><strong>'.$target_group_desc.'</strong></td>
                  </tr>
                </table>
            </div>
        </body>
        ';
 
 
        $headers = "From:" . $emailFrom . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        
// dump($headers);
// die;
        
        mail($to,$subject,$message,$headers);
        
        mail($request->get('email'),"Here is your verification code",$verify);
        return response()->json('success');   
       

    }

    public function customerVerify(){
        return view('customer.verification');
    }

    public function verify(Request $request){
        $verify_code = $request->get('verify');
        $target_group_desc = $request->get('target_group_desc');       
        $customer = Customer::where('target_group_desc', $target_group_desc)->first();

        if($verify_code == $customer->verfy_code){
            $customer->email_verified = 1;
            $customer->save();
            return response()->json('success'); 
        }       
          
    }
    
    public function show(Customer $id){
        return view('customer.show', compact('id'));
    }

    public function splash(){
        return view('customer.splash');
    }
    
    public function impressum(){
        return view('impressum');
    }

    public function delete($id){
      $customer = Customer::find($id);
      if(!$customer){
          return back()->withErrors(["delete" => 'Something went wrong.']);
      }
      $customer->delete();
      return back()->with("success", 'Deleted Successfully');
  }
 
}
