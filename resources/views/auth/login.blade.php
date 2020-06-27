<x-master>
    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Login</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input id = "email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input id ="password" name = "password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="form-group">
                        <a href="{{ url('home') }}"><input type="submit" class="btnSubmit" value="Login"/></a>
                    </div>
                    <div class="form-group">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
            @include('auth.register')
        </div>
    </div>
    {{-- Login Javascript footers --}}
    @include('components.partials.footers.login-foot-scripts')
</x-master>

