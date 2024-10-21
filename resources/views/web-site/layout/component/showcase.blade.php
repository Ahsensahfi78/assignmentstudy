<div class="twm-home4-banner-section site-bg-light-purple showcase pb-0 pt-4">
    <div class="row">
        <!--Left Section-->
        <div class="col-xl-6 col-lg-12 col-md-12 test22">
            <div class="twm-bnr-left-section px-0">
                <div class="twm-bnr-title-large">Dental Teeth <br />
                    Whitening Services<br />
                    Now @ AED <span class="header-price">449</span></div>
                <div class="d-flex align-center bannerIcon">
                    <div class="banner-header-icon">
                        <img src="images/home-4/banner/ic1.png" alt="">
                        <p class="mb-0 mx-2 bold" style="color: white;font-weight: 500;font-size: 19px;">
                            Free Dental Consultation</p>
                    </div>
                    <div class="banner-header-icon">
                        <img src="images/home-4/banner/ic2.png" alt="">
                        <p class="mb-0 mx-2 bold" style="color: white;font-weight: 500;font-size: 19px;">
                            Accepting Insurance</p>
                    </div>
                </div>

                <div class="d-flex buttons-header">
                    <a href="javascript:;" id="book-appointment2" class="btn-main">Book Now</a>
                    <a href="javascript:;" id="book-appointment3" class="btn-main-icon"> <img src="{{ asset('images/home-4/banner/arriow.png') }}"
                            alt=""></a>
                </div>
            </div>
        </div>

        <!--right Section-->
        <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="twm-bnr-right-section anm" data-wow-delay="1000ms" data-speed-x="2" data-speed-y="2">

                <div class="">
                    <img src="{{ asset('images/home-4/banner/banner.png') }}" alt="">
                </div>
            </div>
        </div>
      
    </div>
    <div class="hello-text">
        <img class="" src="{{ asset('images/home-4/banner/bottom2.png') }}" alt=""><br/><br/>
        <a href="#" class="applies py-5">T&C Applies</a>
    </div>
</div>


<script>
    function scrollToSection(sectionId) {
        document.getElementById(sectionId).scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });
    } 
 
    document.getElementById("book-appointment3").addEventListener("click", function() {
        scrollToSection("appointment-section");
    });

    document.getElementById("book-appointment2").addEventListener("click", function() {
        scrollToSection("appointment-section");
    });
</script>
