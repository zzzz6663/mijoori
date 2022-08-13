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
                    <div class="single-offer">
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
                                    <span class="city">   {{$guid->city?$guid->city->name:''}}</span>
                                </div>
                                <div class="date">
                                    <h5>به دنبال راهنما و میزبان  در تاریخ</h5>
                                    <div class="time">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25.025" height="25.283" viewBox="0 0 25.025 25.283">
                                          <g id="Group_919" data-name="Group 919" transform="translate(-179.491 -159.909)">
                                            <path id="Path_214" data-name="Path 214" d="M202.143,288.26h-2.661v1.4a1.87,1.87,0,1,1-3.739,0v-1.4h-7.407v1.4a1.87,1.87,0,1,1-3.739,0v-1.4h-2.733a2.407,2.407,0,0,0-2.373,2.425V307.3a2.407,2.407,0,0,0,2.373,2.425h20.279a2.407,2.407,0,0,0,2.373-2.425V290.685A2.407,2.407,0,0,0,202.143,288.26Zm.431,19.256H181.5V293.037h21.07Z" transform="translate(0 -124.529)" fill="currentColor"></path>
                                            <path id="Path_215" data-name="Path 215" d="M371.139,166.23h.791a.875.875,0,0,0,.863-.882v-4.557a.875.875,0,0,0-.863-.882h-.791a.875.875,0,0,0-.863.882v4.557A.875.875,0,0,0,371.139,166.23Z" transform="translate(-185.104)" fill="currentColor"></path>
                                            <path id="Path_216" data-name="Path 216" d="M745.463,166.23h.791a.875.875,0,0,0,.863-.882v-4.557a.875.875,0,0,0-.863-.882h-.791a.875.875,0,0,0-.863.882v4.557A.875.875,0,0,0,745.463,166.23Z" transform="translate(-548.282)" fill="currentColor"></path>
                                            <rect id="Rectangle_684" data-name="Rectangle 684" width="4.745" height="4.483" transform="translate(182.907 169.978)" fill="currentColor"></rect>
                                            <rect id="Rectangle_685" data-name="Rectangle 685" width="4.745" height="4.483" transform="translate(189.783 169.978)" fill="currentColor"></rect>
                                            <rect id="Rectangle_686" data-name="Rectangle 686" width="4.745" height="4.483" transform="translate(196.247 169.978)" fill="currentColor"></rect>
                                            <rect id="Rectangle_687" data-name="Rectangle 687" width="4.745" height="4.483" transform="translate(182.907 176.593)" fill="currentColor"></rect>
                                            <rect id="Rectangle_688" data-name="Rectangle 688" width="4.745" height="4.483" transform="translate(189.783 176.593)" fill="currentColor"></rect>
                                            <rect id="Rectangle_689" data-name="Rectangle 689" width="4.745" height="4.483" transform="translate(196.247 176.593)" fill="currentColor"></rect>
                                          </g>
                                        </svg>
                                        <span>
                                            20 خرداد 1401
                                        </span>
                                        <span>,</span>
                                        <span>
                                            20 خرداد 1401
                                        </span>

                                    </div>
                                </div>
                                <div class="link">
                                    <a  data-id="{{$guid->id}}" data-name="{{$guid->name}}" data-family="{{$guid->family}}" data-city="{{$guid->city?$guid->city->name:''}}" href="#" class="offer-me">پیشنهاد دهید</a>
                                </div>
                            </div>
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
{{-- <div class="inline-example"></div> --}}
<div id="make-offer" class="pop" style="display: none;">
    <div>
        <div>
            <div>
                <div class="pop-content1 user-pop" style="

display: inline-block;
background: #f5f5f5;
    width: 1200px;
    border-radius: 0;
    max-height: 90vh;
    overflow: auto;
    box-shadow: 0 3px 6px #000000;
    position: relative;
                    ">
                    <div class="poptop">
                        <div class="popmin-title">
                            <h3>به
