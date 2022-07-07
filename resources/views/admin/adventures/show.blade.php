@extends('main.manager')
   @section('content')
   {{ Breadcrumbs::render('adventure.show',$adventure) }}

   <div class="col-lg-12">
    <div class="portlet box border shadow">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h3 class="title">
                    <i class="icon-frane"></i>
                      اطلاعات ماجراجویی
                    {{$adventure->name}}
                </h3>
            </div><!-- /.portlet-title -->
            <div class="buttons-box">

            </div><!-- /.buttons-box -->
        </div><!-- /.portlet-heading -->
        <div class="portlet-body">
            <div class="portlet-title">

                <div   class="text-center">
                    {{-- <img src="{{$adventure->avatar()}}" alt=""> --}}

                </div>

               <div class="row">
                    <div class="col-lg-6">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-3">
                                    سازنده
                                </div>
                                <div class="col-lg-9">
                                    <a href="{{route('user.show',$adventure->user->id)}}">
                                        <span class="text-center">
                                            {{$adventure->user->name}}
                                            {{$adventure->user->family}}
                                        </span>

                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    دسته بندی
                                </div>
                                <div class="col-lg-9">
                                    <span class="text-center">
                                        {{__('arr.'.$adventure->cat)}}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    میزان سختی
                                </div>
                                <div class="col-lg-9">
                                    <span class="text-center">
                                        {{__('arr.'.$adventure->hardness)}}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    تعداد شرکت کننده
                                </div>
                                <div class="col-lg-9">
                                    <span class="text-center">
                                        {{$adventure->members}}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                        قیمت
                                </div>
                                <div class="col-lg-9">
                                    <span class="text-center">
                                        {{number_format($adventure->price)}}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                        وضعیت تایید
                                </div>
                                <div class="col-lg-9">
                                    <span class="text-center">
                                        <span class="text text-{{$adventure->confirm?"success":'danger'}}">
                                            ({{$adventure->confirm?"تایید شده":'تایید نشده'}})
                                           </span>
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                امکانات
                                </div>
                                <div class="col-lg-9">
                                    <span class="text-center">
                                        {{$adventure->facility}}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    برتری
                                </div>
                                <div class="col-lg-9">
                                    <span class="text-center">
                                        {{$adventure->benefit}}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    توضیحات
                                </div>
                                <div class="col-lg-9">
                                    <span class="text-center">
                                        {{$adventure->info}}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    اطلاعات
                                </div>
                                <div class="col-lg-9">
                                    <span class="text-center">
                                        {{$adventure->more}}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    نحوه برگشت پول
                                </div>
                                <div class="col-lg-9">
                                    <span class="text-center">
                                        {{$adventure->return_mony}}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    محل قرار
                                </div>
                                <div class="col-lg-9">
                                    <span class="text-center">
                                        {{$adventure->place}}
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-3">
                                  استان وشهر
                            </div>
                            <div class="col-lg-9">
                                <span class="text-center">
                                    {{$adventure->city->name}} -
                                    {{$adventure->province->name}}
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                        خلاصه
                            </div>
                            <div class="col-lg-9">

                                    {{$adventure->short}}
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                         مواردی که شامل میشود
                            </div>
                            <div class="col-lg-9">
                                    {{$adventure->action_include}}
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                         مواردی که شامل نمیشود
                            </div>
                            <div class="col-lg-9">
                                    {{$adventure->action_not_include}}
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                       تعداد
                            </div>
                            <div class="col-lg-9">
                                    {{$adventure->count}}
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                               محل
                            </div>
                            <div class="col-lg-9">
                                    {{$adventure->location}}
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                               مدت زمان
                            </div>
                            <div class="col-lg-9">
                                    {{$adventure->period}}
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                مقدار زمان
                            </div>
                            <div class="col-lg-9">
                                    {{$adventure->time_period}}
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                نوع مدت زمان  ساعت یا روز
                            </div>
                            <div class="col-lg-9">
                                {{__('arr.'.$adventure->type_period)}}
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                آدرس
                            </div>
                            <div class="col-lg-9">
                                    {{$adventure->address}}
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                برنامه سفر
                            </div>
                            <div class="col-lg-9">
                                    {{$adventure->plan}}
                                </span>
                            </div>
                        </div>
                    </div>
               </div>

               <div class="row">

               </div>
            </div>


        </div><!-- /.portlet-body -->
    </div><!-- /.portlet -->
