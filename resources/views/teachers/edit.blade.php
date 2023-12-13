@extends('teachers.layout')
@section('content')
 
<div class="card">
<ul style="text-align: right;">
  <li><a class="active" href="../../teachers">خانه</a></li>
  <li><a href="teachers/create">ساخت استاد</a></li>
  <li><a href="#contact">پشتیبانی و تیکت</a></li>
  <li><a href="#about">اخبار</a></li>
</ul>
  <div class="card-header"><h2>ویرایش استاد</h2></div>
  <div class="card-body" style="text-align: right;">
      
      <form action="{{ url('teachers/' .$teachers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <br>
        <h2>مشخصات فردی</h2>
        <div class="info">

        <div class="user-box">
        <label>نام و نام خانوادگی</label><br>
        <input type="text" name="name" required="" value="{{$teachers->name}}">
      </div><br>

      <div class="user-box">
        <label>نام پدر</label><br>
        <input type="text" name="father_name" required="" value="{{$teachers->father_name}}">
      </div><br>
      <div class="user-box">
        <label>شماره شناسنامه</label><br>
        <input type="text" name="ID_number" required="" value="{{$teachers->ID_number}}">
      </div><br>

      <div class="user-box">
        <label>سریال شناسنامه</label><br>
        <input type="text" name="identity_serial_number" required="" value="{{$teachers->identity_serial_number}}">
      </div><br>

      <div class="user-box">
        <label>محل صدور</label><br>
        <input type="text" name="hometown" required="" value="{{$teachers->birth_place}}">
      </div><br>

      <div class="user-box">
        <label>محل تولد</label><br>
        <input type="text" name="birth_place" required="" value="{{$teachers->hometown}}">
      </div><br>

      <div class="user-box">
        <label>شماره ملی</label><br>
        <input type="text" name="national_number" required="" value="{{$teachers->national_number}}">
      </div><br>

      <div class="user-box" id="tavalod">
        <label>تاریخ متولد</label><br>
        <input name="birth_time" required="" type="text" value="{{$teachers->birth_time}}">
      </div><br>

      <div class="user-box">
        <label>ملیت</label><br>
        <input type="text" name="nationality" required="" value="{{$teachers->nationality}}">
      </div><br>

      <div class="user-box">
        <label>دین و مذهب</label><br>
        <input type="text" name="religion" required="" value="{{$teachers->religion}}">
      </div><br>

      <div class="user-box">
        <label for="checkbox3">جنسیت : </label><br>
        <label for="checkbox1">زن </label>
        <input type="radio" id="checkbox1" name="gender" value="{{$teachers->gender}}">
        <label for="checkbox2">مرد </label>
        <input type="radio" id="checkbox2" name="gender" value="{{$teachers->gender}}">
    </div>

      <div class="user-box">
        <label for="checkbox3"  id="input13">وضعیت تاهل : </label><br>
        <label for="checkbox1">متاهل </label>
        <input type="radio" id="checkbox1" name="married" value="{{$teachers->married}}">
        <label for="checkbox2">مجرد </label>
        <input type="radio" id="checkbox2" name="married" value="{{$teachers->married}}">
        <label for="checkbox3">مطلقه </label>
        <input type="radio" id="checkbox3" name="married" value="{{$teachers->married}}">
        <label for="checkbox4">معیل </label>
        <input type="radio" id="checkbox4" name="married" value="{{$teachers->married}}">
      </div>


      <div class="user-box">
        <label for="checkbox3">وضعیت نظام وظیفه : </label><br>
        <label for="checkbox1">پایان خدمت </label>
        <input type="radio" id="checkbox1" name="military_service" value="{{$teachers->military_service}}">
        <label for="checkbox2">معافیت </label>
        <input type="radio" id="checkbox2" name="military_service" value="{{$teachers->military_service}}">
      </div>
      </div>
      <div class="user-box">
        <label>علت معافیت</label><br>
        <input type="text" name="Reason_for_exemption" required="" id="input15" value="{{$teachers->Reason_for_exemption}}">
      </div>
    <hr><hr><br>

  <h2>وضعیت اشتغال</h2>

      <div class="info">
      <div class="user-box">
        <label for="checkbox3">وضعیت اشتغال : </label><br>
        <label for="checkbox1">غیرشاغل </label>
        <input type="radio" id="checkbox1" name="working" value="{{$employment->working}}">
        <label for="checkbox2">شاغل </label>
        <input type="radio" id="checkbox2" name="working" value="{{$employment->working}}">
      </div>

        <div class="user-box" >
        <label for="checkbox3">نوع شغل : </label><br>
        <label for="checkbox3">دولتی </label>
        <input type="radio" id="checkbox3" name="govermental" value="{{$employment->govermental}}">
        <label for="checkbox4">خصوصی </label>
        <input type="radio" id="checkbox4" name="govermental" value="{{$employment->govermental}}"><br><br><br>
      </div>
  <div class="user-box">
    <label>نام ببرید</label><br>
    <input type="text" name="company_name" required="" value="{{$employment->company_name}}">
  </div><br>

  <div class="user-box">
    <label>نوع بیمه</label><br>
    <input type="text" name="insurance" required="" value="{{$employment->insurance}}">
  </div><br>

  <div class="user-box">
    <label>شماره دفترچه بیمه</label><br>
    <input type="text" name="insurance_number" required="" value="{{$employment->insurance_number}}">
  </div><br>

  <div class="user-box">
    <label>شماره سریال دفترچه بیمه</label><br>
    <input type="text" name="insurance_serial_number" required="" value="{{$employment->insurance_serial_number}}">
  </div><br>

  <div class="user-box">
    <label>آدرس محل اشتغال</label><br>
    <input type="text" name="place_of_employment" required="" value="{{$employment->place_of_employment}}">
  </div><br>

  <div class="user-box">
    <label>تلفن محل اشتغال</label><br>
    <input type="text" name="employment_phone_number" required="" value="{{$employment->employment_phone_number}}">
  </div><hr>
