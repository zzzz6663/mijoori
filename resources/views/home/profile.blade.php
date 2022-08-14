
@extends('main.site')
@section('content')
<div id="guide-inner" class="rows">
    <div class="fullcontainer">
        <div class="row">
            <div class="col-lg-12">
                <div>

                <div class="left-side">
                    <div class="guide-sidebar">
                        <div class="top">
                            <div class="rate">
                                @include('home.parts.rate',['rate'=>$user->rates()])

                            </div>
                            <div class="rate-number">
                                {{$comments->count()}}
                                  دیدگاه
                            </div>
                        </div>
                        <div class="bot v2">
                            <h4>ایجاد سفر به
                                {{$user->city?$user->city->name:''}}
                                و دریافت پیشنهاد از راهنمایان
                                {{$user->city?$user->city->name:''}}
                            </h4>
                            @auth

                            @if ($user->id == $agent->id)
                            <a href="{{route('edit.profile',$user->id)}}">ویرایش پروفایل</a>

                            @else
                            {{-- <a  data-id="{{$user->id}}" data-name="{{$user->name}}" data-family="{{$user->family}}" data-city="{{$user->city?$user->city->name:''}}" href="#" class="offer-me">پیشنهاد دهید</a> --}}

                            <a href="{{route('custom.travel')}}"> سفر سفارشی  </a>

                            @endif

                            @endauth
                        </div>
                        <div class="ways">
                            <h4>راه های ارتباطی با

                                {{$user->name}}
                                {{$user->family}}
                            </h4>
                            <ul>
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=+{{$user->mobile}}&text=salam" target="__blank" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.891" height="27.899" viewBox="0 0 27.891 27.899">
                                          <g id="Group_936" data-name="Group 936" transform="translate(1 0.998)">
                                            <g id="Group_899" data-name="Group 899" transform="translate(5.176 5.338)">
                                              <path id="Union_1" data-name="Union 1" d="M4.22.758c-.3-.807-.636-.687-.868-.7S2.858.011,2.593,0A1.459,1.459,0,0,0,1.516.458,4.449,4.449,0,0,0,0,3.716,7.723,7.723,0,0,0,1.47,7.882c.188.272,2.581,4.506,6.556,6.247s4,1.21,4.726,1.171a4.017,4.017,0,0,0,2.75-1.787,3.319,3.319,0,0,0,.3-1.878c-.094-.17-.354-.279-.743-.492S12.757,9.9,12.4,9.75s-.621-.221-.9.166-1.073,1.252-1.314,1.508-.475.28-.865.066A10.843,10.843,0,0,1,6.2,9.4,12.026,12.026,0,0,1,4.093,6.571c-.217-.407,0-.613.2-.8.185-.171.415-.449.621-.673a2.711,2.711,0,0,0,.422-.647.73.73,0,0,0-.007-.7C5.242,3.549,4.522,1.565,4.22.758Z" transform="translate(0 0)" fill="none" stroke="currentColor" stroke-width="1.5" fill-rule="evenodd"/>
                                            </g>
                                            <path id="Path_219" data-name="Path 219" d="M710.519,1595.627a12.939,12.939,0,0,0-10.48,20.536l-1.617,4.807,4.975-1.593a12.944,12.944,0,1,0,7.123-23.751Z" transform="translate(-697.574 -1595.625)" fill="none" stroke="currentColor" stroke-width="2" fill-rule="evenodd"/>
                                          </g>
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="{{$user->instagram}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25.895" height="25.895" viewBox="0 0 25.895 25.895">
                                          <g id="Group_898" data-name="Group 898" transform="translate(0.001 0.001)">
                                            <path id="Path_214" data-name="Path 214" d="M695.123,1289.161c3.458,0,3.867.013,5.232.075a7.164,7.164,0,0,1,2.4.446,4.291,4.291,0,0,1,2.457,2.457,7.169,7.169,0,0,1,.446,2.4c.062,1.365.076,1.775.076,5.232s-.013,3.867-.076,5.232a7.172,7.172,0,0,1-.446,2.4,4.289,4.289,0,0,1-2.457,2.457,7.174,7.174,0,0,1-2.4.446c-1.365.062-1.775.075-5.232.075s-3.867-.013-5.232-.075a7.172,7.172,0,0,1-2.4-.446,4.289,4.289,0,0,1-2.457-2.457,7.146,7.146,0,0,1-.446-2.4c-.062-1.365-.075-1.775-.075-5.232s.013-3.866.075-5.232a7.143,7.143,0,0,1,.446-2.4,4.291,4.291,0,0,1,2.457-2.457,7.162,7.162,0,0,1,2.4-.446c1.365-.062,1.775-.075,5.232-.075m0-2.333c-3.516,0-3.957.015-5.338.078a9.5,9.5,0,0,0-3.143.6,6.624,6.624,0,0,0-3.787,3.787,9.5,9.5,0,0,0-.6,3.143c-.063,1.381-.078,1.822-.078,5.338s.015,3.957.078,5.338a9.5,9.5,0,0,0,.6,3.143,6.624,6.624,0,0,0,3.787,3.787,9.519,9.519,0,0,0,3.143.6c1.381.063,1.822.078,5.338.078s3.957-.015,5.339-.078a9.518,9.518,0,0,0,3.143-.6,6.624,6.624,0,0,0,3.787-3.787,9.515,9.515,0,0,0,.6-3.143c.063-1.381.078-1.822.078-5.338s-.015-3.957-.078-5.338a9.514,9.514,0,0,0-.6-3.143,6.624,6.624,0,0,0-3.787-3.787,9.5,9.5,0,0,0-3.143-.6c-1.381-.063-1.822-.078-5.339-.078Z" transform="translate(-682.177 -1286.828)" fill="currentColor"/>
                                            <path id="Path_215" data-name="Path 215" d="M701.012,1299.016a6.648,6.648,0,1,0,6.649,6.648A6.648,6.648,0,0,0,701.012,1299.016Zm0,10.964a4.316,4.316,0,1,1,4.316-4.316A4.315,4.315,0,0,1,701.012,1309.98Z" transform="translate(-688.066 -1292.718)" fill="currentColor"/>
                                            <ellipse id="Ellipse_73" data-name="Ellipse 73" cx="1.554" cy="1.554" rx="1.554" ry="1.554" transform="translate(18.305 4.482)" fill="currentColor"/>
                                          </g>
                                        </svg>

                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="support">
                            <h4>به پشتیبانی نیاز دارید؟</h4>
                            <p>
                                اگر به راهنمایی نیاز دارید با
                                <a href="#">واحد پشتیبانی میجوری</a>
                                تماس بگیرید .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="guider-info">
                        <div class="boxed">

                            <div class="guide-pic">
                                <ul class="owl-carousel owl-theme side-nav">
                                    <li>
                                        <img src="{{$user->avatar()}}" alt="">
                                    </li>
                                    {{-- <li>
                                        <img src="images/guide.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="images/guide.jpg" alt="">
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="name">
                                <h4>
                                     {{$user->name}}
                                     {{$user->family}}
                                </h4>
                            </div>
                            <div class="city">
                                <span>تبریز</span>
                            </div>

                            <div class="date">
                                راهنما در میجوری از
                               {{ Morilog\Jalali\Jalalian::forge($user->created_at)->format('d-m-Y')}}
                            </div>
                        </div>

                        <div class="guide-text">
                            <p>
                                کلید ارتباط موثر با جهان سخن گفتن به زبان جهانیان است. خدمات ترجمه تخصصی ما که در کلاس جهانی ارائه می‌شود به شما کمک می‌کند بازارهای جدیدی بیابید و خود را به خوبی به شرکای بین المللی معرفی کنید. همچنین، طیف گسترده مترجم‌های ما، شما را قادر می‌سازد تخصصی‌ترین متون آکادمیک را بر اساس استانداردهای پذیرش معتبرترین ژورنال‌ها ترجمه کنید.
                            </p>
                        </div>
                    </div>

                    <div class="guide-abput">
                        <h4>درباره من</h4>
                        <div class="exp">
                            {{$user->about}}
                        </div>
                    </div>

                    <div class="guide-abput">
                        <h4>مسلط به زبان های</h4>
                        <div class="exp">
                            فارسی - انگلیسی - کردی
                        </div>
                    </div>

                    <div class="guided-trip">
                        <h4>میزبانی ها</h4>

                        <div class="row">
                            <div class="col-lg-2a col-md-4 col-sm-12">
                                <div>
                                    <div class="single-new-exp">
                                        <div class="img">
                                            <a href="#">
                                                <img src="/home/images/newexp1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h3><a href="#">نقاشی</a></h3>
                                            <ul>
                                                <li>تا   5  نفر -       120  دقیقه</li>
                                                <li>شروع قیمت از  150/000  تومان</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2a col-md-4 col-sm-12">
                                <div>
                                    <div class="single-new-exp">
                                        <div class="img">
                                            <a href="#">
                                                <img src="/home/images/newexp2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h3><a href="#">نقاشی</a></h3>
                                            <ul>
                                                <li>تا   5  نفر -       120  دقیقه</li>
                                                <li>شروع قیمت از  150/000  تومان</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comments">
                        <h4>امتیاز و نظر کاربران</h4>

                       @foreach ($comments as $comment)
                       <div class="single-comment">
                        <div class="top">
                            <h5> {{$comment->user->name}}   {{$comment->user->family}}   /</h5>
                            <span class="date">1400/9/4</span>
                        </div>


                        <div class="rate">
                          @include('home.parts.rate',['rate'=>$comment->rate])
                        </div>
                        <div class="text">
                            <p>
                                تایپ متن ساده و به دور از هر گونه نکات مورد توجه در پژوهش ها و  تایپ متن ساده و به دور از هر گونه نکات مورد توجه در پژوهش ها و تایپ متن ساده و به دور از هر گونه نکات مورد توجه در پژوهش ها و  تایپ متن ساده و به دور از هر گونه نکات مورد توجه در پژوهش ها و
                            </p>
                        </div>
                    </div>
                       @endforeach

                    </div>
                    @if ($travel && !$travel->comment)


                    <div class="comment-form">
                        @include('main.error')
                        <form action="{{route('submit.rate',$travel->id)}}">
                            @csrf
                            @method('get')
                            <div class="top">
                                <h3>دیدگاه خود را ثبت کنید</h3>
                                <div class="start-rate">
                                    <input type="radio" id="star5" name="rate" value="5">
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4">
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3">
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2">
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1">
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                            <textarea name="comment" id="" cols="30" rows="10" placeholder="دیدگاه شما">{{(old('comment'))}}</textarea>
                            <button class="btn-comment">ثبت دیدگاه</button>
                        </form>
                    </div>
                    @endif



                </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
