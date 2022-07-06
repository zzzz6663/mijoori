@extends('main.site')
   @section('content')

   <div id="trip-guides-list" class="rows">
    <div class="fullcontainer">
        <div class="row">
            @if(request('city'))
            <div class="col-lg-12">
                <h1>
میجوری بان های شهر
{{request('city')}}
                </h1>
            </div>
            @endif
            @foreach ($guides as $guid)
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
                                    <h4><a href="#">
                                    {{$guid->name}}
                                    {{$guid->family}}
                                    </a></h4>
                                    <span class="city">
                                        {{$guid->city?$guid->city->name:''}}

                                    </span>
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
            @if($guides->Count() == 0)
            <div class="col-lg-3">
                <h1>
                    هیچ موردی یافت نشد
                </h1>
            </div>
            @endif

        </div>
    </div>
</div>

   @endsection