</div><hr><hr><br>

  <h2>نحوه همکاری با مرکز</h2>

  <div class="info">
  <div class="user-box">
    <label for="checkbox3">مدت زمان همکاری : </label><br>
    <label for="checkbox1">تمام وقت </label>
    <input type="radio" id="checkbox1" name="working_time" value="{{$work_contact->working_time}}">
    <label for="checkbox2">پاره وقت </label>
    <input type="radio" id="checkbox2" name="working_time" value="{{$work_contact->working_time}}">
    <label for="checkbox3">ساعتی </label>
    <input type="radio" id="checkbox3" name="working_time" value="{{$work_contact->working_time}}"><br><br><br>
  </div><br>

<div class="user-box">
  <label>میزان حداکثر زمان همکاری( ساعت در هفته)</label><br>
<input type="text" name="max_work_time" required="" value="{{$work_contact->max_work_time}}">
</div><br>

<div class="user-box">
<label for="checkbox3">نوع همکاری : </label><br>
  <label for="checkbox1">تدریس </label>
<input type="radio" id="checkbox1" name="working_type" value="{{$work_contact->working_type}}">
<label for="checkbox2">همایش و سمینار </label>
<input type="radio" id="checkbox2" name="working_type" value="{{$work_contact->working_type}}">
<label for="checkbox3">جذب دوره </label>
<input type="radio" id="checkbox3" name="working_type" value="{{$work_contact->working_type}}"><br><br><br>
</div><br>
</div>
<h2>اطلاعات تماس</h2>
<div class="info">
<div class="user-box">
  <label>کشور سکونت</label><br>
  <input type="text" name="country" required="" value="{{$work_contact->country}}">
</div><br>
<div class="user-box">
  <label>استان سکونت</label><br>
  <input type="text" name="state" required="" value="{{$work_contact->state}}">
</div><br>

<div class="user-box">
  <label>شهر محل سکونت</label><br>
  <input type="text" name="town" required="" value="{{$work_contact->town}}">
</div><br>

<div class="user-box">
  <label>آدرس محل سکونت</label><br>
  <input type="text" name="address" required="" id="input23" value="{{$work_contact->address}}">
</div><br>

<div class="user-box">
  <label>کدپستی</label><br>
  <input type="text" name="postal_code" required="" value="{{$work_contact->postal_code}}">
</div><br>

<div class="user-box">
  <label>تلفن محل سکونت</label><br>
  <input type="text" name="phone_number" required="" value="{{$work_contact->phone_number}}">
</div><br>

<div class="user-box">
  <label>تلفن همراه</label><br>
  <input type="text" name="mobile_number" required="" value="{{$work_contact->mobile_number}}">
</div><br>

<div class="user-box">
  <label>پست الکترونیکی (email)</label><br>
  <input type="email" name="email" required="" value="{{$work_contact->email}}">
</div>
</div><hr><hr><br>




