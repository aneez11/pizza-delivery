<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function orders()
    {
        return view('admin.orders.index');
    }
    public function products()
    {
        return view('admin.products.index');
    }
    public function users()
    {
        return view('admin.users.index');
    }
}
