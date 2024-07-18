<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CourseEnquiriesController extends Controller
{
    public function course_register(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|min:10',
            'course_id' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $course_id = $request->input('course_id');
        $data = array('name' => $name, "email" => $email, "mobile" => $mobile, "course_id" => $course_id);
        DB::table('course_enquiries')->insert($data);
        Alert::success('Success', 'Registration successful!');
        return redirect()->route('home');
    }
}
