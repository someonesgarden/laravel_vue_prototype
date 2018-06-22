@if (Route::has('login'))
    <div class="top-right links">
        @if (Auth::check())
            <a href="{{ url('/') }}">Home</a>
        @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        @endif
        @if($title != 'INDEX')
            <a href="{{ url('/') }}">Home</a>
        @endif
    </div>
@endif