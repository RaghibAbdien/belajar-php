<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>
<body>

    <main>
        <section>
            <form action="">
                <div class="form">
                    <div class="head">
                        <h1>Login</h1>
                    </div>
                    <div class="email">
                        <label for="email">Email</label>
                        <div>
                            <input type="email" name="email" id="email">
                        </div>
                    </div>
                    <div class="password">
                        <label for="password">Password</label>
                        <div>
                            <input type="password" name="password" id="password">
                            <i id="pass" class="fa-solid fa-eye-slash"></i>
                        </div>
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit">Sign In</button>
                </div>
                <div class="other-login">
                    <span>Or Continue With</span>
                    <div class="medsos">
                        <a href=""><img src="assets/img/google.png" alt=""></a>
                        <a href=""><img src="assets/img/github.png" alt=""></a>
                        <a href=""><img src="assets/img/facebook.png" alt=""></a>
                    </div>
                    <span>Don't have an Account yet? <a href="">Register for free</a></span>
                </div>
            </form>
        </section>
    </main>
    
    <script src="assets/js/login.js"></script>
    <script src="https://kit.fontawesome.com/91441035a6.js" crossorigin="anonymous"></script>

</body>
</html>