<h2>تحصیلات (از آخرین مدرک شروع نمایید)</h2><br>
<div class="user-box">
  <label for="checkbox3"><h3>گروه آموزشی : </h3></label><br>
  <label for="checkbox1">فنی و مهندسی </label>
  <input type="radio" id="checkbox1" name="education_type" value="{{$education->education_type}}">
  <label for="checkbox2">نظام مهندسی </label>
  <input type="radio" id="checkbox2" name="education_type" value="{{$education->education_type}}">
  <label for="checkbox3">حسابداری و مهندسی </label>
  <input type="radio" id="checkbox3" name="education_type" value="{{$education->education_type}}">
  <label for="checkbox4">کامپیوتر </label>
  <input type="radio" id="checkbox4" name="education_type" value="{{$education->education_type}}">
  <label for="checkbox5">حقوق </label>
  <input type="radio" id="checkbox5" name="education_type" value="{{$education->education_type}}">
</div><br><br>
<div class="user-table">
    <b>مدرک تحصیلی</b>
    <b class="tozih-d">توضیحات</b>
    <div><input type="text" name="first_degree" placeholder="" id="input28" value="{{$education->first_degree}}"></div>
    <div class="tozih-d"><input type="text" name="degree_info1" placeholder="" class="tozih" value="{{$education->degree_info1}}"></div>
    <div><input type="text" name="second_degree" placeholder="" id="input34" value="{{$education->second_degree}}"></div>
    <div class="tozih-d"><input type="text" name="degree_info2" placeholder="" class="tozih" value="{{$education->degree_info2}}"></div>
    <div><input type="text" name="third_degree" placeholder="" id="input40" value="{{$education->third_degree}}"></div>
    <div class="tozih-d"><input type="text" name="degree_info3" placeholder="" class="tozih" value="{{$education->degree_info3}}"></div>

</div><br><br><br>

<h3>عناوین دوره های آموزشی - تخصصی که گذرانده اید؟</h3><br>
<div class="user-table">
    <b>عنوان دوره آموزشی</b>
    <b class="tozih-d">توضیحات اضافه</b>
      <div><input type="text" name="first_course" placeholder="" id="input46" value="{{$education->first_course}}"></div>
      <div class="tozih-d"><input type="text" name="course_info1" placeholder="" class="tozih" value="{{$education->course_info1}}"></div>
      <div><input type="text" name="second_course" placeholder="" id="input48" value="{{$education->second_course}}"></div>
      <div class="tozih-d"><input type="text" name="course_info2" placeholder="" class="tozih" value="{{$education->course_info2}}"></div>
      <div><input type="text" name="third_course" placeholder="" id="input50" value="{{$education->third_course}}"></div>
      <div class="tozih-d"><input type="text" name="course_info3" placeholder="" class="tozih" value="{{$education->course_info3}}"></div>
</div><br><br>

<h3>آشنایی به زبان های خارجه</h3>
<div class="user-table">
    <b>نام زبان</b>
    <b class="tozih-d">وضعیت سطح زبان</b>
    <div><input type="text" name="first_language" placeholder="" id="input52" value="{{$education->first_language}}"></div>
    <div class="tozih-d"><input type="text" name="language_info1" placeholder="" class="tozih" value="{{$education->language_info1}}"></div>
    <div><input type="text" name="second_language" placeholder="" id="input54" value="{{$education->second_language}}"></div>
    <div class="tozih-d"><input type="text" name="language_info2" placeholder="" class="tozih" value="{{$education->language_info2}}"></div>
</div>

<div class="user-box">
  <label for="checkbox3">آیا تا به حال آزمون آیلتس یا تافل را داده اید؟</label><br>
  <label for="check1">خیر </label>
  <input type="radio" id="check1" name="english_degree" value="{{$education->english_degree}}">
  <label for="check2">بلی </label>
  <input type="radio" id="check2" name="english_degree" value="{{$education->english_degree}}">
</div>

<div class="user-box">
  <label>نتیجه آزمون</label><br>
  <input type="text" name="score_date" required="" id="input56" value="{{$education->score_date}}">
</div><br>

<div class="user-box">
  <label for="checkbox3">آیا دارای گواهینامه بین المللی دیگری برای زبان خارجی هستید؟</label><br>
  <label for="check1">خیر </label>
  <input type="radio" id="check1" name="other_language_degree" value="{{$education->other_language_degree}}">
  <label for="check2">بلی </label>
  <input type="radio" id="check2" name="other_language_degree" value="{{$education->other_language_degree}}">
</div>

