@extends('teachers.layout')
@section('content')
    <div class="container" style="text-align: right;">
                <div class="card">
                    <ul style="text-align: right;">
                        <li><a class="active" href="teachers">خانه</a></li>
                        <li><a href="teachers/create">ساخت استاد</a></li>
                        <li><a href="#contact">پشتیبانی و تیکت</a></li>
                        <li><a href="#about">اخبار</a></li>
                        <li id="welcome">
                            <a>
                                {{ Auth::user()->name }}
                            </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" style="color:red;">
                                    خروج از حساب کاربری
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </li>
                    </ul><hr>
                    <div class="card-header">
                        <h1 style="text-align: center;">دیتابیس اساتید</h1>
                    </div>
                    <div class="card-body" style="text-align: right;">
                        <div class="top-dashboard">
                            <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                                <i class="fa fa-plus" aria-hidden="true"></i> اضافه کردن
                            </a>
                            <div>
                                <a href="{{ route('courses') }}" title="View teachers"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true" style="margin-top: 40px;"></i>دوره ها</button></a>
                            </div>
                            <div>
                                <form action="{{ route('search') }}" method="GET">
                                <input type="text" placeholder="جستجو" name="query" style="width:200%"><br>
                                <button type="submit" class="btn btn-primary btn-sm" style="margin-top: 10px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> جستجو</button>
                                </form>
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="padding-left: 60px;">#</th>
                                        <th>نام استاد</th>
                                        <th style="padding-left: 40px;">محل سکونت</th>
                                        <th style="float: center;">تاریخ تولد</th>
                                        <th class="dashboard-table" style="padding-left: 80px;">اطلاعات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teachers as $item)
                                        <tr>
                                            <td style="padding-left: 60px;">{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td style="padding-left: 40px;">{{ $item->hometown }}</td>
                                            <td style="float: center;">{{ $item->birth_time }}</td>
                                            <td class="dashboard-table">
                                                <form method="POST" action="{{ url('/teachers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete teachers" onclick="return confirm(&quot;استاد پاک شود؟&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> حذف</button>
                                                </form>
                                                <a href="{{ url('/teachers/' . $item->id . '/edit') }}" title="Edit teachers"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> ویرایش</button></a>
                                                <a href="{{ url('/teachers/' . $item->id) }}" title="View teachers"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> مشاهده</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
    </div>
@endsection