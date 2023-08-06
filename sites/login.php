<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Keywave</title>
    <link rel="stylesheet" href="../styles/loginStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/inter-ui@3.11.0/inter.min.css'>
</head>
<body>
<header>
    <div class="wavy">
        <span style="--i:1">K</span>
        <span style="--i:2">e</span>
        <span style="--i:3">y</span>
        <span style="--i:4">w</span>
        <span style="--i:5">a</span>
        <span style="--i:6">v</span>
        <span style="--i:7">e</span>
    </div>
    <div class="register">
        <p>Register</p>
    </div>
</header>
<center>
<div class="loginBox">
    <form method="post">
        <h1>Login</h1>
        <div class="email-input">
            <svg viewBox="0 0 18 18">
                <path d="M11.5,10.5 C6.4987941,17.5909626 1,3.73719105 11.5,6 C10.4594155,14.5485365 17,13.418278 17,9 C17,4.581722 13.418278,1 9,1 C4.581722,1 1,4.581722 1,9 C1,13.418278 4.581722,17 9,17 C13.418278,17 17,13.42 17,9"></path>
                <polyline points="5 9.25 8 12 13 6"></polyline>
            </svg>
            <input type="email" placeholder="example@example.pl">
        </div>
        <br>
        <div class="password-field">
            <button type="button">
                <svg viewBox="0 0 21 21">
                    <circle class="eye" cx="10.5" cy="10.5" r="2.25" />
                    <path class="top" d="M2 10.5C2 10.5 6.43686 5.5 10.5 5.5C14.5631 5.5 19 10.5 19 10.5" />
                    <path class="bottom" d="M2 10.5C2 10.5 6.43686 15.5 10.5 15.5C14.5631 15.5 19 10.5 19 10.5" />
                    <g class="lashes">
                        <path d="M10.5 15.5V18" />
                        <path d="M14.5 14.5L15.25 17" />
                        <path d="M6.5 14.5L5.75 17" />
                        <path d="M3.5 12.5L2 15" />
                        <path d="M17.5 12.5L19 15" />
                    </g>
                </svg>
            </button>
            <input type="password" placeholder="Password">
            <input class="clear" type="text" placeholder="Password">
        </div>
        <br><br>
        <input type="submit" value="Login">
        <input type="button" id="ResetPassword" value="Forgot password?">
    </form>
<div class="login">
</center>
<script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
<script src='https://assets.codepen.io/16327/MorphSVGPlugin3.min.js'></script><script  src="../javascript/loginJS.js"></script>
</body>
</html>