<div class="user-box">
  <label>عنوان گواهینامه</label><br>
  <input type="text" name="degree_topic" required="" value="{{$education->degree_topic}}">
</div><br>

<div class="info">
<div class="user-box">
  <label>موسسه آموزشی</label><br>
  <input type="text" name="teaching_institute" required="" value="{{$education->teaching_institute}}">
</div><br>

<div class="user-box">
  <label>تاریخ دریافت</label><br>
  <input type="text" name="receive_date" required="" value="{{$education->receive_date}}">
</div>

<div class="user-box" >
  <label>مدت اعتبار</label><br>
  <input type="text" name="validity_duration" required="" value="{{$education->validity_duration}}">
</div>
</div>

<div class="user-box">
  <label>لازم به ذکر است، مرکز آموزش در نظر دارد برخی دوره های تخصصی کاربردی را به زبان انگلیسی برگزار نماید.</label><br><br><br>
</div><hr><hr><br>

<div class="user-box">
  <label>آیا عضو هییت علمی دانشگاه (سراسری، آزاد، غیرانتفاعی و ...) میباشید؟</label>
      <label for="check1">خیر </label>
      <input type="radio" id="check1" name="univercity_teacher" value="{{$education->univercity_teacher}}">
      <label for="check2">بلی </label>
      <input type="radio" id="check2" name="univercity_teacher" value="{{$education->univercity_teacher}}"><br><br><br>
    </div><br>

    <div class="info">
    <div class="user-box">
      <label>نام دانشگاه</label><br>
      <input type="text" name="univercity_name" required="" id="input61" value="{{$education->univercity_name}}">
    </div><br>

    <div class="user-box">
      <label>عناوین</label><br>
      <input type="text" name="univercity_topics" required="" id="input61" value="{{$education->univercity_topics}}">
    </div><br>
  </div><br><br><br>

<h3>سوابق برگزاری دوره های آموزشی - تخصصی</h3><br>
<div class="user-table">
  <b>عنوان دوره آموزشی</b>
  <b class="tozih-d">توضیحات اضافه</b>
  <div><input type="text" name="first_course1" placeholder="" value="{{$courses_works->first_course1}}"></div>
  <div class="tozih-d"><input type="text" name="course1_info" placeholder="" class="tozih" value="{{$courses_works->course1_info}}"></div>
  <div><input type="text" name="second_course2" placeholder=""id="input64" value="{{$courses_works->second_course2}}"></div>
  <div class="tozih-d"><input type="text" name="course2_info" placeholder="" class="tozih" value="{{$courses_works->course2_info}}"></div>
  <div><input type="text" name="third_course3" placeholder=""id="input66" value="{{$courses_works->third_course3}}"></div>
  <div class="tozih-d"><input type="text" name="course3_info" placeholder="" class="tozih" value="{{$courses_works->course3_info}}"></div>
  <div><input type="text" name="fourth_course4" placeholder=""id="input66" value="{{$courses_works->fourth_course4}}"></div>
  <div class="tozih-d"><input type="text" name="course4_info" placeholder="" class="tozih" value="{{$courses_works->course4_info}}"></div>
  <div><input type="text" name="fivth_course5" placeholder=""id="input66" value="{{$courses_works->fivth_course5}}"></div>
  <div class="tozih-d"><input type="text" name="course5_info" placeholder="" class="tozih" value="{{$courses_works->course5_info}}"></div>
  <div><input type="text" name="sixth_course6" placeholder=""id="input66" value="{{$courses_works->sixth_course6}}"></div>
  <div class="tozih-d"><input type="text" name="course6_info" placeholder="" class="tozih" value="{{$courses_works->course6_info}}"></div>
  <div><input type="text" name="seventh_course7" placeholder=""id="input66" value="{{$courses_works->seventh_course7}}"></div>
  <div class="tozih-d"><input type="text" name="course7_info" placeholder="" class="tozih" value="{{$courses_works->course7_info}}"></div>
    </div><hr><hr><br>

