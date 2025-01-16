{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body> --}}
    <div class="container">
    
    <div class="login-box">
        <form action="" method="post">
            @csrf
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Email" required> 
        </div>
        <div class="input-box">
            <input type="password" class="input-field" placeholder="Password" autocomplete="off" required> 
        </div>
        <div class="forgot">
            <section>
                <input type="checkbox" id="check">
                <label for="check"> Remember me </label>
            </section>
            <section>
                <a href="forgot_page.html">Forgot password</a>
            </section>
        </div>
        <div class="input-submit">
            <button class="submit-btn" id="submit"></button>
            <label for="submit">Sign In</label>
        </div>
    </form>
        <div class="sign-up-link">
            <p>Don't have account? <a href="#">Sign Up</a></p>
        </div>
    </div>
</div>
{{-- </body>
</html> --}}