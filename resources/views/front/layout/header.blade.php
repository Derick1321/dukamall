    <!-- header-start -->
    <header class="header d-blue-bg">
        <div class="header-top">
            <div class="container custom-conatiner">
                <div class="header-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-7">
                            <div class="header-inner-start">
                                <div class="header__currency border-right">
                                    <div class="s-name">
                                        <span>Language: </span>
                                    </div>
                                    <select>
                                        <option>English</option>
                                        <option>Deutsch</option>
                                        <option>Français</option>
                                        <option>Espanol</option>
                                    </select>
                                </div>
                                <div class="header__lang border-right">
                                    <div class="s-name">
                                        <span>Currency: </span>
                                    </div>
                                    <select>
                                        <option> USD</option>
                                        <option>EUR</option>
                                        <option>INR</option>
                                        <option>BDT</option>
                                        <option>BGD</option>
                                    </select>
                                </div>
                                <div class="support d-none d-sm-block">
                                    <p>Need Help? <a href="tel:+001123456789">+001 123 456 789</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                            <div class="header-inner-end text-md-end">
                                <div class="ovic-menu-wrapper ovic-menu-wrapper-2">
                                    <ul>
                                        @if (Route::has('login'))
                                        <div>
                                            <li>
                                                @auth
                                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                                            
                                            </li>
                                            @else
                                            <li>
                                                <a href="{{ route('login') }}">Login</a>
                                            </li>
                                            @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                            @endif
                                            @endauth
                                        </div>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid">
            <div class="container custom-conatiner">
                <div class="heade-mid-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div class="header__info">
                                <div class="logo">
                                    <a href="index.html" class="logo-image"><img src="{{ asset('front/img/logo/logo1.svg')}}" alt="logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="header__search">
                                <form action="#">
                                    <div class="header__search-box">
                                        <input class="search-input search-input-2" type="text" placeholder="I'm shopping for...">
                                        <button class="button button-2" type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                    <div class="header__search-cat">
                                        <select>
                                            <option>All Categories</option>
                                            <option>Best Seller Products</option>
                                            <option>Top 10 Offers</option>
                                            <option>New Arrivals</option>
                                            <option>Phones &amp; Tablets</option>
                                            <option>Electronics &amp; Digital</option>
                                            <option>Fashion &amp; Clothings</option>
                                            <option>Jewelry &amp; Watches</option>
                                            <option>Health &amp; Beauty</option>
                                            <option>Sound &amp; Speakers</option>
                                            <option>TV &amp; Audio</option>
                                            <option>Computers</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-8 col-sm-8">
                            <div class="header-action">
                                <div class="block-userlink">
                                    <a class="icon-link icon-link-2" href="my-account.html">
                                    <i class="flaticon-user"></i>
                                    <span class="text">
                                    <span class="sub">Login </span>
                                    My Account </span>
                                    </a>
                                </div>
                                <div class="block-wishlist action">
                                    <a class="icon-link icon-link-2" href="#">
                                    <i class="flaticon-heart"></i>
                                    <span class="count count-2">0</span>
                                    <span class="text">
                                    <span class="sub">Favorite</span>
                                    My Wishlist </span>
                                    </a>
                                </div>
                                <div class="block-cart action">
                                    <a class="icon-link icon-link-2" href="#">
                                    <i class="flaticon-shopping-bag"></i>
                                    <span class="count count-2">1</span>
                                    <span class="text">
                                    <span class="sub">Your Cart:</span>
                                    $00.00 </span>
                                    </a>
                                    <div class="cart">
                                        <div class="cart__mini">
                                            <ul>
                                                <li>
                                                  <div class="cart__title">
                                                    <h4>Your Cart</h4>
                                                    <span>(1 Item in Cart)</span>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="cart__item d-flex justify-content-between align-items-center">
                                                    <div class="cart__inner d-flex">
                                                      <div class="cart__thumb">
                                                        <a href="product-details.html">
                                                          <img src="assets/img/cart/20.jpg" alt="">
                                                        </a>
                                                      </div>
                                                      <div class="cart__details">
                                                        <h6><a href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a></h6>
                                                        <div class="cart__price">
                                                          <span>$255.00</span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="cart__del">
                                                        <a href="#"><i class="fal fa-times"></i></a>
                                                    </div>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="cart__sub d-flex justify-content-between align-items-center">
                                                    <h6>Subtotal</h6>
                                                    <span class="cart__sub-total">$255.00</span>
                                                  </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="wc-cart mb-10">View cart</a>
                                                    <a href="checkout.html" class="wc-checkout">Checkout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container custom-conatiner">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-3">                        
                        <div class="cat__menu-wrapper side-border d-none d-lg-block">
                            <div class="cat-toggle">
                                <button type="button" class="cat-toggle-btn cat-toggle-btn-1"><i class="fal fa-bars"></i> Shop by department</button>
                                <div class="cat__menu-2 cat__menu">
                                    <nav id="mobile-menu" style="display: block;">
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="#">Shop</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-3">
                      <div class="header__bottom-left d-flex d-xl-block align-items-center">
                        <div class="side-menu d-lg-none mr-20">
                          <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                        </div>
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a href="about.html">Home</a></li>
                                    <li><a href="about.html">Shop</a></li>
                                    <li><a href="about.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-9">
                        <div class="shopeing-text text-sm-end">
                            <p>Spend $120 more and get free shipping!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
     <!-- header-end -->

         <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__logo mb-40">
                <a href="index.html">
                <img src="assets/img/logo/logo-white.png" alt="logo">
                </a>
            </div>
            <div class="offcanvas__search mb-25">
                <form action="#">
                    <input type="text" placeholder="What are you searching for?">
                    <button type="submit" ><i class="far fa-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu fix"></div>
            <div class="offcanvas__action">

            </div>
        </div>
        </div>
    </div>
    <!-- offcanvas area end -->  