@extends('main.site')
   @section('content')

   <div id="search-section" class="rows">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-sm-12 center-block">
                <div>
                    <h1>
                        سـفر، مـاجراجـویی، تجربه گردی
                        <span>در میجــوری</span>
                    </h1>

                    <div id="search-2">
                        <form action="">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21.878" height="25.626" viewBox="0 0 21.878 25.626">
                                  <g id="Group_792" data-name="Group 792" transform="matrix(0.978, 0.208, -0.208, 0.978, 3.34, 0)">
                                    <g id="Group_4" data-name="Group 4" transform="translate(0 0)">
                                      <g id="Group_3" data-name="Group 3" transform="translate(0)">
                                        <path id="Path_1" data-name="Path 1" d="M8.032,1.007a6.985,6.985,0,0,1,3.927,1.2A7.045,7.045,0,0,1,14.5,5.3a7.014,7.014,0,0,1-.647,6.66A7.043,7.043,0,0,1,10.765,14.5,7.016,7.016,0,0,1,4.1,13.856a7.049,7.049,0,0,1-2.546-3.091A7.014,7.014,0,0,1,2.206,4.1a7.069,7.069,0,0,1,1.9-1.9,6.985,6.985,0,0,1,3.927-1.2M8.032,0a8.031,8.031,0,1,0,8.031,8.031A8.032,8.032,0,0,0,8.032,0Z" fill="#662683"/>
                                      </g>
                                    </g>
                                    <path id="Path_2" data-name="Path 2" d="M6.094,5.938l-.157.157a.876.876,0,0,1-1.238,0L.256,1.651a.876.876,0,0,1,0-1.238L.412.257a.875.875,0,0,1,1.239,0L6.094,4.7A.876.876,0,0,1,6.094,5.938Z" transform="translate(15.82 15.136)" fill="#662683"/>
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="0.785" height="11.541" transform="translate(13.191 13.062) rotate(-45)" fill="#662683"/>
                                    <path id="Path_3" data-name="Path 3" d="M4.536,4.72h0a.285.285,0,0,1-.283-.259A4.316,4.316,0,0,0,.266.569.285.285,0,0,1,0,.285H0A.285.285,0,0,1,.3,0,4.886,4.886,0,0,1,4.819,4.41.284.284,0,0,1,4.536,4.72Z" transform="translate(7.056 13.88) rotate(177)" fill="#662683"/>
                                  </g>
                                </svg>

                            </span>
                            <input type="text" placeholder="مقصد شما کجاست؟">
                            <button>جستجو</button>
                        </form>
                        <div class="caption">
                            <p>

                                پربازدیدترین مقصدها:
                                <span>تهران، اصفهان، شیراز، مشهد، کیش</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="trip-guides" class="rows">
    <div class="fullcontainer">
        <div class="row">
            <div class="col-lg-12">
                <div>

                    <div class="title-more">
                        <h3>راهنماهای میجوری</h3>
                        <div class="more">
                            <a href="#">همه ی راهنماها</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
