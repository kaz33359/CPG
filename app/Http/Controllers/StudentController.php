<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\prx;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $title = 'CPG | LOGIN';
        
        if ($request->session()->has('USER_LOGIN')) {
            return redirect('student/dashboard');
        } else {
            return view('home/login', [
                'title' => $title
            ]);
        }
        
        return view('home/login', [
            'title' => $title
        ]);
        
    }


    public function dashboard(Request $request)
    {   
        return view('student.dashboard'); 
    }

    public function auth(Request $request)
    {

        $result =DB::table('students')
            ->where(['email'=>$request->email])
            ->get();
            echo($result);
        if(isset($result[0])){
            if ($result[0]->status == 1) {

                if (Hash::check($request->post('password'), $result[0]->password)) {
                    $request->session()->put('STUDENT_LOGIN', true);
                    $request->session()->put('STUDENT_ID', $result[0]->id);
                    $request->session()->put('STUDENT_EMAIL', $result[0]->email);
                    $request->session()->put('STUDENT_NAME', $result[0]->name);
                    return redirect('student/dashboard');
                } else {
                    $request->session()->flash('error', 'Please Enter login Details');
                    return redirect('student');
                }

            }else{

                $request->session()->flash('error', 'Account Have been Deactivated');
                return redirect('student');

            }
        }else{
            $request->session()->flash('error', 'Please Enter Valid login Details');
            return redirect('student');
        }
    }

     
}