</div>

@if ($adventure->latitude)
<div class="col-12">
    <div class="portlet box border shadow">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h3 class="title">
                    <i class="icon-settings"></i>
                  محل ماجراجویی در روی نقشه
                </h3>
            </div><!-- /.portlet-title -->

        </div><!-- /.portlet-heading -->
        <div class="portlet-body">
            <div class="col-lg-12">
                <div>

                    <input id="latitude" name="latitude" value="{{old('latitude' ,$adventure->latitude)}}" type="text"  hidden>
                    <input id="longitude" name="longitude" value="{{old('longitude' ,$adventure->longitude)}}" type="text"  hidden>
                    <div id="map" style="height:400px ;width:100%"></div>
                    {{-- <input class="sq" type="hidden"> --}}

                    <link href="https://static.neshan.org/sdk/leaflet/1.4.0/leaflet.css" rel="stylesheet" type="text/css">
                    <script src="https://static.neshan.org/sdk/leaflet/1.4.0/leaflet.js" type="text/javascript"></script>
                    <script type="text/javascript">


                        var myMap = new L.Map('map', {
                    key: 'web.diOGXlYqxrSkfbNGlHfQVWJKsWu1gXCHXmt3NaDs'
                    , maptype: 'dreamy'
                    , poi: true
                    , traffic: false
                    @if ($adventure->latitude)
                    , center: [{{$adventure->latitude}}, {{$adventure->longitude}}]
                    @else
                    , center: [35.69195363716694, 51.40228271484376]
                    @endif
                     , zoom: 8
                , });

                         var marker;
                         var array =[]
                         @if (old('latitude' ,$adventure->latitude))
                         L.marker([{{old('latitude' ,$adventure->latitude)}},{{ old('longitude' ,$adventure->longitude)}}],{   title:''}).addTo(myMap);
                         @endif

                     </script>


                </div>
            </div>
        </div><!-- /.portlet-body -->
    </div><!-- /.portlet -->
</div>
@endif
@if ($adventure->images()->count()>0)

<div class="col-12">
    <div class="portlet box border shadow">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h3 class="title">
                    <i class="icon-picture"></i>
                 تصاویر ماجراجویی
                </h3>
            </div><!-- /.portlet-title -->

        </div><!-- /.portlet-heading -->
        <div class="portlet-body min-height-650">
            <div class="row">
@foreach ($adventure->images as $ima )
<div class="col-sm-6 col-lg-6">
    <div class="effect bottom-to-top-effect">
        <div class="info-hover">
            <h2>
                <span class="title">
عکس شماره
{{$loop->iteration}}
                </span>
            </h2>
            <a  class="" href="{{$ima->image()}}" data-lightbox="image-1" data-title="My caption">
                عکسss
        {{ $loop->iteration}}
       </a>

        </div><!-- /.info-hover -->
        <img src="{{$ima->image()}}" class="img-center img-responsive" alt="">
    </div><!-- /.effect -->
</div><!-- /.col -->

@endforeach

            </div><!-- /.row -->
        </div><!-- /.portlet-body -->
    </div><!-- /.portlet -->
</div>
@endif

<div class="breadcrumb-box border shadow">
    <ul class="breadcrumb">
        <a href="{{route('adventure.index')}}" class="btn btn-danger">برگشت</a>
            </ul>

    </div><!-- /.breadcrumb-left -->
</div>
   @endsection
