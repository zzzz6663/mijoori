
@extends('main.manager')
   @section('content')
   {{ Breadcrumbs::render('province.index') }}
    <div class="col-lg-12">
        <div class="portlet box border shadow">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h3 class="title">
                        <i class="icon-frane"></i>
                        جدول استان ها
                    </h3>
                </div><!-- /.portlet-title -->
                <div class="buttons-box">

                </div><!-- /.buttons-box -->
            </div><!-- /.portlet-heading -->
            <div class="portlet-body">
                <form action="">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group row">
                                <label class="col-sm-3">نام</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="نام">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group row">
                                <label class="col-sm-3">نام</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="نام">
                                </div>
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
                                <th>   تعداد شهرستان </th>
                                <th>   تعداد اشخاص </th>
                                <th>  اقدام </th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach (App\Models\Province::all() as $province)
                           {{-- {{ $loop->iteration + (($users->currentPage()-1) *($users->perPage())) }} --}}

                           <tr>
                            <td>{{$loop->iteration }}</td>
                            <td>{{$province->name}}</td>
                            <td>{{$province->cities()->count()}}
                            شهر
                            </td>
                            <td>{{$province->users()->count()}}
                            مشتری
                            </td>
                            <td>

                                @role('admin|manager')
                                <a class="btn btn-primary curve" href="{{route('province.edit',$province->id)}}">
                                    عکس
                                </a>
@endrole
                                @if ($province->image())
                                <a  class="btn btn-secondary curve" href="{{$province->image()}}" data-lightbox="image-1" data-title="My caption">مشاهده   </a>

                                @endif
                                @if ($province->users()->count())

                                <a class="btn btn-success curve" href="{{route('province.show',$province->id)}}">
                                    لیست اشخاص
                                </a>
                                @endif

                            </td>
                        </tr>

                           @endforeach
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
            </div><!-- /.portlet-body -->
        </div><!-- /.portlet -->
    </div>


   @endsection
