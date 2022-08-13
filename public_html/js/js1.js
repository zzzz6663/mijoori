
  var loadFile = function(event) {
    var output = document.getElementById('bl');
    output.src = URL.createObjectURL(event.target.files[0]);
    event.target.closest(".near.ancestor")
    output.onload = function() {
    //   URL.revokeObjectURL(output.src) // free memory
      URL.revokeObjectURL(output.src) // free memory
    }
  };

window.onload = function() {
    if (window.jQuery) {


        $('#private_travel').click(function(){
            $("#private_form").validate({
                rules: {
                    start: {
                        required: true,
                    },
                    end: {
                        required: true,
                    },
                    duration: {
                        required: true,
                    },

                    visit: {
                        required: true,
                    },
                    message: {
                        required: true,
                    },
                },
                messages: {
                    start:'لطفا زمان شروع سفر را انتخاب کنید ',
                    end:'لطفا زمان پایان سفر را انتخاب کنید ',
                    duration:'مدت زمان را انتخاب  کنید ',
                    visit:'زمان ملاقات را انتخاب کنید ',
                    message:'لطفا پیام خود را برای میزان بنویسید ',
                }
            });

            if(!$("#private_form").valid()){   // test for validity
                noty('       همه ورودی ها را به درستی وارد کنید   ', 'red', '');
              return false;
            }




            var form_data = new FormData($('#private_form')[0]);
            console.log(form_data);
            load_animation()
            $.ajax('/admin/private_travel',{
                headers:{
                    'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
                    // 'Content-Type':'application/json,charset=utf-8'
                },
                type:'post',
                data:  form_data,
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false,
                datatype:'json',
                success:function (data) {
                    stop_animation()

                    console.log(data);
                    if(data.status=='ok'){
                        noty('    اطلاعات با موفقیت ثبت شد', 'green', '');
                        setTimeout(
                            function()
                            {
                                window.open("/my_travels","_self")

                            }, 2000);
                    }else{
                        for (const item in  data) {
                            noty(   data[item], 'red', '');
                            break;
                        }
                    }

                },
                error: function (request, status, error) {
                      console.log(request);
                    console.log(status);
                    console.log(status);
                    stop_animation()
                    noty('       مشکلی ایجاد شده     ', 'red', '');
                }
          })


          });




































        if ($('#er').length) {

 $('html, body').animate({
        scrollTop: $("#er").offset().top-200
    }, 1000);
        }


        $('.offer-me').click(function(){
        let  id= $(this).data('id')
        let  name= $(this).data('name')
        let  family= $(this).data('family')
        let  city= $(this).data('city')
        $('.uname').text(name)
        $('.ufamily').text(family)
        $('.ucity').text(city)
        $('#host_id').val(id)

        $('#make-offer').show()
        })
        $('#new_travel').click(function(){
            $(".error").html('');
            $(".error").removeClass("error");
            var validator=   $("#travel_form").validate({
                rules: {
                    city_id: {
                        required: true,

                    },
                    start: {
                        required: true,

                    },
                    end: {
                        required: true,

                    },
                    count: {
                        required: true,

                    },
                    gender: {
                        required: true,

                    },
                },
                messages: {
                    city_id: {
                        required: "     شهر مقصد خود را  انتخاب کنید  ",
                    },
                    start: {
                        required: "         تاریخ شروع سفر را  انتخاب کنید  ",
                    },
                    end: {
                        required: "         تاریخ پایان سفر را  انتخاب کنید  ",
                    },
                    count: {
                        required: "               تعداد همراه خود را   انتخاب کنید  ",
                    },
                    gender: {
                        required: "       جنسیت را انتخاب کنید   ",
                    },
                    }

            });

            if(!$("#travel_form").valid()){   // test for validity
                noty('       همه ورودی ها را به درستی وارد کنید   ', 'red', '');
              return false;
            }

            var form_data = new FormData($('#travel_form')[0]);

            console.log(form_data);
            load_animation()
            $.ajax('/admin/new_travel',{
                headers:{
                    'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
                    // 'Content-Type':'application/json,charset=utf-8'
                },
                type:'post',
                data:  form_data,
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false,
                datatype:'json',
                success:function (data) {
                    stop_animation()
                    console.log(data);
                    if(data.status=='ok'){
                        noty('    اطلاعات با موفقیت ثبت شد', 'green', '');
                        setTimeout(
                            function()
                            {
                                location.href = '/my_travels';
                            }, 2000);
                    }else{
                        for (const item in  data) {
                            console.log(item);
                            console.log( data[item]);
                            noty(   data[item], 'red', '');
                            break;
                        }
                    }

                },
                error: function (request, status, error) {
                    console.log(request);
                    stop_animation()
                    noty('       مشکلی ایجاد شده     ', 'red', '');
                }
          })



         })





        if ($('.range_to').length) {
            console.log(80)

            var to, from;
            to = $(".range_to").persianDatepicker({
                initialValue: false,
                persianDigit: false,
                format: 'YYYY-MM-DD',
                autoClose: true,
                initialValueType: 'gregorian',
                calendar: {
                  persian: {
                    local: 'fa'
                  }
                },
                onSelect: function (unix) {
                    to.touched = true;
                    if (from && from.options && from.options.maxDate != unix) {
                        var cachedValue = from.getState().selected.unixDate;
                        from.options = {maxDate: unix};
                        if (from.touched) {
                            from.setDate(cachedValue);
                        }
                    }
                },     onShow: function(){
                    setTimeout(function(){
                 var a= $('.datepicker-container:not(.pwt-hide)')
                     a.addClass('sdd');
             }, 10);

                 },

            });
            from = $(".range_from").persianDatepicker({
                initialValue: false,
                persianDigit: false,
                format: 'YYYY-MM-DD',
                autoClose: true,
                initialValueType: 'gregorian',
                calendar: {
                  persian: {
                    local: 'fa'
                  }
                },
                onSelect: function (unix) {
                    from.touched = true;
                    if (to && to.options && to.options.minDate != unix) {
                        var cachedValue = to.getState().selected.unixDate;
                        to.options = {minDate: unix};
                        if (to.touched) {
                            to.setDate(cachedValue);
                        }
                    }
                },
                onShow: function(){
                    setTimeout(function(){
                 var a= $('.datepicker-container:not(.pwt-hide)')
                     a.addClass('sdd');
             }, 10);

                 },
            });

        }
        if ($('.persian').length) {
            console.log(8080)
            $(".persian").persianDatepicker({
              initialValue: true,
              persianDigit: false,
              format: 'YYYY-MM-DD',
              autoClose: true,
              initialValueType: 'gregorian',
              calendar: {
                persian: {
                  local: 'fa'
                }
              }
            });
          }

        $('.travel_pop_but').click(function(){
            $('#make_travel').fadeIn()
        });
        $('#send_be_guid3').click(function(){
            $(".error").html('');
            $(".error").removeClass("error");
            var validator=   $("#be_guid_form_3").validate({
                rules: {
                    tourism: {
                        required: true,

                    },
                },
                messages: {
                    tourism: {
                        required: "     عکس     کارت گردشگری را انتخاب کنید   ",
                    },
                    }

            });

            if(!$("#be_guid_form_3").valid()){   // test for validity
                noty('       همه ورودی ها را به درستی وارد کنید   ', 'red', '');
              return false;
            }

            var form_data = new FormData($('#be_guid_form_3')[0]);
            var file =$('#tourism')[0].files[0];;
            form_data.append('file', file);

            console.log(form_data);
            load_animation()
            $.ajax('/admin/be_guid_form_3',{
                headers:{
                    'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
                    // 'Content-Type':'application/json,charset=utf-8'
                },
                type:'post',
                data:  form_data,
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false,
                datatype:'json',
                success:function (data) {
                    stop_animation()

                    console.log(data);
                    if(data.status=='ok'){

                        noty('    اطلاعات با موفقیت ثبت شد', 'green', '');
                        setTimeout(
                            function()
                            {
                                location.reload();
                            }, 2000);
                    }else{
                        for (const item in  data) {
                            console.log(item);
                            console.log( data[item]);
                            noty(   data[item], 'red', '');
                            break;
                        }
                    }

                },
                error: function (request, status, error) {
                    console.log(error);
                    stop_animation()
                    noty('       مشکلی ایجاد شده     ', 'red', '');
                }
          })



         })





















        $('.img_pre').change(function(){
            console.log(11)
            let par = $(this).closest('.avatar-pop')
            if( $(this)[0].files.length == 0 ){
                console.log("no files selected");
            }else{
                par.css('border','3px solid #59ff59')
            }
           });
        $('#send_be_guid2').click(function(){
            $(".error").html('');
            $(".error").removeClass("error");
            var validator=   $("#be_guid_form_2").validate({
                rules: {
                    melli_front: {
                        required: true,

                    },
                    melli_back: {
                        required: true,
                    },



                },
                messages: {
                    melli_front: {
                        required: "     عکس جلوی کارت ملی را انتخاب کنید   ",
                    },
                    melli_back: {
                        required: "     عکس پشت کارت ملی را انتخاب کنید   ",
                    },
                }
            });

            if(!$("#be_guid_form_2").valid()){   // test for validity
                noty('       همه ورودی ها را به درستی وارد کنید   ', 'red', '');
              return false;
            }

            var form_data = new FormData($('#be_guid_form_2')[0]);
            var file =$('#melli_front')[0].files[0];;
            form_data.append('file', file);
            var file =$('#melli_back')[0].files[0];;
            form_data.append('file', file);
            console.log(form_data);
            load_animation()
            $.ajax('/admin/be_guid_form_2',{
                headers:{
                    'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
                    // 'Content-Type':'application/json,charset=utf-8'
                },
                type:'post',
                data:  form_data,
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false,
                datatype:'json',
                success:function (data) {
                    console.log(data);
                    stop_animation()

                    if(data.status=='ok'){
                        $('.pop').fadeOut();
                        $('#be_guid_pop_3').fadeIn();
                    }else{
                        for (const item in  data) {
                            console.log(item);
                            console.log( data[item]);
                            noty(   data[item], 'red', '');
                            break;
                        }
                    }

                },
                error: function (request, status, error) {
                    console.log(error);
                    stop_animation()
                    noty('       مشکلی ایجاد شده     ', 'red', '');
                }
          })



         })

            $('#be_guid').click(function(){
                $('#be_guid_pop_1').fadeIn();
           });
          $('#send_be_guid1').click(function(){
            $(".error").html('');
            $(".error").removeClass("error");
            var validator=   $("#be_guid_form_1").validate({
                rules: {
                    address: {
                        required: true,
                        minlength: 20,
                        maxlength: 1500,
                    },
                    code: {
                        required: true,
                        minlength:10,
                        maxlength:10
                    },
                    shaba: {
                        required: true,
                        minlength:24,
                        maxlength:24
                    },
                    p_avatar: {
                        required: true,
                    },



                },
                messages: {

                    address: {
                        required: "ادرس را وارد کنید  ",
                        minlength: "حداقل باید 20 کاراکتر وارد کنید ",
                        maxlength:"حداکثر باید 1500 کارکتر وارد کنید "
                    },
                    code: {
                        required: "لطفا نام کد ملی خود را وارد کنید ",
                        minlength: "تعداد ارقام کد ملی 10 رقم میباشد ",
                        maxlength: "تعداد ارقام کد ملی 10 رقم میباشد ",
                    },
                    shaba: {
                        required: "لطفا   شماره شبا خود را وارد کنید ",
                        minlength: "تعداد شبا کد ملی 24 رقم میباشد ",
                        maxlength: "تعداد شبا کد ملی 24 رقم میباشد ",
                    },
                    p_avatar: {
                        required: "عکس پرسنلی خود را انتخاب کنید          ",

                    },

                }
            });

            if(!$("#be_guid_form_1").valid()){   // test for validity
                noty('       همه ورودی ها را به درستی وارد کنید   ', 'red', '');
              return false;
            }

            var form_data = new FormData($('#be_guid_form_1')[0]);
            var file =$('#p_avatar')[0].files[0];;
            form_data.append('file', file);
            console.log(form_data);
            load_animation()
            $.ajax('/admin/be_guid_form_1',{
                headers:{
                    'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
                    // 'Content-Type':'application/json,charset=utf-8'
                },
                type:'post',
                data:  form_data,
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false,
                datatype:'json',
                success:function (data) {
                    console.log(data);
                    stop_animation()
                    if(data.status=='ok'){
                        $('.pop').fadeOut();
                        $('#be_guid_pop_2').fadeIn();
                    }else{
                        for (const item in  data) {
                            console.log(item);
                            console.log( data[item]);
                            noty(   data[item], 'red', '');
                            break;
                        }
                    }

                },
                error: function (request, status, error) {
                    console.log(error);
                    stop_animation()
                    noty('       مشکلی ایجاد شده     ', 'red', '');
                }
          })



         })













            $('#send_use_basic_info').click(function(){
            $("#signupForm").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    family: {
                        required: true,
                        minlength: 2
                    },
                    gender: {
                        required: true,
                    },

                    email: {
                        required: true,
                        email: true
                    },

                    province_id: {
                        required: true,
                    },
                    city_id: {
                        required: true,
                    },
                    avatar: {
                        required: true,

                    },

                },
                messages: {

                    name: {
                        required: "لطفا نام خود را وارد کنید ",
                        minlength: "نام حداقل باید دو کاراکتر باشد"
                    },
                    family: {
                        required: "لطفا نام خانوادگی خود را وارد کنید ",
                        minlength: "نام خانوادگی حداقل باید دو کاراکتر باشد"
                    },

                    gender: "لطفا جنسیت خود را انتخاب کنید ",
                    b_date: "لطفا تاریخ تولد خود را وارد کنید  ",
                    email: "لطفا ایمیل خود را به درستی وارد کنید ",
                    province_id: "استان خود را انتخاب کنید ",
                    city_id: "شهر خود را انتخاب کنید ",
                    avatar: "آواتار خود را انتخاب کنید  ",
                }
            });

            if(!$("#signupForm").valid()){   // test for validity
                noty('       همه ورودی ها را به درستی وارد کنید   ', 'red', '');
              return false;
            }




            var form_data = new FormData($('#signupForm')[0]);
            var file =$('#avatar')[0].files[0];;
            form_data.append('file', file);
            console.log(form_data);
            load_animation()
            $.ajax('/admin/user_basic_info_update',{
                headers:{
                    'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
                    // 'Content-Type':'application/json,charset=utf-8'
                },
                type:'post',
                data:  form_data,
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false,

                datatype:'json',
                success:function (data) {
                    stop_animation()

                    console.log(data);
                    if(data.status=='ok'){
                        noty('    اطلاعات با موفقیت ثبت شد', 'green', '');
                        setTimeout(
                            function()
                            {
                                location.reload();
                            }, 2000);
                    }else{
                        for (const item in  data) {
                            console.log(item);
                            console.log( data[item]);
                            noty(   data[item], 'red', '');

                            break;
                        }
                    }

                },
                error: function (request, status, error) {
                      console.log(request);
                    console.log(status);
                    console.log(status);
                    stop_animation()
                    noty('       مشکلی ایجاد شده     ', 'red', '');
                }
          })

            // $('#avatar').simpleUpload("/admin/user_basic_info_update", {
            //     data:str,
            //     headers:{
            //         'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
            //         // 'Content-Type':'application/json,charset=utf-8'
            //     },
            //     beforeSend: function(jqXHR, settings){
            //         jqXHR.setRequestHeader('x-access-token', document.head.querySelector('meta[name="csrf-token"]').content);


            //     },
            //     start: function(file){
            //         console.log('start')
            //     },
            //     progress: function(progress){
            //         console.log("upload progress: " + Math.round(progress) + "%");
            //     },
            //     success: function(data){
            //         console.log(data)
            //         //upload successful
            //     },
            //     error: function(error){
            //         console.log(error)
            //     }

            // });
          });


















        if ($('.persian').length){
            $(".persian").persianDatepicker({
                initialValue: true,
                persianDigit : false,
                format: 'YYYY-MM-DD',
                autoClose: true,
                initialValueType:'gregorian',
                calendar:{
                    persian: {
                        local: 'fa'
                    }
                }

            });
        }

        // Form on enter next div...
