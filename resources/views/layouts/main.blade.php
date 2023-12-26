<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.css">
    <script src="js/mainjas.js"></script>
    <title>SenZxn | {{ $title }}</title>
</head>
<body>
    <div id="backnav" class="active">
        <div id="navbar">
            <img id="navlogo" src="img/zxlogo.png" alt="zx logo">
            <div id="zxnnavtx">SenZxN</div>
            <div id="navdivbutton">
                <a class="navbtn" href="/">Home
                    <svg id="navba1" class="actvnvbt" width="60" height="4" fill="none" viewBox="0 0 60 4"><rect width="60" height="4" fill="#D9D9D9" rx="1.5"/></svg>
                </a>
                <a class="navbtn" href="/product">Product
                    <svg id="navba2" class="actvnvbt" width="60" height="4" fill="none" viewBox="0 0 60 4"><rect width="60" height="4" fill="#D9D9D9" rx="1.5"/></svg>
                </a>
                <a class="navbtn" href="/socialmedia">Social
                    <svg id="navba3" class="actvnvbt" width="60" height="4" fill="none" viewBox="0 0 60 4"><rect width="60" height="4" fill="#D9D9D9" rx="1.5"/>
                </a>
                <a class="navbtn" href="/about">About
                    <svg id="navba4" class="actvnvbt" width="60" height="4" fill="none" viewBox="0 0 60 4"><rect width="60" height="4" fill="#D9D9D9" rx="1.5"/>
                </a>
                <i id="navbtnhdn" href=""><svg width="26" height="26" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/> </svg></i>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('container')
    </div>
</body>
</html>