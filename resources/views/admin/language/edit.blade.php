
@extends('main.manager')
@section('content')
{{ Breadcrumbs::render('language.edit',$language) }}

 <div class="col-lg-6">
     <div class="portlet box border shadow">
         <div class="portlet-heading">
             <div class="portlet-title">
                 <h3 class="title">
                     <i class="icon-frane"></i>
                     به روز رسانی  زبان
                     {{$language->name}}

                 </h3>
             </div><!-- /.portlet-title -->
             <div class="buttons-box">

             </div><!-- /.buttons-box -->
         </div><!-- /.portlet-heading -->
         <div class="portlet-body">
             @include('main.error')
             <form action="{{route('language.update',$language->id )}}" method="post"  >
                 @csrf
                 @method('PATCH')
                 <div class="row">
                     <div class="col-lg-12">


                         <div class="form-group relative">
                             <label>  نام زبان</label>

                             <input type="text"    name="name" value="{{old('name',$language->name)}}" class="form-control">

                         </div>
                         <div class="form-group relative">
                             <button type="submit" class="btn btn-info curve">
                                 ویرایش
                             <div class="paper-ripple"><div class="paper-ripple__background"></div><div class="paper-ripple__waves"></div></div></button>
                         </div>
                     </div>

                 </div>

             </form>

         </div><!-- /.portlet-body -->
     </div><!-- /.portlet -->
 </div>
@endsection
