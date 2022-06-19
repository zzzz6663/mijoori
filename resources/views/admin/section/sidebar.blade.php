  <!-- BEGIN SIDEBAR -->
  <div id="sidebar">
    <div class="sidebar-top">
        {{-- <div class="search-box">
            <form class="search-form" action="#" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control placeholder-light" placeholder="جستجو..." name="key">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-round submit">
                            <i class="icon-magnifier"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div><!-- /.search-box --> --}}
        <div class="user-box">
            <a href="#">
                <img src="assets/images/user/128.png" alt="عکس پروفایل" class="img-circle img-responsive">
            </a>
            <div class="user-details">
                <h4>
                    {{auth()->user()->name}}
                    {{auth()->user()->family}}</h4>
                <p class="role">  {{__('arr.'.auth()->user()->level)}}</p>
                <div class="dropdown user-login">
                    {{-- <button class="btn btn-xs btn-status dropdown-toggle btn-round" type="button" data-bs-toggle="dropdown" data-hover="dropdown">
                        <i class="fa fa-circle text-success"></i>
                        <span>دردسترس</span>
                    </button> --}}
                    <ul class="dropdown-menu dropdown-status">
                        <li>
                            <a href="#" class="busy">
                                <i class="fa fa-circle text-success"></i>
                                <span>دردسترس</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="busy">
                                <i class="fa fa-circle text-danger"></i>
                                <span>مشغول</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle text-gray"></i>
                                <span>مخفی</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle text-warning"></i>
                                <span>سایر</span>
                            </a>
                        </li>
                    </ul>
                </div><!-- /dropdown -->
            </div><!-- /.user-details -->
        </div><!-- /.user-box -->
    </div><!-- /.sidebar-top -->
    <div class="side-menu-container">
        <ul class="metismenu" id="side-menu">
            <li>
                <a href="{{route('user.index')}}" class="{{Request::url()== route( 'user.index')?'current':''}}">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>کاربران</span>
                </a>

            </li>
            <li>
                <a href="{{route('province.index')}}" class="{{Request::url()== route( 'province.index')?'current':''}}">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>استان ها</span>
                </a>

            </li>
            <li>
                <a href="{{route('logout')}}" class="{{Request::url()== route( 'logout')?'current':''}}">
                    <span aria-hidden="true" class="icon-logout"></span>
                    <span>  خروج</span>
                </a>

            </li>

        </ul><!-- /#side-menu -->
    </div><!-- /.side-menu-container -->
</div><!-- /#sidebar -->
<!-- END SIDEBAR -->
