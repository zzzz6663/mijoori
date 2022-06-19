@unless ($breadcrumbs->isEmpty())

<div class="col-md-12">
    <div class="breadcrumb-box border shadow">
        <ul class="breadcrumb">

            @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
        </ul>
        <div class="breadcrumb-left">
           {{ \Morilog\Jalali\Jalalian::now()}}
            <i class="icon-calendar"></i>
        </div><!-- /.breadcrumb-left -->
    </div><!-- /.breadcrumb-box -->
</div>



@endunless
