@extends('main.site')
   @section('content')
   <div id="profileheader" class="rows">
    <div class="fullcontainer">
        <h1>یک ماجراجویی بسازید</h1>
        <p>فعالیت ماجراجویانه موردعلاقه خود را ایجاد و کسب درآمد کنید</p>
    </div>
</div>
<div id="make-adventure" class="rows">
    <div class="fullcontainer">
        <div class="row">
            <div class="col-lg-8 col-md-12 center-block">
                <div>
                    @include('main.error')

                    <form action="{{route('new.adventure1',$adventure->id)}}" method="post" enctype= multipart/form-data>
                        @csrf
                        @method('post')

                        <div class="row">
                            <div class="col-lg-12">
                                <div>

                                    <div class="adv-title">
                                        <h2>مشخصات زمان و مکان ماجراجویی</h2>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="cat">دسته بندی <span class="star">*</span></label>
                                        <span>مشخص کنید رویداد شما در کدام دسته بندی کلی قرار دارد</span>
                                    </div>
                                    <select class="sq" name="cat" id="cat">
                                        <option value="">برای انتخاب کلیک  کنید</option>
                                        <option {{old('cat',$adventure->cat)=='walking'?'selected':''}} value="walking">پیاده روی</option>
                                        <option {{old('cat',$adventure->cat)=='mountaineering'?'selected':''}} value="mountaineering">کوه نوردی</option>
                                        <option {{old('cat',$adventure->cat)=='offroad'?'selected':''}} value="offroad">آفرود</option>
                                        <option {{old('cat',$adventure->cat)=='rock_climbing'?'selected':''}} value="rock_climbing">صخره نوردی</option>
                                        <option {{old('cat',$adventure->cat)=='snow_skiing'?'selected':''}} value="snow_skiing">اسکی روی برف</option>
                                        <option {{old('cat',$adventure->cat)=='skiing_on_grass'?'selected':''}} value="skiing_on_grass">اسکی روی چمن</option>
                                        <option {{old('cat',$adventure->cat)=='snowboard'?'selected':''}} value="snowboard">اسنوبرد</option>
                                        <option {{old('cat',$adventure->cat)=='rafting_river'?'selected':''}} value="rafting_river">رفتینگ روی رودخانه</option>
                                        <option {{old('cat',$adventure->cat)=='other'?'selected':''}} value="other">سایر</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="hardness">میزان سختی فعالیت <span class="star">*</span></label>
                                        <span>درجه سختی این ماجراجویی را چقدر برآورد می کنید</span>
                                    </div>
                                    <select class="sq" name="hardness" id="hardness">
                                        <option value="">برای انتخاب کلیک  کنید</option>
                                        <option {{old('hardness' ,$adventure->hardness) == 'easy'?'selected':''}} value="easy">آسان</option>
                                        <option {{old('hardness' ,$adventure->hardness) == 'normal'?'selected':''}} value="normal">متوسط</option>
                                        <option {{old('hardness' ,$adventure->hardness) == 'challenge'?'selected':''}} value="challenge">چالشی</option>
                                        <option {{old('hardness' ,$adventure->hardness) == 'hard'?'selected':''}} value="hard">سخت</option>
                                        <option {{old('hardness' ,$adventure->hardness) == 'very_hard'?'selected':''}} value="very_hard">خیلی سخت</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="">تعداد شرکت کننده <span class="star">*</span></label>
                                        <span>(حداقل: 1 حداکثر: 50) چند نفر شرکت کننده می توانند شما را همراه کنند</span>
                                    </div>
                                    <input class="sq" name="members" type="number"  value="{{old('members',$adventure->members)}}" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="">شهر  <span class="star">*</span></label>
                                        <span>این ماجراجویی در کدام شهر برگزار می شود</span>
                                    </div>
                                    <select class="sq" name="city_id" id="">
                                        <option value="">برای انتخاب کلیک  کنید</option>
                                        @foreach ( App\Models\City::all() as $city)
                                        <option  {{old('city_id',$adventure->city_id) ==   $city->id?'selected':''}} value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="clr"></div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div>

                                    <div class="adv-title">
                                        <h2>فعالیت های مرتبط با ماجراجویی</h2>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="name"> نام رویداد  <span class="star">*</span></label>
                                        <span>چه عنوانی برای رویداد خود در نظر گرفتید</span>
                                    </div>
                                    <input class="sq" type="text" name="name" id="name"  value="{{old('name',$adventure->name)}}" >
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="short">خلاصه فعالیت</label>
                                        <span>درباره ماجراجویی خود و جزییات آن مختصرا توضیح دهید</span>
                                    </div>
                                    <textarea class="sq" name="short"  id="short" cols="30" rows="10">{{old('short',$adventure->short)}}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="action_include">چه فعالیت هایی را در برمی گیرد</label>
                                        <span>لیست فعالیت.هایی که ماجراجویی در بر می گیرد</span>
                                    </div>
                                    <textarea class="sq" name="action_include"    id="action_include" cols="30" rows="10">{{old('action_include',$adventure->action_include)}}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="action_not_include">چه فعالیت هایی را در برنمی گیرد</label>
                                        <span>لیست فعالیت هایی که در این ماجراجویی وجود ندارد</span>
                                    </div>
                                    <textarea class="sq" name="action_not_include"    id="action_not_include" cols="30" rows="10">{{old('action_not_include',$adventure->action_not_include)}}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="">عکس مرتبط (تصویر)</label>
                                        <span>عکس های مرتبط با این ماجراجویی را وارد کنید.حداکثرحجم فایل  ۲۰۴۸kb</span>
                                    </div>
                                    <div class="fileuplad">
                                        <div class="img">
                                            <img src="{{asset('/home/images/adv.jpg')}}" alt="">

                                            <div class="caption">
                                                <span>برای آپلود فایل کلیک کنید</span>
                                                <span class="small">(png,jpeg,gif,bmp)</span>
                                                <h1 style="color:red" id="image_count"></h1>
                                                @foreach ($adventure->images as $image)
                                                <a  class="" href="{{$image->image()}}" data-lightbox="image-1" data-title="My caption">
                                                            عکس
                                                    {{ $loop->iteration}}
                                                   </a>

                                                @endforeach
                                            </div>
                                        </div>
                                        <input type="file" id="advfile" name="images[]" accept="image/*" multiple="multiple" >
                                        <label for="advfile">
                                            <span>انتخاب عکس</span>
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.714" height="21.837" viewBox="0 0 21.714 21.837">
                                                  <path id="Path_262" data-name="Path 262" d="M115.413,101.1A10.919,10.919,0,1,0,126.27,112.02,10.888,10.888,0,0,0,115.413,101.1Zm-4.952,9.6.115-.116a1.139,1.139,0,0,1,1.509-.061l2.326,1.957v-6.929a1.03,1.03,0,0,1,1.068-.981h.171a1.03,1.03,0,0,1,1.068.981v6.69l2.005-1.959a1.139,1.139,0,0,1,1.509-.043l.124.107a.928.928,0,0,1,.046,1.386l-3.82,3.731a1.072,1.072,0,0,1-.724.487,1.173,1.173,0,0,1-.51.012,1.079,1.079,0,0,1-.8-.493l-4.021-3.384A.928.928,0,0,1,110.461,110.7Zm11.585,7.341a.614.614,0,0,1-.669.531H109.492a.614.614,0,0,1-.669-.531v-3.364a.614.614,0,0,1,.669-.531h.223a.614.614,0,0,1,.669.531v2.3h10.1v-2.3a.614.614,0,0,1,.669-.531h.223a.614.614,0,0,1,.669.531Z" transform="translate(-104.556 -101.102)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="text-center">
                                        <button class="next">بعدی</button>
                                    </div>
                                </div>
                            </div>



                        </div>


                    </form>




                </div>
            </div>
        </div>
    </div>
</div>
   @endsection
