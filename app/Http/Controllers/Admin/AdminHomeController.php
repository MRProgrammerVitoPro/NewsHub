<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function AdminHomePage()
    {

        return view('admin.adminhomepage');
    }
}
