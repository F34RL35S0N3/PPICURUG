<x-guest-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1>Login</h1>

        <!-- Session Status -->
        @if ($errors->any())
            <div class="alert">
                <strong>Mohon periksa kembali data yang Anda masukkan</strong>
            </div>
        @endif

        <!-- Email Address -->
        <div class="input-box">
            <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="username" />
            <i class='bx bxs-envelope'></i>
        </div>
        @if ($errors->has('email'))
            <div class="error">{{ $errors->first('email') }}</div>
        @endif

        <!-- Password -->
        <div class="input-box">
            <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
            <i class='bx bxs-lock-alt'></i>
        </div>
        @if ($errors->has('password'))
            <div class="error">{{ $errors->first('password') }}</div>
        @endif

        <!-- Remember Me -->
        <div class="remember-forgot">
            <label>
                <input type="checkbox" name="remember" />
                Remember Me
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            @endif
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="register-link">
            <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </form>
</x-guest-layout>
