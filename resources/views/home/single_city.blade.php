@extends('main.site')
@section('content')
<div id="top-banner" class="rows">
    <img src="{{$target_city->banner()}}" alt="">
</div>

<div id="laws" class="rows">
    <div class="fullcontainer">
        <div class="row">
            <div class="col-lg-12">
                    <h1>
                        {{ $target_city->name }}
                    </h1>
                    <p>
                        {!!$target_city->info  !!}
                    </p>
            </div>

        </div>
    </div>
</div>

@endsection
