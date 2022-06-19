<option  >استان را انتخاب کنید </option>
@foreach($province->cities as $citei)
    <option value="{{$citei->id}}">{{$citei->name}}</option>
@endforeach
