<div class="twm-home4-banner-section site-bg-light-purple pb-0 pt-4 doctor-component" id="doctor-section">
    <div class="row">
        <!--Left Section-->
        <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="twm-bnr-left-section">
                <p class="sub-tit mb-2">MEET YOUR DENTIST</p>
                <div class="twm-bnr-title-large d-title">Dr. Suha Esufji</div>
                <div class="bannerIcon pt-0">
                    <div class="banner-header-icon">
                        <p class="mb-0 bold" style="color: white;font-weight: 500;font-size: 19px;">
                            General & Aesthetic Dentist | BDS Invisalign Provider</p>
                    </div>
                </div>

                <div class="d-flex buttons-header buttons-doctor">
                    <a href="javascript:;" class="btn-main" id="book-appointment4">Book Appointment</a>
                    <a href="javascript:;" id="book-appointment5" class="btn-main-icon"> <img
                            src="{{ asset('images/home-4/banner/arrow-dr.png') }}" alt=""></a>
                </div>
            </div>
        </div>

        <!--right Section-->
        <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="twm-bnr-right-section anm">

                <div class="">
                    <img src="{{ asset('images/home-4/banner/doctor.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="hello-text">
        <img class="" src="{{ asset('images/home-4/banner/bottom2.png') }}" alt="">
    </div>
</div>

<script>
    function scrollToSection(sectionId) {
        document.getElementById(sectionId).scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });
    }

    document.getElementById("book-appointment4").addEventListener("click", function() {
        scrollToSection("appointment-section");
    });
    document.getElementById("book-appointment5").addEventListener("click", function() {
        scrollToSection("appointment-section");
    });
</script>
