@extends('main.site')
@section('content')
  <div class="rows" id="all_cities">
    <div class="fullcontainer">
    <div class="row">
        @foreach (App\Models\City::all() as $city )
        @if ($city->image())

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="single-city" style="margin-bottom:20px">
                <div class="img">
                    <a href="{{route('single.city',$city->id)}}">
                        <img src="{{$city->image('large')}}" alt="">
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
