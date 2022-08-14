@extends('main.site')
   @section('content')
   <div id="make-offer-top" class="rows">
    <div class="fullcontainer">
        <h3>با
            {{-- {{$travel->user->id}} --}}
            {{$travel->user->name}}
            {{$travel->user->family}}
            رزرو کنید
        {{-- {{auth()->user()->id}} --}}
        </h3>
        @if ($travel->host_accept)
        @php
        $to=$travel->host->id;
               if ($travel->host->id==auth()->user()->id){
                $to=$travel->user->id;
               }


        @endphp
        @include('main.error')
        <form action="{{route('send.chat')}}" method="post">
            @csrf
            @method('post')
            <textarea  id="" cols="30" rows="10" name="chat" placeholder="پیام شخصی"></textarea>
            <input type="text" name="to" value="{{$to}}" hidden>
            <input type="text" name="travel" value="{{$travel->id}}" hidden>
            <button class="btn">ارسال پیام</button>
        </form>
        @endif
    </div>
</div>

<div id="make-offer" class="rows">
    <div class="fullcontainer">
        @if ($travel->host)
        @if ($travel->host->id != auth()->user()->id )

        <div class="make-offer-side">
            <div class="top">
                <div class="img">
                    <img src="{{$travel->host->avatar()}}" alt="">
                </div>
                <div class="name">
                    <h4>
                          {{$travel->host->name}}
                          {{$travel->host->family}}
                    </h4>
                </div>
                <div class="price">
                    <span>200/000</span>
                    <span>تومان</span>
                </div>
                <div class="city">
                    <span>{{$travel->city->name}}</span>
                </div>
                <div class="view">
                    <a href="{{route('profile',$travel->host->id)}}">مشاهده پروفایل</a>
                </div>
                <div class="stat">
                    <div class="views">
                        <span class="title">بازدید</span>
                        <span>22 نفر</span>
                    </div>
                    <div class="rate">
                        <span class="title">
                            امتیاز
                        </span>
                        <span class="stars">
                            @include('home.parts.rate',['rate'=>$travel->host->rates()])

                        </span>
                    </div>
                </div>
            </div>
            <div class="bot">
                <ul>
                    <li><a href="#">درباره میجوری</a></li>
                    <li><a href="#">اطلاعات </a></li>
                    <li><a href="#">امنیت حساب</a></li>
                </ul>
            </div>
        </div>
        @endif

        @endif

    @if ($travel->host_accept)

    <div class="make-offer-content-msg">
        <div class="title">
            <h3>پیام های دریافتی</h3>
        </div>



        @foreach ($travel->chats()->latest()->get() as $chatys )
        <div class="offer-content-msg {{$chatys->to->id==$user->id ? '':'rev'}}">


            <div class="img">
                <img src="{{$chatys->to->id==$user->id ? $chatys->from->avatar():$user->avatar()}}" alt="">
               {{-- <img src="/media/avatar/{{$chatys->to->id==$user->id ?$chatys->to->avatar:$chatys->from->avatar}}" alt="{{$chatys->to->id==$user->id ?$chatys->to->name:$chatys->from->name}}"> --}}
            </div>
            <div class="left">
                <div class="msg">
                  {{ $chatys->chat}}

                </div>
                <div class="msg-time">
                    <span>             {{ $chatys->created_at->diffForHumans() }}</span>
                </div>
            </div>
        </div>
        @endforeach





    </div>
        @else
        <div class="make-offer-content">
            <div class="mtitle">
                <h3>


                    @if ($travel->host)


                     @if ($travel->host->id==auth()->user()->id)

                     <a href="{{route('profile',$travel->user->id)}}">
                        {{$travel->user->name}}
                        {{$travel->user->family}}
                    </a>
                    درخواست سفر در
                    {{$travel->city?$travel->city->name:''}}

                    را دارد
                    @else

                    <a href="{{route('profile',$travel->host->id)}}">
                        {{$travel->host->name}}
                        {{$travel->city?$travel->city->name:''}}
                    </a>


                    @endif
                    @endif

                    </h3>
            </div>
            <div class="timing">
                <div class="top">
                    <div class="time">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40.231" height="40.647" viewBox="0 0 40.231 40.647">
                          <g id="Group_969" data-name="Group 969" transform="translate(0 0)">
                            <path id="Path_214" data-name="Path 214" d="M215.907,288.26H211.63v2.245a3.007,3.007,0,1,1-6.012,0V288.26H193.711v2.245a3.007,3.007,0,1,1-6.012,0V288.26h-4.393a3.869,3.869,0,0,0-3.815,3.9v26.7a3.869,3.869,0,0,0,3.815,3.9h32.6a3.869,3.869,0,0,0,3.815-3.9v-26.7A3.869,3.869,0,0,0,215.907,288.26Zm.694,30.958H182.728V295.94H216.6Z" transform="translate(-179.491 -282.115)" fill="currentColor"></path>
                            <path id="Path_215" data-name="Path 215" d="M371.663,170.071h1.272a1.407,1.407,0,0,0,1.387-1.418v-7.326a1.407,1.407,0,0,0-1.387-1.418h-1.272a1.407,1.407,0,0,0-1.387,1.418v7.326A1.407,1.407,0,0,0,371.663,170.071Z" transform="translate(-361.143 -159.909)" fill="currentColor"></path>
                            <path id="Path_216" data-name="Path 216" d="M745.987,170.071h1.272a1.407,1.407,0,0,0,1.387-1.418v-7.326a1.407,1.407,0,0,0-1.387-1.418h-1.272a1.407,1.407,0,0,0-1.387,1.418v7.326A1.407,1.407,0,0,0,745.987,170.071Z" transform="translate(-717.548 -159.909)" fill="currentColor"></path>
                            <rect id="Rectangle_684" data-name="Rectangle 684" width="7.628" height="7.208" transform="translate(5.491 16.188)" fill="currentColor"></rect>
                            <rect id="Rectangle_685" data-name="Rectangle 685" width="7.628" height="7.208" transform="translate(16.547 16.188)" fill="currentColor"></rect>
                            <rect id="Rectangle_686" data-name="Rectangle 686" width="7.628" height="7.208" transform="translate(26.938 16.188)" fill="currentColor"></rect>
                            <rect id="Rectangle_687" data-name="Rectangle 687" width="7.628" height="7.208" transform="translate(5.491 26.822)" fill="currentColor"></rect>
                            <rect id="Rectangle_688" data-name="Rectangle 688" width="7.628" height="7.208" transform="translate(16.547 26.822)" fill="currentColor"></rect>
                            <rect id="Rectangle_689" data-name="Rectangle 689" width="7.628" height="7.208" transform="translate(26.938 26.822)" fill="currentColor"></rect>
                          </g>
                        </svg>

                        <span>
                          {{Morilog\Jalali\Jalalian::forge($travel->start)->format('%B %d، %Y')}}
                        </span>
                        <span>-</span>
                        <span>      {{Morilog\Jalali\Jalalian::forge($travel->start)->format('%B %d، %Y')}}    </span>

                    </div>
                    <div class="price">
                        <div class="number">
                            <span>200/000</span>
                            <span>تومان</span>
                        </div>
                        <div class="hour">
                            <span>برای 2 ساعت</span>
                        </div>
                    </div>
                </div>
                <div class="bot">
                    <ul>
                        <li>
                            <span class="title">تعداد افراد :</span>
                            <span>
                                {{$travel->count==1 ? 'خودم':$travel->count}}
                            </span>
                        </li>
                        <li>
                            <span class="title">زمان ملاقات :</span>
                            <span>

                            {{__('arr.'.$travel->visit)}}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="texte">
                <div class="img">
                    @if ($travel->host)

                    @if ($travel->host->id==auth()->user()->id)
                    @else
                    @endif
                    @if ($travel->host->id==auth()->user()->id)
                    <img src="{{$travel->user->avatar() }}" alt="">

                    @else
                    <img src="{{$travel->host->avatar() }}" alt="">
                    @endif
                    @endif

                </div>
                <div class="text">
                    <p>
                        @php
                            $ch=$travel->chats()->oldest()->first()
                        @endphp

                        {{$ch?$ch->chat:''}}
                    </p>
                </div>
            </div>

            <div class="buttons">
               <form action="{{route('related.chat',$travel->id)}}" method="post">
                @csrf
                @method('post')
                <input name="accept" type="submit" class="violet btt" value="قبول">
                <input name="reject" type="submit" class="gray btt" value="رد">
               </form>
            </div>

        </div>

        @endif


    </div>
</div>

   @endsection
