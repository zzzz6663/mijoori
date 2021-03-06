<div id="header2" style="z-index:9999999" class="rows" style="padding:20px 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div>

                    @guest

                    <div class="urusea">
                        <a href="#">
                            <span class="menu">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="12" viewBox="0 0 21 12">
                                    <g id="Group_79" data-name="Group 79" transform="translate(-180 -55.306)">
                                        <rect id="Rectangle_75" data-name="Rectangle 75" width="21" height="2"
                                            rx="1" transform="translate(180 55.306)" fill="#b4b4b4" />
                                        <rect id="Rectangle_76" data-name="Rectangle 76" width="21" height="2"
                                            rx="1" transform="translate(180 60.306)" fill="#b4b4b4" />
                                        <rect id="Rectangle_77" data-name="Rectangle 77" width="21" height="2"
                                            rx="1" transform="translate(180 65.306)" fill="#b4b4b4" />
                                    </g>
                                </svg>
                            </span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.15" height="19.399"
                                    viewBox="0 0 15.15 19.399">
                                    <path id="Path_4" data-name="Path 4"
                                        d="M130.506,109.293a3.989,3.989,0,1,0-3.989-3.989A3.994,3.994,0,0,0,130.506,109.293Zm6.015,2.6a5.31,5.31,0,0,0-3.767-1.56h-4.5a5.326,5.326,0,0,0-5.326,5.326v3.7a21.812,21.812,0,0,0,15.15,0v-3.7A5.309,5.309,0,0,0,136.521,111.891Z"
                                        transform="translate(-122.931 -101.316)" fill="#fff" />
                                </svg>
                            </span>
                        </a>
                        <div class="drop">
                            <div class="drop-container">

                                <ul>
                                    <li>
                                        <a href="#" class="register">
                                            <span class="text">?????? ?????? ?? ????????</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endguest

                    @auth
                    <div class="msg">
                        <a href="{{route('related.travel')}}" id="envelope">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25.026" height="17.083" viewBox="0 0 25.026 17.083">
                              <path id="Path_212" data-name="Path 212" d="M672.726,436.316V420.284s0,0,0,0a.328.328,0,0,0-.019-.109l-.006-.01a.27.27,0,0,0-.018-.033.328.328,0,0,0-.048-.07.292.292,0,0,0-.03-.029.361.361,0,0,0-.07-.046c-.012-.006-.023-.013-.035-.017a.357.357,0,0,0-.124-.024H648.351a.357.357,0,0,0-.124.024c-.013,0-.023.011-.035.017a.36.36,0,0,0-.07.046.316.316,0,0,0-.031.029.327.327,0,0,0-.048.069.264.264,0,0,0-.018.033s0,.006-.006.01a.326.326,0,0,0-.019.109s0,0,0,0v16.1a.346.346,0,0,0,.351.342h24.023a.346.346,0,0,0,.351-.342v-.068Zm-10.08-7.986,8.807,7.63H649.272l8.807-7.63,2.063,1.614a.359.359,0,0,0,.44,0ZM648.7,435.539V421l8.822,6.9Zm14.5-7.643,8.822-6.9v14.542Zm8.176-7.271-11.015,8.614-11.015-8.614Z" transform="translate(-647.85 -419.792)" fill="#757575" stroke="#707070" stroke-width="0.3"></path>
                            </svg>
                            @if (auth()->user()->related_travel() && auth()->user()->related_travel()->count()>0)
                                <span   class="cir">1</span>
                            @endif
                        </a>
                    </div>
                        <div class="urusea v2">
                            <a href="#">
                                <span class="icon">
                                    <img src="{{ auth()->user()->avatar() }}" alt="">
                                </span>
                                <span class="name">
                                    {{ auth()->user()->name }}
                                    {{ auth()->user()->family }}

                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6">
                                    <path id="Polygon_3" data-name="Polygon 3" d="M4,0,8,6H0Z"
                                        transform="translate(8 6) rotate(180)" fill="#3e3e3e"></path>
                                </svg>

                            </a>
                            <div class="drop">
                                <div class="drop-container">

                                    <ul>
                                        <li>
                                            <a href="{{ route('user.my.travels') }}">
                                                <span class="text">  ???????????? ???? </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('new.adventure1') }}">
                                                <span class="text">    ?????????????????? ???????????? </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('my.adventures') }}">
                                                <span class="text">    ?????????????????? ???? </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}">
                                                <span class="text">  ???????? </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endauth
                    <div class="toggle-side-menu">
                        <a href="#menus" class="mmenu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="12"
                                viewBox="0 0 21 12">
                                <g id="Group_79" data-name="Group 79" transform="translate(-180 -55.306)">
                                    <rect id="Rectangle_75" data-name="Rectangle 75" width="21" height="2"
                                        rx="1" transform="translate(180 55.306)" fill="#b4b4b4" />
                                    <rect id="Rectangle_76" data-name="Rectangle 76" width="21" height="2"
                                        rx="1" transform="translate(180 60.306)" fill="#b4b4b4" />
                                    <rect id="Rectangle_77" data-name="Rectangle 77" width="21" height="2"
                                        rx="1" transform="translate(180 65.306)" fill="#b4b4b4" />
                                </g>
                            </svg>
                        </a>
                    </div>

                    <div class="mainmenu">
                        <ul>
                                   @auth
                                 <li><a id="{{ auth()->user()->guid ? '' : 'be_guid' }}" class="active " href="#"></a>
                                    @endauth

                                    @guest

                                <li>
                                    <a   class="active register " href="#">
                                    @endguest

                                    @auth
                                        @if (!auth()->user()->guid)
                                            ???????????? ????????
                                        @endif
                                    @endauth
                                    @guest
                                        ?????? ?????? /????????
                                    @endguest
                                </a>
                            </li>
                            <li><a href="#" class="travel_pop_but">?????? ????????????</a></li>
                            <li><a href="#">?????? ????????????</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div>
                    <div id="logo">
                        <a href="{{route('login')}}">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="179.639" height="75.429"
                                    viewBox="0 0 179.639 75.429">
                                    <g id="Component_27_1" data-name="Component 27 ??? 1" transform="translate(1)">
                                        <g id="Group_12" data-name="Group 12"
                                            transform="translate(-1684.139 -25.325)">
                                            <g id="Group_8" data-name="Group 8"
                                                transform="translate(1703.394 -24.048)">
                                                <path id="Path_16" data-name="Path 16"
                                                    d="M37.715,0A37.715,37.715,0,1,1,0,37.715,37.715,37.715,0,0,1,37.715,0Z"
                                                    transform="translate(83.954 49.373)" fill="#662683" />
                                                <g id="Group_7" data-name="Group 7"
                                                    transform="translate(99.474 72.536)">
                                                    <path id="Path_5" data-name="Path 5"
                                                        d="M210.062,152.174V127.159c.138-3.716-3.844-5.171-6.259-1.552l-5.337,7.647c-2.252,2.987-4.6,3.1-6.89,0l-6.336-8.266c-1.716-2.343-5.4-1.659-5.4,2.134v10.441"
                                                        transform="translate(-165.044 -123.239)" fill="none"
                                                        stroke="#fff" stroke-miterlimit="10" stroke-width="4" />
                                                    <path id="Path_6" data-name="Path 6"
                                                        d="M224.465,125.563a1.467,1.467,0,1,1,1.147-.555A1.463,1.463,0,0,1,224.465,125.563Z"
                                                        transform="translate(-194.558 -122.633)" fill="#fff" />
                                                    <path id="Path_7" data-name="Path 7"
                                                        d="M133.045,125.168v25.015c-.138,3.716,3.844,5.171,6.26,1.552l5.337-7.647c2.252-2.987,4.6-3.1,6.89,0l6.336,8.266c1.716,2.343,5.4,1.659,5.4-2.134V139.779"
                                                        transform="translate(-133.041 -124.367)" fill="none"
                                                        stroke="#fff" stroke-miterlimit="10" stroke-width="4" />
                                                    <path id="Path_8" data-name="Path 8"
                                                        d="M177.677,207.418a1.467,1.467,0,1,1-1.147.555A1.462,1.462,0,0,1,177.677,207.418Z"
                                                        transform="translate(-162.563 -180.612)" fill="#fff" />
                                                </g>
                                            </g>
                                            <g id="Group_10" data-name="Group 10"
                                                transform="translate(1552.087 -241.27)">
                                                <g id="Group_9" data-name="Group 9"
                                                    transform="translate(132.052 297.28)">
                                                    <path id="Path_9" data-name="Path 9"
                                                        d="M142.76,315.525V305.6a3.747,3.747,0,0,0-3.73-3.729h-1.823a3.746,3.746,0,0,0-3.729,3.729v9.926h-1.426V305.6a4.94,4.94,0,0,1,.7-2.591,5.33,5.33,0,0,1,1.871-1.864,4.947,4.947,0,0,1,2.585-.7h1.823a5,5,0,0,1,2.392.59,6.14,6.14,0,0,1,2.051,1.919,6.126,6.126,0,0,1,2.049-1.919,5.005,5.005,0,0,1,2.392-.59h1.823a4.95,4.95,0,0,1,2.585.7,5.328,5.328,0,0,1,1.871,1.864,4.929,4.929,0,0,1,.7,2.591v9.926h-1.426V305.6a3.744,3.744,0,0,0-3.729-3.729h-1.823a3.745,3.745,0,0,0-3.729,3.729v9.926Z"
                                                        transform="translate(-132.052 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Path_10" data-name="Path 10"
                                                        d="M174.284,300.444h1.426v15.081h-1.426Z"
                                                        transform="translate(-148.152 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Path_11" data-name="Path 11"
                                                        d="M178.737,318.212h2.536a3.56,3.56,0,0,0,2.612-1.076A3.737,3.737,0,0,0,185,314.5v-8.9a3.745,3.745,0,0,0-3.729-3.729h-.713v-1.426h.713a4.947,4.947,0,0,1,2.585.7,5.332,5.332,0,0,1,1.872,1.864,4.939,4.939,0,0,1,.7,2.591v8.884a4.954,4.954,0,0,1-.7,2.585,5.316,5.316,0,0,1-1.872,1.871,4.953,4.953,0,0,1-2.585.7h-2.536Z"
                                                        transform="translate(-149.85 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Path_12" data-name="Path 12"
                                                        d="M208.618,305.6v4.771a4.951,4.951,0,0,1-.7,2.584,5.312,5.312,0,0,1-1.872,1.872,4.949,4.949,0,0,1-2.584.7h-1.823a4.951,4.951,0,0,1-2.585-.7,5.312,5.312,0,0,1-1.872-1.872,4.951,4.951,0,0,1-.7-2.584V305.6a4.94,4.94,0,0,1,.7-2.591,5.327,5.327,0,0,1,1.872-1.864,4.946,4.946,0,0,1,2.585-.7h1.823a4.944,4.944,0,0,1,2.584.7,5.327,5.327,0,0,1,1.872,1.864A4.94,4.94,0,0,1,208.618,305.6Zm-1.426,4.771V305.6a3.746,3.746,0,0,0-3.729-3.729h-1.823a3.746,3.746,0,0,0-3.73,3.729v4.771a3.746,3.746,0,0,0,3.73,3.729h1.823a3.746,3.746,0,0,0,3.729-3.729Z"
                                                        transform="translate(-156.616 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Path_13" data-name="Path 13"
                                                        d="M233.545,305.6v4.771a4.951,4.951,0,0,1-.7,2.584,5.315,5.315,0,0,1-1.871,1.872,4.952,4.952,0,0,1-2.585.7h-1.823a4.953,4.953,0,0,1-2.585-.7,5.317,5.317,0,0,1-1.872-1.872,4.95,4.95,0,0,1-.7-2.584V305.6a4.94,4.94,0,0,1,.7-2.591,5.332,5.332,0,0,1,1.872-1.864,4.947,4.947,0,0,1,2.585-.7h1.823a4.947,4.947,0,0,1,2.585.7,5.33,5.33,0,0,1,1.871,1.864A4.94,4.94,0,0,1,233.545,305.6Zm-1.426,4.771V305.6a3.746,3.746,0,0,0-3.729-3.729h-1.823a3.746,3.746,0,0,0-3.73,3.729v4.771a3.746,3.746,0,0,0,3.73,3.729h1.823a3.746,3.746,0,0,0,3.729-3.729Z"
                                                        transform="translate(-166.119 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Path_14" data-name="Path 14"
                                                        d="M246.337,315.525V305.6a4.94,4.94,0,0,1,.7-2.591,5.33,5.33,0,0,1,1.871-1.864,4.947,4.947,0,0,1,2.585-.7h1.823a4.947,4.947,0,0,1,2.585.7,5.33,5.33,0,0,1,1.871,1.864,4.471,4.471,0,0,1,.7,2.317h-1.426a3.3,3.3,0,0,0-1.1-2.357,3.589,3.589,0,0,0-2.632-1.1h-1.823a3.746,3.746,0,0,0-3.729,3.729v9.926Z"
                                                        transform="translate(-175.622 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Path_15" data-name="Path 15"
                                                        d="M271.264,300.444h1.426v15.081h-1.426Z"
                                                        transform="translate(-185.125 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                </g>
                                                <circle id="Ellipse_4" data-name="Ellipse 4" cx="1.39"
                                                    cy="1.39" r="1.39"
                                                    transform="translate(157.329 292.144)" fill="#662683"
                                                    stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                <circle id="Ellipse_5" data-name="Ellipse 5" cx="1.39"
                                                    cy="1.39" r="1.39"
                                                    transform="translate(217.368 292.144)" fill="#662683"
                                                    stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                <circle id="Ellipse_6" data-name="Ellipse 6" cx="1.39"
                                                    cy="1.39" r="1.39"
                                                    transform="translate(166.594 292.144)" fill="#662683"
                                                    stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                            </g>
                                        </g>
                                        <g id="Group_124" data-name="Group 124"
                                            transform="translate(-1684.139 -25.325)">
                                            <g id="Group_8-2" data-name="Group 8"
                                                transform="translate(1703.394 -24.048)">
                                                <path id="Path_16-2" data-name="Path 16"
                                                    d="M37.715,0A37.715,37.715,0,1,1,0,37.715,37.715,37.715,0,0,1,37.715,0Z"
                                                    transform="translate(83.954 49.373)" fill="#662683" />
                                                <g id="Group_7-2" data-name="Group 7"
                                                    transform="translate(99.474 72.536)">
                                                    <path id="Path_5-2" data-name="Path 5"
                                                        d="M210.062,152.174V127.159c.138-3.716-3.844-5.171-6.259-1.552l-5.337,7.647c-2.252,2.987-4.6,3.1-6.89,0l-6.336-8.266c-1.716-2.343-5.4-1.659-5.4,2.134v10.441"
                                                        transform="translate(-165.044 -123.239)" fill="none"
                                                        stroke="#fff" stroke-miterlimit="10" stroke-width="4" />
                                                    <path id="Path_6-2" data-name="Path 6"
                                                        d="M224.465,125.563a1.467,1.467,0,1,1,1.147-.555A1.463,1.463,0,0,1,224.465,125.563Z"
                                                        transform="translate(-194.558 -122.633)" fill="#fff" />
                                                    <path id="Path_7-2" data-name="Path 7"
                                                        d="M133.045,125.168v25.015c-.138,3.716,3.844,5.171,6.26,1.552l5.337-7.647c2.252-2.987,4.6-3.1,6.89,0l6.336,8.266c1.716,2.343,5.4,1.659,5.4-2.134V139.779"
                                                        transform="translate(-133.041 -124.367)" fill="none"
                                                        stroke="#fff" stroke-miterlimit="10" stroke-width="4" />
                                                    <path id="Path_8-2" data-name="Path 8"
                                                        d="M177.677,207.418a1.467,1.467,0,1,1-1.147.555A1.462,1.462,0,0,1,177.677,207.418Z"
                                                        transform="translate(-162.563 -180.612)" fill="#fff" />
                                                </g>
                                            </g>
                                            <g id="Group_10-2" data-name="Group 10"
                                                transform="translate(1552.087 -241.27)">
                                                <g id="Group_9-2" data-name="Group 9"
                                                    transform="translate(132.052 297.28)">
                                                    <path id="Path_9-2" data-name="Path 9"
                                                        d="M142.76,315.525V305.6a3.747,3.747,0,0,0-3.73-3.729h-1.823a3.746,3.746,0,0,0-3.729,3.729v9.926h-1.426V305.6a4.94,4.94,0,0,1,.7-2.591,5.33,5.33,0,0,1,1.871-1.864,4.947,4.947,0,0,1,2.585-.7h1.823a5,5,0,0,1,2.392.59,6.14,6.14,0,0,1,2.051,1.919,6.126,6.126,0,0,1,2.049-1.919,5.005,5.005,0,0,1,2.392-.59h1.823a4.95,4.95,0,0,1,2.585.7,5.328,5.328,0,0,1,1.871,1.864,4.929,4.929,0,0,1,.7,2.591v9.926h-1.426V305.6a3.744,3.744,0,0,0-3.729-3.729h-1.823a3.745,3.745,0,0,0-3.729,3.729v9.926Z"
                                                        transform="translate(-132.052 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Path_10-2" data-name="Path 10"
                                                        d="M174.284,300.444h1.426v15.081h-1.426Z"
                                                        transform="translate(-148.152 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Path_11-2" data-name="Path 11"
                                                        d="M178.737,318.212h2.536a3.56,3.56,0,0,0,2.612-1.076A3.737,3.737,0,0,0,185,314.5v-8.9a3.745,3.745,0,0,0-3.729-3.729h-.713v-1.426h.713a4.947,4.947,0,0,1,2.585.7,5.332,5.332,0,0,1,1.872,1.864,4.939,4.939,0,0,1,.7,2.591v8.884a4.954,4.954,0,0,1-.7,2.585,5.316,5.316,0,0,1-1.872,1.871,4.953,4.953,0,0,1-2.585.7h-2.536Z"
                                                        transform="translate(-149.85 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Path_12-2" data-name="Path 12"
                                                        d="M208.618,305.6v4.771a4.951,4.951,0,0,1-.7,2.584,5.312,5.312,0,0,1-1.872,1.872,4.949,4.949,0,0,1-2.584.7h-1.823a4.951,4.951,0,0,1-2.585-.7,5.312,5.312,0,0,1-1.872-1.872,4.951,4.951,0,0,1-.7-2.584V305.6a4.94,4.94,0,0,1,.7-2.591,5.327,5.327,0,0,1,1.872-1.864,4.946,4.946,0,0,1,2.585-.7h1.823a4.944,4.944,0,0,1,2.584.7,5.327,5.327,0,0,1,1.872,1.864A4.94,4.94,0,0,1,208.618,305.6Zm-1.426,4.771V305.6a3.746,3.746,0,0,0-3.729-3.729h-1.823a3.746,3.746,0,0,0-3.73,3.729v4.771a3.746,3.746,0,0,0,3.73,3.729h1.823a3.746,3.746,0,0,0,3.729-3.729Z"
                                                        transform="translate(-156.616 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Path_13-2" data-name="Path 13"
                                                        d="M233.545,305.6v4.771a4.951,4.951,0,0,1-.7,2.584,5.315,5.315,0,0,1-1.871,1.872,4.952,4.952,0,0,1-2.585.7h-1.823a4.953,4.953,0,0,1-2.585-.7,5.317,5.317,0,0,1-1.872-1.872,4.95,4.95,0,0,1-.7-2.584V305.6a4.94,4.94,0,0,1,.7-2.591,5.332,5.332,0,0,1,1.872-1.864,4.947,4.947,0,0,1,2.585-.7h1.823a4.947,4.947,0,0,1,2.585.7,5.33,5.33,0,0,1,1.871,1.864A4.94,4.94,0,0,1,233.545,305.6Zm-1.426,4.771V305.6a3.746,3.746,0,0,0-3.729-3.729h-1.823a3.746,3.746,0,0,0-3.73,3.729v4.771a3.746,3.746,0,0,0,3.73,3.729h1.823a3.746,3.746,0,0,0,3.729-3.729Z"
                                                        transform="translate(-166.119 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Path_14-2" data-name="Path 14"
                                                        d="M246.337,315.525V305.6a4.94,4.94,0,0,1,.7-2.591,5.33,5.33,0,0,1,1.871-1.864,4.947,4.947,0,0,1,2.585-.7h1.823a4.947,4.947,0,0,1,2.585.7,5.33,5.33,0,0,1,1.871,1.864,4.471,4.471,0,0,1,.7,2.317h-1.426a3.3,3.3,0,0,0-1.1-2.357,3.589,3.589,0,0,0-2.632-1.1h-1.823a3.746,3.746,0,0,0-3.729,3.729v9.926Z"
                                                        transform="translate(-175.622 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Path_15-2" data-name="Path 15"
                                                        d="M271.264,300.444h1.426v15.081h-1.426Z"
                                                        transform="translate(-185.125 -300.444)" fill="#662683"
                                                        stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                </g>
                                                <circle id="Ellipse_4-2" data-name="Ellipse 4" cx="1.39"
                                                    cy="1.39" r="1.39"
                                                    transform="translate(157.329 292.144)" fill="#662683"
                                                    stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                <circle id="Ellipse_5-2" data-name="Ellipse 5" cx="1.39"
                                                    cy="1.39" r="1.39"
                                                    transform="translate(217.368 292.144)" fill="#662683"
                                                    stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                                <circle id="Ellipse_6-2" data-name="Ellipse 6" cx="1.39"
                                                    cy="1.39" r="1.39"
                                                    transform="translate(166.594 292.144)" fill="#662683"
                                                    stroke="#662683" stroke-miterlimit="10" stroke-width="2" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="register_pop" class="pop" style="display: none">
    <div>
        <div>
            <div>
                <div class="pop-content user-pop">
                    <div class="poptop">
                        <div class="poplogo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="107.687" height="45.048"
                                viewBox="0 0 107.687 45.048">
                                <g id="Group_12" data-name="Group 12" transform="translate(1 0)">
                                    <g id="Group_8" data-name="Group 8" transform="translate(61.639 0)">
                                        <path id="Path_16" data-name="Path 16"
                                            d="M22.524,0A22.524,22.524,0,1,1,0,22.524,22.524,22.524,0,0,1,22.524,0Z"
                                            transform="translate(0 0)" fill="#662683"></path>
                                        <g id="Group_7" data-name="Group 7" transform="translate(9.269 13.833)">
                                            <path id="Path_5" data-name="Path 5"
                                                d="M197.889,140.632v-14.94c.082-2.219-2.3-3.088-3.738-.927l-3.187,4.567c-1.345,1.784-2.744,1.85-4.115,0l-3.784-4.937c-1.025-1.4-3.225-.991-3.225,1.274v6.236"
                                                transform="translate(-171.003 -123.352)" fill="none"
                                                stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_6" data-name="Path 6"
                                                d="M223.875,124.383a.876.876,0,1,1,.685-.331A.874.874,0,0,1,223.875,124.383Z"
                                                transform="translate(-206.014 -122.633)" fill="#fff"
                                                stroke="#fff" stroke-width="2"></path>
                                            <path id="Path_7" data-name="Path 7"
                                                d="M133.043,125.168v14.94c-.082,2.219,2.3,3.088,3.738.927l3.187-4.567c1.345-1.784,2.744-1.85,4.115,0l3.784,4.937c1.025,1.4,3.225.991,3.225-1.274v-6.236"
                                                transform="translate(-133.041 -124.689)" fill="none"
                                                stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_8" data-name="Path 8"
                                                d="M177.087,207.418a.876.876,0,1,1-.685.331A.873.873,0,0,1,177.087,207.418Z"
                                                transform="translate(-168.06 -191.409)" fill="#fff" stroke="#fff"
                                                stroke-width="2"></path>
                                        </g>
                                    </g>
                                    <g id="Group_10" data-name="Group 10" transform="translate(0 15.259)">
                                        <g id="Group_9" data-name="Group 9" transform="translate(0 3.067)">
                                            <path id="Path_9" data-name="Path 9"
                                                d="M138.447,309.451v-5.928a2.238,2.238,0,0,0-2.228-2.227h-1.089a2.237,2.237,0,0,0-2.227,2.227v5.928h-.852v-5.928a2.95,2.95,0,0,1,.418-1.547,3.183,3.183,0,0,1,1.117-1.113,2.955,2.955,0,0,1,1.544-.418h1.089a2.988,2.988,0,0,1,1.429.352,3.668,3.668,0,0,1,1.225,1.146A3.659,3.659,0,0,1,140.1,300.8a2.989,2.989,0,0,1,1.429-.352h1.089a2.957,2.957,0,0,1,1.544.418,3.182,3.182,0,0,1,1.117,1.113,2.944,2.944,0,0,1,.418,1.547v5.928h-.852v-5.928a2.236,2.236,0,0,0-2.227-2.227h-1.089a2.236,2.236,0,0,0-2.227,2.227v5.928Z"
                                                transform="translate(-132.052 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_10" data-name="Path 10"
                                                d="M174.284,300.444h.851v9.007h-.851Z"
                                                transform="translate(-158.678 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_11" data-name="Path 11"
                                                d="M178.737,311.056h1.515a2.126,2.126,0,0,0,1.56-.643,2.232,2.232,0,0,0,.667-1.576v-5.314a2.236,2.236,0,0,0-2.227-2.227h-.426v-.852h.426a2.955,2.955,0,0,1,1.544.418,3.184,3.184,0,0,1,1.118,1.113,2.95,2.95,0,0,1,.417,1.547v5.306a2.959,2.959,0,0,1-.417,1.544,3.175,3.175,0,0,1-1.118,1.117,2.958,2.958,0,0,1-1.544.418h-1.515Z"
                                                transform="translate(-161.485 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_12" data-name="Path 12"
                                                d="M203.731,303.523v2.849a2.956,2.956,0,0,1-.418,1.543,3.172,3.172,0,0,1-1.118,1.118,2.956,2.956,0,0,1-1.543.418h-1.089a2.957,2.957,0,0,1-1.544-.418,3.173,3.173,0,0,1-1.118-1.118,2.956,2.956,0,0,1-.418-1.543v-2.849a2.95,2.95,0,0,1,.418-1.547,3.181,3.181,0,0,1,1.118-1.113,2.954,2.954,0,0,1,1.544-.418h1.089a2.953,2.953,0,0,1,1.543.418,3.181,3.181,0,0,1,1.118,1.113A2.95,2.95,0,0,1,203.731,303.523Zm-.851,2.849v-2.849a2.237,2.237,0,0,0-2.227-2.227h-1.089a2.237,2.237,0,0,0-2.228,2.227v2.849a2.237,2.237,0,0,0,2.228,2.227h1.089a2.237,2.237,0,0,0,2.227-2.227Z"
                                                transform="translate(-172.674 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_13" data-name="Path 13"
                                                d="M228.658,303.523v2.849a2.957,2.957,0,0,1-.418,1.543,3.174,3.174,0,0,1-1.117,1.118,2.958,2.958,0,0,1-1.544.418H224.49a2.958,2.958,0,0,1-1.544-.418,3.175,3.175,0,0,1-1.118-1.118,2.956,2.956,0,0,1-.418-1.543v-2.849a2.95,2.95,0,0,1,.418-1.547,3.184,3.184,0,0,1,1.118-1.113,2.955,2.955,0,0,1,1.544-.418h1.089a2.955,2.955,0,0,1,1.544.418,3.183,3.183,0,0,1,1.117,1.113A2.95,2.95,0,0,1,228.658,303.523Zm-.852,2.849v-2.849a2.237,2.237,0,0,0-2.227-2.227H224.49a2.237,2.237,0,0,0-2.228,2.227v2.849a2.237,2.237,0,0,0,2.228,2.227h1.089a2.237,2.237,0,0,0,2.227-2.227Z"
                                                transform="translate(-188.389 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_14" data-name="Path 14"
                                                d="M246.337,309.451v-5.928a2.95,2.95,0,0,1,.418-1.547,3.183,3.183,0,0,1,1.117-1.113,2.955,2.955,0,0,1,1.544-.418H250.5a2.955,2.955,0,0,1,1.544.418,3.183,3.183,0,0,1,1.118,1.113,2.67,2.67,0,0,1,.418,1.384h-.852a1.97,1.97,0,0,0-.655-1.408,2.143,2.143,0,0,0-1.572-.655h-1.089a2.237,2.237,0,0,0-2.227,2.227v5.928Z"
                                                transform="translate(-204.104 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_15" data-name="Path 15"
                                                d="M271.264,300.444h.851v9.007h-.851Z"
                                                transform="translate(-219.82 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                        </g>
                                        <circle id="Ellipse_4" data-name="Ellipse 4" cx="0.83" cy="0.83"
                                            r="0.83" transform="translate(15.096)" fill="#662683"
                                            stroke="#662683" stroke-miterlimit="10" stroke-width="2"></circle>
                                        <circle id="Ellipse_5" data-name="Ellipse 5" cx="0.83" cy="0.83"
                                            r="0.83" transform="translate(50.953)" fill="#662683"
                                            stroke="#662683" stroke-miterlimit="10" stroke-width="2"></circle>
                                        <circle id="Ellipse_6" data-name="Ellipse 6" cx="0.83" cy="0.83"
                                            r="0.83" transform="translate(20.629)" fill="#662683"
                                            stroke="#662683" stroke-miterlimit="10" stroke-width="2"></circle>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="popmin-title">
                            <h3>???????? / ?????? ??????</h3>
                        </div>
                        <div class="pop-close">
                            <span></span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.747" height="14.747"
                                    viewBox="0 0 14.747 14.747">
                                    <g id="Group_351" data-name="Group 351"
                                        transform="translate(-369.793 -1605.293)">
                                        <line id="Line_41" data-name="Line 41" x1="13.333" y2="13.333"
                                            transform="translate(370.5 1606)" fill="none" stroke="#000"
                                            stroke-width="2"></line>
                                        <line id="Line_42" data-name="Line 42" x2="13.333" y2="13.333"
                                            transform="translate(370.5 1606)" fill="none" stroke="#000"
                                            stroke-width="2"></line>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="popmain">
                        <h4 class="please v2">???????? ?????????? ?????????? ?????? ???? ???????? ????????</h4>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <div class="top98">
                                            <input class="along" type="tell" id="mobile"
                                                placeholder=" ?????????? ?????????? *  ">
                                            <span class="plus98">98+</span>
                                        </div>
                                        <br>
                                        {{-- <ul id="code_box" class="square v2" style="display: none">
                                            <li>
                                                <input class="square1 v2" type="text" pattern="[0-9]" value="" maxlength="1">
                                                <input class="square1 v2" type="text" pattern="[0-9]" value="" maxlength="1">
                                                <input class="square1 v2" type="text" pattern="[0-9]" value="" maxlength="1">
                                                <input class="square1 v2" type="text" pattern="[0-9]" value="" maxlength="1">
                                                <input class="square1 v2" type="text" pattern="[0-9]" value="" maxlength="1">
                                                <input class="square1 v2" type="text" pattern="[0-9]" value="" maxlength="1">
                                            </li>
                                        </ul> --}}

                                        <ul class="square" id="code_box" style="display: none">
                                            <li>
                                                <input class="square1" type="text" pattern="[0-9]" value=""
                                                    maxlength="1">
                                                <input class="square1" type="text" pattern="[0-9]" value=""
                                                    maxlength="1">
                                                <input class="square1" type="text" pattern="[0-9]" value=""
                                                    maxlength="1">
                                                <input class="square1" type="text" pattern="[0-9]" value=""
                                                    maxlength="1">
                                            </li>
                                        </ul>





                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <div class="popbottom">
                                            <span class="poprecord bbt" id="send_code">???????????? ???? ??????????</span>
                                            <span class="poprecord bbt" id="check_code" style="display: none"> ??????????
                                                ????</span>
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


