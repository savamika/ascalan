<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successful</title>
    <link rel="stylesheet" href="{{ asset('css/desktoplog.css') }}">
   <script src="{{ asset('js/javascript.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">


</head>
<body>
    <div class="background">
        <div class="overlay"></div>
        <div class="content">
            <div class="main-container">
                <div class="content-box">
                    <div class="close-button" onclick="closeContentBox()">X</div>
                    <div class="pops">
                        <div class="checkmark-circle">
                            <img src="{{ asset('images/tickmark.svg') }}";>
                        </div>
                        <span class="successful">Login Successful!</span>
                    </div>
                </div>
                <div class="rounded-rectangle">
            <div class="navigation-container">
                <div class="esaton">
                <img class="esaton-icon" src="{{ asset('images/esaton.svg') }}" alt="ESATON Icon">

                <div class="buttonis">
                <div class="cancel-button-container">
                    <button class="button cancel-button" onclick="">Settings</button>
                </div>

                <div class="header">
                    <button class="button log-out-button" onclick="location.href='/'">Log Out</button>
                </div>

                </div>

            </div>



            <p class="lorem">
                <b>Members Invited:</b> 0 <br>
                <b>Bonus Point:</b> 0<br>
                <b>Referral Code:</b> HSiuq1842<br>

            </p>


            </div>

            <div class="chat-box">
                <label for="chat-toggle" class="chat-header">Chat with us! </label>
                <div class="chat-content">
                    <div class="message received">
                        <p>Hello, how can we help you today?</p>
                    </div>
                    <div class="message sent">
                        <p>I need help with my account.</p>
                    </div>
                    <!-- Placeholder for additional messages -->
                    <div class="chat-input-container">
                        <textarea class="chat-input" placeholder="Type your message here..."></textarea>
                        <button class="send-button">Send</button>
                    </div>
                </div>
            </div>

    </div>
            </div>
        </div>
    </div>

</body>
</html>
