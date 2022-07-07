@extends('main.manager')
   @section('content')
   {{ Breadcrumbs::render('adventure.index') }}

   <div class="col-lg-12">
    <div class="portlet box border shadow">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h3 class="title">
                    <i class="icon-frane"></i>
                    جدول ماجراجویی
                </h3>
            </div><!-- /.portlet-title -->
            <div class="buttons-box">
            </div><!-- /.buttons-box -->
        </div><!-- /.portlet-heading -->
        <div class="portlet-body">
                <div class="row">
                    <form action="{{route('adventure.index')}}" method="get">

                    <div class="col-lg-3">
                        <div class="form-group row">
                            <label class="col-sm-3">جست و جو</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="search" value="{{request('search')}}" placeholder="  نام و موبایل و ....  ">
                            </div>
                        </div>
                    </div>
                        @csrf
                        @method('get')
                    <div class="col-lg-3">
                        <div class="form-group row">
                            <button class="btn btn-danger curve" ">ثبت</button>
                        </div>
                    </div>
                </form>
                </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>


                            <th><i class="icon-energy"></i></th>
                            <th>نام</th>
                            <th>شهر </th>
                            <th>تعداد </th>
                            <th>دسته بندی </th>
                            <th>وضعیت </th>
                            <th>تایید</th>
                            <th>اقداام</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($adventures as $adventure )
                        <tr>
                            <td>{{ $loop->iteration + (($adventures->currentPage()-1) *($adventures->perPage())) }}</td>
                            <td>
                               <a target="_blank" href="{{route('user.show',$adventure->user->id)}}">
                                {{$adventure->user->name}}
                                {{$adventure->user->family}}
                               </a>
                            </td>
                            <td>
                                {{$adventure->city->name}}
                                {{$adventure->province->name}}
                            </td>
                            <td>
                                {{$adventure->count}}
                            </td>
                            <td>
                                {{__('arr.'.$adventure->cat)}}
                            </td>
                            <td>
                                @if ($adventure->stage==5)
تکمیل شده
                                @else
                                در مرحله
                            {{$adventure->stage}}
                                @endif

                            </td>

                            <td>
                                <span class="text text-{{$adventure->confirm?"success":'danger'}}">
                                 ({{$adventure->confirm?"تایید شده":'تایید نشده'}})
                                </span>
                             </td>

                            <td>
                                ({{$adventure->confirm?"تایید شده":'تایید نشده'}})
                            @role('admin')
                            @if (!$adventure->confirm)
                            <a class="btn btn-{{$adventure->confirm?"danger":'primary'}} curve" href="{{route('adventure.confirm',$adventure->id)}}">{{$adventure->confirm?"  رد":'  تایید'}}</a>
                            @endif
                                @endrole
                            <a href="{{route('adventure.show',$adventure->id)}}" class="btn btn-success curve">جزئیات</a>

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
