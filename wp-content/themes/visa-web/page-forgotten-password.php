<?php
get_header();
?>
<div class="page-content">
    <div class="content-item">
        <div class="container">
            <div class="forgotten-pass">
                <div class="forgotten-pass-item forgotten-pass-item-1">
                    <h2>Forgotten Password</h2>
                    <p class="text-justify">If you have forgotten the username and password to your account, simply
                        enter a email you have registered with us and click the "Get Password" button. We will send an
                        email to your mail inbox that contains information on how to change the password.</p>
                    <div style="margin: 20px auto">
                        <h4>Please enter your email</h4>
                        <div class="input-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            <span class="input-group-btn" style="padding-left: 10px;">
                                <button type="button" class="btn-danger" id="btn-getpass">Get Password</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="forgotten-pass-item forgotten-pass-item-2">
                    <div class="col-sm-4 col-md-4" style="padding: 15px; background-color: #F1F1F1;">
                        <div style="margin: auto">
                            <h4>Lost Password Tutorial</h4>
                            <p>Please follow by these steps to get your password again...</p>
                            <ul style="list-style: decimal">
                                <li>Enter your email in the form and click "Get Password" button.</li>
                                <li>Check your mail inbox, remember our email can sent to your junk or spam mail. Click
                                    on the verification link.</li>
                                <li>Input a new password for your account.</li>
                                <li>Login again with your new password. Enjoy!</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>