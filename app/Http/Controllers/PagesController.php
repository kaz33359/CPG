<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $courses =  Course::all();
        return view('home/index', [
            'courses' => $courses
        ]);
    }

    public function about()
    {
        $title = 'CPG | ABOUT';
        return view('home/about',[
            'title' => $title
        ]);
    }

    public function contact()
    {
        $title = 'CPG | Contact';
        return view('home/contact',[
            'title' => $title
        ]);
    }

    public function blog()
    {
        $title = 'CPG | BLOG';
        return view('home/blog',[
            'title' => $title
        ]);
    }
    // public function login()
    // {
    //     $title = 'CPG | LOGIN';
    //     return view('home/login',[
    //         'title' => $title
    //     ]);
    // }

    public function consultancyServices()
    {
        $title = 'CPG | C.P.G Consultancy services';
        return view('home/consultancy_services', [
            'title' => $title
        ]);
    }
    public function CSP_ASP_Training()
    {
        $title = 'CPG | CSP/ASP Training';
        return view('home/CSP_ASP_training', [
            'title' => $title
        ]);
    }
    public function fire_protection_system()
    {
        $title = 'CPG | Fire Protection System';
        return view('home/fire_protection_system', [
            'title' => $title
        ]);
    }

    public function OTHM()
    {
        $title = 'CPG | OTHM Level 6 Safety Diploma';
        return view('home/OTHM', [
            'title' => $title
        ]);
    }
    public function safety_manpower_solution()
    {
        $title = 'CPG | Safety Manpower Solution';
        return view('home/safety_manpower_solution', [
            'title' => $title
        ]);
    }

    public function STED()
    {
        $title = 'CPG | STED Council Diploma';
        return view('home/STED', [
            'title' => $title
        ]);
    }
    public function all_courses()
    {
        $title = 'CPG | All Courses';
        return view('home/courses', [
            'title' => $title
        ]);
    }
    public function IOSH_managing_safely()
    {
        $title = 'CPG | IOSH Managing Safely';
        return view('home/IOSH_managing_safely', [
            'title' => $title
        ]);
    }
    public function IOSH_train_the_trainer()
    {
        $title = 'CPG | IOSH Train the Trainer';
        return view('home/IOSH_train_the_trainer', [
            'title' => $title
        ]);
    }
    public function NVQ()
    {
        $title = 'CPG | NVQ Level 6 Diploma';
        return view('home/NVQ', [
            'title' => $title
        ]);
    }
    public function ISO()
    {
        $title = 'CPG | ISO Lead Auditor Courses';
        return view('home/ISO', [
            'title' => $title
        ]);
    }
    public function STI_USA()
    {
        $title = 'CPG | Scaffolding Certification (STI - USA)';
        return view('home/STI_USA', [
            'title' => $title
        ]);
    }
    public function CPD_UK()
    {
        $title = 'CPG | Process Safety Certification (CPD UK)';
        return view('home/CPD_UK', [
            'title' => $title
        ]);
    }


}
