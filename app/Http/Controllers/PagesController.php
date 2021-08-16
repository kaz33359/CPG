<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $title = 'CPG | ABOUT';
        return view('about',[
            'title' => $title
        ]);
    }

    public function contact()
    {
        $title = 'CPG | Contact';
        return view('contact',[
            'title' => $title
        ]);
    }

    public function blog()
    {
        $title = 'CPG | BLOG';
        return view('blog',[
            'title' => $title
        ]);
    }
    public function login()
    {
        $title = 'CPG | LOGIN';
        return view('login',[
            'title' => $title
        ]);
    }

    public function consultancyServices()
    {
        $title = 'CPG | C.P.G Consultancy services';
        return view('consultancy_services', [
            'title' => $title
        ]);
    }
    public function CSP_ASP_Training()
    {
        $title = 'CPG | CSP/ASP Training';
        return view('CSP_ASP_training', [
            'title' => $title
        ]);
    }
    public function fire_protection_system()
    {
        $title = 'CPG | Fire Protection System';
        return view('fire_protection_system', [
            'title' => $title
        ]);
    }

    public function OTHM()
    {
        $title = 'CPG | OTHM Level 6 Safety Diploma';
        return view('OTHM', [
            'title' => $title
        ]);
    }
    public function safety_manpower_solution()
    {
        $title = 'CPG | Safety Manpower Solution';
        return view('safety_manpower_solution', [
            'title' => $title
        ]);
    }

    public function STED()
    {
        $title = 'CPG | STED Council Diploma';
        return view('STED', [
            'title' => $title
        ]);
    }


}
