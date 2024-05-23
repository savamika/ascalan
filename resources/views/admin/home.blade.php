<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('languages.tittle.desktop_page')</title>
    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="{{ asset('js/javascript.js') }}"></script>
</head>
<body>
    <div class="background">
        <div class="overlay"></div>
        <div class="alignment">
            <div class="hamburger-menu" onclick="toggleMenu()">
                <i class="fas fa-bars"></i> </div>
                <div class="side-menu">

                    <a href="messenger"> <div class="menu-item"><i class="fas fa-comments"></i>&nbsp;&nbsp;@lang('languages.menu.chatting')</div></a>
                    <a href="home"> <div class="menu-item"><i class="fas fa-user-friends"></i>&nbsp;&nbsp;@lang('languages.menu.user_profiles')</div></a>
                    <a href="/"> <div class="menu-item"><i class="fas fa-power-off"></i>&nbsp;&nbsp;@lang('languages.menu.logout')</div></a>

                 </div>

        <div class="user-container">

                <div class="user-header">
                    <h1>@lang('languages.menu_title.user_management')</h1>

                </div>
                <div class="user-search">
                    <input type="text" placeholder="@lang('languages.menu_title.search_for_user')">

                </div>
                <div class="user-table">
                    <table>
                        <thead>
                            <tr>
                                <th>@lang('languages.table_header.photo')</th>
                                <th>@lang('languages.table_header.login')</th>
                                <th>@lang('languages.table_header.last_name')</th>
                                <th>@lang('languages.table_header.first_name')</th>
                                <th>@lang('languages.table_header.company')</th>
                                <th>@lang('languages.table_header.country')</th>
                                <th>@lang('languages.table_header.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Repeat for as many users as needed -->
                            <tr>
                                <td><img src="{{ asset('images/placeholder.jpg') }}" alt="User Photo" class="user-photo"></td>
                                <td>jdoe@example.com</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>Sample Corp.</td>
                                <td>USA</td>
                                <td class="action-buttons">
                                    <button class="modify-button" onclick="openModal('userId')">@lang('languages.buttons.modify')</button>

                                </td>

                            </tr>

                            <tr>
                                <td><img src="{{ asset('images/placeholder.jpg') }}" alt="User Photo" class="user-photo"></td>
                                <td>admin@example.com</td>
                                <td>Alex</td>
                                <td>Kiefer</td>
                                <td>Ascalan</td>
                                <td>Germany</td>
                                <td class="action-buttons">
                                    <button class="modify-button" onclick="openModal('userId')">@lang('languages.buttons.modify')</button>

                                </td>
                            </tr>
                            <!-- Add more <tr> elements for each user -->
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
</div>

<div id="modifyUserModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <form id="modifyUserForm" class="form-box">
            <div class="form-row">
                <div class="form-group">
                    <label for="firstname">@lang("languages.labels.frm_firstname")</label>
                    <input type="text" id="firstname" name="firstname" placeholder="@lang("languages.labels.frm_firstname")" required>
                </div>
                <div class="form-group">
                    <label for="lastname">@lang("languages.labels.frm_lastname")</label>
                    <input type="text" id="lastname" name="lastname" placeholder="@lang("languages.labels.frm_lastname")" required>
                </div>

        <!-- Row for Email -->
        <div class="form-row">
        <div class="form-group">
            <label for="email">@lang("languages.labels.frm_email")</label>
            <input type="email" id="email" name="email" placeholder="@lang("languages.labels.frm_email")"required>
            </div>
        <!-- Row for Country & City -->
        <div class="form-row">
            <div class="form-group">
                <label for="country">@lang("languages.labels.frm_country")</label>
                <input type="text" id="country" name="country" placeholder="@lang("languages.labels.frm_country")" required>
                </select>
            </div>
            <div class="form-group">
                <label for="city">@lang("languages.labels.frm_city")</label>
                <input type="text" id="city" name="city" placeholder="@lang("languages.labels.frm_city")" required>
            </div>
        </div>

        <!-- Row for Job & Education -->
        <div class="form-row">
            <div class="form-group">
                <label for="job">@lang("languages.labels.frm_job")</label>
                <input type="text" id="job" name="job" placeholder="@lang("languages.labels.frm_job")" required>
            </div>
            <div class="form-group">
                <label for="education">@lang("languages.labels.frm_education")</label>
                <input type="text" id="education" name="education" placeholder="@lang("languages.labels.frm_education")" required>
            </div>

            <div class="form-group">
                <label for="bonus">@lang("languages.labels.frm_bonus_point")</label>
                <input type="text" id="bonus" name="bonus" placeholder="@lang("languages.labels.frm_bonus_point")" required>
            </div>
        </div>


        <div class="buttons">
            <button type="submit" class="blue-button" onclick="location.href='home'">@lang("languages.buttons.save_change")</button>
        </div>
      </form>
    </div>
  </div>



</body>
</html>
