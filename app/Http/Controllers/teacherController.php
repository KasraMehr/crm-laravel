<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\RedirectedResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Teacher;
use App\Models\Employment;
use App\Models\Education;
use App\Models\Courses_Works;
use App\Models\Work_Contact;
use App\Models\Courses_Req;
use App\Models\Introduction;
use Illuminate\View\View;


class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teachers = Teacher::all();
        $courses_req = Courses_Req::all();
        return view('teachers.index', ['teachers' => $teachers]);
    }


    public function courses(): View
    {
        $courses_req = Courses_Req::all();
        return view('teachers.index1', ['courses_req' => $courses_req]);
    }


    public function search(Request $request): View
    {
        $query = $request->input('query');
        $teachers = Teacher::where('name', 'LIKE', '%'.$query.'%')->get();
        if($teachers->isEmpty()){
            return $this->search_Courses($request);
        }
        else{
            $courses_req = Courses_Req::all();
            return view('teachers.index', ['teachers' => $teachers, 'courses_req' => $courses_req]);
        }
    }


    public function search_Courses(Request $request): View
    {
        $query = $request->input('query');
        $teachers = Teacher::all();
        $courses_req = Courses_Req::where('first_course_topic', 'LIKE', '%'.$query.'%')
                        ->orWhere('second_course_topic', 'LIKE', '%'.$query.'%')
                        ->orWhere('third_course_topic', 'LIKE', '%'.$query.'%')
                        ->orWhere('fourth_course_topic', 'LIKE', '%'.$query.'%')
                        ->get();
        return view('teachers.index1', ['teachers' => $teachers, 'courses_req' => $courses_req]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = request()->all();


        Teacher::create([
            'name' => $input['name'],
            'father_name' => $input['father_name'],
            'birth_place' => $input['birth_place'],
            'hometown' => $input['hometown'],
            'birth_time' => $input['birth_time'],
            'national_number' => $input['national_number'],
            'nationality' => $input['nationality'],
            'religion' => $input['religion'],
            'gender' => $input['gender'],
            'married' => $input['married'],
            'military_service' => $input['military_service'],
            'Reason_for_exemption' => $input['Reason_for_exemption']
        ]);

        Employment::create([
            'working' => $input['working'],
            'govermental' => $input['govermental'],
            'company_name' => $input['company_name'],
            'insurance' => $input['insurance'],
            'insurance_number' => $input['insurance_number'],
            'insurance_serial_number' => $input['insurance_serial_number'],
            'place_of_employment' => $input['place_of_employment'],
            'employment_phone_number' => $input['employment_phone_number']
        ]);

        Work_Contact::create([
            'working_time' => $input['working_time'],
            'max_work_time' => $input['max_work_time'],
            'working_type' => $input['working_type'],
            'country' => $input['country'],
            'state' => $input['state'],
            'town' => $input['town'],
            'address' => $input['address'],
            'postal_code' => $input['postal_code'],
            'phone_number' => $input['phone_number'],
            'mobile_number' => $input['mobile_number'],
            'email' => $input['email']
        ]);


        if($input['education_type'] === null){ $input['education_type'] = '-';}
        if($input['first_degree'] === null){ $input['first_degree'] = '-';}
        if($input['degree_info1'] === null){ $input['degree_info1'] = '-';}
        if($input['second_degree'] === null){ $input['second_degree'] = '-';}
        if($input['degree_info2'] === null){ $input['degree_info2'] = '-';}
        if($input['third_degree'] === null){ $input['third_degree'] = '-';}
        if($input['degree_info3'] === null){ $input['degree_info3'] = '-';}
        if($input['first_course'] === null){ $input['first_course'] = '-';}
        if($input['course_info1'] === null){ $input['course_info1'] = '-';}
        if($input['second_course'] === null){ $input['second_course'] = '-';}
        if($input['course_info2'] === null){ $input['course_info2'] = '-';}
        if($input['third_course'] === null){ $input['third_course'] = '-';}
        if($input['course_info3'] === null){ $input['course_info3'] = '-';}
        if($input['first_language'] === null){ $input['first_language'] = '-';}
        if($input['language_info1'] === null){ $input['language_info1'] = '-';}
        if($input['second_language'] === null){ $input['second_language'] = '-';}
        if($input['language_info2'] === null){ $input['language_info2'] = '-';}
        if($input['english_degree'] === null){ $input['english_degree'] = '-';}
        if($input['score_date'] === null){ $input['score_date'] = '-';}
        if($input['other_language_degree'] === null){ $input['other_language_degree'] = '-';}
        if($input['degree_topic'] === null){ $input['degree_topic'] = '-';}
        if($input['teaching_institute'] === null){ $input['teaching_institute'] = '-';}
        if($input['receive_date'] === null){ $input['receive_date'] = '-';}
        if($input['validity_duration'] === null){ $input['validity_duration'] = '-';}
        if($input['univercity_teacher'] === null){ $input['univercity_teacher'] = '-';}
        if($input['univercity_name'] === null){ $input['univercity_name'] = '-';}
        if($input['univercity_topics'] === null){ $input['univercity_topics'] = '-';}


        Education::create([
            'education_type' => $input['education_type'],
            'first_degree' => $input['first_degree'],
            'degree_info1' => $input['degree_info1'],
            'second_degree' => $input['second_degree'],
            'degree_info2' => $input['degree_info2'],
            'third_degree' => $input['third_degree'],
            'degree_info3' => $input['degree_info3'],
            'first_course' => $input['first_course'],
            'course_info1' => $input['course_info1'],
            'second_course' => $input['second_course'],
            'course_info2' => $input['course_info2'],
            'third_course' => $input['third_course'],
            'course_info3' => $input['course_info3'],
            'first_language' => $input['first_language'],
            'language_info1' => $input['language_info1'],
            'second_language' => $input['second_language'],
            'language_info2' => $input['language_info2'],
            'english_degree' => $input['english_degree'],
            'score_date' => $input['score_date'],
            'other_language_degree' => $input['other_language_degree'],
            'degree_topic' => $input['degree_topic'],
            'teaching_institute' => $input['teaching_institute'],
            'receive_date' => $input['receive_date'],
            'validity_duration' => $input['validity_duration'],
            'univercity_teacher' => $input['univercity_teacher'],
            'univercity_name' => $input['univercity_name'],
            'univercity_topics' => $input['univercity_topics']
        ]);


        if($input['first_course1'] === null){ $input['first_course1'] = '-';}
        if($input['course1_info'] === null){ $input['course1_info'] = '-';}
        if($input['second_course2'] === null){ $input['second_course2'] = '-';}
        if($input['course2_info'] === null){ $input['course2_info'] = '-';}
        if($input['third_course3'] === null){ $input['third_course3'] = '-';}
        if($input['course3_info'] === null){ $input['course3_info'] = '-';}
        if($input['fourth_course4'] === null){ $input['fourth_course4'] = '-';}
        if($input['course4_info'] === null){ $input['course4_info'] = '-';}
        if($input['fivth_course5'] === null){ $input['fivth_course5'] = '-';}
        if($input['course5_info'] === null){ $input['course5_info'] = '-';}
        if($input['sixth_course6'] === null){ $input['sixth_course6'] = '-';}
        if($input['course6_info'] === null){ $input['course6_info'] = '-';}
        if($input['seventh_course7'] === null){ $input['seventh_course7'] = '-';}
        if($input['course7_info'] === null){ $input['course7_info'] = '-';}
        if($input['first_work'] === null){ $input['first_work'] = '-';}
        if($input['work_info1'] === null){ $input['work_info1'] = '-';}
        if($input['second_work'] === null){ $input['second_work'] = '-';}
        if($input['work_info2'] === null){ $input['work_info2'] = '-';}
        if($input['third_work'] === null){ $input['third_work'] = '-';}
        if($input['work_info3'] === null){ $input['work_info3'] = '-';}
        if($input['fourth_work'] === null){ $input['fourth_work'] = '-';}
        if($input['work_info4'] === null){ $input['work_info4'] = '-';}
        if($input['first_project'] === null){ $input['first_project'] = '-';}
        if($input['project_info1'] === null){ $input['project_info1'] = '-';}
        if($input['second_project'] === null){ $input['second_project'] = '-';}
        if($input['project_info2'] === null){ $input['project_info2'] = '-';}
        if($input['third_project'] === null){ $input['third_project'] = '-';}
        if($input['project_info3'] === null){ $input['project_info3'] = '-';}
        if($input['fourth_project'] === null){ $input['fourth_project'] = '-';}
        if($input['project_info4'] === null){ $input['project_info4'] = '-';}
        if($input['fivth_project'] === null){ $input['fivth_project'] = '-';}
        if($input['project_info5'] === null){ $input['project_info5'] = '-';}


        Courses_Works::create([
            'first_course1' => $input['first_course1'],
            'course1_info' => $input['course1_info'],
            'second_course2' => $input['second_course2'],
            'course2_info' => $input['course2_info'],
            'third_course3' => $input['third_course3'],
            'course3_info' => $input['course3_info'],
            'fourth_course4' => $input['fourth_course4'],
            'course4_info' => $input['course4_info'],
            'fivth_course5' => $input['fivth_course5'],
            'course5_info' => $input['course5_info'],
            'sixth_course6' => $input['sixth_course6'],
            'course6_info' => $input['course6_info'],
            'seventh_course7' => $input['seventh_course7'],
            'course7_info' => $input['course7_info'],

            //work records
            'first_work' => $input['first_work'],
            'work_info1' => $input['work_info1'],
            'second_work' => $input['second_work'],
            'work_info2' => $input['work_info2'],
            'third_work' => $input['third_work'],
            'work_info3' => $input['work_info3'],
            'fourth_work' => $input['fourth_work'],
            'work_info4' => $input['work_info4'],

            //project records
            'first_project' => $input['first_project'],
            'project_info1' => $input['project_info1'],
            'second_project' => $input['second_project'],
            'project_info2' => $input['project_info2'],
            'third_project' => $input['third_project'],
            'project_info3' => $input['project_info3'],
            'fourth_project' => $input['fourth_project'],
            'project_info4' => $input['project_info4'],
            'fivth_project' => $input['fivth_project'],
            'project_info5' => $input['project_info5'],

        ]);

        Courses_Req::create([

            //ability to take courses
            'first_course_topic' => $input['first_course_topic'],
            'corse_info1' => $input['corse_info1'],
            'second_course_topic' => $input['second_course_topic'],
            'corse_info2' => $input['corse_info2'],
            'third_course_topic' => $input['third_course_topic'],
            'corse_info3' => $input['corse_info3'],
            'fourth_course_topic' => $input['fourth_course_topic'],
            'corse_info4' => $input['corse_info4'],

            //course requirements
            'tools_needed' => $input['tools_needed'],
            'helping_tools' => $input['helping_tools'],
            'course_type' => $input['course_type'],
            'course_days' => $input['course_days'],
            'course_hour' => $input['course_hour'],
            'your_course_time' => $input['your_course_time'],
        ]);

        /*Introduction::create([
            'introduction_type' => $input['introduction_type'],
            'friend_name' => $input['friend_name'],
        ]);*/

        return redirect('teachers')->with('flash_message', 'teacher Addedd!');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $teachers = Teacher::find($id);
        $courses_req = Courses_req::find($id);
        $courses_works = Courses_Works::find($id);
        $education = Education::find($id);
        $employment = Employment::find($id);
        $work_contact = Work_Contact::find($id); 
        return view('teachers.show' , ['teachers' => $teachers, 'courses_req' => $courses_req, 
        'courses_works' => $courses_works, 'education' => $education, 'employment' => $employment, 'work_contact' => $work_contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $teachers = Teacher::find($id);
        $courses_req = Courses_req::find($id);
        $courses_works = Courses_Works::find($id);
        $education = Education::find($id);
        $employment = Employment::find($id);
        $work_contact = Work_Contact::find($id);
        return view('teachers.edit' , ['teachers' => $teachers, 'courses_req' => $courses_req, 
        'courses_works' => $courses_works, 'education' => $education, 'employment' => $employment, 'work_contact' => $work_contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $teachers = Teacher::find($id);
        $courses_req = Courses_req::find($id);
        $courses_works = Courses_Works::find($id);
        $education = Education::find($id);
        $employment = Employment::find($id);
        $work_contact = Work_Contact::find($id);
        $input = $request->all();
        $teachers->update($input);
        $courses_req->update($input);
        $courses_works->update($input);
        $education->update($input);
        $employment->update($input);
        $work_contact->update($input);
        return redirect('teachers')->with('flash_message', 'teacher Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Teacher::destroy($id);
        Courses_req::destroy($id);
        Courses_Works::destroy($id);
        Education::destroy($id);
        Employment::destroy($id);
        Work_Contact::destroy($id);
        return redirect('teachers')->with('flash_message', 'استاد پاک شد!!');
    }
}
