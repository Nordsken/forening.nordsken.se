@if ($errors->any())
    <div data-alert class="alert-box warning" tabindex="0" aria-live="assertive" role="dialogalert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
        <button href="#" tabindex="0" class="close" aria-label="Close Alert">&times;</button>
    </div>
@endif

@if ($message = Session::get('success'))
    <div data-alert class="alert-box success" tabindex="0" aria-live="assertive" role="dialogalert">
        @if(is_array($message))
            @foreach ($message as $m)
                {!! $m !!}
            @endforeach
        @else
            {!! $message !!}
        @endif
        <button href="#" tabindex="0" class="close" aria-label="Close Alert">&times;</button>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div data-alert class="alert-box warning" tabindex="0" aria-live="assertive" role="dialogalert">
        @if(is_array($message))
            @foreach ($message as $m)
                {!! $m !!}
            @endforeach
        @else
            {!! $message !!}
        @endif
        <button href="#" tabindex="0" class="close" aria-label="Close Alert">&times;</button>
    </div>
@endif

@if ($message = Session::get('info'))
    <div data-alert class="alert-box info" tabindex="0" aria-live="assertive" role="dialogalert">
        @if(is_array($message))
            @foreach ($message as $m)
                {!! $m !!}
            @endforeach
        @else
            {!! $message !!}
        @endif
        <button href="#" tabindex="0" class="close" aria-label="Close Alert">&times;</button>
    </div>
@endif

@if ($message = Session::get('error'))
    <div data-alert class="alert-box alert" tabindex="0" aria-live="assertive" role="dialogalert">
        @if(is_array($message))
            @foreach ($message as $m)
                {!! $m !!}
            @endforeach
        @else
            {!! $message !!}
        @endif
        <button href="#" tabindex="0" class="close" aria-label="Close Alert">&times;</button>
    </div>
@endif

