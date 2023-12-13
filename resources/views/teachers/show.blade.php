@extends('teachers.layout')
@section('content')
 
 
<div class="card">
    <ul style="text-align: right;">
      <li><a class="active" href="../teachers">خانه</a></li>
      <li><a href="teachers/create">ساخت استاد</a></li>
      <li><a href="https://pulse-web.ir/">پشتیبانی و تیکت</a></li>
      <li><a href="https://pulse-web.ir/">اخبار</a></li>
    </ul>
    <div class="card-header" style="text-align: right;">
      <h2>صفحه استاد</h2>
    </div>
    <div class="card-body">


      <div class="top-border" style="border-top: #333 1px solid;">
        <h2>مشخصات فردی</h2>

      </div>

      <div class="info">

        <div class="user-box">
          <label>نام و نام خانوادگی</label><br>
          <p> {{$teachers->name}} </p>
        </div>

        <div class="user-box">
          <label>نام پدر</label><br>
          <p> {{$teachers->father_name}} </p>
        </div>
        <div class="user-box">
          <label>شماره شناسنامه</label><br>
          <p> {{$teachers->ID_number}} </p>
        </div>

        <div class="user-box">
          <label>سریال شناسنامه</label><br>
          <p> {{$teachers->serial_number}} </p>
        </div>

        <div class="user-box">
          <label>محل صدور</label><br>
          <p> {{$teachers->birth_place}} </p>
        </div>

        <div class="user-box">
          <label>محل تولد</label><br>
          <p> {{$teachers->hometown}} </p>
        </div>

        <div class="user-box">
          <label>شماره ملی</label><br>
          <p> {{$teachers->national_number}} </p>
        </div>

        <div class="user-box">
          <label>تاریخ متولد</label><br>
          <p> {{$teachers->birth_time}} </p>
        </div>

        <div class="user-box">
          <label>ملیت</label><br>
          <p> {{$teachers->nationality}} </p>
        </div>

        <div class="user-box">
          <label>دین و مذهب</label><br>
          <p> {{$teachers->religion}} </p>
        </div>

        <div class="user-box">
          <label for="checkbox3">جنسیت : </label><br>
          <p> {{$teachers->gender}} </p>
        </div>

        <div class="user-box">
          <label for="checkbox3">وضعیت تاهل : </label><br>
          <p> {{$teachers->married}} </p>
        </div>

        <div class="user-box">
          <label for="checkbox3">وضعیت نظام وظیفه : </label><br>
          <p> {{$teachers->military_service}} </p>
        </div>

        <div class="user-box">
          <label>علت معافیت</label><br>
          <p> {{$teachers->Reason_for_exemption}} </p>
        </div>
      </div>
      <br>

      <div class="top-border" style="border-top: #333 1px solid;">
        <h2>وضعیت اشتغال</h2>

      </div>

      <div class="info">
        <div class="user-box">
          <label for="checkbox3">وضعیت اشتغال : </label><br>
          <p> {{$employment->working}} </p>
        </div>

        <div class="user-box">
          <label for="checkbox3">نوع شغل : </label><br>
          <p> {{$employment->govermental}} </p><br><br><br>
        </div>
        <div class="user-box">
          <label>نام ببرید</label><br>
          <p> {{$employment->company_name}} </p>
        </div>

        <div class="user-box">
          <label>نوع بیمه</label><br>
          <p> {{$employment->insurance}} </p>
        </div>

        <div class="user-box">
          <label>شماره دفترچه بیمه</label><br>
          <p> {{$employment->insurance_number}} </p>
        </div>

        <div class="user-box">
          <label>شماره سریال دفترچه بیمه</label><br>
          <p> {{$employment->insurance_serial_number}} </p>
        </div>

        <div class="user-box">
          <label>آدرس محل اشتغال</label><br>
          <p> {{$employment->place_of_employment}} </p>
        </div>

        <div class="user-box">
          <label>تلفن محل اشتغال</label><br>
          <p> {{$employment->employment_phone_number}} </p>
        </div>
      </div><br>

      <div class="top-border" style="border-top: #333 1px solid;">
        <h2>نحوه همکاری با مرکز</h2>

      </div>


      <div class="info1">
        <div class="user-box">
          <label for="checkbox3">مدت زمان همکاری : </label><br>
          <p> {{$work_contact->working_time}} </p>
        </div>

        <div class="user-box">
          <label>میزان حداکثر زمان همکاری( ساعت در هفته)</label><br>
          <p> {{$work_contact->max_work_time}} </p>
        </div>

        <div class="user-box1">
          <label for="checkbox3">نوع همکاری : </label><br>
          <p> {{$work_contact->working_type}} </p>
        </div>
      </div>

      <div class="top-border" style="border-top: #333 1px solid;">
        <h2>اطلاعات تماس</h2>

      </div>

      <div class="info">
        <div class="user-box">
          <label>کشور سکونت</label><br>
          <p> {{$work_contact->country}} </p>
        </div>
        <div class="user-box">
          <label>استان سکونت</label><br>
          <p> {{$work_contact->state}} </p>
        </div>

        <div class="user-box">
          <label>شهر محل سکونت</label><br>
          <p> {{$work_contact->town}} </p>
        </div>

        <div class="user-box">
          <label>آدرس محل سکونت</label><br>
          <p> {{$work_contact->address}} </p>
        </div>

        <div class="user-box">
          <label>کدپستی</label><br>
          <p> {{$work_contact->postal_code}} </p>
        </div>

        <div class="user-box">
          <label>تلفن محل سکونت</label><br>
          <p> {{$work_contact->phone_number}} </p>
        </div>

        <div class="user-box">
          <label>تلفن همراه</label><br>
          <p> {{$work_contact->mobile_number}} </p>
        </div>

        <div class="user-box">
          <label>پست الکترونیکی (email)</label><br>
          <p> {{$work_contact->email}} </p>
        </div>
      </div>


      <div class="top-border" style="border-top: #333 1px solid;">
        <h2>تحصیلات</h2>

      </div>



      <div class="user-box" style="padding: 2rem;">
        <label for="checkbox3">
          <h3>گروه آموزشی : {{$education->education_type}}</h3>
        </label>
      </div><br><br>
      <div class="user-table" style="text-align: center;">
        <b style="margin-left:17rem ; margin-right: 0rem;">مدرک تحصیلی</b>
        <b>توضیحات</b>
        <div class="item" style="padding-top: 1.5rem;">
          <div>
            <p> {{$education->first_degree}} </p>
          </div>
          <div>
            <p> {{$education->degree_info1}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$education->second_degree}} </p>
          </div>
          <div>
            <p> {{$education->degree_info2}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$education->third_degree}} </p>
          </div>
          <div>
            <p> {{$education->degree_info3}} </p>
          </div>
        </div>


      </div><br><br><br>

      <h3>عناوین دوره های آموزشی(تخصص)</h3><br>
      <div class="user-table">
        <b style="padding-top: 0.5rem; margin-left: 17rem; margin-right: 0rem;">عنوان دوره آموزشی</b>
        <b>توضیحات اضافه</b>
        <div class="item" style="padding-top: 1.5rem;">
          <div>
            <p> {{$education->first_course}} </p>
          </div>
          <div>
            <p> {{$education->course_info1}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$education->second_course}} </p>
          </div>
          <div>
            <p> {{$education->course_info2}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$education->third_course}} </p>
          </div>
          <div>
            <p> {{$education->course_info3}} </p>
          </div>

        </div>

      </div><br><br>

      <h3>آشنایی به زبان های خارجه</h3>
      <div class="user-table">
        <b style="margin-left: 17rem; margin-right: 0rem;">نام زبان</b>
        <b>وضعیت سطح زبان</b>
        <div class="item" style="padding-top: 1.5rem;">
          <div>
            <p> {{$education->first_language}} </p>
          </div>
          <div>
            <p> {{$education->language_info1}} </p>
          </div>
        </div>
        <div class="item">

          <div>
            <p> {{$education->second_language}} </p>
          </div>
          <div>
            <p> {{$education->language_info2}} </p>
          </div>
        </div><br><hr><br><br>

      </div>
      <div class="info1">
      <div class="user-box">
        <label>آیتلس یا تافل دارد؟</label><br>
        <p> {{$education->english_degree}} </p>
      </div>

      <div class="user-box">
        <label>نتیجه آزمون</label><br>
        <p> {{$education->score_date}} </p>
      </div><br>

      <div class="user-box">
        <label>گواهینامه بین المللی برای زبان خارجی
          دیگر ؟</label><br>
        <p> {{$education->other_language_degree}} </p>
      </div>

      <div class="user-box">
        <label>عنوان گواهینامه</label><br>
        <p> {{$education->degree_topic}} </p>
      </div><br>
    </div><br><br>

      <div class="info1">
        <div class="user-box">
          <label>موسسه آموزشی</label><br>
          <p> {{$education->teaching_institute}} </p>
        </div><br>

        <div class="user-box">
          <label>تاریخ دریافت</label><br>
          <p> {{$education->receive_date}} </p>
        </div>

        <div class="user-box">
          <label>مدت اعتبار</label><br>
          <p> {{$education->valation}} </p>
        </div>
      </div>

      <div class="user-box">
        <label style="font-size:small; padding: 1rem; color: #3e3c41;">لازم به ذکر است، مرکز آموزش در نظر دارد برخی دوره
          های تخصصی کاربردی را به زبان انگلیسی برگزار نماید.</label><br><br><br>
      </div>
      <hr>
      <hr><br>

      

      <div class="info1">

        <div class="user-box" style="padding: 1rem;">
          <label>عضو هییت علمی دانشگاه (سراسری، آزاد، غیرانتفاعی و ...) است؟</label>
          <p> {{$education->univercity_teacher}} </p>
        </div><br>

        <div class="user-box">
          <label>نام دانشگاه</label><br>
          <p> {{$education->univercity_name}} </p>
        </div><br>

        <div class="user-box">
          <label>عناوین</label><br>
          <p> {{$education->univercity_topics}} </p>
        </div><br>
      </div><br><br><br>

      <h3>سوابق برگزاری دوره های آموزشی - تخصصی</h3><br>
      <div class="user-table">
        <b style="margin-left:17rem ; margin-right: 0rem;">عنوان دوره آموزشی</b>
        <b>توضیحات اضافه</b>
        <div class="item">
          <div>
            <p> {{$courses_works->first_course1}} </p>
          </div>
          <div>
            <p> {{$courses_works->course1_info}} </p>
          </div>

        </div>
        <div class="item">

          <div>
            <p> {{$courses_works->second_course2}} </p>
          </div>
          <div>
            <p> {{$courses_works->course2_info}} </p>
          </div>

        </div>
        <div class="item">
          <div>
            <p> {{$courses_works->third_course3}} </p>
          </div>
          <div>
            <p> {{$courses_works->course3_info}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$courses_works->fourth_course4}} </p>
          </div>
          <div>
            <p> {{$courses_works->course4_info}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$courses_works->fivth_course5}} </p>
          </div>
          <div>
            <p> {{$courses_works->course5_info}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$courses_works->sixth_course6}} </p>
          </div>
          <div>
            <p> {{$courses_works->course6_info}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$courses_works->seventh_course7}} </p>
          </div>
          <div>
            <p> {{$courses_works->course7_info}} </p>
          </div>
        </div>





      </div>
      <hr>
      <hr><br>

      <h3>سوابق کاری ( از آخرین سابقه شروع نمایید )</h3><br>
      <div class="user-table">
        <b style="margin-left:17rem ; margin-right: 0rem;">نام محل کار</b>
        <b>توضیحات اضافه</b>
        <div class="item">
          <div>
            <p> {{$courses_works->first_work}} </p>
          </div>
          <div>
            <p> {{$courses_works->work_info1}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$courses_works->second_work}} </p>
          </div>
          <div>
            <p> {{$courses_works->work_info2}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$courses_works->third_work}} </p>
          </div>
          <div>
            <p> {{$courses_works->work_info3}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$courses_works->fourth_work}} </p>
          </div>
          <div>
            <p> {{$courses_works->work_info4}} </p>
          </div>
        </div>

      </div><br><br>

      <h3>سوابق انجام پروژه های صنعتی</h3><br>
      <div class="user-table">
        <b style="margin-left:17rem ; margin-right: 0rem;">نام پروژه</b>
        <b>توضیحات اضافه</b>
        <div class="item">
          <div>
            <p> {{$courses_works->first_project}} </p>
          </div>
          <div>
            <p> {{$courses_works->project_info1}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$courses_works->second_project}} </p>
          </div>
          <div>
            <p> {{$courses_works->project_info2}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$courses_works->third_project}} </p>
          </div>
          <div>
            <p> {{$courses_works->project_info3}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$courses_works->fourth_project}} </p>
          </div>
          <div>
            <p> {{$courses_works->project_info4}} </p>
          </div>
        </div>
        <div class="item">

          <div>
            <p> {{$courses_works->fivth_project}} </p>
          </div>
          <div>
            <p> {{$courses_works->project_info5}} </p>
          </div>

        </div>

      </div>
      <hr><br>

      <h3>سوابق تالیف یا تولید (کتاب، جزوه، سی دی های آموزشی و ...)، ترجمه و سمینار</h3><br>
      <div class="user-table">
        <b class="onvan" style="margin-right:3rem ;margin-left: 7rem;">عنوان تالیف ، ترجمه و سمینار</b>
        <b style="margin-left: 20rem;">انتشارات / محل برگزاری</b>
        <b>سال</b>
        <div class="item " >

          <div class="item">
            <p> {{$courses_req->first_product}} </p>
          </div>
          <div>
            <p> {{$courses_req->product_info1}} </p>
          </div>
          <div>
            <p> {{$courses_req->product1_year}} </p>
          </div>
        </div>
        <div class="item" >
          <div class="item">
            <p> {{$courses_req->second_product}} </p>
          </div>
          <div>
            <p> {{$courses_req->product_info2}} </p>
          </div>
          <div>
            <p> {{$courses_req->product2_year}} </p>
          </div>
        </div>


      </div><br><br>

      <h3>دوره های استاد {{$teachers->name}}</h3><br>
      <div class="user-table">
        <b style="margin-left:17rem ; margin-right: 0rem;">عنوان دوره آموزشی</b>
        <b>توضیحات</b>
        <div class="item">
          <div>
            <p> {{$courses_req->first_course_topic}} </p>
          </div>
          <div>
            <p> {{$courses_req->corse_info1}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$courses_req->second_course_topic}} </p>
          </div>
          <div>
            <p> {{$courses_req->corse_info2}} </p>
          </div>
        </div>
        <div class="item">
          <div>
            <p> {{$courses_req->third_course_topic}} </p>
          </div>
          <div>
            <p> {{$courses_req->corse_info3}} </p>
          </div>

        </div>
        <div class="item">
          <div>
            <p> {{$courses_req->fourth_course_topic}} </p>
          </div>
          <div>
            <p> {{$courses_req->corse_info4}} </p>
          </div>

        </div>
      </div>
      <hr>

      <h3>امکانات و تجهیزات اموزشی و کمک آموزشی مورد نیاز دوره</h3>
      <div class="user-box" style="padding: 1rem;">
        <label>وسایل مورد نیاز استاد برای آموزش <span style="color: red;">**</span></label><br><br>
        <p> {{$courses_req->tools_needed}} </p><br><br><br>
      </div>


      <div class="user-box" style="padding:1rem ;">
        <label>وسایل کمک آموزشی استاد<span style="color: red;">**</span></label><br><br>
        <p> {{$courses_req->helping_tools}} </p><br><br><br>
      </div><br>
      <div class="top-border" style="border-top: #333 1px solid; padding-left: 4rem;">
        <h2>سایر اطلاعات دوره آموزشی</h2>

      </div>

      <div class="info1">
        <div class="user-box">
          <label>نوع دوره های اموزشی</label><br>
          <p> {{$courses_req->course_type}} </p><br><br><br>
        </div>


        <div class="user-box">
          <label>روزهای برگزاری </label><br>
          <p> {{$courses_req->course_days}} </p><br><br><br>
        </div><br>

        <div class="user-box">
          <label>ساعت برگزاری </label><br>
          <p> {{$courses_req->course_hour}} </p><br><br><br>
        </div><br>

        <div class="user-box">
          <label>روز / ساعت پیشنهادی استاد : </label><br>
          <p> {{$courses_req->your_course_time}} </p>
        </div> <br>

      </div>

    </div>
    </hr>
  </div>
  </div>
  <a href="#" class="topbutton"></a>



</body>

</html>