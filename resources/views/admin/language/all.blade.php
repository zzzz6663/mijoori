
@extends('main.manager')
   @section('content')
   {{ Breadcrumbs::render('language.index') }}
    <div class="col-lg-12">
        <div class="portlet box border shadow">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h3 class="title">
                        <i class="icon-frane"></i>
                        جدول زبان  ها
                    </h3>
                </div><!-- /.portlet-title -->
                <div class="buttons-box">
                    <a href="{{route('language.create')}}" class="btn btn-success curve">زبان جدید</a>
                </div>
            </div><!-- /.portlet-heading -->
            <div class="portlet-body">
                <form action="{{route('language.index')}}" method="get">
                    @csrf
                    @method('get')
                    <div class="row">
                        {{-- <div class="col-lg-3">
                            <div class="form-group row">
                                <label class="col-sm-3">جست و جو</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="search" value="{{request('search')}}" placeholder=" نام شهر یا استان   ">
                                </div>
                            </div>
                        </div> --}}

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
                        {{-- <div class="col-lg-3">
                            <div class="form-group row">
                                <button class="btn btn-danger curve" ">ثبت</button>
                            </div>
                        </div> --}}
                    </div>

                </form>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><i class="icon-energy"></i></th>
                                <th>نام</th>
                                <th>   تعداد اشخاص </th>
                                <th>  اقدام </th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($languages as $language)
                           {{-- {{ $loop->iteration + (($users->currentPage()-1) *($users->perPage())) }} --}}

                           <tr>
                            <td>{{$loop->iteration }}</td>
                            <td>{{$language->name}}</td>

                            <td>{{$language->users()->count()}}
                            مشتری
                            </td>
                            <td>
                                <a class="btn btn-primary curve" href="{{route('language.edit',$language->id)}}">
                                    تغییر نام
                                </a>

                            </td>
                        </tr>

                           @endforeach
                        </tbody>
                    </table>
                    <div class="pagi">
                        {{ $languages->appends(Request::all())->links('admin.section.pagination') }}
                    </div>
                </div><!-- /.table-responsive -->
            </div><!-- /.portlet-body -->
        </div><!-- /.portlet -->
    </div>


   @endsection