<div id="get_user_info" class="pop">
    <div>
        <div>
            <div>
                <div class="pop-content user-pop">
                    <div class="poptop">
                        <div class="poplogo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="107.687" height="45.048"
                                viewBox="0 0 107.687 45.048">
                                <g id="Group_12" data-name="Group 12" transform="translate(1 0)">
                                    <g id="Group_8" data-name="Group 8" transform="translate(61.639 0)">
                                        <path id="Path_16" data-name="Path 16"
                                            d="M22.524,0A22.524,22.524,0,1,1,0,22.524,22.524,22.524,0,0,1,22.524,0Z"
                                            transform="translate(0 0)" fill="#662683"></path>
                                        <g id="Group_7" data-name="Group 7" transform="translate(9.269 13.833)">
                                            <path id="Path_5" data-name="Path 5"
                                                d="M197.889,140.632v-14.94c.082-2.219-2.3-3.088-3.738-.927l-3.187,4.567c-1.345,1.784-2.744,1.85-4.115,0l-3.784-4.937c-1.025-1.4-3.225-.991-3.225,1.274v6.236"
                                                transform="translate(-171.003 -123.352)" fill="none"
                                                stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_6" data-name="Path 6"
                                                d="M223.875,124.383a.876.876,0,1,1,.685-.331A.874.874,0,0,1,223.875,124.383Z"
                                                transform="translate(-206.014 -122.633)" fill="#fff"
                                                stroke="#fff" stroke-width="2"></path>
                                            <path id="Path_7" data-name="Path 7"
                                                d="M133.043,125.168v14.94c-.082,2.219,2.3,3.088,3.738.927l3.187-4.567c1.345-1.784,2.744-1.85,4.115,0l3.784,4.937c1.025,1.4,3.225.991,3.225-1.274v-6.236"
                                                transform="translate(-133.041 -124.689)" fill="none"
                                                stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_8" data-name="Path 8"
                                                d="M177.087,207.418a.876.876,0,1,1-.685.331A.873.873,0,0,1,177.087,207.418Z"
                                                transform="translate(-168.06 -191.409)" fill="#fff" stroke="#fff"
                                                stroke-width="2"></path>
                                        </g>
                                    </g>
                                    <g id="Group_10" data-name="Group 10" transform="translate(0 15.259)">
                                        <g id="Group_9" data-name="Group 9" transform="translate(0 3.067)">
                                            <path id="Path_9" data-name="Path 9"
                                                d="M138.447,309.451v-5.928a2.238,2.238,0,0,0-2.228-2.227h-1.089a2.237,2.237,0,0,0-2.227,2.227v5.928h-.852v-5.928a2.95,2.95,0,0,1,.418-1.547,3.183,3.183,0,0,1,1.117-1.113,2.955,2.955,0,0,1,1.544-.418h1.089a2.988,2.988,0,0,1,1.429.352,3.668,3.668,0,0,1,1.225,1.146A3.659,3.659,0,0,1,140.1,300.8a2.989,2.989,0,0,1,1.429-.352h1.089a2.957,2.957,0,0,1,1.544.418,3.182,3.182,0,0,1,1.117,1.113,2.944,2.944,0,0,1,.418,1.547v5.928h-.852v-5.928a2.236,2.236,0,0,0-2.227-2.227h-1.089a2.236,2.236,0,0,0-2.227,2.227v5.928Z"
                                                transform="translate(-132.052 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_10" data-name="Path 10"
                                                d="M174.284,300.444h.851v9.007h-.851Z"
                                                transform="translate(-158.678 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_11" data-name="Path 11"
                                                d="M178.737,311.056h1.515a2.126,2.126,0,0,0,1.56-.643,2.232,2.232,0,0,0,.667-1.576v-5.314a2.236,2.236,0,0,0-2.227-2.227h-.426v-.852h.426a2.955,2.955,0,0,1,1.544.418,3.184,3.184,0,0,1,1.118,1.113,2.95,2.95,0,0,1,.417,1.547v5.306a2.959,2.959,0,0,1-.417,1.544,3.175,3.175,0,0,1-1.118,1.117,2.958,2.958,0,0,1-1.544.418h-1.515Z"
                                                transform="translate(-161.485 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_12" data-name="Path 12"
                                                d="M203.731,303.523v2.849a2.956,2.956,0,0,1-.418,1.543,3.172,3.172,0,0,1-1.118,1.118,2.956,2.956,0,0,1-1.543.418h-1.089a2.957,2.957,0,0,1-1.544-.418,3.173,3.173,0,0,1-1.118-1.118,2.956,2.956,0,0,1-.418-1.543v-2.849a2.95,2.95,0,0,1,.418-1.547,3.181,3.181,0,0,1,1.118-1.113,2.954,2.954,0,0,1,1.544-.418h1.089a2.953,2.953,0,0,1,1.543.418,3.181,3.181,0,0,1,1.118,1.113A2.95,2.95,0,0,1,203.731,303.523Zm-.851,2.849v-2.849a2.237,2.237,0,0,0-2.227-2.227h-1.089a2.237,2.237,0,0,0-2.228,2.227v2.849a2.237,2.237,0,0,0,2.228,2.227h1.089a2.237,2.237,0,0,0,2.227-2.227Z"
                                                transform="translate(-172.674 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_13" data-name="Path 13"
                                                d="M228.658,303.523v2.849a2.957,2.957,0,0,1-.418,1.543,3.174,3.174,0,0,1-1.117,1.118,2.958,2.958,0,0,1-1.544.418H224.49a2.958,2.958,0,0,1-1.544-.418,3.175,3.175,0,0,1-1.118-1.118,2.956,2.956,0,0,1-.418-1.543v-2.849a2.95,2.95,0,0,1,.418-1.547,3.184,3.184,0,0,1,1.118-1.113,2.955,2.955,0,0,1,1.544-.418h1.089a2.955,2.955,0,0,1,1.544.418,3.183,3.183,0,0,1,1.117,1.113A2.95,2.95,0,0,1,228.658,303.523Zm-.852,2.849v-2.849a2.237,2.237,0,0,0-2.227-2.227H224.49a2.237,2.237,0,0,0-2.228,2.227v2.849a2.237,2.237,0,0,0,2.228,2.227h1.089a2.237,2.237,0,0,0,2.227-2.227Z"
                                                transform="translate(-188.389 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_14" data-name="Path 14"
                                                d="M246.337,309.451v-5.928a2.95,2.95,0,0,1,.418-1.547,3.183,3.183,0,0,1,1.117-1.113,2.955,2.955,0,0,1,1.544-.418H250.5a2.955,2.955,0,0,1,1.544.418,3.183,3.183,0,0,1,1.118,1.113,2.67,2.67,0,0,1,.418,1.384h-.852a1.97,1.97,0,0,0-.655-1.408,2.143,2.143,0,0,0-1.572-.655h-1.089a2.237,2.237,0,0,0-2.227,2.227v5.928Z"
                                                transform="translate(-204.104 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_15" data-name="Path 15"
                                                d="M271.264,300.444h.851v9.007h-.851Z"
                                                transform="translate(-219.82 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                        </g>
                                        <circle id="Ellipse_4" data-name="Ellipse 4" cx="0.83" cy="0.83"
                                            r="0.83" transform="translate(15.096)" fill="#662683"
                                            stroke="#662683" stroke-miterlimit="10" stroke-width="2"></circle>
                                        <circle id="Ellipse_5" data-name="Ellipse 5" cx="0.83" cy="0.83"
                                            r="0.83" transform="translate(50.953)" fill="#662683"
                                            stroke="#662683" stroke-miterlimit="10" stroke-width="2"></circle>
                                        <circle id="Ellipse_6" data-name="Ellipse 6" cx="0.83" cy="0.83"
                                            r="0.83" transform="translate(20.629)" fill="#662683"
                                            stroke="#662683" stroke-miterlimit="10" stroke-width="2"></circle>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="popmin-title">
                            <h3>?????????? ???????? ????????????</h3>
                        </div>
                        <div class="pop-close">
                            <span>????????</span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.747" height="14.747"
                                    viewBox="0 0 14.747 14.747">
                                    <g id="Group_351" data-name="Group 351"
                                        transform="translate(-369.793 -1605.293)">
                                        <line id="Line_41" data-name="Line 41" x1="13.333" y2="13.333"
                                            transform="translate(370.5 1606)" fill="none" stroke="#000"
                                            stroke-width="2"></line>
                                        <line id="Line_42" data-name="Line 42" x2="13.333" y2="13.333"
                                            transform="translate(370.5 1606)" fill="none" stroke="#000"
                                            stroke-width="2"></line>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="popmain">
                        <h4 class="please v2">???????? ?????????????? ?????? ???? ???????? ????????</h4>
                        <form action="{{ route('user.basic.info.update') }}" method="post" id="signupForm">
                            <div class="row">
                                <div class="col-lg-6 col-xsm-12">
                                    <div>
                                        <input class="popinput v2" type="text" id="name" name="name"
                                            placeholder="  ?????? *">
                                        <input class="popinput v2" type="text" id="famiy" name="family"
                                            placeholder="  ?????? ???????????????? *">
                                        <select class="popinput v2" name="gender" id="gender" required>
                                            <option value="">??????????</option>
                                            <option value="male">??????</option>
                                            <option value="female">????</option>
                                        </select>
                                        <input class="popinput persian v2" id="b_date" type="text"
                                            name="b_date" value="" placeholder="  ?????????? ???????? *">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xsm-12">
                                    <div>
                                        <label for="">?????????? ???????? ????????????</label>
                                        <div class="avatar-pop">
                                            <label for="avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15.318"
                                                    height="12.359" viewBox="0 0 15.318 12.359">
                                                    <g id="Group_907" data-name="Group 907"
                                                        transform="translate(0 0)">
                                                        <path id="Path_239" data-name="Path 239"
                                                            d="M414.116,71.071V70.8a.555.555,0,0,0-.555-.555h-1.374a.555.555,0,0,0-.555.555v.269h-.818l-.355-1.136a.915.915,0,0,0-.873-.642h-4.129a.915.915,0,0,0-.873.642l-.355,1.136h-3.218a1.155,1.155,0,0,0-1.155,1.155V79.71a1.155,1.155,0,0,0,1.155,1.155h3.327a4.763,4.763,0,1,1,6.368,0h3.314a1.155,1.155,0,0,0,1.155-1.155V72.221A1.154,1.154,0,0,0,414.116,71.071Zm-8.952-.852a.4.4,0,0,1,.379-.279H409.5a.4.4,0,0,1,.379.279h0a.576.576,0,0,1-.55.748h-3.614A.576.576,0,0,1,405.164,70.219Zm-2.1,2.773h-1.978v-.966h1.978Z"
                                                            transform="translate(-399.856 -69.288)" fill="#fff">
                                                        </path>
                                                        <path id="Path_240" data-name="Path 240"
                                                            d="M461.165,137.681a4.32,4.32,0,1,0-2.48.783A4.318,4.318,0,0,0,461.165,137.681Zm-5.733-3.542a3.253,3.253,0,1,1,3.253,3.253A3.253,3.253,0,0,1,455.432,134.139Z"
                                                            transform="translate(-451.019 -126.104)" fill="#fff">
                                                        </path>
                                                        <path id="Path_241" data-name="Path 241"
                                                            d="M482.813,161.017a2.749,2.749,0,1,0-2.749-2.749A2.749,2.749,0,0,0,482.813,161.017Zm1.019-4.6a.371.371,0,1,1-.371.371A.371.371,0,0,1,483.833,156.414Zm-1.019.618a1.236,1.236,0,1,1-1.236,1.236A1.236,1.236,0,0,1,482.813,157.032Z"
                                                            transform="translate(-475.148 -150.233)" fill="#fff">
                                                        </path>
                                                    </g>
                                                </svg>
                                                <span>???????????? ??????????</span>

                                            </label>
                                            <input type="file" id="avatar" name="avatar" accept="image/*"
                                                class="img_pre">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xsm-12">
                                    <div>
                                        <input class="popinput v2" type="text" name="email"
                                            placeholder=" ?????????? *">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xsm-12">
                                    <div>
                                        <select class="popinput v2" name="province_id" id="province" required>
                                            <option value="">?????????? </option>
                                            @foreach (App\Models\Province::all() as $province)
                                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xsm-12">
                                    <div>
                                        <select class="popinput v2" name="city_id" id="city" required>
                                            <option value="">?????? </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <div class="popbottom v2">
                                            <span id="send_use_basic_info" class="poprecord bbt">??????</span>
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