$(document).on("keyup", '.square1', function(e) {
    console.log(333333)
    $(this).css({'border' : '2px solid #1955ff '});
    // $(this).css(' animation-name', 'zoom');
    // $(this).css(' animation-duration', '200ms');
  });


  $("#advfile").on('change',function(){
    console.log( this.files.length)
    $('#image_count').text(this.files.length + 'عکس انتخاب شد')
    for (var i = 0; i < this.files.length; i++)
    {
        console.log(this.files[i].name);
        console.log(this.files.item(i).name); // alternatively
    }

});
        $('#province').on('change', function (e) {
            var ele=$(this)
            var str= {'ostan':ele.val()}
           var res= lara_ajax('/get_city/'+ele.val(),str)
           $('#city').html(res.body)
        });




        $('.register').click(function(){
           $('#register_pop').fadeIn();
        })


        $('.pop-close').click(function(){
            $(this).closest('.pop').fadeOut();

        })
        let code

        $('#send_code').click(function(){
            let mobile=$('#mobile').val();
            if(mobile.length !=11){
                noty('        شماره همراه را به درستی وارد کنید  ', 'red', '');
                return
            }
            let str={'mobile':mobile}
            // console.log(document.head.querySelector('meta[name="csrf-token"]').content)
            console.log(8080)
            load_animation()

            $.ajax('/send_verify_code',{
                type:'post',
                data:  str,
                headers:{
                    'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
                    // 'Content-Type':'application/json,charset=utf-8'
                },
                datatype:'json',
                success:function (data) {
                    stop_animation()
                    console.log(data);
                    code=data.code
                    // alert(code)
                    noty('         کد ورود با موفقیت ارسال شد    ', 'green', '');
                    $('#code_box').fadeIn()
                    $('#check_code').fadeIn()
                    $('#send_code').fadeOut()
                    $('.square1 ').eq(0).focus()
                },
                error: function (request, status, error) {
                    console.log(request)
                    stop_animation()
                    noty('       مشکلی ایجاد شده     ', 'red', '');
                }
          })


        })
        let count=0
        $('#check_code').click(function(){
            var inp=''
            $('.square1 ').each(function(i, obj) {
                 inp+=$(this).val();
                 console.log(i)
            });
           if(inp==code){
            $.ajax('/auth_login',{
                type:'post',
                data:  {'checked':true},
                headers:{
                    'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
                    // 'Content-Type':'application/json,charset=utf-8'
                },
                datatype:'json',
                success:function (data) {
                    stop_animation()
                    console.log(data);
                    noty(' ورود با موفقیت انجام شد   ', 'green', '');
                   if(data.status==1){
                    setTimeout(
                        function()
                        {
                            location.reload();
                        }, 2000);
                   }else{
                    $('.pop-close').closest('.pop').fadeOut();
                    $('#get_user_info').fadeIn()

                   }


                },
                error: function (request, status, error) {
                    console.log(request);
                    console.log(status);
                    console.log(status);
                    stop_animation()
                    noty('       مشکلی ایجاد شده     ', 'red', '');
                }
          })
           }else{
            noty('        کد وارد شده اشتباه میباشد   ', 'red', '');
            $('.square1 ').each(function(i, obj) {
                $(this).val('');
                $(this).css({'border' : 'none'});

           });
           $('.square1 ').eq(0).focus()
            count++

           }
           if(count==5){
            noty('         تعداد تلاش های شما بیشتر از حد مجاز بود    ', 'red', '');
            setTimeout(
                function()
                {
                    location.reload();

                }, 3000);
           }

        })

        $('html').keyup(function(e){if(e.keyCode == 8){

            $('.square1 ').each(function(i, obj) {
              if($(this).is(":focus")){
                  console.log(i)
                  if(i>0){
                    let v=i-1
                    $('.square1 ').eq(v).focus();
                    $('.square1 ').eq(v).val('')
                  }

              }
           });
        }})






















    }
}
