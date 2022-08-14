
<div class="navbar navbar-fixed-top" id="main-navbar">
    <div class="header-right">
        <a href="dashboard.html" class="logo-con">
            <img src="assets/images/logo.png" class="img-responsive center-block" alt="لوگو قالب مدیران">
        </a>
    </div><!-- /.header-right -->
    <div class="header-left">
        <div class="top-bar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="btn" id="toggle-sidebar">
                        <span class="menu"></span>
                    <div class="paper-ripple"><div class="paper-ripple__background"></div><div class="paper-ripple__waves"></div></div></a>
                </li>
                <li>
                    <a href="#" class="btn open" id="toggle-sidebar-top">
                        <i class="icon-user-following"></i>
                    <div class="paper-ripple"><div class="paper-ripple__background"></div><div class="paper-ripple__waves"></div></div></a>
                </li>
                <li>
                    <a href="#" class="btn" id="toggle-dark-mode">
                        <i class="icon-bulb"></i>
                    <div class="paper-ripple"><div class="paper-ripple__background"></div><div class="paper-ripple__waves"></div></div></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="#" class="btn" id="toggle-fullscreen">
                        <i class="icon-size-fullscreen"></i>
                    <div class="paper-ripple"><div class="paper-ripple__background"></div><div class="paper-ripple__waves"></div></div></a>
                </li>
                <li class="dropdown dropdown-messages">
                    <a href="#" class="dropdown-toggle btn" data-bs-toggle="dropdown">
                        <i class="icon-envelope"></i>
                        <span class="badge badge-primary">
                            3
                        </span>
                    <div class="paper-ripple"><div class="paper-ripple__background"></div><div class="paper-ripple__waves"></div></div></a>
                    <ul class="dropdown-menu has-scrollbar mCustomScrollbar _mCS_1 mCS-autoHide mCS-dir-rtl mCS_no_scrollbar" style="height: 300px; overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: 298px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="rtl">
                        <li class="dropdown-header clearfix">
                            <span class="float-start">
                                <a href="#" rel="tooltip" title="" data-placement="left" data-bs-original-title="خواندن همه">
                                    <i class="icon-eye"></i>
                                </a>
                            سه سفر اخر
                            </span>
                        </li>
                        <li class="dropdown-body">
                            <ul class="dropdown-menu-list">
                                @foreach ( App\Models\Travel::latest()->take(3)->get() as $travel)

                                <li class="clearfix">
                                    <a href="#">
                                        <p class="clearfix">
                                            <strong class="float-start">
                                                <img src="{{$travel->user->avatar() }}" class="img-circle mCS_img_loaded" alt="">
                                                  {{ $travel->user->name}}
                                                  {{ $travel->user->family}}
                                            </strong>
                                            <small class="float-end text-muted">
                                                <i class="icon-clock"></i>
                                                {{Morilog\Jalali\Jalalian::forge($travel->start)->format("Y-m-d")}}
                                            </small>
                                        </p>
                                      <p>
                                        {{$travel->city->name}}
                                      </p>
                                    </a>
                                </li>
                                @endforeach

                            </ul>
                        </li>
                        <li class="dropdown-footer clearfix">
                            <a href="{{route('travel.index')}}">
                                <i class="icon-list fa-flip-horizontal"></i>
                                مشاهده سفر ها
                            </a>
                        </li>
                    </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></ul>
                </li>
                {{-- <li class="dropdown dropdown-announces">
                    <a href="#" class="dropdown-toggle btn" data-bs-toggle="dropdown">
                        <i class="icon-bell"></i>
                        <span class="badge badge-warning">
                            5
                        </span>
                    <div class="paper-ripple"><div class="paper-ripple__background"></div><div class="paper-ripple__waves"></div></div></a>
                    <ul class="dropdown-menu has-scrollbar mCustomScrollbar _mCS_2 mCS-autoHide mCS-dir-rtl mCS_no_scrollbar" style="height: 300px; overflow: visible;"><div id="mCSB_2" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" tabindex="0" style="max-height: 298px;"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="rtl">
                        <li class="dropdown-header clearfix">
                            <span class="float-start">
                                <a href="#" rel="tooltip" title="" data-placement="left" data-bs-original-title="خواندن همه">
                                    <i class="icon-eye"></i>
                                </a>
                                <span>
                                    شما 8 اعلان تازه دارید.
                                </span>
                            </span>

                        </li>
                        <li class="dropdown-body">
                            <ul class="dropdown-menu-list">
                                <li class="clearfix">
                                    <a href="#">
                                        <p class="clearfix">
                                            <strong class="float-start">عباس دوران</strong>
                                            <small class="float-end text-muted">
                                                <i class="icon-clock"></i>
                                                21:30
                                            </small>
                                        </p>
                                        <p>بسته ارسالی شما به دستم رسید.</p>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <p class="clearfix">
                                            <strong class="float-start">حسن باقری</strong>
                                            <small class="float-end text-muted">
                                                <i class="icon-clock"></i>
                                                20:20
                                            </small>
                                        </p>
                                        <p>از محبت شما ممنونم.</p>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <p class="clearfix">
                                            <strong class="float-start">مدیر کل</strong>
                                            <small class="float-end text-muted">
                                                <i class="icon-clock"></i>
                                                19:20
                                            </small>
                                        </p>
                                        <p>سفارش شما ارسال گردید..</p>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <p class="clearfix">
                                            <strong class="float-start">مدیر مالی</strong>
                                            <small class="float-end text-muted">
                                                <i class="icon-clock"></i>
                                                17:40
                                            </small>
                                        </p>
                                        <p>درخواست فیش حقوقی</p>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <p class="clearfix">
                                            <strong class="float-start">ابراهیم همت</strong>
                                            <small class="float-end text-muted">
                                                <i class="icon-clock"></i>
                                                15:45
                                            </small>
                                        </p>
                                        <p>پیام های مرا دنبال کنید.</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-footer clearfix">
                            <a href="#">
                                <i class="icon-list fa-flip-horizontal"></i>
                                مشاهده همه اعلانات
                            </a>
                        </li>
                    </div></div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></ul>
                </li> --}}
{{--
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle dropdown-hover" data-bs-toggle="dropdown">
                        <img src="{{auth()->user()->avatar()}}" alt="عکس پرفایل" class="img-circle img-responsive">
                        <span>.

                         {{auth()->user()->name}}
                         {{auth()->user()->family}}



                        </span>
                        <i class="icon-arrow-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="edit_profile.html">
                                <i class="icon-note"></i>
                                ویرایش پروفایل
                            </a>
                        </li>
                        <li>
                            <a href="change_password.html">
                                <i class="icon-key"></i>
                                تغییر رمز عبور
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="chat.html">
                                <span class="badge badge-primary float-end"> 14 </span>
                                <i class="icon-envelope"></i>
                                تیکت های جدید
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-wallet"></i>
                                کیف پول
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login.html">
                                <i class="icon-power"></i>
                                خروج
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul><!-- /.navbar-left -->
        </div><!-- /.top-bar -->
    </div><!-- /.header-left -->
</div>
