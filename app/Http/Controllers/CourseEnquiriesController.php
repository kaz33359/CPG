<?php

namespace App\Http\Controllers;

use App\Models\CourseEnquiry;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CourseEnquiriesController extends Controller
{
    public function course_register(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|min:10',
            'course_id' => 'required|array',
        ]);

        foreach ($validatedData['course_id'] as $courseId) {
            // $name = $validatedData['name'];
            // $email = $validatedData['email'];
            // $mobile = $validatedData['mobile'];
            // $course_id = $courseId;
            // $data = array('name' => $name, "email" => $email, "mobile" => $mobile, "course_id" => $course_id);
            // DB::table('course_enquiries')->insert($data);
            CourseEnquiry::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'],
            'course_id' => $courseId,
        ]);
        }
        Alert::success('Success', 'Registration successful!');
        return redirect()->route('home');


    }
}
