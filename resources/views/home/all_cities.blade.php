@extends('main.site')
@section('content')
  <div class="rows" id="all_cities">
    <div class="fullcontainer">
        <div class="row">
            <div class="col-lg-4 center-block">
                <div id="" style="" class="">
                    <form action="{{ route('all.cities') }}" autocomplete="off">
                        @csrf
                        @method('get')

                        <div class="autocomplete"  id="city_search">
                            <input type="text" name="city" value="{{ request('city')}}">
                        <button class="se">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.341" height="21.483" viewBox="0 0 18.341 21.483">
                                <g id="Group_5" data-name="Group 5" transform="matrix(0.978, 0.208, -0.208, 0.978, -600.495, -977.251)">
                                    <g id="Group_4" data-name="Group 4" transform="translate(793.293 830.464)">
                                        <g id="Group_3" data-name="Group 3" transform="translate(0)">
                                            <path id="Path_1" data-name="Path 1" d="M800.026,831.308a5.856,5.856,0,0,1,3.292,1.005,5.907,5.907,0,0,1,2.134,2.591,5.88,5.88,0,0,1-.543,5.584,5.9,5.9,0,0,1-2.592,2.134,5.881,5.881,0,0,1-5.583-.543,5.908,5.908,0,0,1-2.134-2.592,5.88,5.88,0,0,1,.543-5.584,5.928,5.928,0,0,1,1.592-1.592,5.856,5.856,0,0,1,3.292-1.005m0-.844a6.733,6.733,0,1,0,6.733,6.733,6.733,6.733,0,0,0-6.733-6.733Z" transform="translate(-793.293 -830.464)" fill="#fff"></path>
                                        </g>
                                    </g>
                                    <path id="Path_2" data-name="Path 2" d="M2520.49,2483.189l-.131.131a.734.734,0,0,1-1.038,0l-3.725-3.725a.734.734,0,0,1,0-1.038l.131-.131a.734.734,0,0,1,1.038,0l3.725,3.725A.734.734,0,0,1,2520.49,2483.189Z" transform="translate(-1708.827 -1635.059)" fill="#fff"></path>
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="0.658" height="9.675" transform="matrix(0.707, -0.707, 0.707, 0.707, 804.351, 841.415)" fill="#fff"></rect>
                                    <path id="Path_3" data-name="Path 3" d="M1738.522,1115.407h0a.239.239,0,0,1-.238-.217,3.618,3.618,0,0,0-3.342-3.263.239.239,0,0,1-.223-.238h0a.239.239,0,0,1,.254-.238,4.1,4.1,0,0,1,3.786,3.7A.238.238,0,0,1,1738.522,1115.407Z" transform="translate(-934.177 -278.823)" fill="#fff"></path>
                                </g>
                            </svg>
                        </button>
                    </div>


                    </form>

                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    <div class="row">
        @foreach ($cities as $city )
        @if ($city->image())
        {{-- @if (false) --}}

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single-city" style="margin-bottom:20px">
                <div class="img">
                    <a href="{{route('single.city',$city->id)}}">
                        <img src="{{$city->image('large')}}" alt="{{ $city->name }}">
                    </a>
                    <h4><a href="{{route('single.city',$city->id)}}">{{$city->name}}</a></h4>
                </div>

            </div>
        </div>
        @endif

        @endforeach

    </div>
</div>
  </div>
@endsection
