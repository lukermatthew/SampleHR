<?php

namespace App\Http\Controllers\Admin;

use App\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index(){

        $packages = Package::all();
        return view('admin.dashboard',compact('packages'));
        
        
    }
}
