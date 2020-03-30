@if(app('env') == 'production')
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
@else
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endif