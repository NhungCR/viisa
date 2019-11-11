<?php
get_header()
?>
<div class="page-content">
    <div class="content-item">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <h1 class="item-title">TOUR AND TRAVEL BOOKING</h1>
                    <p>Over 15 years of experience in international travel organizing field, we – Vietnamese – will bring knowledge not only about travelling in Viet Nam to you &nbsp;but also about travelling in Indochina in general.</p>
                    <p>To book a tour or discover of Vietnam, Let us know your requirements and we will provide you with tailor made solution. For tours and travel booking enquiries please do not hesitate to <span style="color: #3366ff;"><strong><span style="text-decoration: underline;"><a title="contact us" href="contact">contact us</a></span></strong></span></p>
                    <p>You can take a look on our travel options for all Vietnam tours and travel programs OR just give us some information about your plan in form bellow:</p>
                    <div class="service-form">
                        <div class="service-title">Make an Tour Booking Request</div>
                        <p>
                            You will need to fill some information to complete your request.<br>
                            We will confirm to you by phone or email within 2 hours.
                        </p>
                        <div class="hotels-reservation-form">
                            <form name="frmRequestService" class="form-horizontal" role="form" action="" method="POST">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Arrival Date <span class="required">*</span></label>
                                            <input type="text" id="arrival-date" class="datepicker" />
                                        </div>
                                        <div class="form-group">
                                            <label>Departure Date <span class="required">*</span></label>
                                            <input type="text" id="departure-date" class="datepicker" />
                                        </div>
                                        <div class="form-group">
                                            <label>Destination <span class="required">*</span></label>
                                            <select id="destination" name="destination" class="form-control destination">
                                                <option value="Buon Ma Thuot">Buon Ma Thuot</option>
                                                <option value="Can Tho">Can Tho</option>
                                                <option value="Chau Doc">Chau Doc</option>
                                                <option value="Da Lat">Da Lat</option>
                                                <option value="Da Nang">Da Nang</option>
                                                <option value="Hai Phong">Hai Phong</option>
                                                <option value="Ha Long">Ha Long</option>
                                                <option value="Ha Noi">Ha Noi</option>
                                                <option value="Ho Chi Minh">Ho Chi Minh</option>
                                                <option value="Hoi An">Hoi An</option>
                                                <option value="Hue">Hue</option>
                                                <option value="Nha Trang">Nha Trang</option>
                                                <option value="Phan Thiet">Phan Thiet</option>
                                                <option value="Phnom Penh">Phnom Penh</option>
                                                <option value="Phu Quoc">Phu Quoc</option>
                                                <option value="Quy Nhon">Quy Nhon</option>
                                                <option value="Sapa">Sapa</option>
                                                <option value="Siem Riep">Siem Riep</option>
                                                <option value="Vung Tau">Vung Tau</option>
								            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select id="category" name="category" class="form-control category">
                                                <option value="All" selected="selected">All</option>
                                                <option value="Beach Relax">Beach Relax</option>
                                                <option value="Central Vietnam tours">Central Vietnam tours</option>
                                                <option value="Cycling Tours ( Biking tours)">Cycling Tours ( Biking tours)</option>
                                                <option value="Excursions in Dalat">Excursions in Dalat</option>
                                                <option value="Excursions in Halong">Excursions in Halong</option>
                                                <option value="Excursions in Hanoi">Excursions in Hanoi</option>
                                                <option value="Excursions in Hoian">Excursions in Hoian</option>
                                                <option value="Excursions in Hue">Excursions in Hue</option>
                                                <option value="Excursions in Nhatrang">Excursions in Nhatrang</option>
                                                <option value="Excursions in Phu Quoc">Excursions in Phu Quoc</option>
                                                <option value="Excursions in Saigon &amp; Mekong Delta">Excursions in Saigon &amp; Mekong Delta</option>
                                                <option value="Excursions in Sapa">Excursions in Sapa</option>
                                                <option value="Free &amp; Easy">Free &amp; Easy</option>
                                                <option value="Golf tours">Golf tours</option>
                                                <option value="Northern Vietnam tours">Northern Vietnam tours</option>
                                                <option value="Photograph Around">Photograph Around</option>
                                                <option value="Southern Vietnam tours">Southern Vietnam tours</option>
                                                <option value="Througout Vietnam tours">Througout Vietnam tours</option>
                                                <option value="Vietnamese Culinary">Vietnamese Culinary</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Budget</label>
                                            <select id="budget" name="budget" class="form-control budget">
                                                <option value="Under $50">Under $50</option>
                                                <option value="$50-$100">$50-$100</option>
                                                <option value="$100-$150">$100-$150</option>
                                                <option value="$150-$200">$150-$200</option>
                                                <option value="$200-$250">$200-$250</option>
                                                <option value="$250-$300">$250-$300</option>
                                                <option value="$300-$400">$300-$400</option>
                                                <option value="$400-$500">$400-$500</option>
                                                <option value="$500-$1000">$500-$1000</option>
                                                <option value="$1000-$1200">$1000-$1200</option>
                                                <option value="$1200-$1400">$1200-$1400</option>
                                                <option value="$1400-$1600">$1400-$1600</option>
                                                <option value="$1600-$1800">$1600-$1800</option>
                                                <option value="$1800-$2000">$1800-$2000</option>
                                                <option value="From $2000">From $2000</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>How many Travelers? <span class="required">*</span></label>
                                            <input type="text" id="travelers" name="travelers" value="" class="form-control travelers">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Your Name <span class="required">*</span></label>
                                            <input type="text" id="fullname" name="fullname" value="" class="form-control fullname">
                                        </div>
                                        <div class="form-group">
                                            <label>Your Email <span class="required">*</span></label>
                                            <input type="text" id="email" name="email" value="" class="form-control email">
                                            <span class="help-block">Your booking status will be sent to this email</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" id="phone" name="phone" value="" class="form-control phone">
                                            <span class="help-block">To contact and assist you directly in urgent case.</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Special Request  </label>
                                            <textarea id="special-request" name="specialRequest" class="form-control" rows="6"></textarea>
                                        </div>
                                        <button type="submit" class="btn-danger btnstep">Send Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="related-item">
                            <h2 class="related-heading">Other Services</h2>
                            <ul>
                                <li><a href="car-pick-up-service">CAR PICK-UP SERVICE</a></li>
                                <li><a href="#">VIETNAM VISA EXTENSION AND RENEWAL</a></li>
                                <li><a href="#">HOTELS RESERVATION</a></li>
                                <li><a href="#">TOUR AND TRAVEL BOOKING</a></li>
                                <li><a href="#">VIETNAM DOMESTIC FLIGHTS </a></li>
                            </ul>
                        </div>
                </div>
                <div class="col-3 col-right hidden-sm">
                    <div class="support-online-widget right-corner">
                        <div class="title">SUPPORT ONLINE</div>
                        <div class="support-content">
                            <p><i>Our pleasure to support you 24/7</i></p>
                            <div>
                                <label class="f14">Email</label><span class="email"><a
                                        href="mailto:abc@vietnam-evisa.org">visa@vietnam-evisa.org</a></span></div>
                            <div> <label class="f14">Tollfree</label><span class="email"><a>+1.800.642.1567</a></span>
                            </div>
                            <div> <label class="f14">Hotline</label><span class="email"><a>+84.327.117.119</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="payment-online">
                        <a href="#">
                            <div class="title">MAKE A PAYMENT</div>
                            <p>100% SECURE AND EASY-TO-USE</p>
                        </a>
                    </div>
                    <div class="confidence-widget">
                        <div class="banner"></div>
                        <div class="content">
                            <div class="title">
                                APPLY WITH CONFIDENCE
                            </div>
                            <ul>
                                <li>Safety, Fastest, Reliable</li>
                                <li>2 working days guarantee</li>
                                <li>Competitive prices</li>
                                <li>Secure 256 bit SSL encryption</li>
                                <li>Money back guarantee</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-widget">
                        <div class="banner"></div>
                        <div class="content">
                            <div class="title">
                                EXTRA SERVICES
                            </div>
                            <ul>
                                <li><a href="#"><i class="passport"></i> Visa Extension &amp; Renewal</a></li>
                                <li><a href="#"><i class="airport-concierge"></i> Airport Concierge</a></li>
                                <li><a href="#"><i class="car"></i> Airport Car Pickup</a></li>
                                <li><a href="#"><i class="hotel"></i> Hotel Reservation</a></li>
                                <li><a href="#"><i class="travel"></i> Tour &amp; Travel Booking</a></li>
                                <li><a href="#"><i class="flight"></i> Vietnam Domestic Flights</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer()
?>