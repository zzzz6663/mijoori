@if($errors->any())
    <div class="er">
        {!! implode('', $errors->all('<span class="text text-danger">:message</span> </br>')) !!}
    </div>
@endif
