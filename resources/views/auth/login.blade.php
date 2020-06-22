<x-master>
    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Login</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd">Forget Password?</a>
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-form-2">
                <h3>Sign Up</h3>
                <form>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Your Username" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Confirmed Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Sign Up" />
                    </div>
                    <div class="form-group">

                        <a href="#" class="ForgetPwd" value="Login">Terms and Conditions</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Login Javascript footers --}}
    @include('components.partials.footers.login-foot-scripts')
</x-master>