<h3>سوابق کاری ( از آخرین سابقه شروع نمایید )</h3><br>
<div class="user-table">
  <b>نام محل کار</b>
  <b class="tozih-d">توضیحات اضافه</b>
  <div><input type="text" name="first_work" placeholder="" id="input68" value="{{$courses_works->first_work}}"></div>
  <div class="tozih-d"><input type="text" name="work_info1" placeholder="" class="tozih" value="{{$courses_works->work_info1}}"></div>
  <div><input type="text" name="second_work" placeholder="" id="input70" value="{{$courses_works->second_work}}"></div>
  <div class="tozih-d"><input type="text" name="work_info2" placeholder="" class="tozih" value="{{$courses_works->work_info2}}"></div>
  <div><input type="text" name="third_work" placeholder=""id="input72" value="{{$courses_works->third_work}}"></div>
  <div class="tozih-d"><input type="text" name="work_info3" placeholder="" class="tozih" value="{{$courses_works->work_info3}}"></div>
  <div><input type="text" name="fourth_work" placeholder=""id="input74" value="{{$courses_works->fourth_work}}"></div>
  <div class="tozih-d"><input type="text" name="work_info4" placeholder="" class="tozih" value="{{$courses_works->work_info4}}"></div>
    </div><br><br>

<h3>سوابق انجام پروژه های صنعتی</h3><br>
<div class="user-table">
  <b>نام پروژه</b>
  <b class="tozih-d">توضیحات اضافه</b>
  <div><input type="text" name="first_project" placeholder="" id="input76" value="{{$courses_works->first_project}}"></div>
  <div class="tozih-d"><input type="text" name="project_info1" placeholder="" class="tozih" value="{{$courses_works->project_info1}}"></div>
  <div><input type="text" name="second_project" placeholder=""id="input78" value="{{$courses_works->second_project}}"></div>
  <div class="tozih-d"><input type="text" name="project_info2" placeholder="" class="tozih" value="{{$courses_works->project_info2}}"></div>
  <div><input type="text" name="third_project" placeholder=""id="input80" value="{{$courses_works->third_project}}"></div>
  <div class="tozih-d"><input type="text" name="project_info3" placeholder="" class="tozih" value="{{$courses_works->project_info3}}"></div>
  <div><input type="text" name="fourth_project" placeholder="" id="input82" value="{{$courses_works->fourth_project}}"></div>
  <div class="tozih-d"><input type="text" name="project_info4" placeholder="" class="tozih" value="{{$courses_works->project_info4}}"></div>
  <div><input type="text" name="fivth_project" placeholder=""id="input84" value="{{$courses_works->fivth_project}}"></div>
  <div class="tozih-d"><input type="text" name="project_info5" placeholder="" class="tozih" value="{{$courses_works->project_info5}}"></div>
    </div><hr><br>

<h3>سوابق تالیف یا تولید (کتاب، جزوه، سی دی های آموزشی و ...)، ترجمه و سمینار</h3><br>
<div class="user-table2">
  <b class="onvan">عنوان تالیف ، ترجمه و سمینار</b>
  <b>انتشارات / محل برگزاری</b>
  <b>سال</b>
  <div class="onvan"><input type="text" name="first_product" placeholder="" id="input86" value="{{$courses_req->first_product}}"></div>
  <div><input type="text" name="product_info1" placeholder="" class="tozih" value="{{$courses_req->product_info1}}"></div>
  <div><input type="text" name="product1_year" placeholder=""id="input88" value="{{$courses_req->product1_year}}"></div>
  <div class="onvan"><input type="text" name="second_product" placeholder=""id="input89" value="{{$courses_req->second_product}}"></div>
  <div><input type="text" name="product_info2" placeholder="" class="tozih" value="{{$courses_req->product_info2}}"></div>
  <div><input type="text" name="product2_year" placeholder=""id="input91" value="{{$courses_req->product2_year}}"></div>
    </div><br><br>

