<!DOCTYPE html>
<html lang="">

@include('web-site.base.head')

<body>
    <!-- loading -->
    <div class="loading-container">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <ul class="list-unstyled">
                <li>
                    <img src="images/placeholder/loading.png" alt="Alternate Text" height="100" />

                </li>
                <li>

                    <div class="spinner">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>

                    </div>

                </li>
                <li>
                    <p>Loading</p>
                </li>
            </ul>
        </div>
    </div>
    <!-- End loading -->

    @include('web-site.base.header')
    <!-- End Header  -->

    <!-- Breadcrumb  -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Breadcrumb -->
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="index.html" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="index.html" class="breadcrumbs__url">News</a>
                        </li>
                        <li class="breadcrumbs__item breadcrumbs__item--current">
                            World
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb  -->


    <!-- Form contact -->
    <section class="wrap__contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5>contact us</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your name <span class="required"></span></label>
                                <input type="text" class="form-control" name="name" required="">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your email <span class="required"></span></label>
                                <input type="email" class="form-control" name="email" required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>website <span class="required"></span></label>
                                <input type="text" class="form-control" name="website" required="">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Subject <span class="required"></span></label>
                                <input type="text" class="form-control" name="subject" required="">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your message </label>
                                <textarea class="form-control" rows="8" name="message"></textarea>
                            </div>
                            <div class="form-group float-right mb-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <h5>Info location</h5>
                    <div class="wrap__contact-form-office">
                        <ul class="list-unstyled">

                            <li>
                                <span>
                                    <i class="fa fa-home"></i>
                                    Colombo, Sri Lanka
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:">(+94) 77 736 7347</a>
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:">asiannews.sl@gmail.com</a>
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-globe"></i>
                                    <a href="#" target="_blank"> www.asiannews.com</a>
                                </span>
                            </li>
                        </ul>

                        <div class="social__media">
                            <h5>find us</h5>
                            <ul class="list-inline">

                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/asiannewss" class="btn btn-social rounded text-white facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white whatsapp">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white telegram">
                                        <i class="fa fa-telegram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Form contact  -->


    @include('web-site.base.footer')


    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

</body>

</html>
