<!-- start navigation -->
<nav class="navbar no-margin-bottom bootsnav alt-font bg-white sidebar-nav sidebar-nav-style-1 navbar-expand-lg">
    <!-- start logo -->
    <div class="col-12 sidenav-header">
        <div class="logo-holder">
            <a href="{{ route('index') }}" class="d-inline-block logo"><img alt="IBT Global Trading" src="{{ asset('/assets/images/ibt-logo.webp') }}" /></a>
        </div>
        <!-- end logo -->
        <button class="navbar-toggler mobile-toggle" type="button" id="mobileToggleSidenav">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="col-12 px-0">
        <div id="navbar-menu" class="collapse navbar-collapse no-padding">
            <ul class="nav navbar-nav navbar-left-sidebar font-weight-500">
                <li class="dropdown">
                    <a href="{{ route('index') }}" title="Home">Home</a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('index') }}" title="About">About</a>
                </li>
                <li class="dropdown">
                    <a data-bs-toggle="dropdown" href="#" title="Our Services">Our Services <i class="fa-solid fa-angle-right"></i></a>
                    <ul class="dropdown-menu second-level">
                        <li>
                            <a href="#" title="Trading of Precious Metals">Trading of Precious Metals</a>
                            <a href="#" title="Import-Export of Precious Metals">Import-Export of Precious Metals</a>
                            <a href="#" title="Consulting">Consulting</a>
                            <a href="#" title="Facilitator">Facilitator</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('index') }}" title="Precious Metals Prices">Precious Metals Prices</a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('index') }}" title="Contact">Contact</a>
                </li>
                <li>
                    <div class="side-left-menu-close close-side"></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-12 position-absolute top-auto bottom-0 left-0 w-100 padding-20px-bottom sm-padding-15px-bottom">
        <div class="footer-holder">
            <form action="search-result.html" method="post" class="navbar-form no-padding search-box">
                <div class="input-group add-on">
                    <input name="text" id="text" data-email="required" type="text" placeholder="Enter your keywords..." class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-default search-button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </form>
            <div class="icon-social-medium margin-eleven-bottom padding-eight-top sm-padding-15px-top sm-margin-15px-bottom">
                <a href="https://www.facebook.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                <a href="https://twitter.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
            </div>
            <div class="text-medium-gray text-extra-small border-top border-color-extra-light-gray padding-twelve-top sm-padding-15px-top">&copy; {{ date('Y') }} IBT Global Trading. All rights reserved</div>
        </div>
    </div>
</nav>
<!-- end navigation -->