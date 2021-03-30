<?php
$pageTitle = 'Lose The L - Login';
require_once('/u1.bath/s06/adbs864/public_html/navbar.php');
?>

    <!-- Section -->
    <section class="section-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col section-1 section-description wow fadeIn">
                    <h1 style="margin-top: 3em">Create an account</h1>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p class="medium paragraph">Please <a href="#login-form">log in</a> with your details to leave a comment.</p>
                    <p>If you have not yet created an account with us, please fill out the <a href="#register-form">registration</a> form instead.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <main class="section-2-container section-container section-container-gray-bg">
        <div class="container">
            <div class="row">
                <!-- Login form -->
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <form method="post" action="#" id="login-form">
                        <div class="container">
                            <fieldset class="fields" id="fieldset2">
                                <h2>Login</h2>
                                <p>Please fill in this form to log into your account:</p>
                                <hr>

                                <div class='input-type-1'>
                                    <label for="username"><b>Username</b></label>
                                    <input type='text' placeholder='Username' name='login_username' id='login_username'>
                                    <small id='loginUsernameTag'>Error Message</small>
                                </div>

                                <div class='input-type-1'>
                                    <label for="psw"><b>Password</b></label>
                                    <input type='password' placeholder='Password' name='login_pwd' id='login_pwd'>
                                    <small id='loginPasswordTag'>Error Message</small>
                                </div>

                                <div class='input-type-1'>
                                    <button type="submit" class="loginbtn" id="logBtn">Login</button>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
                <!-- Registration form -->
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <form method="post" action="#" id="register-form">
                        <div class="container">
                            <fieldset class="fields" id="fieldset1">
                                <h2>Register</h2>
                                <p>Please fill in this form to create an account:</p>
                                <hr>

                                <div class="input-type-1">
                                    <!-- Enter username -->
                                    <label for="username"><b>Username</b></label>
                                    <input type="text" placeholder="Enter username" name="username" id="username" maxlength="20">
                                    <small id="usernameTag">Error Message</small> <!-- error message for username if there is an error in the input -->
                                </div>

                                <div class="input-type-1">
                                    <!-- Enter first and last names -->
                                    <label for="firstname"><b>First name</b></label>
                                    <input type="text" placeholder="Enter your first name" name="firstname" maxlength="30" id="firstname">
                                    <small id="firstnameTag">Error Message</small> <!-- error message for first name if there is an error in the input -->
                                </div>
                                <div class="input-type-1">
                                    <label for="lastname"><b>Last name</b></label>
                                    <input type="text" placeholder="Enter your last name" name="lastname" maxlength="30" id="lastname">
                                    <small id="lastnameTag">Error Message</small> <!-- error message for last name if there is an error in the input -->
                                </div>

                                <div class="input-type-1">
                                    <!-- Enter phone number -->
                                    <label for="phone"><b>Mobile phone number</b></label>
                                    <input type="number" placeholder="Enter your mobile phone number" name="phone" maxlength="11" id="phone">
                                    <small id="mobileTag">Error Message</small> <!-- error message for mobile phone number if there is an error in the input -->
                                </div>

                                <div class="input-type-1">
                                    <!-- Enter email address -->
                                    <label for="email"><b>Email</b></label>
                                    <input type="text" placeholder="Enter email" name="email" id="email" maxlength="40">
                                    <small id="emailTag">Error Message</small> <!-- error message for email address if there is an error in the input -->
                                </div>

                                <div class="input-type-1">
                                    <!-- Enter password -->
                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter password" name="psw" id="psw" maxlength="20">
                                    <small id="pwordTag">Error Message</small> <!-- error message for password if there is an error in the input -->
                                </div>

                                <div class="input-type-1">
                                    <!-- Confirm password -->
                                    <label for="psw-repeat"><b>Repeat Password</b></label>
                                    <input type="password" placeholder="Repeat password" name="psw-repeat" id="psw-repeat" maxlength="20">
                                    <small id="confirmTag">Error Message</small> <!-- error message for confirmed password if there is an error in the input -->
                                </div>

                                <div class="input-type-1">
                                    <button type="submit" class="registerbtn" id="regBtn">Register</button>
                                </div>

                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php
require_once('/u1.bath/s06/adbs864/public_html/footer.php');
?>