@include('header')
<div class="ownPage">
    <div class="own-header">
      <h1 style="font-size:50px">Own page</h1>
    </div>
  </div>
<!-- Form for the login and SignIn-->
<section class="container forms">
    <div class="form login row">
        <div class="form-content col">
            <header class="login">Log in</header>
            <form method="POST" action="{{ route('login.custom') }}">
                @csrf

                <div class="field input-field">
                    <label for="email" class="subgect">Username or email address<spam style="color:red">*</spam></label>
                    <input type="text" class="form-control input" id="email" name="email" style="width:100%;"
                        required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="password-container field input-field">
                    <label for="password" class="subgect">Password<spam style="color:red">*</spam></label>
                    <input id="Password" type="password" class="form-control input password" id="password"
                        name="password" style="width:100%;" required>
                    <i class="fa-solid fa-eye eye" id="eye"></i>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="field button-field">
                    <button type="submit" class="btn">Log in</button>
                </div>

                <div class="form-link">
                    <a href="#" class="forgot-pass">Password forgotten?</a>
                </div>

            </form>
        </div>
        <div class="form-content col">
            <header class="signin">Sign up</header>

            <form action="{{ route('register.custom') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                        required autofocus>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                        name="email" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="password" placeholder="Password" id="password" class="form-control"
                        name="password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember Me</label>
                    </div>
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</section>
@include('footer')
