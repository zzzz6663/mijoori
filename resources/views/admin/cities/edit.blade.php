
@extends('main.manager')
   @section('content')
   {{ Breadcrumbs::render('city.edit',$city) }}
    <div class="col-lg-6">
        <div class="portlet box border shadow">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h3 class="title">
                        <i class="icon-frane"></i>
                        به روز رسانی تصویر  شهر
                        {{$city->name}}
                    </h3>
                </div><!-- /.portlet-title -->
                <div class="buttons-box">

                </div><!-- /.buttons-box -->
            </div><!-- /.portlet-heading -->
            <div class="portlet-body">
                @include('main.error')
                <form action="{{route('city.update',$city->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="form-group relative">
                                <input type="file"  accept="image/*" name="image" class="form-control">
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
                            </div>

                            <div class="form-group relative">
                                <input type="file"  accept="image/*" name="banner" class="form-control">
                                <label>آپلود بنر</label>
                                <div class="input-group round">
                                    <input type="text" class="form-control file-input" placeholder="برای آپلود کلیک کنید">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info">
                                            <i class="icon-picture"></i>
                                            آپلود بنر
                                        <div class="paper-ripple"><div class="paper-ripple__background"></div><div class="paper-ripple__waves"></div></div></button>
                                    </span>
                                </div><!-- /.input-group -->
                                <div class="help-block"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3">توضیحات </label>
                                <div class="col-sm-9">
                                    <textarea class="form-control edit_area" name="info" rows="5" placeholder="info">{{ old('info',$city->info) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group relative">
                                <button type="submit" class="btn btn-info curve">
                                    ذخیره
                                <div class="paper-ripple"><div class="paper-ripple__background"></div><div class="paper-ripple__waves"></div></div></button>
                            </div>
                        </div>

                    </div>

                </form>

            </div><!-- /.portlet-body -->
        </div><!-- /.portlet -->
    </div>
   @endsection
