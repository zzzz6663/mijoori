@extends('main.manager')
   @section('content')
   {{ Breadcrumbs::render('user.index') }}

   <div class="col-lg-12">
    <div class="portlet box border shadow">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h3 class="title">
                    <i class="icon-frane"></i>
                    جدول کاربران
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
                            <label class="col-sm-3">جست و جو</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="search" value="{{request('search')}}" placeholder="  نام و موبایل و ....  ">
                            </div>
                        </div>
                    </div>
                    <form action="{{route('user.index')}}" method="get">
                        @csrf
                        @method('get')
                    <div class="col-lg-3">
                        <div class="form-group row">
                            <button class="btn btn-danger curve" ">ثبت</button>
                        </div>
                    </div>
                </form>
                </div>

            </form>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>


                            <th><i class="icon-energy"></i></th>
                            <th>نام</th>
                            <th>همراه </th>
                            <th>ایمیل</th>
                            <th>مکان </th>
                            <th>بیشتر</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user )

                        <tr>
                            <td>{{ $loop->iteration + (($users->currentPage()-1) *($users->perPage())) }}</td>
                            <td>
                                {{$user->name}}
                                {{$user->family}}
                            </td>
                            <td>{{$user->mobile}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                {{$user->province?$user->province->name:''}}
                                {{$user->city?$user->city->name:''}}
                            </td>
                            <td>

                            <a class="btn btn-primary curve" href="{{route('user.show',$user->id)}}">پروفایل</a>
                              @role('admin|manager')
                                   <a class="btn btn-info curve" href="{{route('user.edit',$user->id)}}">ویرایش</a>
                                @endrole
                                @if ($user->travels()->count()>0)
                                <a class="btn btn-warning curve" href="{{route('travel.index',['mobile'=>$user->mobile])}}">سفر ها</a>
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
