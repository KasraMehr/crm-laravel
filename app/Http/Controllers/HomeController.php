<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Courses_Req;
use App\Http\Controllers\teacherController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teachers = Teacher::all();
        $courses_req = Courses_Req::all();
        return view('teachers.index', ['teachers' => $teachers, 'courses_req' => $courses_req]);
    }
}
