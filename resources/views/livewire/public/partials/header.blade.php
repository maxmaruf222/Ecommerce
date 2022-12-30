<header class="header-area header-3">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5 col-md-6">
                    <div class="header-top-left-menu">
                        <span>Default welcome msg!</span>
                    </div>
                </div>
                <div class="col-12 col-sm-7 col-md-6">
                    <div class="header-top-right-menu">
                        <nav>
                            <ul>
                                @if (Auth::user())
                                <li class="customer-menu"><a href="#">My Account <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{ route('dashboard') }}">My Profile</a></li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href=""><input style="background-color:#ffff; border:none;" value="{{ __('Log Out') }}" type="submit"></a>
                                            </form>
                                        </li>
                                    </ul>                                                
                                </li>
                                @else
                                <li class="customer-menu"><a href="{{ route('login') }}">Sign In</a></li>
                                @endif
                                
                                <li class="currency-menu"><a href="#">USD <i class="fa fa-angle-down"></i></a> 
                                    <ul>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">TAKA</a></li>
                                    </ul>
                                </li>
                                <li class="language-menu"><a href="#">English <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="#">Bangla</a></li>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Hindi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>                    
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row d_f_ac">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/img/logo3.png" alt="logo">
                        </a>
                    </div>
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{ route('home.shop') }}">Shop</a></li>
                                    <li><a href="{{ route('home.blog') }}">Blog</a></li>
                                    <li><a href="{{ route('home.contact-us') }}">contact</a></li>
                                    <li><a href="{{ route('home.about-us') }}">About</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="{{ route('dashboard') }}">My Account</a></li>
                                            <li><a href="{{ route('home.wishlist') }}">Wishlist</a></li>
                                            <li><a href="{{ route('home.checkout') }}">Checkout</a></li>
                                            <li><a href="{{ route('home.cart') }}">Cart</a></li>
                                            {{-- <li><a href="#">Third Level Menu</a>
                                                <ul>
                                                    <li><a href="#">Third Level Menu</a></li>
                                                    <li><a href="#">Third Level Menu</a></li>
                                                    <li><a href="#">Third Level Menu</a></li>
                                                    <li><a href="#">Third Level Menu</a></li>
                                                </ul>
                                            </li> --}}
                                        </ul>
                                    </li>
                                </ul>
                            </nav>   
                        </div>                             	
                    </div>                              	
                </div>   
                <div class="col-12 col-sm-12 col-md-9 d-none d-lg-block clearfix">
                    <div class="header-top-left-menu main-menu">
                        <nav>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="{{ route('home.shop') }}">Shop</a></li>
                                <li><a href="{{ route('home.blog') }}">Blog</a></li>
                                <li><a href="{{ route('home.contact-us') }}">contact</a></li>
                                <li><a href="{{ route('home.about-us') }}">About</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="{{ route('dashboard') }}">My Account</a></li>
                                        <li><a href="{{ route('home.wishlist') }}">Wishlist</a></li>
                                        <li><a href="{{ route('home.checkout') }}">Checkout</a></li>
                                        <li><a href="{{ route('home.cart') }}">Cart</a></li>
                                        {{-- <li><a href="#">Third Level Menu</a>
                                            <ul>
                                                <li><a href="#">Third Level Menu</a></li>
                                                <li><a href="#">Third Level Menu</a></li>
                                                <li><a href="#">Third Level Menu</a></li>
                                                <li><a href="#">Third Level Menu</a></li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </li>
                            </ul>
                        </nav>                            		
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-3">
                    <div class="product-category">
                        <div class="category-title">
                            <h6><i class="material-icons">menu</i>All Categories</h6>
                            <nav>
                                <ul>
                                    <li><a href="#">Fashion</a>
                                        <ul>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Men's</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Jewelry</a>
                                        <ul>
                                            <li><a href="#">Bracelets</a></li>
                                            <li><a href="#">Earrings</a></li>
                                            <li><a href="#">Necklaces</a></li>
                                            <li><a href="#">Rings</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Electronics</a>
                                        <ul>
                                            <li><a href="#">Cameras</a></li>
                                            <li><a href="#">Headphone</a></li>
                                            <li><a href="#">Laptop</a></li>
                                            <li><a href="#">TV & Audio</a></li>
                                        </ul>
                                    </li>
                                    <li class="extra_menu"><a href="#">furniture</a>
                                        <ul>
                                            <li><a href="#">Bed Room</a></li>
                                            <li><a href="#">Dining room</a></li>
                                            <li><a href="#">Home office</a></li>
                                            <li><a href="#">living room</a></li>
                                        </ul>
                                    </li>
                                    <li class="more-cat"><span>More Categories</span></li>
                                </ul>
                            </nav>										
                        </div>                            	
                    </div>  
                </div>
                <div class="col-12 col-sm-8 col-md-7 col-lg-6 col-xl-7 d_f_ac clearfix">
                    <div class="product-search">
                        <form action="#">
                            <input type="text" placeholder="Search entire store here..." class="input-text">
                            <input type="submit" value="Search" class="input-text submit-btn">
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-12 col-lg-3 col-xl-2 d_f_ac d_f_e clearfix">
                    <div class="header-quick-links">
                        <ul>
                            {{-- <li><a href="#"><i class="material-icons">autorenew</i></a></li> --}}
                            <li><a href="{{ route('home.wishlist') }}"><i class="material-icons">favorite_border</i></a></li>
                            <li class="cart-tigger"><a href="#"><i class="material-icons">shopping_cart</i><span>3</span></a>
                                <div class="mini-cart">
                                    <div class="mini-cart-inner">
                                        <span class="minicart-close"><i class="material-icons">clear</i></span>
                                        <div class="minicart-total-wraper">
                                            <p><strong>4</strong> Items in Cart</p>
                                            <b>Cart Subtotal: <span class="minitotal-price">$552.00</span></b>
                                            <a href="checkout.html">Proceed to Checkout</a>
                                        </div>
                                        <div class="mini-cart-sing-item-wrapper">
                                            <div class="mini-cart-sing-item">
                                                <div class="mini-cart-content">
                                                    <img src="assets/img/minicart/minicart1.jpg" alt="mini cart 1">
                                                    <div class="minicart-item-desc">
                                                        <a href="#">Standard animal</a>
                                                        <span class="minicart-price">$99.00</span>
                                                        <p class="minicart-qty"><span>Qty:</span><input type="number" value="3"></p>
                                                    </div>
                                                </div>
                                                <div class="mini-cart-edit-item">
                                                    <a class="item-edit" href="{{ route('home.cart') }}" title="edit"><i class="material-icons">settings</i></a>
                                                    <a class="item-delete" href="#" title="delete"><i class="material-icons">delete_forever</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="minicart-action-area">
                                            <a href="{{ route('home.cart') }}">View and Edit Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>