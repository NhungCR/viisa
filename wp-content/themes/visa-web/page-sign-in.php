<?php
get_header();
?>
<div class="page-content">
    <div class="member">
        <div class="container">
            <div class="member-vip">
                <div><img src="<?php bloginfo('template_url'); ?>/images/vip.jpg"></a></div>
                <div>
                    CREATE A MEMBER ACCOUNT NOW TO RECEIVE A VOLUMN DISCOUNTS<br>
                    MORE APPLICATIONS YOU SUBMIT - MORE MONEY YOU SAVE<br>
                    <a target="_blank" href="#" style="color: #FFFFFF;">→ Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="login-vip">
    <div class="container">
        <div id="step-2" class="step-content">
            <div class="login-form">
                <form action="" id="frmSignUp" method="POST">
                    <div class="row">
                        <div class="col-5">
                            <h4>I am a returning customer</h4>
                            <div>
                                <h1>Sign In</h1>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4"><label class="control-label">Registered email <span
                                                    class="red">*</span></label></div>
                                        <div class="col-7">
                                            <input type="text" name="email" id="email" class="form-control"
                                                placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4"><label class="control-label">Password <span
                                                    class="red">*</span></label></div>
                                        <div class="col-7">
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-7">
                                            <a href="#" class="forgot-pass">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-7">
                                            <button type="button" id="btn-login" class="btn-danger submit-next">LOG IN
                                                &amp; CONTINUE <i class="fa fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sign-in-width">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="control-label">OR Signin with</label>
                                    </div>
                                    <div class="col-7">
                                        <div class="sign-in-fb">
                                            <a class="btn-social btn-facebook" onclick=""><i class="fa fa-facebook"></i>
                                                Sign in with Facebook</a>
                                        </div>
                                        <div class="sign-in-gg">
                                            <a class="btn-social btn-google-plus" onclick=""><i
                                                    class="fa fa-google"></i> Sign in with Google+
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 switcher">
                            <div class="switch-line"></div>
                        </div>
                        <div class="col-5">
                            <h4>I am a new customer</h4>
                            <div>
                                <h1>Sign Up</h1>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4"><label class="control-label">Full name <span
                                                    class="red">*</span></label></div>
                                        <div class="col-7">
                                            <div class="row col-flex">
                                                <div class="col-4 select-gt">
                                                    <select class="form-control" id="new_title" name="new_title">
                                                        <option value="Mr" selected="selected">Mr</option>
                                                        <option value="Ms">Ms</option>
                                                        <option value="Mrs">Mrs</option>
                                                    </select>
                                                </div>
                                                <div class="col-7">
                                                    <input type="text" class="form-control" id="new_fullname"
                                                        name="new_fullname" placeholder="Full name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4"><label class="control-label">Email <span
                                                    class="red">*</span></label></div>
                                        <div class="col-7">
                                            <input type="text" class="form-control" id="new_email" name="new_email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4"><label class="control-label">Phone <span
                                                    class="red">*</span></label></div>
                                        <div class="col-7">
                                            <div class="intl-tel-input">
                                                <div class="selected-flag">
                                                    <div class="iti-flag vn"></div>
                                                    <div class="selected-dial-code"></div>
                                                    <div class="iti-arrow"></div>
                                                    <input type="text" id="new_phone" name="new_phone"
                                                        class="form-control" value="" placeholder="Phone number"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4"><label class="control-label">Password <span
                                                    class="red">*</span></label></div>
                                        <div class="col-7">
                                            <input type="password" class="form-control" id="new_password"
                                                name="new_password" placeholder="Password">
                                            <span class="help-block">
                                                <i>Password must be at least 6 characters in long.</i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4"><label class="control-label">Confirm password <span
                                                    class="red">*</span></label></div>
                                        <div class="col-7">
                                            <input type="password" class="form-control" id="new_confirm_password"
                                                name="new_confirm_password" placeholder="Enter your password again">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-7">
                                            <button type="button" class="btn-danger" id="btn-signup" value="">CREATE
                                                ACCOUNT <i class="fa fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
<?php
get_footer();
?>