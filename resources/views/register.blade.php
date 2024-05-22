<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="background">
        <div class="overlay"></div>


        <div class="content">
            <div class="navigation-container">
                <div class="cancel-button-container">
                    <button class="cancel-button" onclick="location.href='/'">&larr; Cancel</button>
                </div>
                <div class="tabs-container">
                    <div class="form-switcher">
                        <span class="switcher login" onclick="location.href='login'">Login</span>
                        <span class="switcher register active">Register</span>
                    </div>
                </div>
            </div>
            <form action="#" class="form-box">

                <!-- Row for First Name & Last Name -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" required>
                    </div>
                </div>

                <!-- Row for Email -->
                <div class="form-row">
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="email"> Confirm Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                </div>
               <!-- Password field -->
                    <div class="form-group password-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <!-- Password Repeat field -->
                    <div class="form-group password-group">
                        <label for="password-repeat">Confirm Password</label>
                        <input type="password" id="password-repeat" name="password-repeat" required>
                    </div>



                <!-- Row for Country & City -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country" required>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                </div>

                <!-- Row for Job & Education -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="job">Job</label>
                        <input type="text" id="job" name="job" required>
                    </div>
                    <div class="form-group">
                        <label for="education">Education</label>
                        <input type="text" id="education" name="education" required>
                    </div>
                </div>

                <div class="form-group ref-group">
                    <label for="Referral">Referral Code</label>
                    <input type="Referral" id="Referral" name="Referral Code" >
                </div>

                <!-- Full-width field for Photo -->
                <div class="form-group">
                    <input type="file" id="photo" name="photo">
                    <label for="photo" class="custom-file-upload">
                        <i class="fa fa-cloud-upload"></i> Choose a photo
                    </label>
                </div>

                <div class="buttons">
                    <button type="submit" class="blue-button" onclick="location.href='/user/regin'">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
