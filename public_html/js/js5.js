
  var loadFile = function(event) {
    var output = document.getElementById('bl');
    output.src = URL.createObjectURL(event.target.files[0]);
    event.target.closest(".near.ancestor")
    output.onload = function() {
    //   URL.revokeObjectURL(output.src) // free memory
      URL.revokeObjectURL(output.src) // free memory
    }
  };

  function autocomplete(inp, arr) {
    // console.log(arr)
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
            b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
    document.body.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
    // document.getElementsByClassName("icon-input").addEventListener("click", function (e) {
    //     closeAllLists(e.target);
    // });

  }



window.onload = function() {






    if ($(".edit_area").length) {

        let element = $(this)
        let translate = $(this).data('translate')
        let direction = $(this).data('direction')

        console.log(direction);
        console.log(850)

        let mc = tinymce.init({
            height: "600",
            selector: '.edit_area',
            toolbar_mode: 'Wrap',
            menubar: true,
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            width: '100%',
            statusbar: true,
            directionality: 'rtl',
            content_css: '/css/tiny.css',
            // forced_root_block : 'p',
            // forced_root_block_attrs: {
            //     'class': 'myclass',
            //     'data-something': 'my data'
            //   },
            // readonly  :1,

            contextmenu: "paste",
            forced_root_block: 'div',
            plugins: [
                'textcolor', 'advlist', 'autolink', 'lineheight',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount', 'directionality'
            ],
            toolbar: "ltr rtl lineheight select  backcolor aligncenter  alignleft alignnone alignright alignjustify bold italic copy cut fontsizeselect paste formatselect undo redo bullist numlist  outdent indent removeformat ",
            // language : "fa_IR",
            lineheight_formats: "8pt 9pt 10pt 11pt 12pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 36pt",

            theme: "silver",

            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/admin/upload_image_tiny_mc',
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                console.log(12144);
                console.log(meta);
                console.log(value);
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            },
            setup: function(editor) {
                console.log(editor);
                console.log(606);
                editor.on('keyup change click', function(e) {

                });
            }

        });



    }















    if($(".my_travel").length){
        $('.my_travel').owlCarousel({
            rtl: true,
            nav: true,
            margin:28,
            responsiveClass:true,
            navText: ["<svg xmlns='http://www.w3.org/2000/svg' width='5.948' height='8.922' viewBox='0 0 5.948 8.922'><path id='_3994400_arrow_forward_navigation_next_right_icon' data-name='3994400_arrow_forward_navigation_next_right_icon' d='M24.262,15.884l4.461-3.717a.744.744,0,1,1,.953,1.143L25.9,16.455,29.675,19.6a.744.744,0,0,1-.953,1.143l-4.461-3.717a.745.745,0,0,1,0-1.143Z' transform='translate(-23.995 -11.994)'/></svg>",
            "<svg xmlns='http://www.w3.org/2000/svg' width='5.948' height='8.922' viewBox='0 0 5.948 8.922'><path id='_3994400_arrow_forward_navigation_next_right_icon' data-name='3994400_arrow_forward_navigation_next_right_icon' d='M29.675,15.884l-4.461-3.717a.744.744,0,1,0-.953,1.143l3.775,3.146L24.262,19.6a.744.744,0,1,0,.953,1.143l4.461-3.717a.745.745,0,0,0,0-1.143Z' transform='translate(-23.995 -11.994)'/></svg>"],
            responsive:{
                0:{
                    items:1
                },
                900:{
                    items:1
                },
                1400:{
                    items:1
                },
                1800:{
                    items:1
                }
            }
        })

    }
    if($(".select2").length){
        $(".select2").select2({
            rtl: true,
            containerCssClass: "round",
        });
    }































    if ($('#mycity').length) {
        let city=$('#mycity').data('city');
        // console.log(11111)
        // console.log(city)
    autocomplete(document.getElementById("mycity"), city);
}

    if ($('#goal').length) {
        let city=$('#goal').data('city');
        // console.log(city)
    autocomplete(document.getElementById("goal"), city);
}
if ($('#topse').length) {
    let city=$('#topse').data('city');
    // console.log(city)
autocomplete(document.getElementById("topse"), city);
}
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
                    // tourism: {
                    //     required: true,

                    // },
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
                    // melli_front: {
                    //     required: true,

                    // },
                    // melli_back: {
                    //     required: true,
                    // },



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
                    // address: {
                    //     required: true,
                    //     minlength: 20,
                    //     maxlength: 1500,
                    // },
                    // code: {
                    //     required: true,
                    //     minlength:10,
                    //     maxlength:10
                    // },
                    // shaba: {
                    //     required: true,
                    //     minlength:24,
                    //     maxlength:24
                    // },
                    // p_avatar: {
                    //     required: true,
                    // },



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













            $('#go_sms').click(function(){
                $('#go_sms').hide(100)
                $('#check_pass').hide(100)
                $('#upass').hide(500)
                $("#send_code").trigger("click");
             });
            $('#check_pass').click(function(){
                let mobile=$('#mobile').val();
                if(mobile.length !=11){
                    noty('        شماره همراه را به درستی وارد کنید  ', 'red', '');
                    return
                }
                let upass=$('#upass').val();
                upass = upass.replace(/\s/g, '');
                if(upass.length <1){
                    noty('      رمز عبور را به درستی وارد کنید  ', 'red', '');
                    return
                }

                load_animation()
                $.ajax('/check_pass',{
                    headers:{
                        'X-CSRF-TOKEN':document.head.querySelector('meta[name="csrf-token"]').content,
                    },
                    type:'post',
                    data:  {mobile:mobile,password:upass},
                    datatype:'json',
                    success:function (data) {
                        console.log(data)
                        stop_animation()
                        if(data.status=='login'){
                            noty('          ورود با موفقیت انجام شد  ', 'green', '');
                            setTimeout(
                                function()
                                {
                                    location.reload();
                                }, 2000);
                        }
                        if(data.status=='new'){
                            $('#check_pass').hide(100)
                            $('#send_code').show(500)
                            $('#upass').hide(500)
                            $("#send_code").trigger("click");
                            noty('        شما کاربر جدید هستید  ', 'green', '');

                        }
                        if(data.status=='failed'){
                            noty(   'اطلاعات وارد شده صحیح نمی باشد ', 'red', '');

                        }

                    },
                    error: function (request, status, error) {
                        console.log(request);
                        stop_animation()
                        noty('       مشکلی ایجاد شده     ', 'red', '');
                    }
              })
            });
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
                    password: {
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
                    password: "        یک رمز چهار رقمی انتخاب کنید  ",
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
        $('.province').on('change', function (e) {
            var ele=$(this)
            var str= {'ostan':ele.val()}
           var res= lara_ajax('/get_city/'+ele.val(),str)
           $('.city').html(res.body)
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
            let str={'mobile':mobile ,_token: document.head.querySelector('meta[name="csrf-token"]').content,}
            // console.log(document.head.querySelector('meta[name="csrf-token"]').content)
            console.log(9090)
            console.log(document.head.querySelector('meta[name="csrf-token"]').content)
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
