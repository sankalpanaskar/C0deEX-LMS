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
        return view('admin_page.add_student');
    }
    public function student_list()
    {
        return view('admin_page.student_list');
    }

    public function add_rank()
    {
        return view('admin_page.add_rank');
    }
    public function rank_list()
    {
        return view('admin_page.rank_list');
    }

    public function add_teacher()
    {
        return view('admin_page.add_teacher');
    }
    public function teacher_list()
    {
        return view('admin_page.teacher_list');
    }
    public function profile()
    {
        return view('admin_page.profile');
    }


    public function add_course()
    {
        
        return view('admin_page.add_course');
    }
    public function course_list()
    {
        return view('admin_page.course_list');
    }
    public function online_applicant_list()
    {
        return view('admin_page.online_applicant_list');
    }

    public function student_dashboard()
    {
        return view('admin_page.student_dashboard');
    }
    public function student_course_details()
    {
        return view('admin_page.student_course_details');
    }
    public function teacher_course_assign()
    {
        return view('admin_page.teacher_course_assign');
    }

    
     
    

    



}
