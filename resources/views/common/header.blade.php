header here
@auth
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button>Logout</button>
    </form>
@else
    

    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
    @endif
@endauth
@guest
<a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
@endguest
<br>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>Logout</button>
</form>
<br>
<form action="{{ route('login') }}" method="post">
    @csrf

    Email<input type="email" name="email" value="{{ old('email') }}">

    PW<input type="password" name="password" value="">

    <button>Login</button>

</form>
<br>
