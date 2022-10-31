
@extends('main.manager')
   @section('content')

   <div class="col-lg-6">
    <div class="portlet box border shadow">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h3 class="title">
                    <i class="fa fa-spinner"></i>
                  ویرابش محتوای صفحه
                  @switch(request('name'))
                      @case('about')
                      درباره ما
                          @break
                      @case('laws')
                      قوانین و مقررات
                          @break
                      @case('faqs')
                      سوالات متداول
                          @break
                      @case('privacy')
                      حریم خصوصی
                          @break
                      @case('how')
                      میجوری چه طور کار میکند
                          @break
                      @default

                  @endswitch
                </h3>
            </div><!-- /.portlet-title -->
            <div class="buttons-box">

            </div><!-- /.buttons-box -->
        </div><!-- /.portlet-heading -->
        <div class="portlet-body">
           <form action="{{ route('option.edit2') }}" method="post" >
            @csrf
            @method('post')
            <div class="form-group">
                <div class="input-group">
                    <input hidden type="text" value="{{$name }}" name="name">
                    <textarea  class="form-control edit_area" name="{{$name }}"  rows="5" placeholder="">@if ($content)
                        {!!$content->val  !!}
                    @endif
                    </textarea>
                </div><!-- /.input-group -->
                <br>
                <input type="submit" value="ذخیره" class="btn curve  btn-success">
            </div>

        </form>
        </div><!-- /.portlet-body -->
    </div><!-- /.portlet -->
</div>

   @endsection