<div id="be_guid_pop_1" class="pop" style="display: none;">
    <div>
        <div>
            <div>
                <div class="pop-content user-pop">
                    <div class="poptop">
                        <div class="poplogo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="107.687" height="45.048"
                                viewBox="0 0 107.687 45.048">
                                <g id="Group_12" data-name="Group 12" transform="translate(1 0)">
                                    <g id="Group_8" data-name="Group 8" transform="translate(61.639 0)">
                                        <path id="Path_16" data-name="Path 16"
                                            d="M22.524,0A22.524,22.524,0,1,1,0,22.524,22.524,22.524,0,0,1,22.524,0Z"
                                            transform="translate(0 0)" fill="#662683"></path>
                                        <g id="Group_7" data-name="Group 7" transform="translate(9.269 13.833)">
                                            <path id="Path_5" data-name="Path 5"
                                                d="M197.889,140.632v-14.94c.082-2.219-2.3-3.088-3.738-.927l-3.187,4.567c-1.345,1.784-2.744,1.85-4.115,0l-3.784-4.937c-1.025-1.4-3.225-.991-3.225,1.274v6.236"
                                                transform="translate(-171.003 -123.352)" fill="none"
                                                stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_6" data-name="Path 6"
                                                d="M223.875,124.383a.876.876,0,1,1,.685-.331A.874.874,0,0,1,223.875,124.383Z"
                                                transform="translate(-206.014 -122.633)" fill="#fff"
                                                stroke="#fff" stroke-width="2"></path>
                                            <path id="Path_7" data-name="Path 7"
                                                d="M133.043,125.168v14.94c-.082,2.219,2.3,3.088,3.738.927l3.187-4.567c1.345-1.784,2.744-1.85,4.115,0l3.784,4.937c1.025,1.4,3.225.991,3.225-1.274v-6.236"
                                                transform="translate(-133.041 -124.689)" fill="none"
                                                stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_8" data-name="Path 8"
                                                d="M177.087,207.418a.876.876,0,1,1-.685.331A.873.873,0,0,1,177.087,207.418Z"
                                                transform="translate(-168.06 -191.409)" fill="#fff"
                                                stroke="#fff" stroke-width="2"></path>
                                        </g>
                                    </g>
                                    <g id="Group_10" data-name="Group 10" transform="translate(0 15.259)">
                                        <g id="Group_9" data-name="Group 9" transform="translate(0 3.067)">
                                            <path id="Path_9" data-name="Path 9"
                                                d="M138.447,309.451v-5.928a2.238,2.238,0,0,0-2.228-2.227h-1.089a2.237,2.237,0,0,0-2.227,2.227v5.928h-.852v-5.928a2.95,2.95,0,0,1,.418-1.547,3.183,3.183,0,0,1,1.117-1.113,2.955,2.955,0,0,1,1.544-.418h1.089a2.988,2.988,0,0,1,1.429.352,3.668,3.668,0,0,1,1.225,1.146A3.659,3.659,0,0,1,140.1,300.8a2.989,2.989,0,0,1,1.429-.352h1.089a2.957,2.957,0,0,1,1.544.418,3.182,3.182,0,0,1,1.117,1.113,2.944,2.944,0,0,1,.418,1.547v5.928h-.852v-5.928a2.236,2.236,0,0,0-2.227-2.227h-1.089a2.236,2.236,0,0,0-2.227,2.227v5.928Z"
                                                transform="translate(-132.052 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_10" data-name="Path 10"
                                                d="M174.284,300.444h.851v9.007h-.851Z"
                                                transform="translate(-158.678 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_11" data-name="Path 11"
                                                d="M178.737,311.056h1.515a2.126,2.126,0,0,0,1.56-.643,2.232,2.232,0,0,0,.667-1.576v-5.314a2.236,2.236,0,0,0-2.227-2.227h-.426v-.852h.426a2.955,2.955,0,0,1,1.544.418,3.184,3.184,0,0,1,1.118,1.113,2.95,2.95,0,0,1,.417,1.547v5.306a2.959,2.959,0,0,1-.417,1.544,3.175,3.175,0,0,1-1.118,1.117,2.958,2.958,0,0,1-1.544.418h-1.515Z"
                                                transform="translate(-161.485 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_12" data-name="Path 12"
                                                d="M203.731,303.523v2.849a2.956,2.956,0,0,1-.418,1.543,3.172,3.172,0,0,1-1.118,1.118,2.956,2.956,0,0,1-1.543.418h-1.089a2.957,2.957,0,0,1-1.544-.418,3.173,3.173,0,0,1-1.118-1.118,2.956,2.956,0,0,1-.418-1.543v-2.849a2.95,2.95,0,0,1,.418-1.547,3.181,3.181,0,0,1,1.118-1.113,2.954,2.954,0,0,1,1.544-.418h1.089a2.953,2.953,0,0,1,1.543.418,3.181,3.181,0,0,1,1.118,1.113A2.95,2.95,0,0,1,203.731,303.523Zm-.851,2.849v-2.849a2.237,2.237,0,0,0-2.227-2.227h-1.089a2.237,2.237,0,0,0-2.228,2.227v2.849a2.237,2.237,0,0,0,2.228,2.227h1.089a2.237,2.237,0,0,0,2.227-2.227Z"
                                                transform="translate(-172.674 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_13" data-name="Path 13"
                                                d="M228.658,303.523v2.849a2.957,2.957,0,0,1-.418,1.543,3.174,3.174,0,0,1-1.117,1.118,2.958,2.958,0,0,1-1.544.418H224.49a2.958,2.958,0,0,1-1.544-.418,3.175,3.175,0,0,1-1.118-1.118,2.956,2.956,0,0,1-.418-1.543v-2.849a2.95,2.95,0,0,1,.418-1.547,3.184,3.184,0,0,1,1.118-1.113,2.955,2.955,0,0,1,1.544-.418h1.089a2.955,2.955,0,0,1,1.544.418,3.183,3.183,0,0,1,1.117,1.113A2.95,2.95,0,0,1,228.658,303.523Zm-.852,2.849v-2.849a2.237,2.237,0,0,0-2.227-2.227H224.49a2.237,2.237,0,0,0-2.228,2.227v2.849a2.237,2.237,0,0,0,2.228,2.227h1.089a2.237,2.237,0,0,0,2.227-2.227Z"
                                                transform="translate(-188.389 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_14" data-name="Path 14"
                                                d="M246.337,309.451v-5.928a2.95,2.95,0,0,1,.418-1.547,3.183,3.183,0,0,1,1.117-1.113,2.955,2.955,0,0,1,1.544-.418H250.5a2.955,2.955,0,0,1,1.544.418,3.183,3.183,0,0,1,1.118,1.113,2.67,2.67,0,0,1,.418,1.384h-.852a1.97,1.97,0,0,0-.655-1.408,2.143,2.143,0,0,0-1.572-.655h-1.089a2.237,2.237,0,0,0-2.227,2.227v5.928Z"
                                                transform="translate(-204.104 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_15" data-name="Path 15"
                                                d="M271.264,300.444h.851v9.007h-.851Z"
                                                transform="translate(-219.82 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                        </g>
                                        <circle id="Ellipse_4" data-name="Ellipse 4" cx="0.83"
                                            cy="0.83" r="0.83" transform="translate(15.096)"
                                            fill="#662683" stroke="#662683" stroke-miterlimit="10"
                                            stroke-width="2"></circle>
                                        <circle id="Ellipse_5" data-name="Ellipse 5" cx="0.83"
                                            cy="0.83" r="0.83" transform="translate(50.953)"
                                            fill="#662683" stroke="#662683" stroke-miterlimit="10"
                                            stroke-width="2"></circle>
                                        <circle id="Ellipse_6" data-name="Ellipse 6" cx="0.83"
                                            cy="0.83" r="0.83" transform="translate(20.629)"
                                            fill="#662683" stroke="#662683" stroke-miterlimit="10"
                                            stroke-width="2"></circle>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="popmin-title">
                            <h3>?????????? ???????? ????????????</h3>
                        </div>
                        <div class="pop-close">
                            <span>????????</span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.747" height="14.747"
                                    viewBox="0 0 14.747 14.747">
                                    <g id="Group_351" data-name="Group 351"
                                        transform="translate(-369.793 -1605.293)">
                                        <line id="Line_41" data-name="Line 41" x1="13.333" y2="13.333"
                                            transform="translate(370.5 1606)" fill="none" stroke="#000"
                                            stroke-width="2"></line>
                                        <line id="Line_42" data-name="Line 42" x2="13.333" y2="13.333"
                                            transform="translate(370.5 1606)" fill="none" stroke="#000"
                                            stroke-width="2"></line>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="popmain">
                        <h4 class="please v2">???????? ???????? ???????????? ?????? ?????????????? ?????? ???? ?????????? ????????</h4>
                        <form action="{{ route('user.be.guid.form.1') }}" method="post" id="be_guid_form_1">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div>
                                        <input class="popinput " type="text" name="address"
                                            placeholder="  ???????? *">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xsm-12">
                                    <div>
                                        <input class="popinput" type="number" name="code"
                                            placeholder=" ???? ??????  *">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xsm-12">
                                    <div>
                                        <input class="popinput" type="number" name="shaba"
                                            placeholder="  ?????????? ?????? * ">
                                    </div>
                                </div>
                            </div>

                            <div class="pop-guide">
                                <div class="row">
                                    <div class="col-lg-7 col-xsm-12">
                                        <div>
                                            <div class="guide-text">
                                                <h5>?????? ???????????? ????????????</h5>
                                                <ol>
                                                    <li>???? ?????????? ?????? ???????? ???? ???????? ???????? .</li>
                                                    <li>?????? ?????????? ???? ???????????? ???????????? ???????????? ???????? .</li>
                                                    <li>???????? ?????? ???????? ???????? ???? ???????? ?? ?????? ?????? ???????? ???? ?????? ???????????? ??????????
                                                        ???????? .</li>
                                                    <li>?????? ???????? ?????????? ???????? ?? ... ???????? .</li>
                                                    <li>?????? ???????? ???????????? ???? 500 ???????? ???????? ???????? .</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-xsm-12">
                                        <div>
                                            <div class="avatar-pop">
                                                <label for="p_avatar">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.318"
                                                        height="12.359" viewBox="0 0 15.318 12.359">
                                                        <g id="Group_907" data-name="Group 907"
                                                            transform="translate(0 0)">
                                                            <path id="Path_239" data-name="Path 239"
                                                                d="M414.116,71.071V70.8a.555.555,0,0,0-.555-.555h-1.374a.555.555,0,0,0-.555.555v.269h-.818l-.355-1.136a.915.915,0,0,0-.873-.642h-4.129a.915.915,0,0,0-.873.642l-.355,1.136h-3.218a1.155,1.155,0,0,0-1.155,1.155V79.71a1.155,1.155,0,0,0,1.155,1.155h3.327a4.763,4.763,0,1,1,6.368,0h3.314a1.155,1.155,0,0,0,1.155-1.155V72.221A1.154,1.154,0,0,0,414.116,71.071Zm-8.952-.852a.4.4,0,0,1,.379-.279H409.5a.4.4,0,0,1,.379.279h0a.576.576,0,0,1-.55.748h-3.614A.576.576,0,0,1,405.164,70.219Zm-2.1,2.773h-1.978v-.966h1.978Z"
                                                                transform="translate(-399.856 -69.288)"
                                                                fill="#fff"></path>
                                                            <path id="Path_240" data-name="Path 240"
                                                                d="M461.165,137.681a4.32,4.32,0,1,0-2.48.783A4.318,4.318,0,0,0,461.165,137.681Zm-5.733-3.542a3.253,3.253,0,1,1,3.253,3.253A3.253,3.253,0,0,1,455.432,134.139Z"
                                                                transform="translate(-451.019 -126.104)"
                                                                fill="#fff"></path>
                                                            <path id="Path_241" data-name="Path 241"
                                                                d="M482.813,161.017a2.749,2.749,0,1,0-2.749-2.749A2.749,2.749,0,0,0,482.813,161.017Zm1.019-4.6a.371.371,0,1,1-.371.371A.371.371,0,0,1,483.833,156.414Zm-1.019.618a1.236,1.236,0,1,1-1.236,1.236A1.236,1.236,0,0,1,482.813,157.032Z"
                                                                transform="translate(-475.148 -150.233)"
                                                                fill="#fff"></path>
                                                        </g>
                                                    </svg>
                                                    <span>???????????? ??????????</span>

                                                </label>
                                                <input type="file" id="p_avatar" name="p_avatar"
                                                    accept="image/*" class="img_pre">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div>
                                            <div class="popbottom v2">
                                                <span id="send_be_guid1" class="poprecord bbt">??????????</span>
                                            </div>
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


