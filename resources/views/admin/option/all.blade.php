
@extends('main.manager')
   @section('content')
   {{-- {{ Breadcrumbs::render('province.index') }} --}}
   <div class="col-lg-6">
    <div class="portlet box border shadow">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h3 class="title">
                    <i class="fa fa-spinner"></i>
                   صفحات داخلی
                </h3>
            </div><!-- /.portlet-title -->
            <div class="buttons-box">

            </div><!-- /.buttons-box -->
        </div><!-- /.portlet-heading -->
        <div class="portlet-body">
            <p>
               <a class="btn btn-info ladda-button" href="{{ route('option.edit2',['name'=>'about']) }}">
                درباره ما
               </a>
               <a class="btn btn-info ladda-button" href="{{ route('option.edit2',['name'=>'laws']) }}">
                قوانین
               </a>
               <a class="btn btn-info ladda-button" href="{{ route('option.edit2',['name'=>'faqs']) }}">
                سوالات متداول
               </a>
               <a class="btn btn-info ladda-button" href="{{ route('option.edit2',['name'=>'how']) }}">
                میجوری چگونه کار میکند؟
               </a>
               <a class="btn btn-info ladda-button" href="{{ route('option.edit2',['name'=>'privacy']) }}">
                حریم خصوصی
               </a>

            </p>
        </div><!-- /.portlet-body -->
    </div><!-- /.portlet -->
</div>
   @endsection
