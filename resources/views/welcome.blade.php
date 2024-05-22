<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="{{ asset('js/javascript.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/desktop.css') }}" media="screen and (min-width: 769px)">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen and (max-width: 768px)">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <div class="background">
        <div class="overlay"></div>

        <div class="content">

            <div class="rounded-rectangle">
                <div class="line-container">

                    <div class="text">
                        <img class="esaton-icon" src="{{ asset('images/esaton.svg') }}" alt="ESATON Icon">
                        <div class="icon">
                            <img class="webicon" src="{{ asset('images/Web icon.png') }}" alt="Web Icon">
                        </div>
                    </div>

                </div>
                <p id="description">We are an economic and career network whose members support and promote each other. It is based on a reward system. The more you help the network, the more it helps you. Register for free</p>
            </div>
            <div class="buttons">
                <button class="blue-button" onclick="window.location.href='login'">Login</button>
                <button class="blue-button" onclick="window.location.href='register'">Register</button>
            </div>

            <div class="design-line"></div>

        </div>
        <div class="legal">
            <div class="footer">
                <div class="language-select">
                    <select onchange="changeLanguage(this)">
                        <option value="en">English</option>
                        <option value="de">Deutsch</option>
                    </select>
                </div>
                <div class="legal-text">
                <p><a href="legal">Legal Information</a></p></div>
            </div>

        </div>
    </div>
</body>
</html>
