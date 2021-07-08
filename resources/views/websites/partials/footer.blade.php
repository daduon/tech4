<div class="footer-area pt-4">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="foot-logo">
                    <img src="{{url($footer->footer_logo)}}" alt="Tech for kid's logo"
                         class="img-fluid img-foot-logo">
                </div>
                <div class="foot-text">
                    <p class="text-body">
                        {{ $footer->{'about_text_'.App::getlocale()} }}
                    </p>
                </div>
            </div>
            <div class="col-4">
                <h4 class="foot-title">
                    Our Mission
                </h4>
                <div class="foot-text">
                    <p class="text-body">
                        {{ $footer->{'text_'.App::getlocale()} }}
                    </p>
                </div>
            </div>
            <div class="col-4">
                <h4 class="foot-title">
                    Contact Us
                </h4>
                <div class="foot-text">
                    <div class="address">
                        <label>Address:</label><span> Toul kork II, Phnom Penh Cambodia</span>
                    </div>
                    <div class="con-phone">
                        <label>Contact:</label><span> +855 12 234 234</span>
                    </div>
                    <div class="con-email">
                        <label>Email:</label><span> techforkid.info@gmail.com</span>
                    </div>
                    <div class="con-social">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-botton">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <span>{{ $footer->gradet_text }}</span>
                </div>
                <div class="col-4">
                    <span>Power by tech for kids</span>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
</div>