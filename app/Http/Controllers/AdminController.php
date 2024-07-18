<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Chapter;
use App\Models\Student;
use App\Models\Course;
use App\Models\CourseEnquiry;
use App\Models\Material;
use App\Models\Module;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
// use stoage;


use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use function PHPUnit\Framework\returnSelf;

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

        $result = Admin::where(['email' => $email])->first();
        if ($result) {
            if (Hash::check($request->post('password'), $result->password)) {
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $result->id);
                return redirect('admin/dashboard');
            } else {
                $request->session()->flash('error', 'Please Enter Valid Password');
                return redirect('admin');
            }
        } else {
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

        // $students = Student::all();
        $courses = DB::table('courses')->select('*')->where('status', [1])->get();
        // $courses = DB::select('select * from courses where status = ?', [1]);

        // select students.*, courses.course_name from students inner join courses on students.course_id = courses.id
        $students_data = Student::join('courses', 'students.course_id', '=', 'courses.id')
            ->get(['students.*', 'courses.course_name']);

        return view('admin.students', ['students_data' => $students_data, 'courses' => $courses]);
    }

    public function viewStudents($id)
    {
        $courses = DB::table('courses')->select('*')->where('status', [1])->get();

        $students_data = Student::join('courses', 'students.course_id', '=', 'courses.id')
            ->where('students.id', [$id])
            ->get(['students.*', 'courses.course_name']);

        return view('admin.student-profile', ['students_data' => $students_data, 'courses' => $courses]);
    }

    public function studentregistraiton(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:students|max:255',
            'mobile' => 'required|min:10',
            'password' => 'required|min:6',
            'course_id' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $course_id = $request->input('course_id');
        $password = Hash::make($request->input('password'));
        $data = array('name' => $name, "email" => $email, "mobile" => $mobile, "course_id" => $course_id, "password" => $password);
        DB::table('students')->insert($data);
        return back()->with('success', 'Student have been added');
        // return response()->json($model);

    }

    public function updatestudents(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|min:10',
            'password' => 'required|min:6',
            'course_id' => 'required',
        ]);

        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->mobile = $request->input('mobile');
        $student->password = Hash::make($request->input('password'));
        $student->course_id = $request->input('course_id');
        $student->update();

        return back()->with('student_update_success', 'Student details Have been updated');
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
        } else {
            $data->status = 1;
            $data->save();
        }
        return redirect()->back();
    }

    // ################################ Course ################################

    public function courses()
    {
        $courses = Course::all();
        return view('admin.courses', ['courses' => $courses]);
    }


    public function addCourse(Request $request)
    {
        $request->validate([
            'course_name' => 'required|unique:courses|max:255',
        ]);

        Course::create($request->all());
        return back()->with('success', 'Course have been added');
    }

    public function updatecourse(Request $request, $id)
    {

        $course = Course::find($id);
        $course->course_name = $request->input('name');
        $course->update();

        return back()->with('course_update_success', 'Course details Have been updated');
    }

    public function delete_Course($id)
    {
        $data = Course::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function status_Course($id)
    {
        $data = Course::find($id);
        if ($data->status == 1) {
            $data->status = 0;
            $data->save();
        } else {
            $data->status = 1;
            $data->save();
        }
        return redirect()->back();
    }

    public function viewCourse($id)
    {
        $courses = DB::table('courses')->select('*')->where('id', [$id])->get();

        $modules = DB::table('modules')->select('*')->where('course_id', [$id])->get();
        $modules_view = DB::table('modules')->where('course_id', $id)->where('status', 1)->get();

        // return $modules_view;

        $chapters = Chapter::join('modules', 'chapters.module_id', '=', 'modules.id')
            ->where('chapters.course_id', [$id])
            ->get(['chapters.*', 'modules.module_name']);
        $chapters_view = DB::table('chapters')->select('*')->where('course_id', [$id])->where('status', [1])->get();

        // return $modules_view;

        $topics = DB::table('topics')
            ->join('modules', 'topics.module_id', '=', 'modules.id')
            ->join('chapters', 'topics.chapter_id', '=', 'chapters.id')
            ->get(['topics.*', 'chapters.chapter_name', 'modules.module_name']);
        $topics_view = DB::table('topics')->select('*')->where('course_id', [$id])->where('status', [1])->get();

        $materials = DB::table('materials')
            ->join('topics', 'materials.topic_id', '=', 'topics.id')
            ->get(['materials.*', 'topics.topic_name']);
        $materials_view = DB::table('materials')->select('*')->where('status', [1])->get();


        // return dd($topics_view); 

        return view('admin.course-view', [
            'courses' => $courses,

            'modules' => $modules,
            'modules_view' => $modules_view,

            'chapters' => $chapters,
            'chapters_view' => $chapters_view,

            'topics' => $topics,
            'topics_view' => $topics_view,

            'materials' => $materials,
            'materials_view' => $materials_view


        ]);
    }

    // ################################ Module ################################



    public function addmodule(Request $request)
    {
        $request->validate([
            'course_id' => 'required|max:255',
            'module_name' => 'required|unique:modules|max:255',
        ]);

        Module::create($request->all());
        return back()->with('module_success', 'Module have been added');
    }

    public function delete_module($id)
    {
        $data = Module::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function status_module($id)
    {
        $data = Module::find($id);
        // $data->delete();
        if ($data->status == 1) {
            $data->status = 0;
            $data->save();
        } else {
            $data->status = 1;
            $data->save();
        }
        return redirect()->back();
    }

    public function get_module($id)
    {

        $modules_select = DB::table('modules')->where('course_id', $id)->where('status', 1)->get();
        return dd($modules_select);
    }


    // ################################ Chapter ################################


    public function addchapter(Request $request)
    {
        $request->validate([
            'course_id' => 'required|max:255',
            'module_id' => 'required|max:255',
            'chapter_name' => 'required|max:255',
        ]);

        Chapter::create($request->all());
        return back()->with('chapter_success', 'Chapter have been added');
    }

    public function delete_chapter($id)
    {
        $data = Chapter::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function status_chapter($id)
    {
        $data = Chapter::find($id);
        // $data->delete();
        if ($data->status == 1) {
            $data->status = 0;
            $data->save();
        } else {
            $data->status = 1;
            $data->save();
        }
        return redirect()->back();
    }

    public function get_chapter($id)
    {

        $chapters_select = DB::table('chapters')->select('*')->where('course_id', [$id])->where('status', [1])->get();
        return dd($chapters_select);
    }

    // ################################ Topic ################################

    public function addtopic(Request $request)
    {
        // return dd($request);
        $request->validate([
            'course_id' => 'required|max:255',
            'module_id' => 'required|max:255',
            'chapter_id' => 'required|max:255',
            'topic_description' => 'required|max:2048',
            'topic_name' => 'required|max:255',
        ]);


        // return dd($topic_doc_name);
        Topic::create($request->all());

        // Topic::create([
        //     'course_id' => $request->input('course_id'),
        //     'module_id' => $request->input('module_id'),
        //     'chapter_id' => $request->input('chapter_id'),
        //     'topic_description' => $request->input('topic_description'),
        //     'topic_name' => $request->input('topic_name'),
        // ]);

        return back()->with('topic_success', 'Topic have been added');
    }

    public function delete_topic($id)
    {
        $data = Topic::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function status_topic($id)
    {
        $data = Topic::find($id);
        // $data->delete();
        if ($data->status == 1) {
            $data->status = 0;
            $data->save();
        } else {
            $data->status = 1;
            $data->save();
        }
        return redirect()->back();
    }


    // ################################ Material ################################

    public function addmaterial(Request $request)
    {

        // return dd($request);
        $request->validate([
            'topic_id' => 'required|max:255',
            'material' => 'required|mimes:pdf,pptx,mp4',
            'material_type' => 'required|max:255'
        ]);

        $material = time() . '-' . $request->file('material')->getClientOriginalName();

        $request->material->move(public_path('uploads'), $material);



        // // return dd($topic_doc_name);

        Material::create([
            'topic_id' => $request->input('topic_id'),
            'material' => $material,
            'material_type' => $request->input('material_type'),
        ]);

        return back()->with('material_success', 'Materials have been added');
    }

    public function delete_material($id)
    {
        $data = Material::find($id);
        $material = $data['material'];

        File::delete(["uploads/$material"]);

        $data->delete();
        return redirect()->back();
    }

    public function status_material($id)
    {

        $data = Material::find($id);
        if ($data->status == 1) {
            $data->status = 0;
            $data->save();
        } else {
            $data->status = 1;
            $data->save();
        }
        return redirect()->back();
    }


    public function courseEnquiries()
    {
        // Fetch all courses
        $courses = Course::all();

        // Create a map of course_id to course name
        $courseMap = $courses->pluck('course_name', 'id');

        // Fetch all course enquiries
        $course_enquiries = CourseEnquiry::all();

        // Attach course name to each enquiry
        $course_enquiries->each(function ($enquiry) use ($courseMap) {
            $enquiry->course_name = $courseMap[$enquiry->course_id] ?? 'Unknown Course';
        });

        // Pass data to the view
        return view('admin.course-enquiries', [
            'courses' => $courses,
            'course_enquiries' => $course_enquiries
        ]);
    }
    public function deleteCourseEnquiries($id)
    {
        $data = CourseEnquiry::find($id);
        $data->delete();
        return redirect()->back();
    }
}
