@extends('main.manager')
   @section('content')
   {{ Breadcrumbs::render('travel.index') }}

   <div class="col-lg-12">
    <div class="portlet box border shadow">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h3 class="title">
                    <i class="icon-frane"></i>
                    جدول سفرها
                </h3>
            </div><!-- /.portlet-title -->
            <div class="buttons-box">
            </div><!-- /.buttons-box -->
        </div><!-- /.portlet-heading -->
        <div class="portlet-body">
                <div class="row">
                    <form action="{{route('travel.index')}}" method="get">

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
                            <th>میزبان </th>
                            <th>شروع </th>
                            <th>پایان </th>
                            <th>تعداد </th>
                            <th>نوع </th>
                            <th>تایید میجوری بان  </th>
                            <th>جنسیت </th>
                            <th>وضعیت </th>
                            <th>تایید</th>
                            <th>اقداام</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($travels as $travel )
                        <tr>
                            <td>{{ $loop->iteration + (($travels->currentPage()-1) *($travels->perPage())) }}</td>
                            <td>
                               <a target="_blank" href="{{route('user.show',$travel->user->id)}}">
                                {{$travel->user->name}}
                                {{$travel->user->family}}
                               </a>
                            </td>
                            <td>
                                {{$travel->city->name}}
                                {{$travel->province->name}}
                            </td>
                            <td>
                                @if ($travel->host)
                                {{$travel->host->name}}
                                {{$travel->host->family}}
                                @endif
                            </td>
                            <td>{{$user->fdate($travel->start,'Y-m-d')}}</td>
                            <td>{{$user->fdate($travel->end,'Y-m-d')}}</td>
                            <td>
                                {{$travel->count}}
                            </td>
                            <td>{{__('arr.'.$travel->type)}}</td>
                            <td>
                    @if ($travel->type=='private')

                                        @switch($travel->host_accept)
                                            @case(null)
                                    منتظر تایید
                                                @break
                                            @case(1)
                                    تایید شده
                                                @break
                                            @case(0)
                                    رد شده
                                                @break

                                            @default

                                        @endswitch
                        @endif

                            </td>
                            <td>{{__('arr.'.$travel->gender)}}</td>
                            <td>
                               <span class="text text-{{$travel->active?"success":'danger'}}">
                                ({{$travel->active?"فعال":'غیرفعال'}})
                               </span>
                            </td>
                            <td>
                                <span class="text text-{{$travel->confirm?"success":'danger'}}">
                                 ({{$travel->confirm?"تایید شده":'تایید نشده'}})
                                </span>
                             </td>
                            <td>{{$travel->email}}</td>

                            <td>
                                ({{$travel->confirm?"تایید شده":'تایید نشده'}})
                            @role('admin')
                            @if (!$travel->confirm)
                            <a class="btn btn-{{$travel->confirm?"danger":'primary'}} curve" href="{{route('travel.confirm',$travel->id)}}">{{$travel->confirm?"  رد":'  تایید'}}</a>

                            @endif
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
