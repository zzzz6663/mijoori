
@extends('main.manager')
   @section('content')
   {{ Breadcrumbs::render('city.index') }}
    <div class="col-lg-12">
        <div class="portlet box border shadow">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h3 class="title">
                        <i class="icon-frane"></i>
                        جدول شهر ها
                    </h3>
                </div><!-- /.portlet-title -->
                <div class="buttons-box">

                </div><!-- /.buttons-box -->
            </div><!-- /.portlet-heading -->
            <div class="portlet-body">
                <form action="{{route('city.index')}}" method="get">
                    @csrf
                    @method('get')
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group row">
                                <label class="col-sm-3">جست و جو</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="search" value="{{request('search')}}" placeholder=" نام شهر یا استان   ">
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-lg-3">
                            <div class="form-group">
                                <div class="form-group row">
                                    <label class="col-sm-3">استان</label>

                                    <div class="col-sm-9">
                                        <select class="form-control" name="province" >
                                            <option value="">  یک مورد را انتخاب کنید</option>
                                            @foreach (App\Models\Province::all() as $pro )
                                                <option {{request('province')==$pro->id ? ' selected':''}} value="{{$pro->id}}">{{ $pro->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- /.input-group -->
                            </div>
                        </div> --}}
                        <div class="col-lg-3">
                            <div class="form-group row">
                                <button class="btn btn-danger curve" ">ثبت</button>
                            </div>
                        </div>
                    </div>

                </form>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><i class="icon-energy"></i></th>
                                <th>نام</th>
                                <th>     نام استان </th>
                                <th>   تعداد اشخاص </th>
                                <th>  اقدام </th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($cities as $city)
                           {{-- {{ $loop->iteration + (($users->currentPage()-1) *($users->perPage())) }} --}}

                           <tr>
                            <td>{{$loop->iteration }}</td>
                            <td>{{$city->name}}</td>
                            <td>{{$city->province->name}}

                            </td>
                            <td>{{$city->users()->count()}}
                            مشتری
                            </td>
                            <td>

                                @role('admin|manager')
                                <a class="btn btn-primary curve" href="{{route('city.edit',$city->id)}}">
                                    تغییر عکس
                                </a>
                                 @endrole
                                @if ($city->image())
                                <a  class="btn btn-secondary curve" href="{{$city->image()}}" data-lightbox="image-{{$city->image}}" data-title="My caption">مشاهده عکس   </a>
                                @endif
                                @if ($city->banner())
                                <a  class="btn btn-secondary curve" href="{{$city->banner()}}" data-lightbox="image-{{$city->banner}}" data-title="My caption">مشاهده بنر   </a>
                                @endif

                                @if ($city->users()->count())
                                <a class="btn btn-success curve" href="{{route('city.show',$city->id)}}">
                                    لیست اشخاص
                                </a>
                                @endif

                            </td>
                        </tr>

                           @endforeach
                        </tbody>
                    </table>
                    <div class="pagi">
                        {{ $cities->appends(Request::all())->links('admin.section.pagination') }}
                    </div>
                </div><!-- /.table-responsive -->
            </div><!-- /.portlet-body -->
        </div><!-- /.portlet -->
    </div>


   @endsection
