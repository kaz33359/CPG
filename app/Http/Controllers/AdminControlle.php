<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControlle extends Controller
{
    public function admin()
    {
        return view('admin/index');
    }

    public function admin_login()
    {
        return view('admin/login');
    }

    public function students()
    {
        return view('admin/students');
    }

    public function admin_profile()
    {
        return view('admin/admin-profile');
    }
}