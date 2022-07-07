@extends('main.manager')
@section('content')
{{ Breadcrumbs::render('agent.edit',$agent) }}

<div class="col-lg-6">
    <div class="portlet box border shadow">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h3 class="title">
                    <i class="icon-frane"></i>
                    ویرایش همکار
                    {{$agent->name}}
                    {{$agent->family}}
                </h3>
            </div><!-- /.portlet-title -->
            <div class="buttons-box">

            </div><!-- /.buttons-box -->
        </div><!-- /.portlet-heading -->
        <div class="portlet-body">
            @include('main.error')
            <form role="form" action="{{route('agent.update' ,$agent->id)}}" method="post"" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-body">
                    <div class="form-group">
                        <label>نام</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon-user"></i>
                            </span>
                            <input type="text" name="name" value="{{old('name',$agent->name)}}" class="form-control" placeholder="نام">
                        </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label>نام خانوادگی</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon-user"></i>
                            </span>
                            <input type="text" name="family" value="{{old('family',$agent->family)}}" class="form-control" placeholder="نام خانوادگی">
                        </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label> همراه</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </span>
                            <input type="number" name="mobile" value="{{old('mobile',$agent->mobile)}}" class="form-control" placeholder="همراه">
                        </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label> رمز عبور</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                            <input type="text" name="password" value="{{old('password',$agent->password)}}" class="form-control" placeholder="رمز">
                        </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label> ایمیل</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon-envelope"></i>
                            </span>
                            <input type="email" name="email" value="{{old('email',$agent->email)}}" class="form-control" placeholder="ایمیل">
                        </div><!-- /.input-group -->
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>سطح کاربری</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon-options"></i>
                            </span>
                            <select name="level"  class="form-control">
                                <option {{old('level',$agent->level)=='manager'?'selected':''}} value="manager">  مدیر</option>
                                <option {{old('level',$agent->level)=='analyzer'?'selected':''}} value="analyzer">  تحلیل گر</option>
                            </select>
                        </div><!-- /.input-group -->
                    </div><!-- /.form-group -->


                    <div class="form-group relative">
                        <input type="file" class="form-control" type="file" accept="image/*" name="avatar">
                        <label>آپلود فایل</label>
                        <div class="input-group round">
                            <input type="text" class="form-control file-input" placeholder="برای آپلود کلیک کنید">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info">
                                    <i class="icon-picture"></i>
                                    آپلود عکس
                                <div class="paper-ripple"><div class="paper-ripple__background"></div><div class="paper-ripple__waves"></div></div></button>
                            </span>
                        </div><!-- /.input-group -->
                        <div class="help-block"></div>
                        <img src="{{$agent->avatar()}}" alt="">
                    </div><!-- /.form-group -->
                </div><!-- /.form-body -->

                <div class="form-actions">
                    <button type="submit" class="btn btn-info btn-round">
                        <i class="icon-check"></i>
                        ذخیره
                    <div class="paper-ripple"><div class="paper-ripple__background"></div><div class="paper-ripple__waves"></div></div></button>

                </div><!-- /.form-actions -->
            </form>

        </div><!-- /.portlet-body -->
    </div><!-- /.portlet -->
</div>


<div class="breadcrumb-box border shadow">
    <ul class="breadcrumb">
        <a href="{{route('agent.index')}}" class="btn btn-danger">برگشت</a>
    </ul>

</div><!-- /.breadcrumb-left -->
</div>
@endsection
