<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        config(['site.page' => 'dashboard']);
        $customer = Customer::where('oneform', 0)->get();
        return view('dashboard.admin', compact('customer'));
    }

    public function index(){
        return view('dashboard.index');
    }

    public function oneform(){
        config(['site.page' => 'oneform']);
        $customer = Customer::where('oneform', 1)->get();
        return view('dashboard.oneform', compact('customer'));
    }
}
