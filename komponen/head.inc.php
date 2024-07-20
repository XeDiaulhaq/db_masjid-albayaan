<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Al-Bayaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="shortcut icon" href="image\mosque.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Questrial&display=swap');

        :root {
            --custom-bg-color: #00ad06;
            --custom-bg-color-1: #fff;
            --custom-bg-color-2: #008b05;
            --custom-bg-color-3: #000000;
            --custom-bg-active: #ebe8e8;
        }
        .btn-primary {
            background-color: var(--custom-bg-color-1) !important;
            border-color: var(--custom-bg-color);
            color: black;
        }
        .btn-primary:hover {
            background-color: var(--custom-bg-color-2) !important;
        }
        .badge.text-bg-primary {
            background-color: var(--custom-bg-color) !important;
        }
        .dropdown-item:active,
        .nav-link:active {
            background-color: var(--custom-bg-active) !important;
        }
        .questrial-regular {
            font-family: "Questrial", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
        body {
            font-family: "Questrial", sans-serif;
        }
        .navbar2 {
            border-top: 1px solid;
            border-bottom: 1px solid;
            background-color: rgba(255, 255, 255, 0.8); 
            display: flex;
            justify-content: center;
 
            position: sticky;
            top: 0;
            z-index: 10;
        }
        .navbar2 .nav-menu {
            display: flex;
            gap: 18px;
        
        }
        .navmain {
            font-family: "Questrial", sans-serif;
            font-size: 18px;
        }
        .nav-menu a {
            text-decoration: none;
            color: #000000;
            font-size: 16px;
            padding: 10px 12px;
            cursor: pointer;
        }
        .nav-menu a:hover {
            border-bottom: 1px solid;
        }
        p, pre, arcticel{
            text-align: justify;
            font-size: 18px ;
        }
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        .navbar-brand span {
            margin-left: 8px;
        }
        .navbar .dropdown-menu a {
            color: #000;
            padding: 8px 16px;
            display: block;
        }
        .dropdown-menu-end {
            margin-left: 20px;
            
        }
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .dropdown-menu {
            display: none;
            transition: visibility 0.5s, opacity 0.s linear;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
            visibility: visible;
            opacity: 1;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }
        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }
        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }
        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        .icon-boxes {
            padding-bottom: 60px;
            z-index: 4;
        }
        @media (min-width: 1200px) {
            .icon-boxes:before {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: calc(50% + 20px);
                background-color: var(--custom-bg-color-1);
                border-top: 1px solid color-mix(in srgb, var(--custom-bg-color-1), transparent 90%);
                color: var(--custom-bg-color-3);
            }
        }
        .icon-box {
            padding: 60px 30px;
            position: relative;
            overflow: hidden;
            background: var(--custom-bg-color-1);
            box-shadow: 0 0 29px 0 rgb(197, 197, 197);
            transition: all 0.3s ease-in-out;
            border-radius: 8px;
            z-index: 1;
            width: 200px;
           
            height: 300px;
            text-align: center;
        }
        .icon-box .title {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 24px;
        }
        .icon-box .title a {
            color: color-mix(in srgb, var(--custom-bg-color-1), transparent 20%);
            transition: 0.3s;
            color: var(--custom-bg-color-3);
        }
        .icon-box .icon {
            margin-bottom: 20px;
            padding-top: 10px;
            display: inline-block;
            transition: all 0.3s ease-in-out;
            font-size: 48px;
            line-height: 1;
            color: color-mix(in srgb, var(--custom-bg-color-3), transparent 20%);
        }
        .icon-box:hover {
            background-color: color-mix(in srgb, var(--custom-bg-color-2), white 10%);
        }
        .icon-box:hover .title a,
        .icon-box:hover .icon {
            color: var(--custom-bg-color-1);
        }
        @media (max-width: 1200px){
            .icon-box {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- Nav End -->
    <!-- Nav2 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>
</body>