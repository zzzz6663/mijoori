

@extends('main.site')
@section('content')
<div id="profile-page" class="rows">
    @include('main.error')
    <form action="{{route('edit.profile',$user->id)}}" method="post" id="form_r"  enctype="multipart/form-data">
        @csrf
        @method('post')
    <div class="fullcontainer">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="bread-crumb">
                        <ul>
                            <li>
                                <a href="{{route('profile',$user->id)}}">حساب کاربری</a>
                            </li>
                            <li>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="10.824" viewBox="0 0 8 10.824">
                                      <path id="Path_111" data-name="Path 111" d="M2997.458,957.853a.2.2,0,0,0-.357,0l-4.981,7.035-4.981-7.035a.2.2,0,0,0-.357,0,.466.466,0,0,0,0,.5l5.16,7.287a.2.2,0,0,0,.357,0l5.16-7.287A.466.466,0,0,0,2997.458,957.853Z" transform="translate(965.749 -2986.708) rotate(90)" fill="currentColor"/>
                                    </svg>
                                </span>
                            </li>
                            <li>
                                <span>اطلاعات شخصی</span>
                            </li>
                        </ul>
                        <h2>اطلاعات شخصی</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-edit-top">


            <div class="profile-sidebar">
                <div class="avatar circ">
                    <div class="img">
                        @if ($user->avatar())
                        <img src="{{$user->avatar()}}" alt="">
                        @else
                        <img src="/home/images/user.jpg" alt="">
                        @endif
                        <div class="edit">
                            <input type="file"   name="avatar" id="avatar18" for="form_r" accept="image/*">
                            <label for="avatar18">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera-plus" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                  <circle cx="12" cy="13" r="3" />
                                  <path d="M5 7h2a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h2m9 7v7a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                  <line x1="15" y1="6" x2="21" y2="6" />
                                  <line x1="18" y1="3" x2="18" y2="9" />
                                </svg>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile-info-edit">

                <div class="input-value">
                    <h4>نام *</h4>
                    <span class="toggle">ویرایش</span>
                    <span class="remove">حذف</span>
                    <input type="text" name="name" value="{{old('name',$user->name)}}">
                </div>

                <div class="input-value">
                    <h4>نام خانوادگی *</h4>
                    <span class="toggle">ویرایش</span>
                    <span class="remove">حذف</span>
                    <input type="text" name="family" value="{{old('family',$user->family)}}">

                </div>

                <div class="input-value active">
                    <h4>تاریخ تولد *</h4>
                    <span class="toggle">ویرایش</span>
                    <span class="remove">حذف</span>
                    <div class="defult">مشخص نشده</div>
                    {{-- {{ Morilog\Jalali\Jalalian::forge($user->b_date)}} --}}
                    <div class="edit-form v2">
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="input-content drop">
                                            {{-- @dd(Morilog\Jalali\Jalalian::forge($user->b_date)->getDay()) --}}
                                            <input class="day" type="number" name="day" placeholder="روز" readonly value="{{Morilog\Jalali\Jalalian::forge($user->b_date)->getDay()}}">
                                            <span class="down">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.824" height="8" viewBox="0 0 10.824 8">
                                                  <path id="Path_179" data-name="Path 179" d="M2997.458,957.853a.2.2,0,0,0-.357,0l-4.981,7.035-4.981-7.035a.2.2,0,0,0-.357,0,.466.466,0,0,0,0,.5l5.16,7.287a.2.2,0,0,0,.357,0l5.16-7.287A.466.466,0,0,0,2997.458,957.853Z" transform="translate(-2986.708 -957.749)" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <div class="dropd">
                                                <ul class="day">
                                                    @for ($i=1;$i<32;$i++)
                                                    <li class="   {{Morilog\Jalali\Jalalian::forge($user->b_date)->getDay()==$i?'active':''}}"><span>{{$i}}</span></li>
                                                    @endfor
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="input-content drop">

                                            <input class="day" type="text" placeholder="ماه"  name="month"  readonly value="{{old('month',$month[Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()-1])}}">
                                            <span class="down">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.824" height="8" viewBox="0 0 10.824 8">
                                                  <path id="Path_179" data-name="Path 179" d="M2997.458,957.853a.2.2,0,0,0-.357,0l-4.981,7.035-4.981-7.035a.2.2,0,0,0-.357,0,.466.466,0,0,0,0,.5l5.16,7.287a.2.2,0,0,0,.357,0l5.16-7.287A.466.466,0,0,0,2997.458,957.853Z" transform="translate(-2986.708 -957.749)" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <div class="dropd">
                                                <ul class="month">

                                                    <li class="    {{Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()+1==1?'active':''}} "><span>فروردین</span></li>
                                                    <li class="    {{Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()+1==2?'active':''}} "><span>اردیبهشت</span></li>
                                                    <li class="    {{Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()+1==3?'active':''}} "><span>خرداد</span></li>
                                                    <li class="    {{Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()+1==4?'active':''}} "><span>تیر</span></li>
                                                    <li class="    {{Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()+1==5?'active':''}} "><span>مرداد</span></li>
                                                    <li class="    {{Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()+1==6?'active':''}} "><span>شهریور</span></li>
                                                    <li class="    {{Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()+1==7?'active':''}} "><span>مهر</span></li>
                                                    <li class="    {{Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()+1==8?'active':''}} "><span>آبان</span></li>
                                                    <li class="    {{Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()+1==9?'active':''}} "><span>آذر</span></li>
                                                    <li class="    {{Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()+1==10?'active':''}} "><span>دی</span></li>
                                                    <li class="    {{Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()+1==11?'active':''}} "><span>بهمن</span></li>
                                                    <li class="    {{Morilog\Jalali\Jalalian::forge($user->b_date)->getMonth()+1==12?'active':''}} "><span>اسفند</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <div class="input-content drop">

                                            <input class="day" readonly type="text" name="year" placeholder="سال" value="{{old('year',Morilog\Jalali\Jalalian::forge($user->b_date)->getYear())}}">
                                            <span class="down">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.824" height="8" viewBox="0 0 10.824 8">
                                                  <path id="Path_179" data-name="Path 179" d="M2997.458,957.853a.2.2,0,0,0-.357,0l-4.981,7.035-4.981-7.035a.2.2,0,0,0-.357,0,.466.466,0,0,0,0,.5l5.16,7.287a.2.2,0,0,0,.357,0l5.16-7.287A.466.466,0,0,0,2997.458,957.853Z" transform="translate(-2986.708 -957.749)" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <div class="dropd">
                                                <ul class="year">
                                                    @for ($i=1300;$i<1402;$i++)
                                                    <li class="   {{Morilog\Jalali\Jalalian::forge($user->b_date)->getYear()==$i?'active':''}}"><span>{{$i}}</span></li>
                                                    @endfor
                                                </ul>
                                                <span class="toggled">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="5.345" height="4.5" viewBox="0 0 5.345 4.5">
                                                      <g id="Component_133_2" data-name="Component 133 – 2" transform="translate(0.26 0.25)">
                                                        <path id="Path_181" data-name="Path 181" d="M4.791.052a.087.087,0,0,0-.159,0L2.412,3.57.192.052a.087.087,0,0,0-.159,0A.257.257,0,0,0,.033.3l2.3,3.644a.087.087,0,0,0,.159,0L4.791.3A.257.257,0,0,0,4.791.052Z" fill="none" stroke="currentColor" stroke-width="0.5"/>
                                                      </g>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="input-value">
                    <h4>جنسیت</h4>

                    <span class="toggle">ویرایش</span>
                    <span class="remove">حذف</span>
                    <select name="gender" id="">
                        <option {{old('gender',$user->gender)=='male'?'selected':''}} value="male">مرد</option>
                        <option {{old('gender',$user->gender)=='female'?'selected':''}} value="female">زن</option>
                    </select>


                </div>

            </div>

        </div>
        <div class="profile-address">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div>

                        <div class="edit-form2">
                                    <label for="">استان   *</label>
                                <div class="input-content">
                                    <select class="popinput v2 province" name="province_id" id="province" required>
                                        <option value="">استان </option>
                                        @foreach (App\Models\Province::all() as $province)
                                            <option  {{ old('province_id',$user->province->id)==$province->id?'selected':'' }}  value="{{ $province->id }}">{{ $province->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <button class="btn">ذخیره</button>
                        </div>
                        <div class="edit-form2">
                                    <label for="">شهر   *</label>
                                <div class="input-content">
                                    <select class="popinput v2 city" name="city_id" id="city" required>
                                        <option value="">استان </option>
                                        @foreach (App\Models\City::all() as $city)
                                            <option  {{ old('city_id',$user->city->id)==$city->id?'selected':'' }} value="{{$city->id}}">{{ $city->name }}</option>
                                        @endforeach

                                    </select>

                                </div>
                                <button class="btn">ذخیره</button>
                        </div>

                        <div class="edit-form2 ">
                                    <label for="">آدرس *</label>
                                <div class="input-content">
                                    <span class="error">این فیلد الزامی است</span>
                                    <textarea name="address"  id="" cols="30" rows="10">{{old('address',$user->address)}}</textarea>
                                </div>
                                <button class="btn">ذخیره</button>
                        </div>

                        <div class="edit-form2">
                                    <label for="">ایمیل *</label>
                                <div class="input-content">
                                    <span class="error">این فیلد الزامی است</span>
                                    <input type="email" name="email" value="{{old('email',$user->email)}}">
                                </div>
                                <button class="btn">ذخیره</button>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div>

                        <div class="edit-form2">
                                    <label for="">شماره تلفن همراه *</label>
                                <div class="input-content">
                                    <span class="error">این فیلد الزامی است</span>
                                    <input type="text" name="mobile" readonly value="{{old('mobile',$user->mobile)}}">
                                </div>
                                <button class="btn">ذخیره</button>
                        </div>

                        <div class="edit-form2">
                                    <label for="">شماره تلفن اضطراری *</label>
                                <div class="input-content">
                                    <span class="error">این فیلد الزامی است</span>
                                    <input type="tell" name="tell"  value="{{old('tell',$user->tell)}}">
                                </div>
                                <button class="btn">ذخیره</button>
                        </div>

                        <div class="edit-form2">
                                    <label for="">کد ملی </label>
                                <div class="input-content">
                                    <span class="error">این فیلد الزامی است</span>
                                    <input type="tell" name="code"  value="{{old('code',$user->code)}}">
                                </div>
                                <button class="btn">ذخیره</button>
                        </div>

                        <div class="edit-form2">
                                    <label for="">درباره من</label>
                                <div class="input-content">
                                    <span class="error">این فیلد الزامی است</span>
                                    <textarea class="about" name="about" id="" cols="30" rows="10">{{old('about',$user->about)}}</textarea>
                                </div>
                                <button class="btn">ذخیره</button>
                        </div>



                        <div class="edit-form2">
                            <label for="">  اینستاگرام</label>
                                <div class="input-content">
                                    <input type="text" name="instagram"  value="{{old('instagram',$user->instagram)}}">
                                </div>
                        </div>
                        <div class="edit-form2 inf">
                            <input type="checkbox" name="give_email"  value="1" {{old('give_email',$user->give_email)=="1"?'checked':''}}  >

                            <label for="">  دریافت ایمیل </label>

                                <div class="input-content">
                                </div>
                        </div>
                        <div class="edit-form2 inf">
                            <input type="checkbox" name="give_sms"  value="1" {{old('give_sms',$user->give_sms)=="1"?'checked':''}}  >

                            <label for="">  دریافت پیامک </label>
                                <div class="input-content">
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="popbottom">
                        <button id="" class="bbt btn-violet">ذخیره اطلاعات       </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>



@endsection
