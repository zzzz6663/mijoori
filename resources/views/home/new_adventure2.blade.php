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
                    <form action="{{route('new.adventure2',$adventure->id)}}" method="post">
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
                                        <label for="location">محل ماجراجویی <span class="star">*</span></label>
                                        <span>مختصات محل ماجراجویی را دقیق وارد کنید</span>
                                    </div>
                                    <select class="sq" name="location" id="location">
                                        <option value="">برای انتخاب کلیک  کنید</option>
                                        <option {{old('location',$adventure->location)=='l1'?'selected':''}} value="l1">محل یک</option>
                                        <option {{old('location',$adventure->location)=='l2'?'selected':''}} value="l2">محل دو</option>
                                        <option {{old('location',$adventure->location)=='l3'?'selected':''}} value="l3">محل سه</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="">مدت زمان</label>
                                        <span>این ماجراجویی چقدر طول می کشد</span>
                                    </div>

                                    <input class="sq" type="text" name="period" id="period" value="{{old('period',$adventure->period)}}">

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="type_period">ساعت/روز</label>
                                        <span> </span>
                                    </div>
                                    <select class="sq" name="type_period" id="type_period">
                                        <option value="">برای انتخاب کلیک  کنید</option>
                                        <option {{old('type_period',$adventure->type_period)=='day'?'selected':''}} value="day">روز</option>
                                        <option {{old('type_period',$adventure->type_period)=='hour'?'selected':''}} value="hour">ساعت</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="">مدت زمان رویداد<span class="star">*</span></label>
                                        <span>این ماجراجویی چقدر طول می کشد</span>
                                    </div>
                                    <input class="sq" type="text" name="time_period" id="time_period" value="{{old('time_period',$adventure->time_period)}}">
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
