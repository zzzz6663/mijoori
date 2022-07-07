@extends('main.site')
   @section('content')
   <div id="profileheader" class="rows">
    <div class="fullcontainer">
        <h1>یک ماجراجویی بسازید</h1>
        <p>فعالیت ماجراجویانه موردعلاقه خود را ایجاد و کسب درآمد کنید</p>
    </div>
</div>
<div id="make-adventure" class="rows">
    <div class="fullcontainer">
        <div class="row">
            <div class="col-lg-8 col-md-12 center-block">
                <div>
                    @include('main.error')
                    <form action="{{route('new.adventure4' ,$adventure->id)}}" method="post">
                        @method('post')
                        @csrf

                        <div class="row">
                            <div class="col-lg-12">
                                <div>

                                    <div class="adv-title">
                                        <h2>محل قرار و برنامه سفر</h2>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="two-line-label">
                                        <label for="place">محل قرار  <span class="star">*</span></label>
                                        <span>محل شروع ماجراجویی را مشخص کنید</span>
                                    </div>

                                    <select name="place" id="place" class="sq">
                                        <option value="">برای انتخاب کلیک  کنید</option>
                                        <option {{old('place',$adventure->place)=='place1'?'selected':''}} value="place1">محل یک </option>
                                        <option {{old('place',$adventure->place)=='place2'?'selected':''}} value="place2">محل دو </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <div class="clr half"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="address">آدرس</label>
                                        <span>آدرس محل ماجراجویی را وارد کنید</span>
                                    </div>

                                    <input class="sq" type="text"  value="{{old('address',$adventure->address)}}" name="address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <div class="clr half"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="">موقعیت جغرافیایی</label>
                                        <span>برنامه روز به روز سفر شامل مکانهایی که بازدید میکنید، فعالیت هایی که صورت میدهید و تجربیاتی که ایجاد میکنید را شرح دهید</span>
                                    </div>
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

                                        myMap.on('click', function(e) {
                                         for(i=0;i<array.length;i++) {
                                             myMap.removeLayer(array[i]);
                                             }
                                             if(marker){
                                                 myMap.removeLayer(marker)
                                             }
                                         // myMap._panes.markerPane.remove();

                                         // alert("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng)
                                         // L.marker([e.latlng.lat, e.latlng.lat],{   title:''}).addTo(myMap);
                                         var newMarker = new L.marker(e.latlng).addTo(myMap);
                                         array.push(newMarker);

                                         var latitude = document.getElementById("latitude");
                                         var longitude = document.getElementById("longitude");
                                         latitude.setAttribute('value',e.latlng.lat);;
                                         longitude.setAttribute('value', e.latlng.lng);;
                                     });
                                     </script>


                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="clr half"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="tow-line-label">
                                        <label for="plan">برنامه سفر</label>
                                        <span>برنامه روز به روز سفر شامل مکانهایی که بازدید میکنید، فعالیت هایی که صورت میدهید و تجربیاتی که ایجاد میکنید را شرح دهید</span>
                                    </div>
                                    <textarea class="sq full" name="plan" id="plan" cols="30" rows="10">{{old('plan',$adventure->plan)}}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <div class="clr half"></div>
                                </div>
                            </div>



                            <div class="col-lg-12">
                                <div>
                                    <div class="text-center">
                                        <button class="next">بعدی</button>
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
   @endsection
