<?php
get_header();
?>
<div class="page-content">
    <div class="container step-apply-visa">
        <div class="tab-step">
            <h1 class="note">Vietnam Visa Application Form</h1>
            <ul class="style-step hidden-sm">
                <li class="active number">1. Visa Options</li>
                <li class="number">2. Account Login</li>
                <li class="number">3. Applicant Details</li>
                <li class="number">4. Review &amp; Payment</li>
            </ul>
        </div>
        <div id="step-1" class="step-content">
            <div id="frmApply" class="form-horizontal">
                <div class="row">
                    <div class="col-7">
                        <div class="panel-options">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="control-label">Number of persons <span
                                                class="required">*</span></label>
                                    </div>
                                    <div class="col-7">
                                        <select id="group_size" name="group_size" class="form-control">
                                            <option value="1">1 person</option>
                                            <option value="2" selected>2 persons</option>
                                            <option value="3">3 persons</option>
                                            <option value="4">4 persons</option>
                                            <option value="5">5 persons</option>
                                            <option value="6">6 persons</option>
                                            <option value="7">7 persons</option>
                                            <option value="8">8 persons</option>
                                            <option value="9">9 persons</option>
                                            <option value="10">10 persons</option>
                                            <option value="11">11 persons</option>
                                            <option value="12">12 persons</option>
                                            <option value="13">14 persons</option>
                                            <option value="14">14 persons</option>
                                            <option value="15">15 persons</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="control-label">Type of visa <span
                                                class="required">*</span></label>
                                    </div>
                                    <div class="col-7">
                                        <select id="visa_type" name="visa_type" class="form-control">
                                            <option value="1ms">1 month single</option>
                                            <option value="1mm" selected>1 month multiple</option>
                                            <option value="3ms">3 months single</option>
                                            <option value="3mm">3 months multiple</option>
                                            <option value="6mm">6 months multiple</option>
                                            <option value="1ym">1 year multiple</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="control-label">Purpose of entry <span
                                                class="required">*</span></label>
                                    </div>
                                    <div class="col-7">
                                        <select id="visit_purpose" name="visit_purpose" class="form-control">
                                            <option value="For tourist">For tourist</option>
                                            <option value="For business" selected>For business</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="control-label">Entry date <span class="required">*</span></label>
                                    </div>
                                    <div class="col-7">
                                        <input type="text" class="datepicker" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="control-label">Exit date <span class="required">*</span></label>
                                    </div>
                                    <div class="col-7">
                                        <input type="text" class="datepicker" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="control-label">Arrival airport <span
                                                class="required">*</span></label>
                                    </div>
                                    <div class="col-7">
                                        <select id="arrival_port" name="arrival_port" class="form-control arrival_port">
                                            <option value="0" selected="selected">Please select...</option>
                                            <optgroup label="Airport">
                                                <option value="1">Tan Son Nhat International Airport (Ho Chi Minh City)
                                                </option>
                                                <option value="2">Noi Bai International Airport (Ha Noi)</option>
                                                <option value="3">Da Nang International Airport</option>
                                                <option value="4">Cam Ranh International Airport (Khanh Hoa)</option>
                                                <option value="5">Can Tho International Airport</option>
                                                <option value="6">Phu Bai International Airport</option>
                                                <option value="7">Phu Quoc International Airport</option>
                                                <option value="8">Cat Bi International Airport</option>
                                            </optgroup>
                                            <optgroup label="Landport">
                                                <option value="9">Nam Can Landport</option>
                                                <option value="10">Song Tien Landport</option>
                                                <option value="11">Tinh Bien Landport</option>
                                                <option value="12">Xa Mat Landport</option>
                                                <option value="13">Mong Cai Landport</option>
                                                <option value="14">Moc Bai Landport</option>
                                                <option value="15">Lao Bao Landport</option>
                                                <option value="16">Ha Tien Landport</option>
                                                <option value="17">Huu Nghi Landport</option>
                                                <option value="18">Cau Treo Landport</option>
                                                <option value="19">Cha Lo Landport</option>
                                                <option value="20">Bo Y Landport</option>
                                                <option value="21">Lao Cai Landport</option>
                                                <option value="29">La Lay Landport</option>
                                                <option value="30">Na Meo Landport</option>
                                                <option value="31">Tay Trang Landport</option>
                                            </optgroup>
                                            <optgroup label="Seaport">
                                                <option value="22">Ho Chi Minh City Seaport</option>
                                                <option value="23">Quy Nhon Seaport</option>
                                                <option value="24">Nha Trang Seaport</option>
                                                <option value="25">Hai Phong Seaport</option>
                                                <option value="26">Hon Gai Seaport</option>
                                                <option value="27">Da Nang Seaport</option>
                                                <option value="28">Vung Tau Seaport</option>
                                                <option value="32">Chan May Seaport</option>
                                                <option value="33">Duong Dong Seaport</option>
                                            </optgroup>
                                        </select>
                                        <div class="processing-note">
                                            Select intended entry gate.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="control-label">Exit through checkpoint <span
                                                class="required">*</span></label>
                                    </div>
                                    <div class="col-7">
                                        <select id="arrival_port" name="arrival_port" class="form-control arrival_port">
                                            <option value="0" selected="selected">Please select...</option>
                                            <optgroup label="Airport">
                                                <option value="1">Tan Son Nhat International Airport (Ho Chi Minh City)
                                                </option>
                                                <option value="2">Noi Bai International Airport (Ha Noi)</option>
                                                <option value="3">Da Nang International Airport</option>
                                                <option value="4">Cam Ranh International Airport (Khanh Hoa)</option>
                                                <option value="5">Can Tho International Airport</option>
                                                <option value="6">Phu Bai International Airport</option>
                                                <option value="7">Phu Quoc International Airport</option>
                                                <option value="8">Cat Bi International Airport</option>
                                            </optgroup>
                                            <optgroup label="Landport">
                                                <option value="9">Nam Can Landport</option>
                                                <option value="10">Song Tien Landport</option>
                                                <option value="11">Tinh Bien Landport</option>
                                                <option value="12">Xa Mat Landport</option>
                                                <option value="13">Mong Cai Landport</option>
                                                <option value="14">Moc Bai Landport</option>
                                                <option value="15">Lao Bao Landport</option>
                                                <option value="16">Ha Tien Landport</option>
                                                <option value="17">Huu Nghi Landport</option>
                                                <option value="18">Cau Treo Landport</option>
                                                <option value="19">Cha Lo Landport</option>
                                                <option value="20">Bo Y Landport</option>
                                                <option value="21">Lao Cai Landport</option>
                                                <option value="29">La Lay Landport</option>
                                                <option value="30">Na Meo Landport</option>
                                                <option value="31">Tay Trang Landport</option>
                                            </optgroup>
                                            <optgroup label="Seaport">
                                                <option value="22">Ho Chi Minh City Seaport</option>
                                                <option value="23">Quy Nhon Seaport</option>
                                                <option value="24">Nha Trang Seaport</option>
                                                <option value="25">Hai Phong Seaport</option>
                                                <option value="26">Hon Gai Seaport</option>
                                                <option value="27">Da Nang Seaport</option>
                                                <option value="28">Vung Tau Seaport</option>
                                                <option value="32">Chan May Seaport</option>
                                                <option value="33">Duong Dong Seaport</option>
                                            </optgroup>
                                        </select>
                                        <div class="processing-note">
                                            Select intended exit gate.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="control-label">Processing time <span
                                                class="required">*</span></label>
                                    </div>
                                    <div class="col-7">
                                        <div class="voa-processing-time-group">
                                            <div class="radio radio-checked">
                                                <label>
                                                    <input id="processing_time_normal"
                                                        note-id="processing-time-normal-note" class="processing_time"
                                                        type="radio" name="processing_time" value="Normal"
                                                        checked="checked">
                                                    <strong class="processing-time-normal-label">Normal (Guaranteed 3
                                                        working days)</strong>
                                                </label>
                                                <div id="processing-time-normal-note" class="processing-option">
                                                    <div class="processing-note">We guarantee delivery of approval
                                                        letter in 3 working days by email.</div>
                                                </div>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input id="processing_time_urgent"
                                                        note-id="processing-time-urgent-note" class="processing_time"
                                                        type="radio" name="processing_time" value="Urgent">
                                                    <strong>Urgent (within 2 working days)</strong>
                                                </label>
                                                <div id="processing-time-normal-note" class="processing-option">
                                                    <div class="processing-note">It is effective for who needs visa in
                                                        urgent. We will send the approval letter by email in <span
                                                            class="red">2 working days</span>. If you apply on a
                                                        Saturday, Sunday or holiday, it will be processed the next
                                                        business day. The extra charge is from <b>19 USD</b>/person.
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                            Array.from(document.getElementsByClassName('processing_time')).forEach(e =>
                                                e.addEventListener('click', () => {
                                                    Array.from(document.getElementsByClassName('radio'))
                                                        .forEach(er => er.classList.remove('radio-checked'));
                                                    e.parentNode.parentNode.classList.add('radio-checked');
                                                }))

                                            var curentYear = new Date().getFullYear();
                                            Array.from(document.getElementsByClassName('select-year')).forEach(e => {
                                                for (let i = curentYear; i < curentYear + 4; i++) {
                                                    e.innerHTML += `<option value=${i}>${i}</option>`;
                                                }
                                            })
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-7">
                                        <button class="btn-danger submit-next" type="submit">NEXT <i
                                                class="fa fa-angle-double-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="panel-fees">
                            <div class="panel-fees-item">
                                <label>Number of persons:</label><span class="group_size"> </span>
                            </div>
                            <div class="panel-fees-item">
                                <label>Type of visa:</label><span class="visa_type"> </span>
                            </div>
                            <div class="panel-fees-item">
                                <label>Purpose of entry:</label><span class="visit_purpose"> </span>
                            </div>
                            <div class="panel-fees-item">
                                <label>Visa stamping fee:</label><span class="total_stamping_fee price"> </span>
                            </div>
                            <div class="panel-fees-item">
                                <label>Visa service fee:</label><span class="price"> </span>
                            </div>
                            <div class="panel-fees-item">
                                <label>Processing time:</label><span class="processing_note_t"> </span>
                                <div class="processing_t price">
                                </div>
                            </div>
                            <div class="panel-fees-item">
                                <label>TOTAL FEE:</label><span class="total_fee">12 USD</span>
                                <div>
                                    <p class="stamping_fee_excluded"><a class="text-color-red" target="_blank"
                                            title="stamping fee" href="#"><u>Stamping fee</u></a> does not include, you
                                        will pay in cash at the airport.</p>
                                </div>
                            </div>
                            <div class="payment-methods">
                                <img alt="" src="<?php bloginfo('template_url'); ?>/images/payment-methods.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="applymore15">
                <p>For applying more than 10 persons, please <a href="contact" class="here">contact us</a> to get the
                    best
                    fee.</p>
                <p>You can also manually fill in the <a href="where-can-i-download-a-visa-application-form"
                        class="here">application form</a> then submit the
                    information to <a href="mailto:visa@vietnamvisa-online.org.vn"
                        class="here">visa@vietnamvisa-online.org.vn</a></p>
            </div>
        </div>
        <div id="step-2" class="step-content hidden">
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
                                            <a href="forgotten-password" class="forgot-pass">Forgot your password?</a>
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
        <div id="step-3" class="step-content hidden">
            <div id="passport-info">
                <div class="row">
                    <div class="col-7">
                        <div class="group passport-information">
                            <h2>Passport Information</h2>
                            <div class="group-content">
                                <div class="form-group passport-detail">
                                    <div class="passport-detail-item">
                                        <label>#1. Full name<span class="required">*</span></label>
                                        <div>
                                            <input type="text" id="fullname_1" name="fullname_1"
                                                class="form-control fullname_1" value="">
                                        </div>
                                    </div>
                                    <div class="passport-detail-item">
                                        <label>Gender<span class="required">*</span></label>
                                        <div>
                                            <select id="gender_1" name="gender_1" class="form-control gender_1">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="passport-detail-item">
                                        <label>Birth date<span class="required">*</span></label>
                                        <div class="birth-day">
                                            <div class="select-bod">
                                                <select id="birthyear_1" name="birthyear_1"
                                                    class="form-control birthyear_1 birthdate" applicant-num="1">
                                                </select>
                                                <script>
                                                let birthyear_1 = document.getElementById('birthyear_1');
                                                let cur_year = new Date().getFullYear();
                                                for (var i = 1919; i <= cur_year; i++) {
                                                    birthyear_1.innerHTML += `<option value="${i}">${i}</option>`;
                                                }
                                                </script>
                                            </div>
                                            <div class="select-bod">
                                                <select id="birthmonth_1" name="birthmonth_1"
                                                    class="form-control birthmonth_1 birthdate" applicant-num="1">
                                                    <option value="1">Jan</option>
                                                    <option value="2">Feb</option>
                                                    <option value="3">Mar</option>
                                                    <option value="4">Apr</option>
                                                    <option value="5">May</option>
                                                    <option value="6">Jun</option>
                                                    <option value="7">Jul</option>
                                                    <option value="8">Aug</option>
                                                    <option value="9">Sep</option>
                                                    <option value="10">Oct</option>
                                                    <option value="11">Nov</option>
                                                    <option value="12">Dec</option>
                                                </select>
                                            </div>
                                            <div class="select-bod">
                                                <select id="birthdate_1" name="birthdate_1"
                                                    class="form-control birthdate_1">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="passport-detail-item">
                                        <label>Nationality<span class="required">*</span></label>
                                        <div>
                                            <select id="nationality_1" name="nationality_1"
                                                class="form-control nationality nationality_1">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="passport-detail-item">
                                        <label>Passport number<span class="required">*</span></label>
                                        <div>
                                            <input type="text" id="passport_1" name="passport_1"
                                                class="form-control passport_1" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group-content">
                                <div class="form-group passport-detail">
                                    <div class="passport-detail-item">
                                        <label>Type<span class="required">*</span></label>
                                        <div>
                                            <select id="passport_type_1" name="passport_type_1"
                                                class="form-control passport_type_1">
                                                <option value="" selected="selected">Select...</option>
                                                <option value="Diplomatic passport">Diplomatic passport</option>
                                                <option value="Official passport">Official passport</option>
                                                <option value="Ordinary passport">Ordinary passport</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="passport-detail-item">
                                        <label>Expiry date<span class="required">*</span></label>
                                        <div class="expiry-date">
                                            <div class="select-expiry-date">
                                                <select id="expiryyear_1" name="expiryyear_1"
                                                    class="form-control expiryyear_1 expirydate"
                                                    applicant-num="1"></select>
                                                <script>
                                                let expiryyear_1 = document.getElementById('expiryyear_1');
                                                let cur_year_1 = new Date().getFullYear();
                                                for (var i = 1919; i <= cur_year_1; i++) {
                                                    expiryyear_1.innerHTML += `<option value="${i}">${i}</option>`;
                                                }
                                                </script>
                                            </div>
                                            <div class="select-expiry-date">
                                                <select id="expirymonth_1" name="expirymonth_1"
                                                    class="form-control expirymonth_1 expirydate" applicant-num="1">
                                                    <option value="1">Jan</option>
                                                    <option value="2">Feb</option>
                                                    <option value="3">Mar</option>
                                                    <option value="4">Apr</option>
                                                    <option value="5">May</option>
                                                    <option value="6">Jun</option>
                                                    <option value="7">Jul</option>
                                                    <option value="8">Aug</option>
                                                    <option value="9">Sep</option>
                                                    <option value="10">Oct</option>
                                                    <option value="11">Nov</option>
                                                    <option value="12">Dec</option>
                                                </select>
                                            </div>
                                            <div class="select-expiry-date">
                                                <select id="expirydate_1" name="expirydate_1"
                                                    class="form-control expirydate_1">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="passport-detail-item religion">
                                        <label>Religion<span class="required">*</span></label>
                                        <div><input type="text" id="religion_1" name="religion_1"
                                                class="form-control religion_1" value=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="group-content">
                                <p><strong>Attach your photograph and passport data page image <span class="required">*</span></strong></p>
                                <div class="passport-photo">                                  
                                        <div class="img passport-photo-img-1">
                                            <div class="select">Select to upload a photograph</div>
                                            <div class="select-overlay passport-photo-overlay" application-id="1"></div>
                                            <a class="btn-file-delete passport-photo-delete" application-id="1"><i class="fa fa-times"></i></a>
                                        </div>
                                                                         
                                    <div class="passport-data">
                                        <div class="select">Select to upload a photograph</div>
                                        <div class="select-overlay passport-photo-overlay" application-id="1"></div>
                                        <a class="btn-file-delete passport-photo-delete" application-id="1"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <script>
                                    function myFunction() {
                                        var popup = document.getElementById("myPopup");
                                        popup.classList.toggle("show");
                                    }
                                </script>
                            </div>
                            <div class="processing-note">
								<strong>Tips:</strong>
								<ul>
									<li>Full name, date of birth, passport number and nationality must be exact and same as state on your passport.</li>
									<li>Passport expiration date must has at least 6 months validity when arriving to Vietnam.</li>
									<li>Upload passport data page image and photograph (straight looking without glasses). Only these image formats are allowed: <b>*.jpg</b>, <b>*.png</b> or <b>*.gif</b> and the maximum upload file size is <b>8MB</b>.</li>
								</ul>
							</div>
                        </div>
                        <div class="group">
                            <h2>Contact Information</h2>
                            <div class="group-content">
                                <div class="form-group">
                                    <label class="form-group-item group-item-1">Full name <span
                                            class="required">*</span></label>
                                    <div class="form-group-item group-item-2">
                                        <select id="contact_title" name="contact_title" class="form-control">
                                            <option value="Mr" selected="selected">Mr</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Mrs">Mrs</option>
                                        </select>
                                        <input type="text" id="contact_fullname" name="contact_fullname"
                                            class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group-item group-item-1">Email <span
                                            class="required">*</span></label>
                                    <div class="form-group-item group-item-2">
                                        <input type="text" id="contact_email" name="contact_email" class="form-control"
                                            value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group-item group-item-1">Alternate email <span
                                            class="required">*</span></label>
                                    <div class="form-group-item group-item-2">
                                        <input type="text" id="contact_email2" name="contact_email2"
                                            class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group-item group-item-1">Phone number <span
                                            class="required">*</span></label>
                                    <div class="form-group-item group-item-2">
                                        <input type="text" id="contact_phone" name="contact_phone" class="form-control"
                                            value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group-item group-item-1">Leave a message <span
                                            class="required">*</span></label>
                                    <div class="form-group-item group-item-2">
                                        <textarea id="comment" name="comment" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group">
                            <h2>Terms and Conditions</h2>
                            <div class="acceptance">
                                <p style="text-align: justify;"><em>In these Terms and Conditions “we, our, us” refers
                                        to
                                        Vietnam-Evisa.Org</em><br><br>
                                    <span style="color: #da0000;"><strong>1. ACCEPTANCE OF TERMS </strong></span></p>
                                <p style="text-align: justify;">- Please note that this website is not the Government
                                    website, just belong to the Greentek Global Company Limited. It operates under the
                                    management of&nbsp;Greentek Global Company Limited.</p>
                                <p style="text-align: justify;">- Please read these terms and conditions carefully
                                    before
                                    using this website. If you object to any of the terms and conditions set out in this
                                    agreement you should not use any of the products or services on the Website and
                                    leave
                                    immediately.<br><br>- You agree that you shall not use the Website for illegal
                                    purposes,
                                    and will respect all applicable laws and regulations.</p>
                            </div>
                        </div>
                        <div class="check-accep">
                            <div class="checkbox">
                                <label for="information_confirm"><input type="checkbox" id="information_confirm"
                                        name="information_confirm" checked="checked"> I would like to confirm the above
                                    information is correct.</label>
                            </div>
                            <div class="checkbox">
                                <label for="terms_conditions_confirm"><input type="checkbox"
                                        id="terms_conditions_confirm" name="terms_conditions_confirm" checked="checked">
                                    I have read and agreed <a class="terms_conditions_confirm" target="_blank"
                                        href="#">Terms and
                                        Condition</a>.</label>
                            </div>
                            <div class="text-center" style="margin-top: 20px; margin-bottom: 20px;">
                                <button class="btn-danger btn_back" type="button" onclick=""><i
                                        class="fa fa-angle-double-left"></i> BACK</button>
                                <button class="btn-danger submit-next" type="submit">NEXT <i
                                        class="fa fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="panel-fees">
                            <div class="panel-fees-item">
                                <label>Number of persons:</label><span class="group_size"> </span>
                            </div>
                            <div class="panel-fees-item">
                                <label>Type of visa:</label><span class="visa_type"> </span>
                            </div>
                            <div class="panel-fees-item">
                                <label>Purpose of entry:</label><span class="visit_purpose"> </span>
                            </div>
                            <div class="panel-fees-item">
                                <label>Visa service fee:</label><span class="price"> </span>
                                <div>
                                    <i class="help-block">the service fee is flexible for each nationality and may
                                        change in
                                        the next steps based on The Vietnam Immigration Rule</i>
                                </div>
                            </div>
                            <div class="panel-fees-item bggray">
                                <div class="row">
                                    <label class="col-5">Got a promotion code?</label>
                                    <div class="col-7">
                                        <div class="input-group">
                                            <input type="text" class="promotion-input form-control" id="promotion-input"
                                                name="promotion-input" value="">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn-danger btn-apply-code">APPLY</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-fees-item">
                                <label>TOTAL FEE:</label><span class="total_fee">12 USD</span>
                                <div>
                                    <p class="stamping_fee_excluded"><a class="text-color-red" target="_blank"
                                            title="stamping fee" href="#"><u>Stamping fee</u></a> does not include, you
                                        will
                                        pay in cash at the airport.</p>
                                </div>
                            </div>
                            <div class="payment-methods">
                                <img alt="" src="<?php bloginfo('template_url'); ?>/images/payment-methods.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="step-4" class="step-content hidden">
            <div id="review-visa">
                <form action="" method="POST">
                    <div class="review-visa-item">
                        <h3>Please review your visa application details !</h3>
                        <table width="100%" class="table-summary">
                            <tbody>
                                <tr>
                                    <th>Type of visa</th>
                                    <th>Purpose of entry</th>
                                    <th>Entry date</th>
                                    <th>Exit date</th>
                                    <th>Arrival airport</th>
                                    <th>Flight number</th>
                                </tr>
                                <tr>
                                    <td>1 month single</td>
                                    <td>For tourist</td>
                                    <td>Nov 05, 2019</td>
                                    <td>Dec 03, 2019</td>
                                    <td>Tan Son Nhat International Airport (Ho Chi Minh City)</td>
                                    <td>VN240 - 08:30 PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="review-visa-item">
                        <h3>Passport details</h3>
                        <table width="100%" class="table-summary">
                            <tbody>
                                <tr>
                                    <th width="20" class="text-center">No.</th>
                                    <th>Full name</th>
                                    <th>Gender</th>
                                    <th>Date of birth</th>
                                    <th>Nationality</th>
                                    <th>Passport number</th>
                                </tr>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>nguyen thi hong nhung</td>
                                    <td>Female</td>
                                    <td>Jun 04, 1992</td>
                                    <td>Andorra</td>
                                    <td>21321312</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="review-visa-item">
                        <h3>Service fees</h3>
                        <table width="100%" class="table-summary">
                            <tbody>
                                <tr>
                                    <th>Type of service</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Unit price</th>
                                    <th class="text-right">Total fee</th>
                                </tr>
                                <tr>
                                    <td>1 month single for Andorra</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">12 USD</td>
                                    <td class="text-right">12 USD</td>
                                </tr>
                                <tr>
                                    <td>Processing time - Holiday</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">200 USD</td>
                                    <td class="text-right">200 USD</td>
                                </tr>
                                <tr>
                                    <td class="total" colspan="3">Total</td>
                                    <td class="text-right total">212 USD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="review-visa-item">
                        <h3>Payment method</h3>
                        <p>Please select one of below payment method to proceed the visa application.</p>
                    </div>
                    <div class="review-visa-item row-flex">
                        <div class="col-4">
                            <div class="radio">
                                <label>
                                    <img src="<?php bloginfo('template_url'); ?>/images/paypal.png"><br>
                                    <input type="radio" name="payment" value="Paypal" checked="checked"> Credit Card by
                                    Paypal
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="radio">
                                <label>
                                    <img src="<?php bloginfo('template_url'); ?>/images/stripe.png"><br>
                                    <input type="radio" name="payment" value="Stripe"> Credit Card by Stripe
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="radio">
                                <label>
                                    <img src="<?php bloginfo('template_url'); ?>/images/bank_transfer.png"><br>
                                    <input type="radio" name="payment" value="Bank Transfer"> Bank Transfer
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center" style="margin-top: 20px; margin-bottom: 20px;">
                        <button class="btn-danger btn_back" type="button" onclick=""><i
                                class="fa fa-angle-double-left"></i> BACK</button>
                        <button class="btn-danger submit-next" type="submit">NEXT <i
                                class="fa fa-angle-double-right"></i></button>
                    </div>
                </form>
            </div>
        </div>


        <script>
        let stepNumber = Array.from(document.getElementsByClassName('number'));
        let stepContent = Array.from(document.getElementsByClassName('step-content'));
        Array.from(document.getElementsByClassName('submit-next')).forEach(ele => {
            ele.addEventListener('click', () => {
                let index = document.getElementsByClassName('active').length;

                stepNumber[index].classList.add('active');
                stepContent.forEach(st => st.classList.add('hidden'));
                stepContent[index].classList.remove('hidden');

                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        })
        Array.from(document.getElementsByClassName('btn_back')).forEach(ele => {
            ele.addEventListener('click', () => {
                let index = document.getElementsByClassName('active').length;
                index--;
                stepNumber[index].classList.remove('active');

                stepContent.forEach(st => st.classList.add('hidden'));
                stepContent[index - 1].classList.remove('hidden');

                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        })
        </script>

        <script>
        var group_size_input = document.getElementById('group_size');
        var group_size_span = document.getElementsByClassName('group_size')[0];

        var visa_type_input = document.getElementById('visa_type');
        var visa_type_span = document.getElementsByClassName('visa_type')[0];

        var visit_purpose_input = document.getElementById('visit_purpose');
        var visit_purpose_span = document.getElementsByClassName('visit_purpose')[0];

        var price_span = document.getElementsByClassName('price')[0];

        let price_table = [
            [12, 15, 29, 35, 45, 55],
            [90, 95, 115, 130, 250, 350]
        ];

        group_size_input.addEventListener('change', (e) => {
            let target = e.target;
            let text = target.options[target.selectedIndex].text;
            group_size_span.innerHTML = text;
            updatePrice();

        });

        visa_type_input.addEventListener('change', (e) => {
            let target = e.target;
            let text = target.options[target.selectedIndex].text;
            visa_type_span.innerHTML = text;
            updatePrice();
        });

        visit_purpose_input.addEventListener('change', (e) => {
            let target = e.target;
            let text = target.options[target.selectedIndex].text;
            visit_purpose_span.innerHTML = text;
            updatePrice();
        });


        function updatePrice() {
            let person = group_size_input.value;
            let person_text = group_size_input.options.text;
            let price = price_table[visit_purpose_input.selectedIndex][visa_type_input.selectedIndex];
            price_span.innerHTML = `${price} USD x ${person_text} =  ${price * person} USD`;
        }

        group_size_input.options.selectedIndex = 0;
        group_size_input.dispatchEvent(new Event('change'));
        visa_type_input.options.selectedIndex = 0;
        visa_type_input.dispatchEvent(new Event('change'));
        visit_purpose_input.options.selectedIndex = 0;
        visit_purpose_input.dispatchEvent(new Event('change'));
        </script>

    </div>
</div>
<?php
get_footer();
?>