@foreach ($guids as $guid )

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div>
                    <div class="single-host-det">
                        <div class="img">
                            <a href="#">
                                <img src="{{$guid->avatar()}}" alt="">
                            </a>
                            <button class="like">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27.721" height="25.217" viewBox="0 0 27.721 25.217">
                                    <path id="Path_30" data-name="Path 30" d="M308.094,370.632l-10.486,10.487-10.486-10.487c-3.964-3.636-3.507-9.605-.249-12.147,2.831-2.209,7.735-1.8,10.735,1.661,2.978-3.563,8.109-3.874,11.021-1.361C311.806,361.527,311.973,367.313,308.094,370.632Z" transform="translate(-283.789 -356.608)" fill="#fff" stroke="#000" stroke-width="1"></path>
                                </svg>
                            </button>

                            <div class="info">
                                <div class="top">
                                    <h4><a href="#">    {{$guid->name}} {{$guid->family}}</a></h4>
                                    <span class="city">{{$guid->province?$guid->province->name:''}}</span>
                                </div>
                                <ul>
                                    <li>
                                        <span class="right">
                                            <span class="rate">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12.326" height="11.723" viewBox="0 0 12.326 11.723">
                                                    <path id="Path_38" data-name="Path 38" d="M111.1,70.7l-1.448,4.487-4.715-.009,3.819,2.763-1.466,4.481,3.809-2.78,3.809,2.779-1.466-4.48,3.82-2.764-4.715.01Z" transform="translate(-104.94 -70.701)" fill="#662683" fill-rule="evenodd"></path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12.326" height="11.723" viewBox="0 0 12.326 11.723">
                                                    <path id="Path_38" data-name="Path 38" d="M111.1,70.7l-1.448,4.487-4.715-.009,3.819,2.763-1.466,4.481,3.809-2.78,3.809,2.779-1.466-4.48,3.82-2.764-4.715.01Z" transform="translate(-104.94 -70.701)" fill="#662683" fill-rule="evenodd"></path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12.326" height="11.723" viewBox="0 0 12.326 11.723">
                                                    <path id="Path_38" data-name="Path 38" d="M111.1,70.7l-1.448,4.487-4.715-.009,3.819,2.763-1.466,4.481,3.809-2.78,3.809,2.779-1.466-4.48,3.82-2.764-4.715.01Z" transform="translate(-104.94 -70.701)" fill="#662683" fill-rule="evenodd"></path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12.326" height="11.723" viewBox="0 0 12.326 11.723">
                                                    <path id="Path_38" data-name="Path 38" d="M111.1,70.7l-1.448,4.487-4.715-.009,3.819,2.763-1.466,4.481,3.809-2.78,3.809,2.779-1.466-4.48,3.82-2.764-4.715.01Z" transform="translate(-104.94 -70.701)" fill="#662683" fill-rule="evenodd"></path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12.326" height="11.723" viewBox="0 0 12.326 11.723">
                                                    <path id="Path_38" data-name="Path 38" d="M111.1,70.7l-1.448,4.487-4.715-.009,3.819,2.763-1.466,4.481,3.809-2.78,3.809,2.779-1.466-4.48,3.82-2.764-4.715.01Z" transform="translate(-104.94 -70.701)" fill="#662683" fill-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </span>
                                        <span class="left">
                                            <span class="price"> 50/000 تومان</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="right">
                                            <span class="day">
                                                6 دیدگاه
                                            </span>
                                        </span>
                                        <span class="left">
                                            <span class="time">
                                                روزانه
                                            </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text">
                            <p>این مجموعه پس از سال ها جمع آوری و کنار هم قراردادن از بهترین ها، ایجاد شده است</p>
                        </div>
                    </div>
                </div>
            </div>
@endforeach



        </div>
    </div>
</div>

<div id="fave-city" class="rows">
    <div class="fullcontainer">
        <div class="row">
            <div class="col-lg-12">
                <div>

                    <div class="title-more">
                        <h3>مقاصد گردشگری</h3>
                        <div class="more">
                            <a href="#">همه ی شهرها</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <ul class="fave-hosts-list owl-carousel owl-theme side-nav">
                        @foreach ($provinces as $province )

                        <li>
                            <div class="single-city">
                                <div class="img">
                                    <a href="#">
                                        <img src="{{$province->image()}}" alt="">
                                    </a>
                                    <h4><a href="#">{{$province->name}}</a></h4>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="single-city">
                                <div class="img">
                                    <a href="#">
                                        <img src="images/city4.jpg" alt="">
                                    </a>
                                    <h4><a href="#">اصفهان</a></h4>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="single-city">
                                <div class="img">
                                    <a href="#">
                                        <img src="images/city1.jpg" alt="">
                                    </a>
                                    <h4><a href="#">تهارن</a></h4>
                                </div>

                            </div>
                        </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="how-to1" class="rows">
    <div class="fullcontainer">
        <div class="how-to-box">
            <div class="top">
                <h3>تجربه ی جدید</h3>
                <p>یک سفر بسازید و از راهنماهای میجوری پیشنهاد سفر دریافت کنید .</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div>

                        <div class="how-to-lev">
                            <span class="num">1</span>
                            <span class="title">سفر سفارشی خود را بسازید .</span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div>

                        <div class="how-to-lev">
                            <span class="num">2</span>
                            <span class="title">از راههای میجوری پیشنهاد دریافت کنید .</span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div>

                        <div class="how-to-lev">
                            <span class="num">3</span>
                            <span class="title">راهنمای مورد علاقه خود را انتخاب کنید .</span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="link">
                        <a class="btn" href="#">سفر سفارشی بسازید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="new-exp" class="rows">
    <div class="fullcontainer">

        <div class="row">
            <div class="col-lg-12">
                <div>

                    <div class="title-more">
                        <h3>فعالیت‌های ماجراجویانه</h3>
                        <div class="more">
                            <a href="#">همه ی فعالیت ها</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
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
            <div class="col-lg-2a col-md-4 col-sm-12">
                <div>
                    <div class="single-new-exp">
                        <div class="img">
                            <a href="#">
                                <img src="/home/images/newexp3.jpg" alt="">
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
            <div class="col-lg-2a col-md-6 col-sm-12">
                <div>
                    <div class="single-new-exp">
                        <div class="img">
                            <a href="#">
                                <img src="/home/images/newexp4.jpg" alt="">
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
            <div class="col-lg-2a col-md-6 col-sm-12">
                <div>
                    <div class="single-new-exp">
                        <div class="img">
                            <a href="#">
                                <img src="/home/images/newexp5.jpg" alt="">
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
</div>


   @endsection
