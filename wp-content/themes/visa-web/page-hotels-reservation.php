<?php
get_header()
?>
<div class="page-content">
    <div class="content-item">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <h1 class="item-title">HOTELS RESERVATION</h1>
                    <p>* With more than 2000 hotels in our system stretching from the north to the south of Viet Nam, we
                        can recommend you a good place for resting after a long flight. This is special offer for your
                        business trip or vacation.</p>
                    <p>* With numerous of experienced staff, we believe that you will be pleased by our services and our
                        hotel booking consulting. Just tell us your needs, we will consult and find solutions to help
                        you design at your choice. To book a hotel, you can&nbsp;<span
                            style="text-decoration: underline; color: #3366ff;"><a title="contact" href="contact"><span
                                    style="color: #3366ff; text-decoration: underline;">contact
                                    us</span></a></span>&nbsp;or let your message follow&nbsp; the form below.</p>
                    <div class="service-form">
                        <div class="service-title">Make an Hotel Reservation Request</div>
                        <p>
                            You will need to fill some information to complete your request.<br>
                            We will confirm to you by phone or email within 2 hours.
                        </p>
                        <div class="hotels-reservation-form">
                            <form name="frmRequestService" class="form-horizontal" role="form" action="" method="POST">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Check-in Date <span class="required">*</span></label>
                                            <input type="text" id="check-in-date" class="datepicker" />
                                        </div>
                                        <div class="form-group">
                                            <label>Check-out Date <span class="required">*</span></label>
                                            <input type="text" id="check-out-date" class="datepicker" />
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
                                            <label>Budget</label>
                                            <select id="budget" name="budget" class="form-control budget">
                                                <option value="10-50">$10-$50</option>
                                                <option value="60-100">$60-$100</option>
                                                <option value="100-200">$100-$200</option>
                                                <option value="200-300">$200-$300</option>
                                                <option value="300-400">$300-$400</option>
                                                <option value="400">Over $400</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Star(s)</label>
                                            <select id="stars" name="stars" class="form-control stars">
                                                <option value="1">1 star</option>
                                                <option value="2">2 stars</option>
                                                <option value="3">3 stars</option>
                                                <option value="4">4 stars</option>
                                                <option value="5">5 stars</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Number of Rooms</label>
                                            <input type="text" id="rooms" name="rooms" class="form-control rooms">
                                        </div>
                                        <div class="form-group">
                                            <label>Type of Room</label>
                                            <select id="occupancy" name="occupancy" class="form-control occupancy">
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
                                                <option value="Twins">Twins</option>
                                                <option value="Tripple">Tripple</option>
                                            </select>
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