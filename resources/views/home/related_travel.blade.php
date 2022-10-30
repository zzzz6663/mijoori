@extends('main.site')
@section('content')
    <div id="message-filters" class="rows">
        <div class="fullcontainer">
            <form action="">
                <select name="" id="">
                    <option value="">همه ی مکان ها</option>
                    <option value="">گزینه 1</option>
                    <option value="">گزینه 2</option>
                    <option value="">گزینه 3</option>
                    <option value="">گزینه 4</option>
                    <option value="">گزینه 5</option>
                    <option value="">گزینه 6</option>
                </select>
                <select name="" id="">
                    <option value="">همه ی پیغام ها</option>
                    <option value="">گزینه 1</option>
                    <option value="">گزینه 2</option>
                    <option value="">گزینه 3</option>
                    <option value="">گزینه 4</option>
                    <option value="">گزینه 5</option>
                    <option value="">گزینه 6</option>
                </select>
            </form>
        </div>
    </div>
    <div id="message-stats" class="rows">
        <div class="fullcontainer">
            <div class="right-side">
                <div class="img">
                    <img src="images/logo.png" alt="">
                </div>
                <div class="info">
                    <h3>میجوری</h3>
                    <p>
                        {{$related_travel ->count()}}

                        نفر در حال جستجوی میزبان برای شهر
                        {{$user->city->name}}
                        هستند .<br>
                        به آنها پیشنهاد دهید و
                        {{$user->city->name}}

                        را به آنها نشان دهید .
                    </p>
                </div>
            </div>
            <div class="left-side">
                <div class="sender-list">
                    <ul>
                        @foreach ($related_travel as $rel)
                            <li>
                                <img src="{{ $rel->user->avatar('') }}" alt="">
                            </li>
                        @endforeach


                    </ul>
                </div>
                <a href="{{route('guides',['related'=>true])}}" class="view-all">مشاهده همه</a>
            </div>
        </div>
    </div>
    <div id="message-list" class="rows">
        <div class="fullcontainer">
            <div class="title-more">
                <h3>پیام ها</h3>
            </div>
            <div class="message-list">
                @foreach ($chats as $chat)
                    <div class="message-single">
                        <div>
                            <div class="img">

                                <img src="{{ $chat->from->avatar('small') }}" alt="">
                            </div>
                            <div class="left">
                                <div class="info">
                                    <h4>
                                        {{ $chat->from->name }}
                                        {{ $chat->from->family }}
                                    </h4>
                                    <span class="city">
                                        {{ $chat->travel->city->name }}

                                    </span>
                                    <span class="date">
                                        {{ $chat->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <div class="text">
                                    <p>
                                            {{$chat->chat}}
                                        {!!$chat->chat!!}
                                    </p>
                                </div>
                                <div class="actions">
                                    <a href="{{ route('related.chat', $chat->travel->id) }}" class="offer">پیشنهاد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
               <div class="sip">
                {{ $chats->appends(Request::all())->links('admin.section.pagination') }}
               </div>
            </div>
        </div>
    </div>
@endsection
