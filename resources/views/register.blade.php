<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang("languages.titles.register_page")</title>
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
                        <span class="switcher login" onclick="location.href='login'">@lang("languages.buttons.login")</span>
                        <span class="switcher register active">@lang("languages.buttons.register")</span>
                    </div>
                </div>
            </div>
            <form action="#" class="form-box">

                <!-- Row for First Name & Last Name -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstname">@lang("languages.labels.frm_firstname")</label>
                        <input type="text" id="firstname" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">@lang("languages.labels.frm_lastname")</label>
                        <input type="text" id="lastname" name="lastname" required>
                    </div>
                </div>

                <!-- Row for Email -->
                <div class="form-row">
                <div class="form-group">
                    <label for="email">@lang("languages.labels.frm_email")</label>
                    <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="email">@lang("languages.labels.frm_confrm_email")</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                </div>
               <!-- Password field -->
                    <div class="form-group password-group">
                        <label for="password">@lang("languages.labels.frm_password")</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <!-- Password Repeat field -->
                    <div class="form-group password-group">
                        <label for="password-repeat">@lang("languages.labels.frm_confrm_password")</label>
                        <input type="password" id="password-repeat" name="password-repeat" required>
                    </div>



                <!-- Row for Country & City -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="country">@lang("languages.labels.frm_country")</label>
                        <input type="text" id="country" name="country" required>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="city">@lang("languages.labels.frm_city")</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                </div>

                <!-- Row for Job & Education -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="job">@lang("languages.labels.frm_job")</label>
                        <input type="text" id="job" name="job" required>
                    </div>
                    <div class="form-group">
                        <label for="education">@lang("languages.labels.frm_education")</label>
                        <input type="text" id="education" name="education" required>
                    </div>
                </div>

                <div class="form-group ref-group">
                    <label for="Referral">@lang("languages.labels.frm_referral_code")</label>
                    <input type="Referral" id="Referral" name="Referral Code" >
                </div>

                <!-- Full-width field for Photo -->
                <div class="form-group">
                    <input type="file" id="photo" name="photo">
                    <label for="photo" class="custom-file-upload">
                        <i class="fa fa-cloud-upload"></i> @lang("languages.labels.frm_choose_photo")
                    </label>
                </div>

                <div class="buttons">
                    <button type="submit" class="blue-button" onclick="location.href='/user/regin'">@lang("languages.buttons.register")</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
