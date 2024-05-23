<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('languages.titles.desktop_page')</title>
    <script src="{{ asset('js/javascript.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/messenger.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div class="background">
        <div class="overlay"></div>

        <div class="alignment">
            <div class="hamburger-menu" onclick="toggleMenu()">
                <i class="fas fa-bars"></i> </div>
        <div class="side-menu">

           <a href="messenger"> <div class="menu-item"><i class="fas fa-comments"></i> @lang('languages.menu.chatting')</div></a>
           <a href="home"> <div class="menu-item"><i class="fas fa-user-friends"></i> @lang('languages.menu.user_profiles')</div></a>
           <a href="/"> <div class="menu-item"><i class="fas fa-power-off"></i> @lang('languages.menu.logout')</div></a>

        </div>
        <div class="messenger-container">
            <aside class="sidebar">
                <header class="search-container">
                    <input type="text" placeholder="@lang('languages.menu_title.search_for_user')">
                </header>
                <nav class="contact-list">
                    <div class="contact">Jane Doe</div>
                    <div class="contact">John Smith</div>
                    <div class="contact">Alice Johnson</div>


                </nav>
            </aside>
            <section class="chat-area">
                <header class="chat-header">
                    <div class="chat-partner">@lang('languages.chats.chat_with') Jane Doe</div>
                </header>
                <div class="chat-messages">
                    <div class="message received">Hi there! How are you today?</div>
                    <div class="message sent">I'm good, thanks for asking. And you?</div>
                    <div class="message received">I'm great, thanks!</div>
                    <!-- Additional messages here -->
                </div>
                <footer class="chat-footer">
                    <input type="text" placeholder="@lang('languages.chats.type')">
                    <button>@lang('languages.buttons.send')</button>
                </footer>
            </section>
        </div>
    </div>
</div>

</body>
</html>