<div id="be_guid_pop_2" class="pop" style="display: none;">
    <div>
        <div>
            <div>
                <div class="pop-content user-pop">
                    <div class="poptop">
                        <div class="poplogo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="107.687" height="45.048"
                                viewBox="0 0 107.687 45.048">
                                <g id="Group_12" data-name="Group 12" transform="translate(1 0)">
                                    <g id="Group_8" data-name="Group 8" transform="translate(61.639 0)">
                                        <path id="Path_16" data-name="Path 16"
                                            d="M22.524,0A22.524,22.524,0,1,1,0,22.524,22.524,22.524,0,0,1,22.524,0Z"
                                            transform="translate(0 0)" fill="#662683"></path>
                                        <g id="Group_7" data-name="Group 7" transform="translate(9.269 13.833)">
                                            <path id="Path_5" data-name="Path 5"
                                                d="M197.889,140.632v-14.94c.082-2.219-2.3-3.088-3.738-.927l-3.187,4.567c-1.345,1.784-2.744,1.85-4.115,0l-3.784-4.937c-1.025-1.4-3.225-.991-3.225,1.274v6.236"
                                                transform="translate(-171.003 -123.352)" fill="none"
                                                stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_6" data-name="Path 6"
                                                d="M223.875,124.383a.876.876,0,1,1,.685-.331A.874.874,0,0,1,223.875,124.383Z"
                                                transform="translate(-206.014 -122.633)" fill="#fff"
                                                stroke="#fff" stroke-width="2"></path>
                                            <path id="Path_7" data-name="Path 7"
                                                d="M133.043,125.168v14.94c-.082,2.219,2.3,3.088,3.738.927l3.187-4.567c1.345-1.784,2.744-1.85,4.115,0l3.784,4.937c1.025,1.4,3.225.991,3.225-1.274v-6.236"
                                                transform="translate(-133.041 -124.689)" fill="none"
                                                stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_8" data-name="Path 8"
                                                d="M177.087,207.418a.876.876,0,1,1-.685.331A.873.873,0,0,1,177.087,207.418Z"
                                                transform="translate(-168.06 -191.409)" fill="#fff"
                                                stroke="#fff" stroke-width="2"></path>
                                        </g>
                                    </g>
                                    <g id="Group_10" data-name="Group 10" transform="translate(0 15.259)">
                                        <g id="Group_9" data-name="Group 9" transform="translate(0 3.067)">
                                            <path id="Path_9" data-name="Path 9"
                                                d="M138.447,309.451v-5.928a2.238,2.238,0,0,0-2.228-2.227h-1.089a2.237,2.237,0,0,0-2.227,2.227v5.928h-.852v-5.928a2.95,2.95,0,0,1,.418-1.547,3.183,3.183,0,0,1,1.117-1.113,2.955,2.955,0,0,1,1.544-.418h1.089a2.988,2.988,0,0,1,1.429.352,3.668,3.668,0,0,1,1.225,1.146A3.659,3.659,0,0,1,140.1,300.8a2.989,2.989,0,0,1,1.429-.352h1.089a2.957,2.957,0,0,1,1.544.418,3.182,3.182,0,0,1,1.117,1.113,2.944,2.944,0,0,1,.418,1.547v5.928h-.852v-5.928a2.236,2.236,0,0,0-2.227-2.227h-1.089a2.236,2.236,0,0,0-2.227,2.227v5.928Z"
                                                transform="translate(-132.052 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_10" data-name="Path 10"
                                                d="M174.284,300.444h.851v9.007h-.851Z"
                                                transform="translate(-158.678 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_11" data-name="Path 11"
                                                d="M178.737,311.056h1.515a2.126,2.126,0,0,0,1.56-.643,2.232,2.232,0,0,0,.667-1.576v-5.314a2.236,2.236,0,0,0-2.227-2.227h-.426v-.852h.426a2.955,2.955,0,0,1,1.544.418,3.184,3.184,0,0,1,1.118,1.113,2.95,2.95,0,0,1,.417,1.547v5.306a2.959,2.959,0,0,1-.417,1.544,3.175,3.175,0,0,1-1.118,1.117,2.958,2.958,0,0,1-1.544.418h-1.515Z"
                                                transform="translate(-161.485 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_12" data-name="Path 12"
                                                d="M203.731,303.523v2.849a2.956,2.956,0,0,1-.418,1.543,3.172,3.172,0,0,1-1.118,1.118,2.956,2.956,0,0,1-1.543.418h-1.089a2.957,2.957,0,0,1-1.544-.418,3.173,3.173,0,0,1-1.118-1.118,2.956,2.956,0,0,1-.418-1.543v-2.849a2.95,2.95,0,0,1,.418-1.547,3.181,3.181,0,0,1,1.118-1.113,2.954,2.954,0,0,1,1.544-.418h1.089a2.953,2.953,0,0,1,1.543.418,3.181,3.181,0,0,1,1.118,1.113A2.95,2.95,0,0,1,203.731,303.523Zm-.851,2.849v-2.849a2.237,2.237,0,0,0-2.227-2.227h-1.089a2.237,2.237,0,0,0-2.228,2.227v2.849a2.237,2.237,0,0,0,2.228,2.227h1.089a2.237,2.237,0,0,0,2.227-2.227Z"
                                                transform="translate(-172.674 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_13" data-name="Path 13"
                                                d="M228.658,303.523v2.849a2.957,2.957,0,0,1-.418,1.543,3.174,3.174,0,0,1-1.117,1.118,2.958,2.958,0,0,1-1.544.418H224.49a2.958,2.958,0,0,1-1.544-.418,3.175,3.175,0,0,1-1.118-1.118,2.956,2.956,0,0,1-.418-1.543v-2.849a2.95,2.95,0,0,1,.418-1.547,3.184,3.184,0,0,1,1.118-1.113,2.955,2.955,0,0,1,1.544-.418h1.089a2.955,2.955,0,0,1,1.544.418,3.183,3.183,0,0,1,1.117,1.113A2.95,2.95,0,0,1,228.658,303.523Zm-.852,2.849v-2.849a2.237,2.237,0,0,0-2.227-2.227H224.49a2.237,2.237,0,0,0-2.228,2.227v2.849a2.237,2.237,0,0,0,2.228,2.227h1.089a2.237,2.237,0,0,0,2.227-2.227Z"
                                                transform="translate(-188.389 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_14" data-name="Path 14"
                                                d="M246.337,309.451v-5.928a2.95,2.95,0,0,1,.418-1.547,3.183,3.183,0,0,1,1.117-1.113,2.955,2.955,0,0,1,1.544-.418H250.5a2.955,2.955,0,0,1,1.544.418,3.183,3.183,0,0,1,1.118,1.113,2.67,2.67,0,0,1,.418,1.384h-.852a1.97,1.97,0,0,0-.655-1.408,2.143,2.143,0,0,0-1.572-.655h-1.089a2.237,2.237,0,0,0-2.227,2.227v5.928Z"
                                                transform="translate(-204.104 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_15" data-name="Path 15"
                                                d="M271.264,300.444h.851v9.007h-.851Z"
                                                transform="translate(-219.82 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                        </g>
                                        <circle id="Ellipse_4" data-name="Ellipse 4" cx="0.83"
                                            cy="0.83" r="0.83" transform="translate(15.096)"
                                            fill="#662683" stroke="#662683" stroke-miterlimit="10"
                                            stroke-width="2"></circle>
                                        <circle id="Ellipse_5" data-name="Ellipse 5" cx="0.83"
                                            cy="0.83" r="0.83" transform="translate(50.953)"
                                            fill="#662683" stroke="#662683" stroke-miterlimit="10"
                                            stroke-width="2"></circle>
                                        <circle id="Ellipse_6" data-name="Ellipse 6" cx="0.83"
                                            cy="0.83" r="0.83" transform="translate(20.629)"
                                            fill="#662683" stroke="#662683" stroke-miterlimit="10"
                                            stroke-width="2"></circle>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="popmin-title">
                            <h3>?????????? ???????? ????????????</h3>
                        </div>
                        <div class="pop-close">
                            <span>????????</span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.747" height="14.747"
                                    viewBox="0 0 14.747 14.747">
                                    <g id="Group_351" data-name="Group 351"
                                        transform="translate(-369.793 -1605.293)">
                                        <line id="Line_41" data-name="Line 41" x1="13.333" y2="13.333"
                                            transform="translate(370.5 1606)" fill="none" stroke="#000"
                                            stroke-width="2"></line>
                                        <line id="Line_42" data-name="Line 42" x2="13.333" y2="13.333"
                                            transform="translate(370.5 1606)" fill="none" stroke="#000"
                                            stroke-width="2"></line>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="popmain">
                        <h4 class="please v3">?????????? ???????? ??????</h4>
                        <form action="" id="be_guid_form_2">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div>
                                        <ol>
                                            <li>???????? ?????? ???????? ???????? ???????? ???????? .</li>
                                            <li>?????????? ?????????? ?????? ???????? ?? ???????? ???? ???????? ???????? ???????????????? ???????? .</li>
                                        </ol>
                                    </div>
                                </div>

                            </div>

                            <div class="pop-guide">
                                <div class="row">

                                    <div class="col-lg-6 col-xsm-12">
                                        <div>
                                            <h4>?????????? ?????? ???????? ??????</h4>
                                            <div class="avatar-pop cart">
                                                <span class="beh">?????????? ?????? ???????? ??????</span>
                                                <label for="melli_front">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.318"
                                                        height="12.359" viewBox="0 0 15.318 12.359">
                                                        <g id="Group_907" data-name="Group 907"
                                                            transform="translate(0 0)">
                                                            <path id="Path_239" data-name="Path 239"
                                                                d="M414.116,71.071V70.8a.555.555,0,0,0-.555-.555h-1.374a.555.555,0,0,0-.555.555v.269h-.818l-.355-1.136a.915.915,0,0,0-.873-.642h-4.129a.915.915,0,0,0-.873.642l-.355,1.136h-3.218a1.155,1.155,0,0,0-1.155,1.155V79.71a1.155,1.155,0,0,0,1.155,1.155h3.327a4.763,4.763,0,1,1,6.368,0h3.314a1.155,1.155,0,0,0,1.155-1.155V72.221A1.154,1.154,0,0,0,414.116,71.071Zm-8.952-.852a.4.4,0,0,1,.379-.279H409.5a.4.4,0,0,1,.379.279h0a.576.576,0,0,1-.55.748h-3.614A.576.576,0,0,1,405.164,70.219Zm-2.1,2.773h-1.978v-.966h1.978Z"
                                                                transform="translate(-399.856 -69.288)"
                                                                fill="#fff"></path>
                                                            <path id="Path_240" data-name="Path 240"
                                                                d="M461.165,137.681a4.32,4.32,0,1,0-2.48.783A4.318,4.318,0,0,0,461.165,137.681Zm-5.733-3.542a3.253,3.253,0,1,1,3.253,3.253A3.253,3.253,0,0,1,455.432,134.139Z"
                                                                transform="translate(-451.019 -126.104)"
                                                                fill="#fff"></path>
                                                            <path id="Path_241" data-name="Path 241"
                                                                d="M482.813,161.017a2.749,2.749,0,1,0-2.749-2.749A2.749,2.749,0,0,0,482.813,161.017Zm1.019-4.6a.371.371,0,1,1-.371.371A.371.371,0,0,1,483.833,156.414Zm-1.019.618a1.236,1.236,0,1,1-1.236,1.236A1.236,1.236,0,0,1,482.813,157.032Z"
                                                                transform="translate(-475.148 -150.233)"
                                                                fill="#fff"></path>
                                                        </g>
                                                    </svg>
                                                    <span>???????????? ??????????</span>

                                                </label>
                                                <input type="file" accept="image/*" class="img_pre"
                                                    name="melli_front" id="melli_front">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-xsm-12">
                                        <div>
                                            <h4>?????????? ?????? ???????? ??????</h4>
                                            <img src="" id="bl" alt="">

                                            <div class="avatar-pop cart">
                                                <span class="beh">?????????? ?????? ???????? ??????</span>
                                                <label for="melli_back">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.318"
                                                        height="12.359" viewBox="0 0 15.318 12.359">
                                                        <g id="Group_907" data-name="Group 907"
                                                            transform="translate(0 0)">
                                                            <path id="Path_239" data-name="Path 239"
                                                                d="M414.116,71.071V70.8a.555.555,0,0,0-.555-.555h-1.374a.555.555,0,0,0-.555.555v.269h-.818l-.355-1.136a.915.915,0,0,0-.873-.642h-4.129a.915.915,0,0,0-.873.642l-.355,1.136h-3.218a1.155,1.155,0,0,0-1.155,1.155V79.71a1.155,1.155,0,0,0,1.155,1.155h3.327a4.763,4.763,0,1,1,6.368,0h3.314a1.155,1.155,0,0,0,1.155-1.155V72.221A1.154,1.154,0,0,0,414.116,71.071Zm-8.952-.852a.4.4,0,0,1,.379-.279H409.5a.4.4,0,0,1,.379.279h0a.576.576,0,0,1-.55.748h-3.614A.576.576,0,0,1,405.164,70.219Zm-2.1,2.773h-1.978v-.966h1.978Z"
                                                                transform="translate(-399.856 -69.288)"
                                                                fill="#fff"></path>
                                                            <path id="Path_240" data-name="Path 240"
                                                                d="M461.165,137.681a4.32,4.32,0,1,0-2.48.783A4.318,4.318,0,0,0,461.165,137.681Zm-5.733-3.542a3.253,3.253,0,1,1,3.253,3.253A3.253,3.253,0,0,1,455.432,134.139Z"
                                                                transform="translate(-451.019 -126.104)"
                                                                fill="#fff"></path>
                                                            <path id="Path_241" data-name="Path 241"
                                                                d="M482.813,161.017a2.749,2.749,0,1,0-2.749-2.749A2.749,2.749,0,0,0,482.813,161.017Zm1.019-4.6a.371.371,0,1,1-.371.371A.371.371,0,0,1,483.833,156.414Zm-1.019.618a1.236,1.236,0,1,1-1.236,1.236A1.236,1.236,0,0,1,482.813,157.032Z"
                                                                transform="translate(-475.148 -150.233)"
                                                                fill="#fff"></path>
                                                        </g>
                                                    </svg>
                                                    <span>???????????? ??????????</span>

                                                </label>
                                                <input type="file" accept="image/*" class="img_pre"
                                                    name="melli_back" id="melli_back">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div>
                                            <div class="popbottom v2">
                                                <span id="send_be_guid2" class="poprecord bbt">??????????</span>
                                            </div>
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
<div id="be_guid_pop_3" class="pop" style="display: none;">
    <div>
        <div>
            <div>
                <div class="pop-content user-pop">
                    <div class="poptop">
                        <div class="poplogo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="107.687" height="45.048"
                                viewBox="0 0 107.687 45.048">
                                <g id="Group_12" data-name="Group 12" transform="translate(1 0)">
                                    <g id="Group_8" data-name="Group 8" transform="translate(61.639 0)">
                                        <path id="Path_16" data-name="Path 16"
                                            d="M22.524,0A22.524,22.524,0,1,1,0,22.524,22.524,22.524,0,0,1,22.524,0Z"
                                            transform="translate(0 0)" fill="#662683"></path>
                                        <g id="Group_7" data-name="Group 7" transform="translate(9.269 13.833)">
                                            <path id="Path_5" data-name="Path 5"
                                                d="M197.889,140.632v-14.94c.082-2.219-2.3-3.088-3.738-.927l-3.187,4.567c-1.345,1.784-2.744,1.85-4.115,0l-3.784-4.937c-1.025-1.4-3.225-.991-3.225,1.274v6.236"
                                                transform="translate(-171.003 -123.352)" fill="none"
                                                stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_6" data-name="Path 6"
                                                d="M223.875,124.383a.876.876,0,1,1,.685-.331A.874.874,0,0,1,223.875,124.383Z"
                                                transform="translate(-206.014 -122.633)" fill="#fff"
                                                stroke="#fff" stroke-width="2"></path>
                                            <path id="Path_7" data-name="Path 7"
                                                d="M133.043,125.168v14.94c-.082,2.219,2.3,3.088,3.738.927l3.187-4.567c1.345-1.784,2.744-1.85,4.115,0l3.784,4.937c1.025,1.4,3.225.991,3.225-1.274v-6.236"
                                                transform="translate(-133.041 -124.689)" fill="none"
                                                stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_8" data-name="Path 8"
                                                d="M177.087,207.418a.876.876,0,1,1-.685.331A.873.873,0,0,1,177.087,207.418Z"
                                                transform="translate(-168.06 -191.409)" fill="#fff"
                                                stroke="#fff" stroke-width="2"></path>
                                        </g>
                                    </g>
                                    <g id="Group_10" data-name="Group 10" transform="translate(0 15.259)">
                                        <g id="Group_9" data-name="Group 9" transform="translate(0 3.067)">
                                            <path id="Path_9" data-name="Path 9"
                                                d="M138.447,309.451v-5.928a2.238,2.238,0,0,0-2.228-2.227h-1.089a2.237,2.237,0,0,0-2.227,2.227v5.928h-.852v-5.928a2.95,2.95,0,0,1,.418-1.547,3.183,3.183,0,0,1,1.117-1.113,2.955,2.955,0,0,1,1.544-.418h1.089a2.988,2.988,0,0,1,1.429.352,3.668,3.668,0,0,1,1.225,1.146A3.659,3.659,0,0,1,140.1,300.8a2.989,2.989,0,0,1,1.429-.352h1.089a2.957,2.957,0,0,1,1.544.418,3.182,3.182,0,0,1,1.117,1.113,2.944,2.944,0,0,1,.418,1.547v5.928h-.852v-5.928a2.236,2.236,0,0,0-2.227-2.227h-1.089a2.236,2.236,0,0,0-2.227,2.227v5.928Z"
                                                transform="translate(-132.052 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_10" data-name="Path 10"
                                                d="M174.284,300.444h.851v9.007h-.851Z"
                                                transform="translate(-158.678 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_11" data-name="Path 11"
                                                d="M178.737,311.056h1.515a2.126,2.126,0,0,0,1.56-.643,2.232,2.232,0,0,0,.667-1.576v-5.314a2.236,2.236,0,0,0-2.227-2.227h-.426v-.852h.426a2.955,2.955,0,0,1,1.544.418,3.184,3.184,0,0,1,1.118,1.113,2.95,2.95,0,0,1,.417,1.547v5.306a2.959,2.959,0,0,1-.417,1.544,3.175,3.175,0,0,1-1.118,1.117,2.958,2.958,0,0,1-1.544.418h-1.515Z"
                                                transform="translate(-161.485 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_12" data-name="Path 12"
                                                d="M203.731,303.523v2.849a2.956,2.956,0,0,1-.418,1.543,3.172,3.172,0,0,1-1.118,1.118,2.956,2.956,0,0,1-1.543.418h-1.089a2.957,2.957,0,0,1-1.544-.418,3.173,3.173,0,0,1-1.118-1.118,2.956,2.956,0,0,1-.418-1.543v-2.849a2.95,2.95,0,0,1,.418-1.547,3.181,3.181,0,0,1,1.118-1.113,2.954,2.954,0,0,1,1.544-.418h1.089a2.953,2.953,0,0,1,1.543.418,3.181,3.181,0,0,1,1.118,1.113A2.95,2.95,0,0,1,203.731,303.523Zm-.851,2.849v-2.849a2.237,2.237,0,0,0-2.227-2.227h-1.089a2.237,2.237,0,0,0-2.228,2.227v2.849a2.237,2.237,0,0,0,2.228,2.227h1.089a2.237,2.237,0,0,0,2.227-2.227Z"
                                                transform="translate(-172.674 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_13" data-name="Path 13"
                                                d="M228.658,303.523v2.849a2.957,2.957,0,0,1-.418,1.543,3.174,3.174,0,0,1-1.117,1.118,2.958,2.958,0,0,1-1.544.418H224.49a2.958,2.958,0,0,1-1.544-.418,3.175,3.175,0,0,1-1.118-1.118,2.956,2.956,0,0,1-.418-1.543v-2.849a2.95,2.95,0,0,1,.418-1.547,3.184,3.184,0,0,1,1.118-1.113,2.955,2.955,0,0,1,1.544-.418h1.089a2.955,2.955,0,0,1,1.544.418,3.183,3.183,0,0,1,1.117,1.113A2.95,2.95,0,0,1,228.658,303.523Zm-.852,2.849v-2.849a2.237,2.237,0,0,0-2.227-2.227H224.49a2.237,2.237,0,0,0-2.228,2.227v2.849a2.237,2.237,0,0,0,2.228,2.227h1.089a2.237,2.237,0,0,0,2.227-2.227Z"
                                                transform="translate(-188.389 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_14" data-name="Path 14"
                                                d="M246.337,309.451v-5.928a2.95,2.95,0,0,1,.418-1.547,3.183,3.183,0,0,1,1.117-1.113,2.955,2.955,0,0,1,1.544-.418H250.5a2.955,2.955,0,0,1,1.544.418,3.183,3.183,0,0,1,1.118,1.113,2.67,2.67,0,0,1,.418,1.384h-.852a1.97,1.97,0,0,0-.655-1.408,2.143,2.143,0,0,0-1.572-.655h-1.089a2.237,2.237,0,0,0-2.227,2.227v5.928Z"
                                                transform="translate(-204.104 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                            <path id="Path_15" data-name="Path 15"
                                                d="M271.264,300.444h.851v9.007h-.851Z"
                                                transform="translate(-219.82 -300.444)" fill="#662683"
                                                stroke="#662683" stroke-miterlimit="10" stroke-width="2"></path>
                                        </g>
                                        <circle id="Ellipse_4" data-name="Ellipse 4" cx="0.83"
                                            cy="0.83" r="0.83" transform="translate(15.096)"
                                            fill="#662683" stroke="#662683" stroke-miterlimit="10"
                                            stroke-width="2"></circle>
                                        <circle id="Ellipse_5" data-name="Ellipse 5" cx="0.83"
                                            cy="0.83" r="0.83" transform="translate(50.953)"
                                            fill="#662683" stroke="#662683" stroke-miterlimit="10"
                                            stroke-width="2"></circle>
                                        <circle id="Ellipse_6" data-name="Ellipse 6" cx="0.83"
                                            cy="0.83" r="0.83" transform="translate(20.629)"
                                            fill="#662683" stroke="#662683" stroke-miterlimit="10"
                                            stroke-width="2"></circle>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="popmin-title">
                            <h3>?????????? ???????? ????????????</h3>
                        </div>
                        <div class="pop-close">
                            <span>????????</span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.747" height="14.747"
                                    viewBox="0 0 14.747 14.747">
                                    <g id="Group_351" data-name="Group 351"
                                        transform="translate(-369.793 -1605.293)">
                                        <line id="Line_41" data-name="Line 41" x1="13.333" y2="13.333"
                                            transform="translate(370.5 1606)" fill="none" stroke="#000"
                                            stroke-width="2"></line>
                                        <line id="Line_42" data-name="Line 42" x2="13.333" y2="13.333"
                                            transform="translate(370.5 1606)" fill="none" stroke="#000"
                                            stroke-width="2"></line>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="popmain">
                        <h4 class="please v3">?????????? ???????? ??????????????</h4>
                        <form action="" id="be_guid_form_3">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div>
                                        <ol>
                                            <li>???????? ?????? ???????? ???????? ???????? ???????? .</li>
                                            <li>?????????? ?????????? ?????? ???????? ?? ???????? ???? ???????? ???????? ???????????????? ???????? .</li>
                                        </ol>
                                    </div>
                                </div>

                            </div>

                            <div class="pop-guide">
                                <div class="row">

                                    <div class="col-lg-6 col-xsm-12 center-block">
                                        <div>
                                            <h4>?????????? ???????? ??????????????</h4>
                                            <div class="avatar-pop cart">
                                                <span class="beh">?????????? ???????? ??????????????</span>
                                                <label for="tourism">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.318"
                                                        height="12.359" viewBox="0 0 15.318 12.359">
                                                        <g id="Group_907" data-name="Group 907"
                                                            transform="translate(0 0)">
                                                            <path id="Path_239" data-name="Path 239"
                                                                d="M414.116,71.071V70.8a.555.555,0,0,0-.555-.555h-1.374a.555.555,0,0,0-.555.555v.269h-.818l-.355-1.136a.915.915,0,0,0-.873-.642h-4.129a.915.915,0,0,0-.873.642l-.355,1.136h-3.218a1.155,1.155,0,0,0-1.155,1.155V79.71a1.155,1.155,0,0,0,1.155,1.155h3.327a4.763,4.763,0,1,1,6.368,0h3.314a1.155,1.155,0,0,0,1.155-1.155V72.221A1.154,1.154,0,0,0,414.116,71.071Zm-8.952-.852a.4.4,0,0,1,.379-.279H409.5a.4.4,0,0,1,.379.279h0a.576.576,0,0,1-.55.748h-3.614A.576.576,0,0,1,405.164,70.219Zm-2.1,2.773h-1.978v-.966h1.978Z"
                                                                transform="translate(-399.856 -69.288)"
                                                                fill="#fff"></path>
                                                            <path id="Path_240" data-name="Path 240"
                                                                d="M461.165,137.681a4.32,4.32,0,1,0-2.48.783A4.318,4.318,0,0,0,461.165,137.681Zm-5.733-3.542a3.253,3.253,0,1,1,3.253,3.253A3.253,3.253,0,0,1,455.432,134.139Z"
                                                                transform="translate(-451.019 -126.104)"
                                                                fill="#fff"></path>
                                                            <path id="Path_241" data-name="Path 241"
                                                                d="M482.813,161.017a2.749,2.749,0,1,0-2.749-2.749A2.749,2.749,0,0,0,482.813,161.017Zm1.019-4.6a.371.371,0,1,1-.371.371A.371.371,0,0,1,483.833,156.414Zm-1.019.618a1.236,1.236,0,1,1-1.236,1.236A1.236,1.236,0,0,1,482.813,157.032Z"
                                                                transform="translate(-475.148 -150.233)"
                                                                fill="#fff"></path>
                                                        </g>
                                                    </svg>
                                                    <span>???????????? ??????????</span>

                                                </label>
                                                <input type="file" id="tourism" accept="image/*"
                                                    class="img_pre" name="tourism">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div>
                                            <div class="popbottom v2">
                                                <span id="send_be_guid3" class="poprecord bbt">??????????</span>
                                            </div>
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


