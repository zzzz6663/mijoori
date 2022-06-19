

@extends('main.manager')
@php
$navbar=true;
$sidebar=true;
@endphp
   @section('login')


        <!-- BEGIN WRAPPER -->
        <div class="fixed-modal-bg"></div>
        <a href="#" class="btn btn-info btn-icon btn-round btn-lg" id="toggle-dark-mode">
            <i class="icon-bulb"></i>
        </a>
        <div class="modal-page shadow">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="logo-con m-t-10 m-b-10">
                            {{-- <img src="assets/images/logo-dark.png" class="dark-logo center-block img-responsive" alt="logo">
                            <img src="assets/images/logo.png" class="light-logo center-block img-responsive" alt="logo"> --}}
                        </div><!-- /.logo-con -->

                        <h1 class="text-center m-b-20">  میجوری</h1>
                        <hr>
                        @include('main.error')
                        <form id="form" class="m-t-30 m-b-30" action="{{route('admin.check.login')}}" autocomplete="off" method="POST" role="form">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label for="email" class="sr-only">رایانامه</label>
                                <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-envelope"></i>
                                    </span>
                                    <input id="email" class="form-control ltr text-left" type="email" name="email" required>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label for="password" class="sr-only">رمز عبور</label>
                                <div class="input-group round">
                                    <span class="input-group-addon">
                                        <i class="icon-key"></i>
                                    </span>
                                    <input id="password" class="form-control ltr text-left" type="password" name="password"  required>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->
                            <div class="form-group">
                            <div id="form_id_1">

                            </div>
                            </div>
                            <p>
                                <button class="btn btn-info btn-round btn-block" type="submit">
                                    <i class="icon-paper-plane font-lg"></i>
                                    ورود
                                </button>
                            </p>
                        </form>

                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.modal-page -->
        <!-- END WRAPPER -->

        {{-- {!!  GoogleReCaptchaV2::render('form_id_1') !!} --}}
   @endsection
