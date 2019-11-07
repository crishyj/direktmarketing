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
        $customer = Customer::all();
        return view('dashboard.admin', compact('customer'));
    }

    public function index(){
        return view('dashboard.index');
    }
}