<div id="make_travel" class="pop" >
    <div>
        <div>
            <div>
                <div class="pop-content user-pop">
                    <div class="poptop">
                        <div class="popmin-title">
                            <h3>???????? ?????? ????????????</h3>
                            <p>
                                ???? ???? ???????? ???????? ?????????? ???????? ???? ?? ?????????????? ??????  ??<br>  ???????????????????? ?????????? ???? ?????????????????? ?????? ???????????? ???? ???????? .

                            </p>
                        </div>
                        <div class="pop-close">
                            <span>????????</span>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.747" height="14.747" viewBox="0 0 14.747 14.747">
                                  <g id="Group_351" data-name="Group 351" transform="translate(-369.793 -1605.293)">
                                    <line id="Line_41" data-name="Line 41" x1="13.333" y2="13.333" transform="translate(370.5 1606)" fill="none" stroke="#000" stroke-width="2"></line>
                                    <line id="Line_42" data-name="Line 42" x2="13.333" y2="13.333" transform="translate(370.5 1606)" fill="none" stroke="#000" stroke-width="2"></line>
                                  </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="popmain">
                        <form action="" id="travel_form" autocomplete="off">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <label for="">???? ?????? ???????????????? ????????????</label>
                                        <div class="icon-input">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="21.878" height="25.626" viewBox="0 0 21.878 25.626">
                                              <g id="Group_792" data-name="Group 792" transform="matrix(0.978, 0.208, -0.208, 0.978, 3.34, 0)">
                                                <g id="Group_4" data-name="Group 4" transform="translate(0 0)">
                                                  <g id="Group_3" data-name="Group 3" transform="translate(0)">
                                                    <path id="Path_1" data-name="Path 1" d="M8.032,1.007a6.985,6.985,0,0,1,3.927,1.2A7.045,7.045,0,0,1,14.5,5.3a7.014,7.014,0,0,1-.647,6.66A7.043,7.043,0,0,1,10.765,14.5,7.016,7.016,0,0,1,4.1,13.856a7.049,7.049,0,0,1-2.546-3.091A7.014,7.014,0,0,1,2.206,4.1a7.069,7.069,0,0,1,1.9-1.9,6.985,6.985,0,0,1,3.927-1.2M8.032,0a8.031,8.031,0,1,0,8.031,8.031A8.032,8.032,0,0,0,8.032,0Z" fill="#b5b5b5"></path>
                                                  </g>
                                                </g>
                                                <path id="Path_2" data-name="Path 2" d="M6.094,5.938l-.157.157a.876.876,0,0,1-1.238,0L.256,1.651a.876.876,0,0,1,0-1.238L.412.257a.875.875,0,0,1,1.239,0L6.094,4.7A.876.876,0,0,1,6.094,5.938Z" transform="translate(15.82 15.136)" fill="#b5b5b5"></path>
                                                <rect id="Rectangle_2" data-name="Rectangle 2" width="0.785" height="11.541" transform="translate(13.191 13.062) rotate(-45)" fill="#b5b5b5"></rect>
                                                <path id="Path_3" data-name="Path 3" d="M4.536,4.72h0a.285.285,0,0,1-.283-.259A4.316,4.316,0,0,0,.266.569.285.285,0,0,1,0,.285H0A.285.285,0,0,1,.3,0,4.886,4.886,0,0,1,4.819,4.41.284.284,0,0,1,4.536,4.72Z" transform="translate(7.056 13.88) rotate(177)" fill="#b5b5b5"></path>
                                              </g>
                                            </svg>
                                            <input class="popinput2" id="goal" name="city_id" type="text" placeholder="  ???? ?????? ???? ???????????? ???????????? *">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xsm-12">
                                    <div>

                                        <label for=""> ???? ??????????</label>
                                        <div class="icon-input left">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.31" height="16.531" viewBox="0 0 16.31 16.531">
                                              <g id="Group_862" data-name="Group 862" transform="translate(-64.398 -62.42)">
                                                <rect id="Rectangle_631" data-name="Rectangle 631" width="1.088" height="1.088" transform="translate(69.225 70.207)" fill="#757575"></rect>
                                                <rect id="Rectangle_632" data-name="Rectangle 632" width="1.088" height="1.088" transform="translate(72.009 70.207)" fill="#757575"></rect>
                                                <rect id="Rectangle_633" data-name="Rectangle 633" width="1.088" height="1.088" transform="translate(74.793 70.207)" fill="#757575"></rect>
                                                <rect id="Rectangle_634" data-name="Rectangle 634" width="1.088" height="1.088" transform="translate(77.577 70.207)" fill="#757575"></rect>
                                                <rect id="Rectangle_635" data-name="Rectangle 635" width="1.088" height="1.088" transform="translate(66.441 72.831)" fill="#757575"></rect>
                                                <rect id="Rectangle_636" data-name="Rectangle 636" width="1.088" height="1.088" transform="translate(69.225 72.831)" fill="#757575"></rect>
                                                <rect id="Rectangle_637" data-name="Rectangle 637" width="1.088" height="1.088" transform="translate(72.009 72.831)" fill="#757575"></rect>
                                                <rect id="Rectangle_638" data-name="Rectangle 638" width="1.088" height="1.088" transform="translate(74.793 72.831)" fill="#757575"></rect>
                                                <rect id="Rectangle_639" data-name="Rectangle 639" width="1.088" height="1.088" transform="translate(66.441 75.455)" fill="#757575"></rect>
                                                <rect id="Rectangle_640" data-name="Rectangle 640" width="1.088" height="1.088" transform="translate(69.225 75.455)" fill="#757575"></rect>
                                                <rect id="Rectangle_641" data-name="Rectangle 641" width="1.088" height="1.088" transform="translate(72.009 75.455)" fill="#757575"></rect>
                                                <rect id="Rectangle_642" data-name="Rectangle 642" width="1.088" height="1.088" transform="translate(74.793 75.455)" fill="#757575"></rect>
                                                <rect id="Rectangle_643" data-name="Rectangle 643" width="1.088" height="1.088" transform="translate(77.577 75.455)" fill="#757575"></rect>
                                                <path id="Path_213" data-name="Path 213" d="M66.4,104.8a2,2,0,0,1-2-2V91.5a2,2,0,0,1,2-2H78.711a2,2,0,0,1,2,2v11.313a1.976,1.976,0,0,1-.612,1.409,2.074,2.074,0,0,1-1.438.6h0L66.4,104.8Zm-1.046-.952a1.482,1.482,0,0,0,1.046.437l12.263.02h0a1.558,1.558,0,0,0,1.079-.45,1.46,1.46,0,0,0,.455-1.04V91.5a1.486,1.486,0,0,0-1.48-1.48H66.4a1.486,1.486,0,0,0-1.481,1.48v11.3A1.473,1.473,0,0,0,65.349,103.849Z" transform="translate(0 -25.871)" fill="#757575"></path>
                                                <path id="Path_214" data-name="Path 214" d="M64.656,183.334a.258.258,0,0,1,0-.517H80.45a.258.258,0,0,1,0,.517Z" transform="translate(0 -114.998)" fill="#757575"></path>
                                                <path id="Path_215" data-name="Path 215" d="M146.088,62.678a.258.258,0,1,1,.517,0v2.429a.258.258,0,1,1-.517,0Z" transform="translate(-78.027 0)" fill="#757575"></path>
                                                <path id="Path_216" data-name="Path 216" d="M334.912,62.678a.258.258,0,0,1,.517,0v2.429a.258.258,0,0,1-.517,0Z" transform="translate(-258.383 0)" fill="#757575"></path>
                                                <path id="Path_217" data-name="Path 217" d="M341.49,289.134a.258.258,0,0,1,.5-.139l.066.234,1.467-.952a.257.257,0,0,1,.28.432l-1.749,1.136a.258.258,0,0,1-.4-.139Z" transform="translate(-264.657 -215.689)" fill="#757575"></path>
                                              </g>
                                            </svg>
                                            <input class="popinput2  pwt-datepicker-input-element range_from" name="start" type="text" placeholder=" ???? ?????????? *">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xsm-12">
                                    <div>
                                        <label for="">???? ??????????</label>
                                        <div class="icon-input  left">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.31" height="16.531" viewBox="0 0 16.31 16.531">
                                              <g id="Group_862" data-name="Group 862" transform="translate(-64.398 -62.42)">
                                                <rect id="Rectangle_631" data-name="Rectangle 631" width="1.088" height="1.088" transform="translate(69.225 70.207)" fill="#757575"></rect>
                                                <rect id="Rectangle_632" data-name="Rectangle 632" width="1.088" height="1.088" transform="translate(72.009 70.207)" fill="#757575"></rect>
                                                <rect id="Rectangle_633" data-name="Rectangle 633" width="1.088" height="1.088" transform="translate(74.793 70.207)" fill="#757575"></rect>
                                                <rect id="Rectangle_634" data-name="Rectangle 634" width="1.088" height="1.088" transform="translate(77.577 70.207)" fill="#757575"></rect>
                                                <rect id="Rectangle_635" data-name="Rectangle 635" width="1.088" height="1.088" transform="translate(66.441 72.831)" fill="#757575"></rect>
                                                <rect id="Rectangle_636" data-name="Rectangle 636" width="1.088" height="1.088" transform="translate(69.225 72.831)" fill="#757575"></rect>
                                                <rect id="Rectangle_637" data-name="Rectangle 637" width="1.088" height="1.088" transform="translate(72.009 72.831)" fill="#757575"></rect>
                                                <rect id="Rectangle_638" data-name="Rectangle 638" width="1.088" height="1.088" transform="translate(74.793 72.831)" fill="#757575"></rect>
                                                <rect id="Rectangle_639" data-name="Rectangle 639" width="1.088" height="1.088" transform="translate(66.441 75.455)" fill="#757575"></rect>
                                                <rect id="Rectangle_640" data-name="Rectangle 640" width="1.088" height="1.088" transform="translate(69.225 75.455)" fill="#757575"></rect>
                                                <rect id="Rectangle_641" data-name="Rectangle 641" width="1.088" height="1.088" transform="translate(72.009 75.455)" fill="#757575"></rect>
                                                <rect id="Rectangle_642" data-name="Rectangle 642" width="1.088" height="1.088" transform="translate(74.793 75.455)" fill="#757575"></rect>
                                                <rect id="Rectangle_643" data-name="Rectangle 643" width="1.088" height="1.088" transform="translate(77.577 75.455)" fill="#757575"></rect>
                                                <path id="Path_213" data-name="Path 213" d="M66.4,104.8a2,2,0,0,1-2-2V91.5a2,2,0,0,1,2-2H78.711a2,2,0,0,1,2,2v11.313a1.976,1.976,0,0,1-.612,1.409,2.074,2.074,0,0,1-1.438.6h0L66.4,104.8Zm-1.046-.952a1.482,1.482,0,0,0,1.046.437l12.263.02h0a1.558,1.558,0,0,0,1.079-.45,1.46,1.46,0,0,0,.455-1.04V91.5a1.486,1.486,0,0,0-1.48-1.48H66.4a1.486,1.486,0,0,0-1.481,1.48v11.3A1.473,1.473,0,0,0,65.349,103.849Z" transform="translate(0 -25.871)" fill="#757575"></path>
                                                <path id="Path_214" data-name="Path 214" d="M64.656,183.334a.258.258,0,0,1,0-.517H80.45a.258.258,0,0,1,0,.517Z" transform="translate(0 -114.998)" fill="#757575"></path>
                                                <path id="Path_215" data-name="Path 215" d="M146.088,62.678a.258.258,0,1,1,.517,0v2.429a.258.258,0,1,1-.517,0Z" transform="translate(-78.027 0)" fill="#757575"></path>
                                                <path id="Path_216" data-name="Path 216" d="M334.912,62.678a.258.258,0,0,1,.517,0v2.429a.258.258,0,0,1-.517,0Z" transform="translate(-258.383 0)" fill="#757575"></path>
                                                <path id="Path_217" data-name="Path 217" d="M341.49,289.134a.258.258,0,0,1,.5-.139l.066.234,1.467-.952a.257.257,0,0,1,.28.432l-1.749,1.136a.258.258,0,0,1-.4-.139Z" transform="translate(-264.657 -215.689)" fill="#757575"></path>
                                              </g>
                                            </svg>
                                            <input class="popinput2  pwt-datepicker-input-element range_to" name="end" type="text" placeholder="  ???? ?????????? *">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        {{-- <div class="range_from"></div>
                                        <div class="range_to"></div> --}}
                                        <div class="selcting">
                                            <label for="">?????????? ??????????</label>
                                            <select name="count" id="">
                                             @for ($i=1; $i<10; $i++)
                                             <option value="{{$i}}">{{$i}}</option>
                                             @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <div class="checkbox-list" >
                                            <label for="">?????????? ???????? ?????????? ????????????</label>
                                            <ul>
                                                <li>
                                                    <div class="checkcontainer">
                                                        <input type="radio" name="gender" value="male" id="ma">
                                                        <label for="ma">
                                                            ??????
                                                            <span class="rect"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkcontainer">
                                                        <input type="radio" name="gender" value="female" id="fe">
                                                        <label for="fe">
                                                            ????????
                                                            <span class="rect"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkcontainer">
                                                        <input type="radio"  name="gender" value="family" id="both">
                                                        <label for="both">
                                                            ?????? ???? ??????????????
                                                            <span class="rect"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <div class="popbottom">
                                            <span id="new_travel" class="bbt btn-violet">?????? ????????????  ???????? ????????????</span>
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
