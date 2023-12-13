@extends('teachers.layout')
@section('content')
<ul style="text-align: right;">
    <li><a class="active" href="../teachers">خانه</a></li>
    <li><a href="teachers/create">ساخت استاد</a></li>
    <li><a href="#contact">پشتیبانی و تیکت</a></li>
    <li><a href="#about">اخبار</a></li>
  </ul>
  <form action="{{ url('teachers') }}" method="POST">
    @csrf
    <section class="subform active">
      <div class="top-border" style="border-top: #333 1px solid;">
        <h2>مشخصات فردی</h2>
      </div>
      <div class="info">

        <div class="user-box">
          <label for="name">نام و نام خانوادگی</label><br>
          <input type="text" name="name" id="name" required="">
        </div><br>

        <div class="user-box">
          <label for="father_name">نام پدر</label><br>
          <input type="text" name="father_name" required="">
        </div><br>

        <div class="user-box">
          <label for="hometown">محل صدور</label><br>
          <input type="text" name="hometown" id="hometown" required="">
        </div><br>

        <div class="user-box">
          <label for="birth_place">محل تولد</label><br>
          <input type="text" name="birth_place" id="birth_place" required="">
        </div><br>

        <div class="user-box">
          <label for="national_number">شماره ملی</label><br>
          <input type="text" name="national_number" id="national_number" required="">
        </div><br>

        <div class="user-box" id="tavalod">

          <label for="birthdate">تاریخ تولد </label><br>
          <input type="date" name="birth_time" id="birthdate" min="1980-01-01" max="2020-01-01"><br><br>
        </div><br>

        <div class="user-box">
          <label>ملیت</label><br>
          <input type="text" name="nationality" required="">
        </div><br>

        <div class="user-box">
          <label>دین و مذهب</label><br>
          <select name="religion" id="">
            <option value="eslam">اسلام</option>
            <option value="masih">مسیحیت</option>
            <option value="yahodi">یهودی</option>
          </select>
        </div><br>

        <div class="user-box">
          <label for="checkbox3">جنسیت : </label><br>
          <label for="checkbox1">زن </label>
          <input type="radio" id="checkbox1" name="gender" value="woman">
          <label for="checkbox2">مرد </label>
          <input type="radio" id="checkbox2" name="gender" value="man">
        </div>

        <div class="user-box">
          <label>وضعیت تاهل</label><br>
          <select name="married" id="">
            <option value="single">مجرد</option>
            <option value="married">متاهل</option>
            <option value="divorced">مطلقه</option>
          </select>
        </div>


        <div class="user-box">
          <label for="checkbox3">وضعیت نظام وظیفه : </label><br>
          <label for="checkbox1">پایان خدمت </label>
          <input type="radio" id="checkbox1" name="military_service" value="پایان خدمت ">
          <label for="checkbox2">معافیت </label>
          <input type="radio" id="checkbox2" name="military_service" value="معافیت">
        </div>
      </div>
      <div class="user-box">
        <label>علت معافیت</label><br>
        <textarea name="Reason_for_exemption" id="" cols="30" rows="8"></textarea>
      </div>
      <br>
    </section>
    <section class="subform">
      <div class="top-border" style="border-top: #333 1px solid;">
        <h2>وضعیت اشتغال</h2>

      </div>
      <div class="info">
        <div class="user-box">
          <label for="checkbox3">وضعیت اشتغال : </label><br>
          <label for="checkbox1">غیرشاغل </label>
          <input type="radio" id="checkbox1" name="working" value="غیرشاغل">
          <label for="checkbox2">شاغل </label>
          <input type="radio" id="checkbox2" name="working" value="شاغل">
        </div>

        <div class="user-box">
          <label for="checkbox3">نوع شغل : </label><br>
          <label for="checkbox3">دولتی </label>
          <input type="radio" id="checkbox3" name="govermental" value="دولتی">
          <label for="checkbox4">خصوصی </label>
          <input type="radio" id="checkbox4" name="govermental" value="خصوصی"><br><br><br>
        </div>
        <div class="user-box">
          <label>نام ببرید</label><br>
          <textarea name="company_name" id="" cols="30" rows="7"></textarea>
        </div><br>

        <div class="user-box">
          <label for="insurance">نوع بیمه</label><br>
          <input type="text" name="insurance" required="">
        </div><br>

        <div class="user-box">
          <label for="insurance_number">شماره دفترچه بیمه</label><br>
          <input type="text" name="insurance_number" required="">
        </div><br>

        <div class="user-box">
          <label for="insurance_serial_number">شماره سریال دفترچه بیمه</label><br>
          <input type="text" name="insurance_serial_number" required="">
        </div><br>

        <div class="user-box">
          <label for="place_of_employment">آدرس محل اشتغال</label><br>
          <input type="address" name="place_of_employment" required="">
        </div><br>

        <div class="user-box">
          <label for="employment_phone_number">تلفن محل اشتغال</label><br>
          <input type="text" name="employment_phone_number" required="">
        </div>
      </div><br>
    </section>
    <section class="subform">
      <div class="top-border" style="border-top: #333 1px solid;">
        <h2>همکاری با مرکز</h2>
      </div>

      <div class="info">
        <div class="user-box">
          <label for="checkbox3" style="margin: 3rem;">مدت زمان همکاری : </label>
          <select name="working_time" id="">
            <option value="full-time">تمام وقت</option>
            <option value="part-time">پاره وقت</option>
            <option value="hour">ساعتی</option>
          </select>

          <div class="user-box">
            <label for="max_work_time">میزان حداکثر زمان همکاری( ساعت در هفته)</label><br>
            <input type="number" name="max_work_time" required="" step="5">
          </div>

          <div class="user-box">
            <label>نوع همکاری : </label><br>
            <select name="working_type" id="">
              <option value="teach">تدریس</option>
              <option value="course">جذب دوره</option>
              <option value="lecture">همایش و سمینار</option>
            </select>
          </div>

          <h2>اطلاعات تماس</h2>
          <div class="info">
            <div class="user-box">
              <label>کشور سکونت</label><br>
              <input type="text" name="country" required="">
            </div><br>
            <div class="user-box">
              <label>استان سکونت</label><br>
              <input type="text" name="state" required="">
            </div><br>

            <div class="user-box">
              <label>شهر محل سکونت</label><br>
              <input type="text" name="town" required="">
            </div><br>

            <div class="user-box">
              <label>آدرس محل سکونت</label><br>
              <input type="text" name="address" required="" id="input23">
            </div><br>

            <div class="user-box">
              <label>کدپستی</label><br>
              <input type="text" name="postal_code" required="">
            </div><br>

            <div class="user-box">
              <label>تلفن محل سکونت</label><br>
              <input type="text" name="phone_number" required="">
            </div><br>

            <div class="user-box">
              <label for="mobile_number">تلفن همراه</label><br>
              <input type="tel" name="mobile_number" required="">
            </div><br>

            <div class="user-box">
              <label>پست الکترونیکی (email)</label><br>
              <input type="email" name="email" required="">
            </div>
          </div><br>
    </section>
    <section class="subform">
      <div class="top-border" style="border-top: #333 1px solid;">
        <h2>تحصیلات</h2>
      </div>

      <div class="user-box">
          <h3 style="text-align:center;"><b>گروه آموزشی </b></h3><br>
        <h4>
        <label for="checkbox1">فنی و مهندسی </label>
        <input type="radio" id="checkbox1" name="education_type" value="فنی و مهندسی ">
        <label for="checkbox2">نظام مهندسی </label>
        <input type="radio" id="checkbox2" name="education_type" value="نظام مهندسی ">
        <label for="checkbox3">حسابداری و مهندسی </label>
        <input type="radio" id="checkbox3" name="education_type" value="حسابداری و مهندسی ">
        <label for="checkbox4">کامپیوتر </label>
        <input type="radio" id="checkbox4" name="education_type" value="کامپیوتر">
        <label for="checkbox5">حقوق </label>
        <input type="radio" id="checkbox5" name="education_type" value="حقوق">
        </h4>
      </div>
      <div class="user-table">
        <b>مدرک تحصیلی</b>
        <b class="tozih-d">توضیحات</b>
        <div><input type="text" name="first_degree" placeholder="" id="input28"></div>
        <div class="tozih-d"><input type="text" name="degree_info1" placeholder="" class="tozih"></div>
        <div><input type="text" name="second_degree" placeholder="" id="input34"></div>
        <div class="tozih-d"><input type="text" name="degree_info2" placeholder="" class="tozih"></div>
        <div><input type="text" name="third_degree" placeholder="" id="input40"></div>
        <div class="tozih-d"><input type="text" name="degree_info3" placeholder="" class="tozih"></div>

      </div><br><br><br>

      <h4>عناوین دوره های آموزشی - تخصصی که گذرانده اید؟</h4><br><br>
      <div class="user-table">
        <b>عنوان دوره آموزشی</b>
        <b class="tozih-d">توضیحات اضافه</b>
        <div><input type="text" name="first_course" placeholder="" id="input46"></div>
        <div class="tozih-d"><input type="text" name="course_info1" placeholder="" class="tozih"></div>
        <div><input type="text" name="second_course" placeholder="" id="input48"></div>
        <div class="tozih-d"><input type="text" name="course_info2" placeholder="" class="tozih"></div>
        <div><input type="text" name="third_course" placeholder="" id="input50"></div>
        <div class="tozih-d"><input type="text" name="course_info3" placeholder="" class="tozih"></div>
      </div><br><hr><br>

      <h4>آشنایی به زبان های خارجه</h4><br><br>
      <div class="user-table">
        <b>نام زبان</b>
        <b class="tozih-d">وضعیت سطح زبان</b>
        <div><input type="text" name="first_language" placeholder="" id="input52"></div>
        <div class="tozih-d"><input type="text" name="language_info1" placeholder="" class="tozih"></div>
        <div><input type="text" name="second_language" placeholder="" id="input54"></div>
        <div class="tozih-d"><input type="text" name="language_info2" placeholder="" class="tozih"></div>
      </div><br><br>

      <div class="info">
      <div class="user-box">
        <label for="checkbox3">آیا تا به حال آزمون آیلتس یا تافل را داده اید؟</label><br>
        <label for="check1">خیر </label>
        <input type="radio" id="check1" name="english_degree" value="خیر">
        <label for="check2">بلی </label>
        <input type="radio" id="check2" name="english_degree" value="بلی">
      </div>

      <div class="user-box">
        <label>نتیجه آزمون</label><br>
        <input type="text" name="score_date" required="" id="input56">
      </div><br>

      <div class="user-box">
        <label for="checkbox3">آیا دارای گواهینامه بین المللی دیگری برای زبان خارجی هستید؟</label><br>
        <label for="check1">خیر </label>
        <input type="radio" id="check1" name="other_language_degree" value="خیر">
        <label for="check2">بلی </label>
        <input type="radio" id="check2" name="other_language_degree" value="بلی">
      </div>

      <div class="user-box">
        <label>عنوان گواهینامه</label><br>
        <input type="text" name="degree_topic" required="">
      </div><br>
      </div>

      <div class="info">
        <div class="user-box">
          <label>موسسه آموزشی</label><br>
          <input type="text" name="teaching_institute" required="">
        </div><br>

        <div class="user-box">
          <label>تاریخ دریافت</label><br>
          <input type="text" name="receive_date" required="">
        </div>

        <div class="user-box">
          <label>مدت اعتبار</label><br>
          <input type="text" name="validity_duration" required="">
        </div>
      </div>

      <div class="user-box">
        <label>لازم به ذکر است، مرکز آموزش در نظر دارد برخی دوره های تخصصی کاربردی را به زبان انگلیسی برگزار
          نماید.</label>
      </div>
      <hr>
      <hr><br>

      <h4>
      <div class="user-box">
        <label>آیا عضو هییت علمی دانشگاه (سراسری، آزاد، غیرانتفاعی و ...) میباشید؟</label>
        <label for="check1">خیر </label>
        <input type="radio" id="check1" name="univercity_teacher" value="خیر">
        <label for="check2">بلی </label>
        <input type="radio" id="check2" name="univercity_teacher" value="بلی">
      </div>
      </h4>

      <div class="info">
        <div class="user-box">
          <label>نام دانشگاه</label>
          <input type="text" name="univercity_name" required="" id="input61">
        </div>

        <div class="user-box">
          <label>عناوین</label>
          <input type="text" name="univercity_topics" required="" id="input61">
        </div>
      </div><br><hr><br>

      <h4>سوابق برگزاری دوره های آموزشی - تخصصی</h4><br><br>
      <div class="user-table">
        <b>عنوان دوره آموزشی</b>
        <b class="tozih-d">توضیحات اضافه</b>
        <div><input type="text" name="first_course1" placeholder=""></div>
        <div class="tozih-d"><input type="text" name="course1_info" placeholder="" class="tozih"></div>
        <div><input type="text" name="second_course2" placeholder="" id="input64"></div>
        <div class="tozih-d"><input type="text" name="course2_info" placeholder="" class="tozih"></div>
        <div><input type="text" name="third_course3" placeholder="" id="input66"></div>
        <div class="tozih-d"><input type="text" name="course3_info" placeholder="" class="tozih"></div>
        <div><input type="text" name="fourth_course4" placeholder="" id="input66"></div>
        <div class="tozih-d"><input type="text" name="course4_info" placeholder="" class="tozih"></div>
        <div><input type="text" name="fivth_course5" placeholder="" id="input66"></div>
        <div class="tozih-d"><input type="text" name="course5_info" placeholder="" class="tozih"></div>
        <div><input type="text" name="sixth_course6" placeholder="" id="input66"></div>
        <div class="tozih-d"><input type="text" name="course6_info" placeholder="" class="tozih"></div>
        <div><input type="text" name="seventh_course7" placeholder="" id="input66"></div>
        <div class="tozih-d"><input type="text" name="course7_info" placeholder="" class="tozih"></div>
      </div><br><br><hr><br><br>

      <h4>سوابق کاری ( از آخرین سابقه شروع نمایید )</h4><br><br>
      <div class="user-table">
        <b>نام محل کار</b>
        <b class="tozih-d">توضیحات اضافه</b>
        <div><input type="text" name="first_work" placeholder="" id="input68"></div>
        <div class="tozih-d"><input type="text" name="work_info1" placeholder="" class="tozih"></div>
        <div><input type="text" name="second_work" placeholder="" id="input70"></div>
        <div class="tozih-d"><input type="text" name="work_info2" placeholder="" class="tozih"></div>
        <div><input type="text" name="third_work" placeholder="" id="input72"></div>
        <div class="tozih-d"><input type="text" name="work_info3" placeholder="" class="tozih"></div>
        <div><input type="text" name="fourth_work" placeholder="" id="input74"></div>
        <div class="tozih-d"><input type="text" name="work_info4" placeholder="" class="tozih"></div>
      </div><br><br><hr><br><br>

      <h4>سوابق انجام پروژه های صنعتی</h4><br><br>
      <div class="user-table">
        <b>نام پروژه</b>
        <b class="tozih-d">توضیحات اضافه</b>
        <div><input type="text" name="first_project" placeholder="" id="input76"></div>
        <div class="tozih-d"><input type="text" name="project_info1" placeholder="" class="tozih"></div>
        <div><input type="text" name="second_project" placeholder="" id="input78"></div>
        <div class="tozih-d"><input type="text" name="project_info2" placeholder="" class="tozih"></div>
        <div><input type="text" name="third_project" placeholder="" id="input80"></div>
        <div class="tozih-d"><input type="text" name="project_info3" placeholder="" class="tozih"></div>
        <div><input type="text" name="fourth_project" placeholder="" id="input82"></div>
        <div class="tozih-d"><input type="text" name="project_info4" placeholder="" class="tozih"></div>
        <div><input type="text" name="fivth_project" placeholder="" id="input84"></div>
        <div class="tozih-d"><input type="text" name="project_info5" placeholder="" class="tozih"></div>
      </div><br><hr><br>


      <h4>توانایی برگزاری چه دوره هایی را دارید؟</h4><br><br>
      <div class="user-table">
        <b>عنوان دوره آموزشی</b>
        <b class="tozih-d">توضیحات</b>
        <div><input type="text" name="first_course_topic" placeholder="" id="input92"></div>
        <div class="tozih-d"><input type="text" name="corse_info1" placeholder="" class="tozih"></div>
        <div><input type="text" name="second_course_topic" placeholder="" id="input96"></div>
        <div class="tozih-d"><input type="text" name="corse_info2" placeholder="" class="tozih"></div>
        <div><input type="text" name="third_course_topic" placeholder="" id="input100"></div>
        <div class="tozih-d"><input type="text" name="corse_info3" placeholder="" class="tozih"></div>
        <div><input type="text" name="fourth_course_topic" placeholder="" id="input100"></div>
        <div class="tozih-d"><input type="text" name="corse_info4" placeholder="" class="tozih"></div>
      </div>
      <hr>

      <h3>امکانات و تجهیزات اموزشی و کمک آموزشی مورد نیاز دوره</h3>
      <div class="user-box">
        <label>وسایل مورد نیاز استاد برای آموزش <span style="color: red;">**</span></label><br>
        <label for="check1">سایت تعوری </label>
        <input type="checkbox" id="check1" name="tools_needed" value="سایت تعوری ">
        <label style="padding-right: 20px;" for="check2">سایت کامپیوتر </label>
        <input type="checkbox" id="check2" name="tools_needed" value="سایت کامپیوتر ">
      </div>


      <div class="user-box">
        <label>وسایل کمک آموزشی استاد<span style="color: red;">**</span></label><br>
        <label for="check1">جزوه و اسلاید (دستی، پاورپوینت و ...) </label>
        <input type="checkbox" id="check1" name="helping_tools" value="جزوه و اسلاید (دستی، پاورپوینت و ...) ">
        <label style="padding-right: 20px;" for="check2">مدارک و نقشه های مرتبط</label>
        <input type="checkbox" id="check2" name="helping_tools" value="مدارک و نقشه های مرتبط"><br>
      </div>

      <h3>سایر اطلاعات دوره آموزشی</h3>
      <div class="user-box">
        <label>نوع دوره های اموزشی</label><br>
        <label for="check1">دوره های تک درس (هفتگی)</label>
        <input type="checkbox" id="check1" name="course_type" value="دوره های تک درس (هفتگی)">
        <label style="padding-right: 20px;" for="check2">دوره های فشرده یا سمینارها </label>
        <input type="checkbox" id="check2" name="course_type" value="دوره های فشرده یا سمینارها">
        <label style="padding-right: 20px;" for="check2">دوره های ویژه VIP </label>
        <input type="checkbox" id="check3" name="course_type" value="دوره های ویژه VIP">
      </div>


      <div class="user-box">
        <label>روزهای برگزاری </label><br>
        <label for="check1">شنبه - چهارشنبه</label>
        <input type="checkbox" id="check1" name="course_days" value="">
        <label style="padding-right: 20px;" for="check2">یکشنبه - سه شنبه</label>
        <input type="checkbox" id="check2" name="course_days" value="یکشنبه - سه شنبه">
        <label style="padding-right: 20px;" for="check2">دوشنبه - پنج شنبه</label>
        <input type="checkbox" id="check2" name="course_days" value="دوشنبه - پنج شنبه">
        <label style="padding-right: 20px;" for="check2">کارگاهی (دو روز آخر هفته)</label>
        <input type="checkbox" id="check2" name="course_days" value="کارگاهی (دو روز آخر هفته)">
      </div><br>

      <div class="user-box digit-persian ">
        <label>ساعت برگزاری </label><br>
        <label for="check1">نوبت صبح (8 - 10</label>
        <input type="checkbox" id="check1" name="course_hour" value="نوبت صبح (8 - 10">
        <label style="padding-right: 10px;" for="check2">10 - 12</label>
        <input type="checkbox" id="check2" name="course_hour" value="10 - 12">
        <label style="padding-right: 10px;" for="check2">12 - 14)</label>
        <input type="checkbox" id="check2" name="course_hour" value="12 - 14"><br>
        <label style="padding-right: 10px;" for="check1">نوبت عصر (14 - 16</label>
        <input type="checkbox" id="check1" name="course_hour" value="نوبت عصر (14 - 16">
        <label style="padding-right: 10px;" for="check2">16 - 18 </label>
        <input type="checkbox" id="check2" name="course_hour" value="16 - 18">
        <label style="padding-right: 10px;" for="check2">24 - 21)</label>
        <input type="checkbox" id="check2" name="course_hour" value="24 - 21">
      </div>

      <div class="user-box">
        <label>روز / ساعت پیشنهادی شما : </label><br>
        <input type="text" name="your_course_time" required="">
      </div> <br>
      <button type="submit" >
        تایید
      </button>
    </section>
    </div>
  </form>