<h3>توانایی برگزاری په دوره هایی را دارید؟</h3><br>
<div class="user-table">
  <b>عنوان دوره آموزشی</b>
  <b class="tozih-d">توضیحات</b>
  <div><input type="text" name="first_course_topic" placeholder="" id="input92" value="{{$courses_req->first_course_topic}}"></div>
  <div class="tozih-d"><input type="text" name="corse_info1" placeholder="" class="tozih" value="{{$courses_req->corse_info1}}"></div>
  <div><input type="text" name="second_course_topic" placeholder="" id="input96" value="{{$courses_req->second_course_topic}}"></div>
  <div class="tozih-d"><input type="text" name="corse_info2" placeholder="" class="tozih" value="{{$courses_req->corse_info2}}"></div>
  <div><input type="text" name="third_course_topic" placeholder="" id="input100" value="{{$courses_req->third_course_topic}}"></div>
  <div class="tozih-d"><input type="text" name="corse_info3" placeholder="" class="tozih" value="{{$courses_req->corse_info3}}"></div>
  <div><input type="text" name="fourth_course_topic" placeholder="" id="input100" value="{{$courses_req->fourth_course_topic}}"></div>
  <div class="tozih-d"><input type="text" name="corse_info4" placeholder="" class="tozih" value="{{$courses_req->corse_info4}}"></div>
    </div><hr>

    <h3>امکانات و تجهیزات اموزشی و کمک آموزشی مورد نیاز دوره</h3>
    <div class="user-box">
      <label>وسایل مورد نیاز استاد برای آموزش **</label><br><br>
          <label for="check1">سایت تعوری </label>
          <input type="checkbox" id="check1" name="tools_needed" value="{{$courses_req->tools_needed}}">
          <label style="padding-right: 20px;" for="check2">سایت کامپیوتر </label>
          <input type="checkbox" id="check2" name="tools_needed" value="{{$courses_req->tools_needed}}"><br><br><br>
        </div>


        <div class="user-box">
          <label>وسایل کمک آموزشی استاد**</label><br><br>
              <label for="check1">جزوه و اسلاید (دستی، پاورپوینت و ...) </label>
              <input type="checkbox" id="check1" name="helping_tools" value="{{$courses_req->helping_tools}}">
              <label style="padding-right: 20px;" for="check2">مدارک و نقشه های مرتبط</label>
              <input type="checkbox" id="check2" name="helping_tools" value="{{$courses_req->helping_tools}}"><br><br><br>
            </div><br>

            <h2>سایر اطلاعات دوره آموزشی</h2>
            <div class="user-box">
              <label>نوع دوره های اموزشی</label><br>
                  <label for="check1">دوره های تک درس (هفتگی)</label>
                  <input type="checkbox" id="check1" name="course_type" value="{{$courses_req->course_type}}">
                  <label style="padding-right: 20px;" for="check2">دوره های فشرده یا سمینارها </label>
                  <input type="checkbox" id="check2" name="course_type" value="{{$courses_req->course_type}}">
                  <label style="padding-right: 20px;" for="check2">دوره های ویژه VIP </label>
                  <input type="checkbox" id="check3" name="course_type" value="{{$courses_req->course_type}}"><br><br><br>
                </div>


                <div class="user-box">
                  <label>روزهای برگزاری </label><br>
                      <label for="check1">شنبه - چهارشنبه</label>
                      <input type="checkbox" id="check1" name="course_days" value="{{$courses_req->course_days}}">
                      <label style="padding-right: 20px;" for="check2">یکشنبه - سه شنبه</label>
                      <input type="checkbox" id="check2" name="course_days" value="{{$courses_req->course_days}}">
                      <label style="padding-right: 20px;" for="check2">دوشنبه - پنج شنبه</label>
                      <input type="checkbox" id="check2" name="course_days" value="{{$courses_req->course_days}}">
                      <label style="padding-right: 20px;" for="check2">کارگاهی (دو روز آخر هفته)</label>
                      <input type="checkbox" id="check2" name="course_days" value="{{$courses_req->course_days}}"><br><br><br>
                    </div><br>

                    <div class="user-box">
                      <label>ساعت برگزاری </label><br><br>
                          <label for="check1">نوبت صبح (8 - 10</label>
                          <input type="checkbox" id="check1" name="course_hour" value="{{$courses_req->course_hour}}">
                          <label style="padding-right: 10px;" for="check2">10 - 12</label>
                          <input type="checkbox" id="check2" name="course_hour" value="{{$courses_req->course_hour}}">
                          <label style="padding-right: 10px;" for="check2">12 - 14)</label>
                          <input type="checkbox" id="check2" name="course_hour" value="{{$courses_req->course_hour}}"><br>
                          <label style="padding-right: 10px;" for="check1">نوبت عصر (14 - 16</label>
                          <input type="checkbox" id="check1" name="course_hour" value="{{$courses_req->course_hour}}">
                          <label style="padding-right: 10px;" for="check2">16 - 18 </label>
                          <input type="checkbox" id="check2" name="course_hour" value="{{$courses_req->course_hour}}">
                          <label style="padding-right: 10px;" for="check2">24 - 21)</label>
                          <input type="checkbox" id="check2" name="course_hour" value="{{$courses_req->course_hour}}"><br><br><br>
                        </div><br>

                        <div class="user-box">
                          <label>روز / ساعت پیشنهادی شما : </label><br>
                          <input type="text" name="your_course_time" required="" value="{{$courses_req->your_course_time}}">
                        </div> <br>
                        <input type="submit" value="Save">
      </div>

    </form>
   
  </div>
</div>
 
@stop