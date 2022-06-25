@extends('main.manager')
   @section('content')
   {{ Breadcrumbs::render('user.index') }}

   <div class="col-lg-12">
    <div class="portlet box border shadow">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h3 class="title">
                    <i class="icon-frane"></i>
                    جدول همکاران
                </h3>
            </div><!-- /.portlet-title -->
            <div class="buttons-box">
                <a href="{{route('agent.create')}}" class="btn btn-success curve">همکار جدید</a>
            </div><!-- /.buttons-box -->
        </div><!-- /.portlet-heading -->
        <div class="portlet-body">
                {{-- <div class="row">
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
                </div> --}}

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>


                            <th><i class="icon-energy"></i></th>
                            <th>نام</th>
                            <th>همراه </th>
                            <th>رمز </th>
                            <th>سطح</th>
                            <th>ایمیل</th>
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
                            <td>{{$user->password}}</td>
                            <td>{{__('arr.'.$user->level)}}</td>
                            <td>{{$user->email}}</td>

                            <td>
                                @if ($user->avatar())
                                <a  class="btn btn-secondary curve" href="{{$user->avatar()}}" data-lightbox="image-1" data-title="My caption">مشاهده   </a>
                                @endif
                                @role('admin|manager')
                            <a class="btn btn-primary curve" href="{{route('agent.edit',$user->id)}}">ویرایش</a>
                            @endrole
                            @role('admin')
                                <form action="{{route('agent.destroy' ,$user->id)}}" method="POST" style="display:inline" >
                                @csrf
                                @method('delete')
                                <input type="submit"   onclick="return confirm('مایل به حذف هستید؟')" value="حذف" class="btn btn-danger curve">
                                </form>
                                @endrole
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
