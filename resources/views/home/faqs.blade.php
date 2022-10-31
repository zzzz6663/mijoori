@extends('main.site')
@section('content')

<div id="laws" class="rows">
    <div class="fullcontainer">
        <div class="row">
            {{-- <div class="col-lg-12">
                <h1>
                    سوالات متداول
                </h1>

            </div> --}}
            <div class="col-lg-12">
                {{-- <div class="ubox">

                    <ul>
                        <li>
                            <h4>
                                1- میجوری مناسب چه کسانی است؟
                            </h4>
                            <p>
                                میجوری مناسب افرادی است که به دنبال کسب تجربه‏های جدید و متفاوت هستند.
                                افرادی که به کنجکاوی و جستجوگری علاقمند هستند نیز می‏توانند در میجوری به
                                عنوان مهمان تجربه‏های جدیدی را برای خود خلق کنند.

                            </p>
                        </li>

                        <li>
                            <h4>
                                2- چگونه به میجوری اعتماد کنیم؟

                            </h4>
                            <p>
                                سایت میجوری دارای نماد اعتماد الکترونیکی از مرکز توسعه و تجارت الکترونیکی
                                است. میجوری‏بانان نیز افرادی با صلاحیت و آگاه هستند.
                            </p>
                        </li>


                        <li>
                            <h4>
                                3- امنیت برگزاری تجربه‌های میجوری چگونه تامین می‌شود؟
                            </h4>
                            <p>
                                مدارکی جهت احراز هویت و عدم سوء پیشینه از میزبان‌ها دریافت می‌کنیم.
                            </p>
                        </li>


                        <li>
                            <h4>
                                4- تجربه‌ها در میجوری چگونه برگزار می‌شود؟
                            </h4>
                            <p>
                                در میجوری تجربه‌ها بسته به شرایط میجوری‌بان‌ها و میهمان‏ها برنامه ریزی و اجرا
                                می‌شود.

                            </p>
                        </li>


                        <li>
                            <h4>
                                5- چگونه می‌توانم میجوری‏بان شوم؟
                            </h4>
                            <p>
                                به راحتی در وبسایت روی دکمه «ثبت نام» کلیک کنید و با پر کردن فرم در ادامه شما یکی از میجوری‏بان ها خواهید شد. برای اینکه میجوری‏بان شوید کافی است یک تخصص و مهارت داشته باشید که بتوانید آن را به اشتراک بگذارید.
                            </p>
                        </li>

                        <li>
                            <h4>
                                6- چگونه به محل برگزاری تجربه بروم؟
                            </h4>
                            <p>
                                هماهنگی آن با میجوری‏بان انتخابی بعد از ایجاد تجربه انجام می‏شود.

                            </p>
                        </li>
                        <li>
                            <h4>
                                7- آیا اطلاعات شخصی من برای همگان نمایش داده می‏شود؟
                            </h4>
                            <p>
                                در حالت عادی خیر. برای اطلاعات بیشتر سیاست نامه حریم خصوصی سایت میجوری را مطالعه کنید.
                            </p>
                        </li>
                        <li>
                            <h4>
                                8- آیا این امکان وجود دارد که مهمان مبلغ پرداختی را مستقیم به حساب میجوری‏بان واریز کند؟
                            </h4>
                            <p>
                                خیر، مهمانان پرداخت خود را از طریق درگاه سایت میجوری انجام میدهند. مبلغ دریافتی نیز بعد از اتمام سفر و با درخواست میجوری‏بان، واریز خواهد شد.
                            </p>
                        </li>
                        <li>
                            <h4>
                                9- آیا امکان همکاری با میجوری وجود دارد؟ شرایط همکاری با میجوری چگونه است؟
                            </h4>
                            <p>
                                بله. در صورت درخواست برای همکاری، فعالیت‌ها درخواست کننده بررسی شده و در صورت تأیید، یک جلسه‌ی حضوری ترتیب داده می‌شود تا درمورد روش‌های همکاری بحث شود.
                            </p>
                        </li>

                    </ul>
                </div> --}}

                {!!$content->val  !!}
            </div>

        </div>
    </div>
</div>

@endsection