<span class="uname"></span>
                                پیشنهاد دهید</h3>
                        </div>
                        <div class="pop-close">
                            <span>بستن</span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.747" height="14.747" viewBox="0 0 14.747 14.747">
                                  <g id="Group_351" data-name="Group 351" transform="translate(-369.793 -1605.293)">
                                    <line id="Line_41" data-name="Line 41" x1="13.333" y2="13.333" transform="translate(370.5 1606)" fill="none" stroke="#000" stroke-width="2"/>
                                    <line id="Line_42" data-name="Line 42" x2="13.333" y2="13.333" transform="translate(370.5 1606)" fill="none" stroke="#000" stroke-width="2"/>
                                  </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="popmain">
                        <form action="" id="private_form">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div>
                                        <div class="user">
                                            <div class="img">
                                                <img src="images/mijoorban1.png" alt="">
                                            </div>
                                            <div class="info">
                                                <div class="name">
                                                    <h4>
                                                        <span class="uname"></span>
                                                        <span class="ufamily"></span>
                                                    </h4>
                                                    <span class="stars">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.2" height="16.339" viewBox="0 0 17.2 16.339">
                                                          <g id="Group_209" data-name="Group 209" transform="translate(0 0)">
                                                            <path id="Path_46" data-name="Path 46" d="M1459.668,226.78a.053.053,0,0,1,0-.032l.327-1.4q.173-.745.346-1.49.18-.77.359-1.539t.359-1.544a.047.047,0,0,0-.019-.054l-1.824-1.58-1.417-1.229-1.359-1.177-.069-.061.125-.01c.126-.012.253-.021.379-.031l.484-.043.379-.031.373-.034.374-.031.378-.033.258-.022.387-.033.258-.022.392-.034.364-.031.392-.034.365-.031.391-.034.36-.031.4-.034c.032,0,.064-.006.1-.007a.054.054,0,0,0,.053-.04c.094-.226.19-.451.286-.677l2.094-4.942.02-.043c.007.014.012.024.016.034l1.619,3.819q.383.9.763,1.8a.065.065,0,0,0,.064.046c.086.006.172.014.258.021l.392.034.359.031.4.034.374.031.378.033.263.022.387.034.263.022.383.033.263.022.387.034.369.031.388.034.258.022.387.033.254.022.365.03s0,0,.008.005-.015.021-.025.029l-1.9,1.647-1.841,1.6q-.434.376-.869.751a.086.086,0,0,0-.034.1c.117.5.232.993.348,1.49s.233,1,.349,1.5q.191.824.383,1.647l.309,1.323a.036.036,0,0,1,0,.023.106.106,0,0,1-.04-.021l-4.561-2.75c-.225-.136-.451-.272-.676-.409a.058.058,0,0,0-.07,0l-2.747,1.657-2.5,1.506C1459.69,226.771,1459.681,226.78,1459.668,226.78Z" transform="translate(-1456.373 -210.442)" fill="currentColor"></path>
                                                          </g>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.2" height="16.339" viewBox="0 0 17.2 16.339">
                                                          <g id="Group_209" data-name="Group 209" transform="translate(0 0)">
                                                            <path id="Path_46" data-name="Path 46" d="M1459.668,226.78a.053.053,0,0,1,0-.032l.327-1.4q.173-.745.346-1.49.18-.77.359-1.539t.359-1.544a.047.047,0,0,0-.019-.054l-1.824-1.58-1.417-1.229-1.359-1.177-.069-.061.125-.01c.126-.012.253-.021.379-.031l.484-.043.379-.031.373-.034.374-.031.378-.033.258-.022.387-.033.258-.022.392-.034.364-.031.392-.034.365-.031.391-.034.36-.031.4-.034c.032,0,.064-.006.1-.007a.054.054,0,0,0,.053-.04c.094-.226.19-.451.286-.677l2.094-4.942.02-.043c.007.014.012.024.016.034l1.619,3.819q.383.9.763,1.8a.065.065,0,0,0,.064.046c.086.006.172.014.258.021l.392.034.359.031.4.034.374.031.378.033.263.022.387.034.263.022.383.033.263.022.387.034.369.031.388.034.258.022.387.033.254.022.365.03s0,0,.008.005-.015.021-.025.029l-1.9,1.647-1.841,1.6q-.434.376-.869.751a.086.086,0,0,0-.034.1c.117.5.232.993.348,1.49s.233,1,.349,1.5q.191.824.383,1.647l.309,1.323a.036.036,0,0,1,0,.023.106.106,0,0,1-.04-.021l-4.561-2.75c-.225-.136-.451-.272-.676-.409a.058.058,0,0,0-.07,0l-2.747,1.657-2.5,1.506C1459.69,226.771,1459.681,226.78,1459.668,226.78Z" transform="translate(-1456.373 -210.442)" fill="currentColor"></path>
                                                          </g>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.2" height="16.339" viewBox="0 0 17.2 16.339">
                                                          <g id="Group_209" data-name="Group 209" transform="translate(0 0)">
                                                            <path id="Path_46" data-name="Path 46" d="M1459.668,226.78a.053.053,0,0,1,0-.032l.327-1.4q.173-.745.346-1.49.18-.77.359-1.539t.359-1.544a.047.047,0,0,0-.019-.054l-1.824-1.58-1.417-1.229-1.359-1.177-.069-.061.125-.01c.126-.012.253-.021.379-.031l.484-.043.379-.031.373-.034.374-.031.378-.033.258-.022.387-.033.258-.022.392-.034.364-.031.392-.034.365-.031.391-.034.36-.031.4-.034c.032,0,.064-.006.1-.007a.054.054,0,0,0,.053-.04c.094-.226.19-.451.286-.677l2.094-4.942.02-.043c.007.014.012.024.016.034l1.619,3.819q.383.9.763,1.8a.065.065,0,0,0,.064.046c.086.006.172.014.258.021l.392.034.359.031.4.034.374.031.378.033.263.022.387.034.263.022.383.033.263.022.387.034.369.031.388.034.258.022.387.033.254.022.365.03s0,0,.008.005-.015.021-.025.029l-1.9,1.647-1.841,1.6q-.434.376-.869.751a.086.086,0,0,0-.034.1c.117.5.232.993.348,1.49s.233,1,.349,1.5q.191.824.383,1.647l.309,1.323a.036.036,0,0,1,0,.023.106.106,0,0,1-.04-.021l-4.561-2.75c-.225-.136-.451-.272-.676-.409a.058.058,0,0,0-.07,0l-2.747,1.657-2.5,1.506C1459.69,226.771,1459.681,226.78,1459.668,226.78Z" transform="translate(-1456.373 -210.442)" fill="currentColor"></path>
                                                          </g>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.2" height="16.339" viewBox="0 0 17.2 16.339">
                                                          <g id="Group_209" data-name="Group 209" transform="translate(0 0)">
                                                            <path id="Path_46" data-name="Path 46" d="M1459.668,226.78a.053.053,0,0,1,0-.032l.327-1.4q.173-.745.346-1.49.18-.77.359-1.539t.359-1.544a.047.047,0,0,0-.019-.054l-1.824-1.58-1.417-1.229-1.359-1.177-.069-.061.125-.01c.126-.012.253-.021.379-.031l.484-.043.379-.031.373-.034.374-.031.378-.033.258-.022.387-.033.258-.022.392-.034.364-.031.392-.034.365-.031.391-.034.36-.031.4-.034c.032,0,.064-.006.1-.007a.054.054,0,0,0,.053-.04c.094-.226.19-.451.286-.677l2.094-4.942.02-.043c.007.014.012.024.016.034l1.619,3.819q.383.9.763,1.8a.065.065,0,0,0,.064.046c.086.006.172.014.258.021l.392.034.359.031.4.034.374.031.378.033.263.022.387.034.263.022.383.033.263.022.387.034.369.031.388.034.258.022.387.033.254.022.365.03s0,0,.008.005-.015.021-.025.029l-1.9,1.647-1.841,1.6q-.434.376-.869.751a.086.086,0,0,0-.034.1c.117.5.232.993.348,1.49s.233,1,.349,1.5q.191.824.383,1.647l.309,1.323a.036.036,0,0,1,0,.023.106.106,0,0,1-.04-.021l-4.561-2.75c-.225-.136-.451-.272-.676-.409a.058.058,0,0,0-.07,0l-2.747,1.657-2.5,1.506C1459.69,226.771,1459.681,226.78,1459.668,226.78Z" transform="translate(-1456.373 -210.442)" fill="currentColor"></path>
                                                          </g>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.2" height="16.339" viewBox="0 0 17.2 16.339">
                                                          <g id="Group_209" data-name="Group 209" transform="translate(0 0)">
                                                            <path id="Path_46" data-name="Path 46" d="M1459.668,226.78a.053.053,0,0,1,0-.032l.327-1.4q.173-.745.346-1.49.18-.77.359-1.539t.359-1.544a.047.047,0,0,0-.019-.054l-1.824-1.58-1.417-1.229-1.359-1.177-.069-.061.125-.01c.126-.012.253-.021.379-.031l.484-.043.379-.031.373-.034.374-.031.378-.033.258-.022.387-.033.258-.022.392-.034.364-.031.392-.034.365-.031.391-.034.36-.031.4-.034c.032,0,.064-.006.1-.007a.054.054,0,0,0,.053-.04c.094-.226.19-.451.286-.677l2.094-4.942.02-.043c.007.014.012.024.016.034l1.619,3.819q.383.9.763,1.8a.065.065,0,0,0,.064.046c.086.006.172.014.258.021l.392.034.359.031.4.034.374.031.378.033.263.022.387.034.263.022.383.033.263.022.387.034.369.031.388.034.258.022.387.033.254.022.365.03s0,0,.008.005-.015.021-.025.029l-1.9,1.647-1.841,1.6q-.434.376-.869.751a.086.086,0,0,0-.034.1c.117.5.232.993.348,1.49s.233,1,.349,1.5q.191.824.383,1.647l.309,1.323a.036.036,0,0,1,0,.023.106.106,0,0,1-.04-.021l-4.561-2.75c-.225-.136-.451-.272-.676-.409a.058.058,0,0,0-.07,0l-2.747,1.657-2.5,1.506C1459.69,226.771,1459.681,226.78,1459.668,226.78Z" transform="translate(-1456.373 -210.442)" fill="currentColor"></path>
                                                          </g>
                                                        </svg>

                                                    </span>
                                                </div>
                                                <div class="city">
                                                    <span class="ucity"> </span>
                                                </div>
                                                <div class="view">
                                                    <a href="#">مشاهده پروفایل</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timing">
                                            <div class="time">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40.231" height="40.647" viewBox="0 0 40.231 40.647">
                                                  <g id="Group_969" data-name="Group 969" transform="translate(0 0)">
                                                    <path id="Path_214" data-name="Path 214" d="M215.907,288.26H211.63v2.245a3.007,3.007,0,1,1-6.012,0V288.26H193.711v2.245a3.007,3.007,0,1,1-6.012,0V288.26h-4.393a3.869,3.869,0,0,0-3.815,3.9v26.7a3.869,3.869,0,0,0,3.815,3.9h32.6a3.869,3.869,0,0,0,3.815-3.9v-26.7A3.869,3.869,0,0,0,215.907,288.26Zm.694,30.958H182.728V295.94H216.6Z" transform="translate(-179.491 -282.115)" fill="currentColor"></path>
                                                    <path id="Path_215" data-name="Path 215" d="M371.663,170.071h1.272a1.407,1.407,0,0,0,1.387-1.418v-7.326a1.407,1.407,0,0,0-1.387-1.418h-1.272a1.407,1.407,0,0,0-1.387,1.418v7.326A1.407,1.407,0,0,0,371.663,170.071Z" transform="translate(-361.143 -159.909)" fill="currentColor"></path>
                                                    <path id="Path_216" data-name="Path 216" d="M745.987,170.071h1.272a1.407,1.407,0,0,0,1.387-1.418v-7.326a1.407,1.407,0,0,0-1.387-1.418h-1.272a1.407,1.407,0,0,0-1.387,1.418v7.326A1.407,1.407,0,0,0,745.987,170.071Z" transform="translate(-717.548 -159.909)" fill="currentColor"></path>
                                                    <rect id="Rectangle_684" data-name="Rectangle 684" width="7.628" height="7.208" transform="translate(5.491 16.188)" fill="currentColor"></rect>
                                                    <rect id="Rectangle_685" data-name="Rectangle 685" width="7.628" height="7.208" transform="translate(16.547 16.188)" fill="currentColor"></rect>
                                                    <rect id="Rectangle_686" data-name="Rectangle 686" width="7.628" height="7.208" transform="translate(26.938 16.188)" fill="currentColor"></rect>
                                                    <rect id="Rectangle_687" data-name="Rectangle 687" width="7.628" height="7.208" transform="translate(5.491 26.822)" fill="currentColor"></rect>
                                                    <rect id="Rectangle_688" data-name="Rectangle 688" width="7.628" height="7.208" transform="translate(16.547 26.822)" fill="currentColor"></rect>
                                                    <rect id="Rectangle_689" data-name="Rectangle 689" width="7.628" height="7.208" transform="translate(26.938 26.822)" fill="currentColor"></rect>
                                                  </g>
                                                </svg>


                                                <span class="start">

                                                </span>
                                                <span>-</span>
                                                <span class="end">
                                                </span>
                                                <input type="text" name="start" id="start"   hidden>
                                                <input type="text" name="end" id="end"   hidden>
                                                <input type="number" name="count" id="end" value="1" hidden>
                                            </div>
                                            <div class="number">
                                                <span class="title">تعداد افراد :</span>
                                                <input type="text" name="host_id"  id="host_id"   hidden="true">
                                                <span>خودم</span>
                                            </div>
                                        </div>
                                        <div class="inputs">
                                            <ul>
                                                <li>
                                                    <span>مدت زمان :</span>
                                                    <select name="duration" id="duration">
                                                        <option value="">مدت زمان</option>
                                                        <option value="1">2 ساعت</option>
                                                        <option value="2">3 ساعت</option>
                                                        <option value="3">4 ساعت</option>
                                                        <option value="4">5 ساعت</option>
                                                        <option value="5">6 ساعت</option>
                                                        <option value="6">7 ساعت</option>
                                                        <option value="7">8 ساعت</option>
                                                        <option value="8">9 ساعت</option>
                                                        <option value="9">10 ساعت</option>
                                                        <option value="10">11 ساعت</option>
                                                        <option value="11">12 ساعت</option>
                                                        <option value="12">13 ساعت</option>
                                                    </select>
                                                </li>
                                                <li>
                                                    <span>زمان ملاقات :</span>
                                                    <select name="visit" id="">
                                                        <option value="">زمان ملاقات</option>
                                                        <option value="changing">متغیر</option>
                                                        <option value="morning">صبح</option>
                                                        <option value="before_noon">قبل از ظهر</option>
                                                        <option value="noon">ظهر</option>
                                                        <option value="after_noon">بعد از ظهر</option>
                                                        <option value="evening">عصر</option>
                                                        <option value="night">شب</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="message">
                                            <span>پیام</span>
                                            <textarea name="message" id="" cols="30" rows="10"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div>
                                        <input id="inlineExampleAlt" hidden class="datepicker-demo" />
                                        <div class="inline-example" id="sss"></div>

                                        <span id="re_select" style="display:none"> انتخاب مجدد تاریخ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-12">
                                    <div>
                                        <div class="popbottom">
                                            <span id="private_travel" class="btn-violet">پیشنهاد دهید</span>
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
</div>

   @endsection
