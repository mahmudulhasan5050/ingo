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
            <form action="{{ route('login.custom') }}" method="POST">
                @csrf
                <div class="field input-field">
                    <label for="email" class="subgect">Username or email address<spam style="color:red">*</spam>
                        </label>
                    <input type="text" class="form-control input" id="email" name="email" style="width:100%;"
                        required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="password-container field input-field">
                    <label for="pwd" class="subgect">Password<spam style="color:red">*</spam></label>
                    <input id="Password" type="password" class="form-control input password"
                        name="password" style="width:100%;" required>
                    <i class="fa-solid fa-eye eye" id="eye"></i>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="field button-field">
                    <button type="submit" class="btn">Log in</button>
                </div>
                {{-- <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label> --}}

                <div class="form-link">
                    <a href="#" class="forgot-pass">Password forgotten?</a>
                </div>

            </form>
        </div>
        <div class="form-content col">
            <header class="signin">Sign up</header>
            <form action="{{ route('register.custom') }}" method="POST">
                @csrf

                <div class="field input-field">
                        <label for="fname" class="subgect">Name<spam style="color:red">*</spam></label>
                        <input type="text" class="form-control input" id="name" name="name"
                            style="width:100%;" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Error: Please enter a valid email address.</div>
                </div>

                <div class="field input-field">
                    <label for="email" class="subgect">Email address<spam style="color:red">*</spam>
                    </label>
                    <input type="email" class="form-control input" id="email" name="email" style="width:100%;"
                        required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Error: Please enter a valid email address.</div>
                </div>

                <div class=" password-container field input-field">
                    <label for="pwd" class="subgect">Password<spam style="color:red">*</spam></label>
                    <input id="Password" type="password" class="form-control input password" id="password"
                        name="password" style="width:100%;" required>
                    <i class="fa-solid fa-eye eye" id="eye" onclick=""></i>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Error: Please enter a valid email address.</div>
                </div>
                <p>Your personal data is used to improve your user experience, to manage the use of your account and for
                    other
                    purposes described in <a href="https://ingo.fi/rekisteri-ja-tietosuojaselostessa/">Privacy
                        protection</a>.
                </p>

                <div class="field button-field">
                    <button type="submit" class="btn">Sign up</button>
                </div>

            </form>
        </div>
    </div>
</section>
@include('footer')
