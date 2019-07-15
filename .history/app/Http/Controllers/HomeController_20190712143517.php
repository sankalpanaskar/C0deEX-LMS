<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\States;
use App\Districts;
use App\Course_type;
use App\Course;
use App\Students;
use App\Mail\Onlineregister;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //    $states=States::all();
    //    $coursetype=Course_type::all();

    //     return view('home',compact('states','coursetype'));
    // }

    public function admin_dashboard()
    {
        return view('admin_page.admin_dashboard');
    }
    public function add_user()
    {
        //$states=States::all();
        //$coursetype=Course_type::all();
        return view('admin_page.add_user');
    }
    public function user_list()
    {
        return view('admin_page.user_list');
    }

    public function role_list()
    {
        return view('admin_page.role_list');
    }

    public function add_role()
    {
        return view('admin_page.add_role');
    }
    public function user_permission()
    {
        return view('admin_page.user_permission');
    }
    

    public function add_student()
    {
        $states=States::all();
         $coursetype=Course_type::all();
        return view('admin_page.add_student',compact('states','coursetype'));
    }
    public function student_list()
    {
        return view('admin_page.student_list');
    }

    public function add_rank()
    {
        return view('admin_page.add_rank');
    }


    public function add_course()
    {
         $ct=Course_type::all();
        return view('admin_page.add_course',compact('ct'));
    }
    public function course_list()
    {
         $co=Course::all();
        return view('admin_page.course_list',compact('co'));
    }
    public function online_applicant_list()
    {
        $applicant=Students::all();
        return view('admin_page.online_applicant_list',compact('applicant'));
    }
     public function district_fetch($id=0)
    {
        $s=Districts::where('states_id',$id)->get();
        return $s;
    }
    public function course_fetch($id=0)
    {
        $s=Course::where('course_type_id',$id)->get();
        return $s;
    }
    public function online_student(Request $request)
    {
        $data=$request->all();
        //dd($data);
        $data['education']=implode(",",$data['education']);
        //dd($data['education']);
        $data['dob']=date('Y-m-d',strtotime($data['dob']));
        //$data['date'] = isset($data['date'])?date('Y-m-d',strtotime(str_replace('/', '-', $data['date']))):null;
        //dd($data);
        Mail::to($data['email'])->send(new Onlineregister());
        $a=Students::create($data);



        if($a){
            return back()->with('status','Your Online application succesfully submited check your mail');
        }else{
           return back()->with('status','Occur some errror');
        }

        //return view('admin_page.admin_dashboard');
    }

    public function applicant_fetch($id=0)
    {
        $x=array();
        $s=Students::with('states','districts')->where('id',$id)->get();

        array_push($x,$s);

        $s=Course::with('course_type')->where('id',$s[0]['course'])->get();
        array_push($x,$s);
        return $x;
    }



}
