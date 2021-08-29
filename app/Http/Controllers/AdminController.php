<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('ADMIN_LOGIN')) {
            return redirect('admin/dashboard');
        } else {
            return view('admin.login');
        }
        return view('admin.login');
    }

    
    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        // $result = Admin::where(['email'=>$email, 'password'=>$password])->get();
        // echo '<pre>';
        // print_r($result);

        $result = Admin::where(['email'=>$email])->first();
        if ($result) {
            if(Hash::check($request->post('password'),$result->password)){
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $result->id);
                return redirect('admin/dashboard');
            }else{
                $request->session()->flash('error', 'Please Enter Valid Password');
                return redirect('admin');
            }
        }else {
            $request->session()->flash('error', 'Please Enter Valid login Details');
            return redirect('admin');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function students()
    {
        $students = Student::all();
        return view('admin.students',['students' => $students]);
    }

    public function studentregistraiton(Request $request)
    {
        
         
            $model = new Student;
            $model->name = $request->post('name');
            $model->email = $request->post('email');
            $model->password = Hash::make($request->post('password'));
            $model->save();
            return response()->json($model);
    
    }


    public function delete_student($id)
    {
        $data = Student::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    public function status_student($id)
    {
        $data = Student::find($id);
        // $data->delete();
        if ($data->status == 1) {
            $data->status = 0;
            $data->save();
        }else{
             $data->status = 1;
             $data->save();
        }
        return redirect()->back();
    }


   
}
