<?php
// session_start();
if(!empty($_SESSION['username_user'])){
    header('Location: hom');
    exit(); // Tambahkan exit() di sini
}
require("komponen/head.inc.php");
?>



<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <title>Al-Bayaan | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/image/mosque.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <style>
    @import url('https://fonts.googleapis.com/css2?family=Questrial&display=swap');


    .questrial-regular {
        font-family: "Questrial", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    body {
        font-family: "Questrial", sans-serif;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .form-signin {
        max-width: 330px;
        padding: 1rem;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
    }


    .logo-text {
        font-size: 1.25rem;
        font-weight: normal;
    }

    body {
        font-family: "Questrial", sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f8f9fa;
    }

    .form-container {
        border: 3px solid white;
        border-radius: 8px;
        padding: 8px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .logo-container {
        display: flex;
        align-items: left;
        justify-content: center;
        padding: 2px;
        margin: 1px;

    }

    .logo-container img {}

    .logo-text {
        font-size: 20px;
        font-weight: normal;
    }

    .form-signin {
        max-width: 440px;
        margin: auto;
    }

    .btnl {
        background-color: #04d90b;
        padding: 2px;
        color: black;
        border: none;
    }

    .btnl:hover {
        background-color: #04b809;
    }
    </style>

</head>

<body class="d-flex align-items-center py-4">

    <main class="form-signin w-100 m-auto">
        <div class="form-container">
            <div class="logo-container">
                <a class="navbar-brand" href=".">
                    <img src="image/masjid.png" alt="Logo" width="93" height="75" class="d-inline-block align-text-top">
                    <span class="logo-text">Masjid Al-Bayaan<br>Login Here</span>
                </a>
            </div>
            <form class="form-signin needs-validation" novalidate action="proses\proses_login.php" method="POST">
                <div class="form-floating mb-2 rounded-2">
                    <input name="username" type="email" class="form-control" id="validationCustomUsername"
                        placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                    <div class="invalid-feedback">
                        Masukkan email yang benar
                    </div>
                </div>
                <div class="form-floating">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    <div class="invalid-feedback">
                        Please fill in the password
                    </div>
                </div>
                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <button class="btn btn-primary w-100 border-0" type="submit" name="submit_validate" value="aaa">Login</button>
            </form>
        </div>
    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>

</body>

</html>