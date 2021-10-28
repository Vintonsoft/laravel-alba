<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['users']          = User::all();
        $data['totalProduct']   = Product::count();
        return view('AdminPanel.Dashboard.index',compact('data'));
    }
}
