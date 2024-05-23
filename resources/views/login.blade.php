<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang("languages.titles.login_page")</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="background">
        <div class="overlay"></div>
        <div class="content">
            <div class="navigation-container">
                <div class="cancel-button-container">
                    <button class="cancel-button" onclick="location.href='/'">&larr; @lang("languages.buttons.cancel")</button>
                </div>
                <div class="tabs-container">
                    <div class="form-switcher">
                        <span class="switcher login active">@lang("languages.buttons.login")</span>
                        <span class="switcher register" onclick="location.href='register'">@lang("languages.buttons.register")</span>
                    </div>
                </div>
            </div>
            <form action="#" class="form-box">
                <div class="form-group">
                    <label for="emailLogin">@lang("languages.labels.email")</label>
                    <input type="email" id="emailLogin" name="emailLogin" required>
                </div>
                <div class="form-group">
                    <label for="passwordLogin">@lang("languages.labels.password")</label>
                    <input type="password" id="passwordLogin" name="passwordLogin" required>
                </div>
                <div class="buttons">
                    <button type="submit" class="blue-button" onclick="location.href='user/home'">@lang("languages.buttons.login")</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
