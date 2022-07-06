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
                    <form action="{{route('new.adventure3',$adventure->id)}}" method="post">
@method('post')
@csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div>

                                    <div class="adv-title">
                                        <h2>قیمت و امکانات ماجراجویی</h2>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="">قیمت پیشنهادی<span class="star">*</span></label>
                                        <span>مبلغ پیشنهادی شما برای برگزاری این رویداد چقدر است</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <div class="clr half"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="one-line-label">
                                        <label for="count">تعداد<span class="star">*</span></label>
                                    </div>
                                    <input type="number" value="{{old('count' ,$adventure->count)}}" name="count" class="sq number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="one-line-label">
                                        <label for="price">مبلغ (تومان)<span class="star">*</span></label>
                                    </div>
                                    <input type="number" value="{{old('price' ,$adventure->price)}}" name="price" class="sq price">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="facility">امکانات</label>
                                        <span>برای برگزاری این ماجراجویی چه امکاناتی در دسترس دارید</span>
                                    </div>
                                    <input class="sq" type="text" name="facility" value="{{old('facility' ,$adventure->facility)}}">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="benefit">برتری ها</label>
                                        <span>رویداد شما نسبت به رویداد مشابه چه برتری هایی دارد</span>
                                    </div>
                                    <input class="sq" type="text" name="benefit" value="{{old('benefit' ,$adventure->benefit)}}">

                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="info">توضیحات بیشتر</label>
                                        <span>برای درک بهتر رویداد توضیحاتی اضافه کید</span>
                                    </div>
                                    <textarea class="sq" name="info" id="info" cols="30" rows="10">{{old('info' ,$adventure->info)}}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="more">امکانات</label>
                                        <span>برای برگزاری این ماجراجویی چه امکاناتی در دسترس دارید</span>
                                    </div>
                                    <textarea class="sq" name="more" id="more" cols="30" rows="10">{{old('more' ,$adventure->more)}}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="return_mony">نحوه عودت وجه <span class="star">*</span></label>
                                        <span>در صورت عدم تمایل گردشگر به حضور در این ماجراجویی بعد از ثبت نام زمان و شیوه کنسلی آن چگونه است</span>
                                    </div>
                                    <textarea class="sq" name="return_mony" id="return_mony" cols="30" rows="10">{{old('return_mony' ,$adventure->return_mony)}}</textarea>

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
