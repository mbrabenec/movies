@foreach ($errors->all() as $error)
    <div class="error">{{ $error }}</div>
@endforeach
 
<form action="{{ route('register') }}" method="post">
    @csrf
 
    name<input type="text" name="name" value="{{ old('name') }}">
 
    email<input type="email" name="email" value="{{ old('email') }}">
 
    pw<input type="password" name="password" value="">
 
    pw<input type="password" name="password_confirmation" value="">
 
    <button>Register</button>
 
</form>