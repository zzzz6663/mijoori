@extends('main.site')
   @section('content')
   <div id="my-adventures" class="rows">
    <div class="fullcontainer">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-12 center-block">
                <div>

                    <div class="adv-table">
                        <div class="header">
                            <h3>
                            ماجراجویانه های من

                            </h3>
                        </div>
                        @foreach ($adventures as  $adventure )

                        <div class="my-single-adv">
                            <div class="right">
                                <div class="pic">
                                    <img src="{{$adventure->image()}}" alt="">
                                </div>
                                <div class="info">
                                    <h4>  {{$adventure->name}}</h4>
                                    <span class="disc">
                                        {{$adventure->cat}}
                                        -
                                        {{$adventure->hardness}}

                                        </span>
                                        @if ($adventure->stage==5)

                                        <span class="stat        {{$adventure->confirm==1?'green':'violet'}}">
                                            {{$adventure->confirm==1?'تایید':'در انتظار تایید '}}
                                        </span>
                                        @else
                                        <span class="stat        {{$adventure->stage==5?'green':'violet'}}">
                                            {{$adventure->confirm==5?'تکمیل شده':'نکمیل نشده'}}
                                        </span>
                                        @endif


                                </div>
                            </div>
                            <div class="left">
                                @if ($adventure->stage==5)
                                <a href="{{route('new.adventure1',$adventure->id)}}" class="edit">ویرایش تور</a>
                                @else
                                <a href="{{route('new.adventure'.$adventure->stage,$adventure->id)}}" class="edit">ویرایش تور</a>

                                @endif
                                <button class="demo">پیش نمایش</button>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
   @endsection
