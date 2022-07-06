@extends('main.site')
   @section('content')

   <div id="top-banner" class="rows">
    <img src="/home/images/travel.jpg" alt="">
</div>


<div id="mytrips" class="rows">
    <div class="fullcontainer">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="bg-center-title">
                        <h3>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.871" height="34.705" viewBox="0 0 24.871 34.705">
                                  <g id="Group_931" data-name="Group 931" transform="translate(-1022.001 -976.999)">
                                    <g id="Group_930" data-name="Group 930" transform="translate(-899.367 224.947)">
                                      <g id="Group_928" data-name="Group 928" transform="translate(1921.368 752.052)">
                                        <path fill="currentColor" id="Path_219" data-name="Path 219" d="M1933.8,786.757a1.648,1.648,0,0,1-1.27-.6c-.456-.551-11.166-13.579-11.166-21.673a12.436,12.436,0,1,1,24.871,0c0,8.094-10.71,21.122-11.166,21.673A1.648,1.648,0,0,1,1933.8,786.757Zm0-31.409a9.15,9.15,0,0,0-9.14,9.139c0,5.028,5.762,13.577,9.139,17.972,3.377-4.4,9.14-12.95,9.14-17.972A9.15,9.15,0,0,0,1933.8,755.348Z" transform="translate(-1921.368 -752.052)"/>
                                      </g>
                                      <g id="Group_929" data-name="Group 929" transform="translate(1928.263 758.999)">
                                        <path fill="currentColor" id="Path_220" data-name="Path 220" d="M2004.841,833.873a2.245,2.245,0,1,1-2.245,2.245,2.247,2.247,0,0,1,2.245-2.245m0-3.3a5.541,5.541,0,1,0,5.541,5.541,5.541,5.541,0,0,0-5.541-5.541Z" transform="translate(-1999.3 -830.577)"/>
                                      </g>
                                    </g>
                                  </g>
                                </svg>

                            </span>
                            سـفرهـای من
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ( $travels as $travel )
            <div class="col-lg-6 col-md-12">
                <div>
                    <div class="single-my-trip">
                        <div class="img">
                            <a href="#">
                                <img src="{{$travel->city->province->image()}}" alt="">
                            </a>
                            <div class="cap">
                                <h4>سفر به
                                    {{$travel->city->name}}
                                </h4>
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.871" height="34.705" viewBox="0 0 24.871 34.705">
                                      <g id="Group_931" data-name="Group 931" transform="translate(-1022.001 -976.999)">
                                        <g id="Group_930" data-name="Group 930" transform="translate(-899.367 224.947)">
                                          <g id="Group_928" data-name="Group 928" transform="translate(1921.368 752.052)">
                                            <path fill="currentColor" id="Path_219" data-name="Path 219" d="M1933.8,786.757a1.648,1.648,0,0,1-1.27-.6c-.456-.551-11.166-13.579-11.166-21.673a12.436,12.436,0,1,1,24.871,0c0,8.094-10.71,21.122-11.166,21.673A1.648,1.648,0,0,1,1933.8,786.757Zm0-31.409a9.15,9.15,0,0,0-9.14,9.139c0,5.028,5.762,13.577,9.139,17.972,3.377-4.4,9.14-12.95,9.14-17.972A9.15,9.15,0,0,0,1933.8,755.348Z" transform="translate(-1921.368 -752.052)"/>
                                          </g>
                                          <g id="Group_929" data-name="Group 929" transform="translate(1928.263 758.999)">
                                            <path fill="currentColor" id="Path_220" data-name="Path 220" d="M2004.841,833.873a2.245,2.245,0,1,1-2.245,2.245,2.247,2.247,0,0,1,2.245-2.245m0-3.3a5.541,5.541,0,1,0,5.541,5.541,5.541,5.541,0,0,0-5.541-5.541Z" transform="translate(-1999.3 -830.577)"/>
                                          </g>
                                        </g>
                                      </g>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="dets">
                            <div class="date-action">
                                <div class="date">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25.527" height="25.791" viewBox="0 0 25.527 25.791">
                                          <g id="Group_902" data-name="Group 902" transform="translate(-179.491 -159.909)">
                                            <path id="Path_215" data-name="Path 215" d="M202.6,288.26h-2.714v1.425a1.908,1.908,0,1,1-3.814,0V288.26h-7.556v1.425a1.908,1.908,0,1,1-3.814,0V288.26h-2.787a2.455,2.455,0,0,0-2.421,2.474v16.944a2.455,2.455,0,0,0,2.421,2.474H202.6a2.455,2.455,0,0,0,2.421-2.474V290.734A2.455,2.455,0,0,0,202.6,288.26Zm.44,19.643H181.545v-14.77h21.493Z" transform="translate(0 -124.452)" fill="currentColor"/>
                                            <path id="Path_216" data-name="Path 216" d="M371.156,166.357h.807a.893.893,0,0,0,.88-.9v-4.648a.893.893,0,0,0-.88-.9h-.807a.893.893,0,0,0-.88.9v4.648A.893.893,0,0,0,371.156,166.357Z" transform="translate(-184.99)" fill="currentColor"/>
                                            <path id="Path_217" data-name="Path 217" d="M745.48,166.357h.807a.893.893,0,0,0,.88-.9v-4.648a.893.893,0,0,0-.88-.9h-.807a.893.893,0,0,0-.88.9v4.648A.893.893,0,0,0,745.48,166.357Z" transform="translate(-547.944)" fill="currentColor"/>
                                            <rect id="Rectangle_686" data-name="Rectangle 686" width="4.84" height="4.573" transform="translate(182.975 170.18)" fill="currentColor"/>
                                            <rect id="Rectangle_687" data-name="Rectangle 687" width="4.84" height="4.573" transform="translate(189.99 170.18)" fill="currentColor"/>
                                            <rect id="Rectangle_688" data-name="Rectangle 688" width="4.84" height="4.573" transform="translate(196.584 170.18)" fill="currentColor"/>
                                            <rect id="Rectangle_689" data-name="Rectangle 689" width="4.84" height="4.573" transform="translate(182.975 176.928)" fill="currentColor"/>
                                            <rect id="Rectangle_690" data-name="Rectangle 690" width="4.84" height="4.573" transform="translate(189.99 176.928)" fill="currentColor"/>
                                            <rect id="Rectangle_691" data-name="Rectangle 691" width="4.84" height="4.573" transform="translate(196.584 176.928)" fill="currentColor"/>
                                          </g>
                                        </svg>

                                    </span>

                                    {{$user->fdate($travel->start)->format('%A, %d %B %Y')}} -
                                    {{$user->fdate($travel->end)->format('%A, %d %B %Y')}}

                                    <span style="display:inline-block; margin-left:10px; color:{{$travel->active?"green":'red'}}">
                                    ({{$travel->active?"فعال":'غیرفعال'}})
                                    </span>
                                </div>

                                <div class="actions">

                                    <a href="{{route('user.travel.destroy',$travel->id)}}">حذف</a>
                                    <span>/</span>

                                    <a href="{{route('user.travel.active',$travel->id)}}">{{$travel->active?"غیرفعال":'فعال'}}</a>
                                </div>
                            </div>
                            <div class="numbers">
                                <span class="title">تعداد افراد :</span>
                                <span class="value"> {{$travel->count}}</span>
                            </div>
                            <div class="offers">
                                <h4>پیشنهادات دریافت شده از :</h4>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/mijoorban1.png" alt="">
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<div id="myexps" class="rows">
    <div class="fullcontainer">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="bg-center-title">
                        <h3>تجربه ها و فعالیت های ماجراجویانه ی من</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div>
                    <div class="singl-my-exp">
                        <div class="img">
                            <a href="#">
                                <img src="images/expe1.jpg" alt="">
                            </a>
                            <div class="cap">
                                <h3><a href="#">عکاسی</a></h3>
                            </div>
                        </div><div class="dets">
                            <div class="date-action">
                                <div class="date">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25.527" height="25.791" viewBox="0 0 25.527 25.791">
                                          <g id="Group_902" data-name="Group 902" transform="translate(-179.491 -159.909)">
                                            <path id="Path_215" data-name="Path 215" d="M202.6,288.26h-2.714v1.425a1.908,1.908,0,1,1-3.814,0V288.26h-7.556v1.425a1.908,1.908,0,1,1-3.814,0V288.26h-2.787a2.455,2.455,0,0,0-2.421,2.474v16.944a2.455,2.455,0,0,0,2.421,2.474H202.6a2.455,2.455,0,0,0,2.421-2.474V290.734A2.455,2.455,0,0,0,202.6,288.26Zm.44,19.643H181.545v-14.77h21.493Z" transform="translate(0 -124.452)" fill="currentColor"/>
                                            <path id="Path_216" data-name="Path 216" d="M371.156,166.357h.807a.893.893,0,0,0,.88-.9v-4.648a.893.893,0,0,0-.88-.9h-.807a.893.893,0,0,0-.88.9v4.648A.893.893,0,0,0,371.156,166.357Z" transform="translate(-184.99)" fill="currentColor"/>
                                            <path id="Path_217" data-name="Path 217" d="M745.48,166.357h.807a.893.893,0,0,0,.88-.9v-4.648a.893.893,0,0,0-.88-.9h-.807a.893.893,0,0,0-.88.9v4.648A.893.893,0,0,0,745.48,166.357Z" transform="translate(-547.944)" fill="currentColor"/>
                                            <rect id="Rectangle_686" data-name="Rectangle 686" width="4.84" height="4.573" transform="translate(182.975 170.18)" fill="currentColor"/>
                                            <rect id="Rectangle_687" data-name="Rectangle 687" width="4.84" height="4.573" transform="translate(189.99 170.18)" fill="currentColor"/>
                                            <rect id="Rectangle_688" data-name="Rectangle 688" width="4.84" height="4.573" transform="translate(196.584 170.18)" fill="currentColor"/>
                                            <rect id="Rectangle_689" data-name="Rectangle 689" width="4.84" height="4.573" transform="translate(182.975 176.928)" fill="currentColor"/>
                                            <rect id="Rectangle_690" data-name="Rectangle 690" width="4.84" height="4.573" transform="translate(189.99 176.928)" fill="currentColor"/>
                                            <rect id="Rectangle_691" data-name="Rectangle 691" width="4.84" height="4.573" transform="translate(196.584 176.928)" fill="currentColor"/>
                                          </g>
                                        </svg>

                                    </span>

                                     20 خرداد 1401 - 25 خرداد 1401
                                </div>

                                <div class="actions">
                                    <a href="#">حذف</a>
                                    <span>/</span>
                                    <a href="#">غیرفعال</a>
                                </div>
                            </div>
                            <div class="numbers">
                                <span class="title">میجوری بان :</span>
                                <span class="value">ساناز میری</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div>
                    <div class="singl-my-exp">
                        <div class="img">
                            <a href="#">
                                <img src="/home/images/expe2.jpg" alt="">
                            </a>
                            <div class="cap">
                                <h3><a href="#">موتور سواری</a></h3>
                            </div>
                        </div><div class="dets">
                            <div class="date-action">
                                <div class="date">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25.527" height="25.791" viewBox="0 0 25.527 25.791">
                                          <g id="Group_902" data-name="Group 902" transform="translate(-179.491 -159.909)">
                                            <path id="Path_215" data-name="Path 215" d="M202.6,288.26h-2.714v1.425a1.908,1.908,0,1,1-3.814,0V288.26h-7.556v1.425a1.908,1.908,0,1,1-3.814,0V288.26h-2.787a2.455,2.455,0,0,0-2.421,2.474v16.944a2.455,2.455,0,0,0,2.421,2.474H202.6a2.455,2.455,0,0,0,2.421-2.474V290.734A2.455,2.455,0,0,0,202.6,288.26Zm.44,19.643H181.545v-14.77h21.493Z" transform="translate(0 -124.452)" fill="currentColor"/>
                                            <path id="Path_216" data-name="Path 216" d="M371.156,166.357h.807a.893.893,0,0,0,.88-.9v-4.648a.893.893,0,0,0-.88-.9h-.807a.893.893,0,0,0-.88.9v4.648A.893.893,0,0,0,371.156,166.357Z" transform="translate(-184.99)" fill="currentColor"/>
                                            <path id="Path_217" data-name="Path 217" d="M745.48,166.357h.807a.893.893,0,0,0,.88-.9v-4.648a.893.893,0,0,0-.88-.9h-.807a.893.893,0,0,0-.88.9v4.648A.893.893,0,0,0,745.48,166.357Z" transform="translate(-547.944)" fill="currentColor"/>
                                            <rect id="Rectangle_686" data-name="Rectangle 686" width="4.84" height="4.573" transform="translate(182.975 170.18)" fill="currentColor"/>
                                            <rect id="Rectangle_687" data-name="Rectangle 687" width="4.84" height="4.573" transform="translate(189.99 170.18)" fill="currentColor"/>
                                            <rect id="Rectangle_688" data-name="Rectangle 688" width="4.84" height="4.573" transform="translate(196.584 170.18)" fill="currentColor"/>
                                            <rect id="Rectangle_689" data-name="Rectangle 689" width="4.84" height="4.573" transform="translate(182.975 176.928)" fill="currentColor"/>
                                            <rect id="Rectangle_690" data-name="Rectangle 690" width="4.84" height="4.573" transform="translate(189.99 176.928)" fill="currentColor"/>
                                            <rect id="Rectangle_691" data-name="Rectangle 691" width="4.84" height="4.573" transform="translate(196.584 176.928)" fill="currentColor"/>
                                          </g>
                                        </svg>

                                    </span>

                                     20 خرداد 1401 - 25 خرداد 1401
                                </div>

                                <div class="actions">
                                    <a href="#">حذف</a>
                                    <span>/</span>
                                    <a href="#">غیرفعال</a>
                                </div>
                            </div>
                            <div class="numbers">
                                <span class="title">میجوری بان :</span>
                                <span class="value">ساناز میری</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   @endsection
