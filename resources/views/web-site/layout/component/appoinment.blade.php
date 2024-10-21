<div class="twm-home4-banner-section site-bg-light-purple appinment-component" id="appointment-section">
    <div class="row">
        <!--Left Section-->
        <div class="col-xl-8 col-lg-12 col-md-12">
            <div class="twm-bnr-left-section">
                <p class="sub-tit mb-2">GET APPOINTMENT</p>
                <div class="twm-bnr-title-large d-title">Request Your Appointment Today</div>

            </div>
        </div>

        <!--right Section-->
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class=" anm">

                <div class="appointment-form">
                    <form action="{{ route('SendAppointment') }}" method="POST" novalidate id="sendAppointment">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="name" placeholder="Name" required>
                            <span class="icon"> <i class="fas fa-user-alt"></i></span>
                        </div>
                        <div class="input-group">
                            <input type="tel" name="phone" placeholder="Phone Number" pattern="^\+?\d{10,15}$"
                                required>
                            <span class="icon"> <i class="fas fa-phone-alt"></i></span>
                        </div>
                        <div class="input-group">
                            <input type="email" name="email" placeholder="Email" required>
                            <span class="icon"> <i class="fas fa-envelope"></i></span>
                        </div>
                        <div class="input-group">
                            <select required name="service" class="service-select">
                                <option value="" disabled selected>Select Service</option>
                                <option value="Teeth Whitening - AED 449">Teeth Whitening - AED 449</option>
                                <option value="Zirconia Crown - AED 499">Zirconia Crown - AED 499</option>
                                <option value="Root Canal Treatment - AED 499">Root Canal Treatment - AED 499</option>
                                <option value="Tooth Extraction Treatment - AED 199">Tooth Extraction Treatment - AED
                                    199</option>
                                <option value="Scaling And Polishing - AED 99">Scaling And Polishing - AED 99</option>
                            </select>
                            <span class="icon"> <i class="fas fa-bars"></i></span>
                        </div>
                        <button type="submit" class="submit-btn mt-3">Book Appointment</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="hello-text">
        <img class="" src="{{ asset('images/home-4/banner/bottom.png') }}" alt="">
    </div>
</div>
<script>
    document.getElementById('sendAppointment').addEventListener('submit', function(event) {
        const form = event.target;
        const phone = form.phone.value;
        const email = form.email.value;

        // Custom phone validation
        const phonePattern = /^\+?\d{10,15}$/;
        if (!phonePattern.test(phone)) {
            alert('Please enter a valid phone number.');
            event.preventDefault();
            return;
        }

        // Custom email validation (although basic validation is covered by HTML5)
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            event.preventDefault();
            return;
        }

        // Add any other custom validation logic here
    });
</script>
