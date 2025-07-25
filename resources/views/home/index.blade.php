@extends('layout.layout')

@php
$css= '<link rel="stylesheet" href="' . asset('assets/css/variables/variable5.css') . '" />';
$header='flase';
$footer='flase';
@endphp

@section('content')

    <header id="rtsHeader"> 
        <div class="navbar-wrap">
            <div class="navbar-part navbar-part3 navbar-part5">
                <div class="container header-container">
                    <div class="navbar-inner navbar-inner2">
                        <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo99.webp') }}" alt="weiboo-logo" width="100"></a>
                        <div class="navbar-search-area">
                            <div class="search-input-inner">
                                <div class="input-div">
                                    <div class="search-input-icon icon2"><i class="rt-search mr--10"></i>Search</div>
                                    <input class="search-input input4" type="text" placeholder="Keyword here...">
                                </div>
                            </div>
                        </div>
                        <div class="header-action-items header-action-items1">
                            <div class="search-part">
                                <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                                <div class="search-input-area">
                                    <div class="container">
                                        <div class="search-input-inner inner-2">
                                            <div class="input-div">
                                                <input class="search-input" type="text"
                                                    placeholder="Search by keyword or #">
                                            </div>
                                            <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart action-item">
                                <div class="cart-nav">
                                    <div class=" icon"><a href="{{route('index')}}"><i class="rt-cart"></i></a><span
                                            class="wishlist-dot icon-dot">3</span></div>
                                </div>
                            </div>
                            <div class="wishlist action-item">
                                <div class="favourite-icon icon"><a href="{{ route('index') }}"><i class="rt-heart"></i></a>
                                </div>
                            </div>
                            <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
                        </div>
                        <div class=""><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-sticky lower-navbar-sticky lower-navbar-sticky5">
            <div class="container header-container">
                <div class="navbar-part navbar-part2 lower-navbar lower-navbar5">
                    <div class="navbar-inner">
                        <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo2.svg') }}" alt="umart-logo"></a>
                        <div class="catagory-select-area">
                            <select class="custom-select">
                                <option value="hide">Grocery</option>
                                 
                            </select>
                        </div>
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown"><a class="menu-item active1" href="/">Home <i
                                        class="rt-plus"></i></a>
                                        
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="#Featured_Products">Featured Products <i
                                        class="rt-plus"></i></a>
                                         
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="#Hand_Picked_Products">Hand Picked Products <i
                                        class="rt-plus"></i></a>
                                        
                                    </li>

                                    <li class="has-dropdown"><a class="menu-item" href="#Shop_insights_feeds">Shop insights & feeds <i
                                        class="rt-plus"></i></a>
                                         
                                    </li>
                                    <li><a class="menu-item" href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="navbar-coupon-code">
                            <div class="icon"><img src="{{ asset('assets/images/icons/percent-tag2.png') }}" alt="tag-icon"></div>
                            <div class="content">
                                <span class="title">COUPON CODE</span>
                                <span class="code">WEIBOO45%</span>
                            </div>
                        </div>
                        <div class="hamburger ml-auto"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bar">
            <div class="cart-header">
                <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
                <div class="close-cart"><i class="fal fa-times"></i></div>
            </div>
            <div class="product-area">
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{ asset('assets/images/slider/image1.jpg') }}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Parachute Jacket</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">3 ×</span>
                                <span class="product-price">$198.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="3" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{ asset('assets/images/slider/image2.jpg') }}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Narrow Trouser</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">2 ×</span>
                                <span class="product-price">$88.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="2" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-item last-child">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{ asset('assets/images/slider/image5.jpg') }}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Bellyless Hoodie</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">1 ×</span>
                                <span class="product-price">$289.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="2" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-bottom-area">
                <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
                    FOR FREE SHIPPING</span>
                <span class="total-price">TOTAL: <span class="price">$556</span></span>
                <a href="{{ route('checkOut') }}" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
                <a href="{{ route('index') }}" class="view-btn cart-btn">VIEW CART</a>
            </div>
        </div>
        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="offset-sidebar">
                <a class="hamburger-1 mobile-hamburger-1 mobile-hamburger-2 ml--30" href="#"><span><i class="rt-xmark"></i></span></a>
            </div>
            <!-- offset-sidebar start -->
            <div class="offset-sidebar-main">
                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <img src="{{ asset('assets/images/logo1.svg') }}" alt="">
                        <p class="mb-30">
                            We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                        </p>
                    </div>
                    <div class="info-widget info-widget2">
                        <h4 class="offset-title mb-20">Get In Touch </h4>
                        <ul>
                            <li class="info phone"><a href="tel:78090790890208806803">780 907 908 90, 208 806 803</a></li>
                            <li class="info email"><a href="email:pixcelsthemes@gmail.com">pixcelsthemes@gmail.com</a></li>
                            <li class="info web"><a href="www.webexample.com">www.webexample.com</a></li>
                            <li class="info location">13/A, New Pro State, NYC</li>
                        </ul>
                        <div class="offset-social-link">
                            <h4 class="offset-title mb-20">Follow Us </h4>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
		    <!-- offset-sidebar end -->
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu side-mobile-menu1 side-mobile-menu2">
                <ul id="mobile-menu-active">
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('index') }}">Home <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('index') }}">Main Home</a></li>
                            <li><a href="{{ route('indexTwo') }}">Fashion Home</a></li>
                            <li><a href="{{ route('indexNine') }}">Fashion Home Two</a></li>
                            <li><a href="{{ route('indexThree') }}">Furniture Home</a></li>
                            <li><a href="{{ route('indexFour') }}">Decor Home</a></li>
                            <li><a href="{{ route('indexFive') }}">Electronics Home</a></li>
                            <li><a href="{{ route('indexSix') }}">Grocery Home</a></li>
                            <li><a href="{{ route('indexSeven') }}">Footwear Home</a></li>
                            <li><a href="{{ route('indexEight') }}">Gaming Home</a></li>
                            <li><a href="{{ route('indexTen') }}">Sunglass Home</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('shop') }}">Shop <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu mega-dropdown-mobile">
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('shop') }}">Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('sidebarLeft') }}">Left Sidebar
                                            Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('sidebarRight') }}">Right Sidebar
                                            Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('fullWidthShop') }}">Full
                                            Width Shop</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('index') }}">Single Product
                                            Layout
                                            One</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('index') }}">Single Product Layout
                                            Two</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('variableProducts') }}">Variable Product</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('groupedProducts') }}">Grouped Product</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('index') }}">Cart
                                            </a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('checkOut') }}">Checkout</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('account') }}">My
                                            Account</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('index') }}">Pages <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('faq') }}">FAQ's</a></li>
                            <li><a href="{{ route('errorPage') }}">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('news') }}">Blog <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('news') }}">Blog</a></li>
                            <li><a href="{{ route('newsGrid') }}">Blog Grid</a></li>
                            <li><a href="{{ route('newsDetails') }}">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a class="mm-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
            <div class="header-action-items header-action-items1 header-action-items-side">
                <div class="search-part">
                    <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                    <div class="search-input-area">
                        <div class="container">
                            <div class="search-input-inner">
                                <select id="custom-select">
                                    <option value="hide">All Catagory</option>
                                    <option value="all">All</option>
                                    <option value="men">Men</option>
                                    <option value="women">Women</option>
                                    <option value="shoes">Shoes</option>
                                    <option value="shoes">Glasses</option>
                                    <option value="shoes">Bags</option>
                                    <option value="shoes">Assesories</option>
                                </select>
                                <div class="input-div">
                                    <div class="search-input-icon"><i class="rt-search mr--10"></i></div>
                                    <input class="search-input" type="text" placeholder="Search by keyword or #">
                                </div>
                                <div class="search-close-icon"><i class="rt-xmark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart action-item">
                    <div class="cart-nav">
                        <div class="cart-icon icon"><i class="rt-cart"></i><span class="wishlist-dot icon-dot">3</span>
                        </div>
                    </div>
                </div>
                <div class="wishlist action-item">
                    <div class="favourite-icon icon"><i class="rt-heart"></i><span class="cart-dot icon-dot">0</span>
                    </div>
                </div>
                <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
            </div>
            <!-- side-mobile-menu end -->
        </aside>
        <!-- ..::Banner Section Start Here::.. -->
        <div class="banner banner-3 banner-5">
            <div class="swiper bannerSlidee">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-single bg-image-5 balo">
                            <div class="container">
                                <div class="single-inner">
                                    <div class="contents">
                                        <span class="banner-pretitle-box">Don’t Miss! Only For This Week <span
                                                class="cate">Organic Juice</span></span>
                                        <h1 class="banner-heading mb--30">Todays Best Deal <br>
                                            In Our Store</h1>
                                        <div class="banner-action">
                                            <p>From</p>
                                            <span class="product-price">$29.00</span>
                                        </div>
                                    </div>
                                    <div class="banner-product-thumb"><img
                                            src="{{ asset('assets/images/products/banner-product5.png') }}" alt="banner-product"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-single bg-image-5">
                            <div class="container">
                                <div class="single-inner">
                                    <div class="contents">
                                        <span class="banner-pretitle-box">Hot Deal In This Week</span>
                                        <h1 class="banner-heading mb--30">Elegance <br>
                                            Hand Craft</h1>
                                        <div class="banner-action">
                                            <a class="banner-btn banner-btn2" href="#0"><i
                                                    class="rt-cart-shopping"></i>Shop
                                                Now</a>
                                            <div class="banner-review">
                                                <div class="review">
                                                    <div class="star"><i class="fas fa-star"></i></div>
                                                    <div class="star"><i class="fas fa-star"></i></div>
                                                    <div class="star"><i class="fas fa-star"></i></div>
                                                    <div class="star"><i class="fas fa-star"></i></div>
                                                    <div class="star"><i class="fal fa-star"></i></div>
                                                </div>
                                                <span class="review-text"><span class="value">100+</span> Review</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-product-thumb"><img
                                            src="{{ asset('assets/images/products/banner-product2.png') }}" alt="banner-product"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner5 floating-elements">
                <div class="floating-item item1"><img src="{{ asset('assets/images/items/gros1.png') }}" alt="floating-element"></div>
                <div class="floating-item item2"><img src="{{ asset('assets/images/items/gros2.png') }}" alt="floating-element"></div>
                <div class="floating-item item3"><img src="{{ asset('assets/images/items/gros3.png') }}" alt="floating-element"></div>
            </div>
        </div>
        <!-- ..::Banner Section End Here::.. -->
    </header>
    <!-- ..::Header Section End Here::.. -->

    <!-- ..::Product Category Section Start Here::.. -->
    <div class="rts-product-category-section section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-2">
                    <a href="{{ route('index') }}" class="product-item product-item-vertical">
                        <div class="product-thumb"><img src="{{ asset('assets/images/products/home5/category/1.png') }}"
                                alt="product-image"></div>
                        <div class="contents">
                            <span class="item-qnty">10 Items</span>
                            <h3 class="product-title">Fresh Vegetables</h3>
                            <div class="icon"><i class="fal fa-long-arrow-right"></i></div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <a href="{{ route('index') }}" class="product-item product-item-horizontal">
                                <div class="product-thumb"><img src="{{ asset('assets/images/products/home5/category/2.png') }}"
                                        alt="product-image"></div>
                                <div class="contents">
                                    <span class="item-qnty">10 Items</span>
                                    <h3 class="product-title">Breads & Bakery</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <a href="{{ route('index') }}" class="product-item product-item-horizontal">
                                <div class="product-thumb"><img src="{{ asset('assets/images/products/home5/category/3.png') }}"
                                        alt="product-image"></div>
                                <div class="contents">
                                    <span class="item-qnty">10 Items</span>
                                    <h3 class="product-title">Butter</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <a href="{{ route('index') }}" class="product-item product-item-horizontal">
                                <div class="product-thumb"><img src="{{ asset('assets/images/products/home5/category/4.png') }}"
                                        alt="product-image"></div>
                                <div class="contents">
                                    <span class="item-qnty">10 Items</span>
                                    <h3 class="product-title">Chips</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <a href="{{ route('index') }}" class="product-item product-item-horizontal">
                                <div class="product-thumb"><img src="{{ asset('assets/images/products/home5/category/5.png') }}"
                                        alt="product-image"></div>
                                <div class="contents">
                                    <span class="item-qnty">10 Items</span>
                                    <h3 class="product-title">Chocolate & Ice-cream</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <a href="{{ route('index') }}" class="product-item product-item-horizontal">
                                <div class="product-thumb"><img src="{{ asset('assets/images/products/home5/category/6.png') }}"
                                        alt="product-image"></div>
                                <div class="contents">
                                    <span class="item-qnty">10 Items</span>
                                    <h3 class="product-title">Fish & Meat</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <a href="{{ route('index') }}" class="product-item product-item-horizontal">
                                <div class="product-thumb"><img src="{{ asset('assets/images/products/home5/category/7.png') }}"
                                        alt="product-image"></div>
                                <div class="contents">
                                    <span class="item-qnty">10 Items</span>
                                    <h3 class="product-title">Masala</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12">
                    <a href="{{ route('index') }}" class="product-item product-item-vertical product-item-bg">
                        <div class="product-thumb"><img src="{{ asset('assets/images/products/home5/category/8.png') }}"
                                alt="product-image"></div>
                        <div class="contents">
                            <span class="item-qnty">-50%</span>
                            <h3 class="product-title">Pure Egg</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Product Category Section End Here::.. -->

    <!-- ..::Product Category Section Start Here::.. -->
    <div class="rts-featured-product-section rts-featured-product-section2 section-gap" id="Featured_Products">
        <div class="container">
            <div class="section-header section-header4">
                <span class="section-title section-title-2 mb--5
                ">Featured Products</span>
                <a href="shop-main" class="go-btn">All Products <i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-status-bar">
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fal fa-star"></i></div>
                            </div>
                            <span class="stock">In Stock</span>
                        </div>
                        <a href="{{ route('index') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/products/home5/1.png') }}" alt="product-image"></a>
                        <div class="contents">
                            <span class="product-type">Cookie</span>
                            <a href="{{ route('index') }}" class="product-title">Sweet Onion Salsa</a>
                            <div class="product-bottom-content">
                                <span class="product-price">$230,00</span>
                                <button class="wishlist"><i class="rt-heart"></i></button>
                            </div>
                            <div class="product-actions product-actions3">
                                <a href="{{ route('index') }}" class="product-action"><i class="fal fa-heart"></i></a>
                            </div>
                            <div class="product-features product-features2">
                                <div class="hot-tag product-tag">HOT</div>
                            </div>
                        </div>
                        <div class="product-bottom-action">
                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-bag mr--5"></i> Add To
                                Cart</a>
                            <button class="view-btn"><i class="fal fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-status-bar">
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fal fa-star"></i></div>
                            </div>
                            <span class="stock">In Stock</span>
                        </div>
                        <a href="{{ route('index') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/products/home5/2.png') }}" alt="product-image"></a>
                        <div class="contents">
                            <span class="product-type">Cookie</span>
                            <a href="{{ route('index') }}" class="product-title">Chocolate Chips</a>
                            <div class="product-bottom-content">
                                <span class="product-price">$230,00 <span class="old-price">$460,00</span></span>
                                <button class="wishlist"><i class="rt-heart"></i></button>
                            </div>
                            <div class="product-features product-features3">
                                <div class="new-tag product-tag">NEW</div>
                                <div class="discount-tag product-tag">-35%</div>
                            </div>
                            <div class="product-actions product-actions3">
                                <a href="{{ route('index') }}" class="product-action"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-bottom-action">
                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-bag mr--5"></i> Add To
                                Cart</a>
                            <button class="view-btn"><i class="fal fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-status-bar">
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fal fa-star"></i></div>
                            </div>
                            <span class="stock">In Stock</span>
                        </div>
                        <a href="{{ route('index') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/products/home5/3.png') }}" alt="product-image"></a>
                        <div class="contents">
                            <span class="product-type">Cookie</span>
                            <a href="{{ route('index') }}" class="product-title">Meatless Chicken Tender</a>
                            <div class="product-bottom-content">
                                <span class="product-price">$230,00</span>
                                <button class="wishlist"><i class="rt-heart"></i></button>
                            </div>
                            <div class="product-actions product-actions3">
                                <a href="{{ route('index') }}" class="product-action"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-bottom-action">
                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-bag mr--5"></i> Add To
                                Cart</a>
                            <button class="view-btn"><i class="fal fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-status-bar">
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fal fa-star"></i></div>
                            </div>
                            <span class="stock">In Stock</span>
                        </div>
                        <a href="{{ route('index') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/products/home5/4.png') }}" alt="product-image"></a>
                        <div class="contents">
                            <span class="product-type">Cookie</span>
                            <a href="{{ route('index') }}" class="product-title">Cherry Spoiling Water</a>
                            <div class="product-bottom-content">
                                <span class="product-price">$230,00 <span class="old-price">$460,00</span></span>
                                <button class="wishlist"><i class="rt-heart"></i></button>
                            </div>
                            <div class="product-features product-features3">
                                <div class="new-tag product-tag">NEW</div>
                                <div class="discount-tag product-tag">-35%</div>
                            </div>
                            <div class="product-actions product-actions3">
                                <a href="{{ route('index') }}" class="product-action"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-bottom-action">
                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-bag mr--5"></i> Add To
                                Cart</a>
                            <button class="view-btn"><i class="fal fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-status-bar">
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fal fa-star"></i></div>
                            </div>
                            <span class="stock">In Stock</span>
                        </div>
                        <a href="{{ route('index') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/products/home5/5.png') }}" alt="product-image"></a>
                        <div class="contents">
                            <span class="product-type">Cookie</span>
                            <a href="{{ route('index') }}" class="product-title">Mixed Vegetables</a>
                            <div class="product-bottom-content">
                                <span class="product-price">$230,00</span>
                                <button class="wishlist"><i class="rt-heart"></i></button>
                            </div>
                            <div class="product-actions product-actions3">
                                <a href="{{ route('index') }}" class="product-action"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-bottom-action">
                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-bag mr--5"></i> Add To
                                Cart</a>
                            <button class="view-btn"><i class="fal fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-status-bar">
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fal fa-star"></i></div>
                            </div>
                            <span class="stock">In Stock</span>
                        </div>
                        <a href="{{ route('index') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/products/home5/6.png') }}" alt="product-image"></a>
                        <div class="contents">
                            <span class="product-type">Cookie</span>
                            <a href="{{ route('index') }}" class="product-title">Jerry Jam Bites</a>
                            <div class="product-bottom-content">
                                <span class="product-price">$230,00 <span class="old-price">$460,00</span></span>
                                <button class="wishlist"><i class="rt-heart"></i></button>
                            </div>
                            <div class="product-features product-features3">
                                <div class="new-tag product-tag">NEW</div>
                                <div class="discount-tag product-tag">-35%</div>
                            </div>
                            <div class="product-actions product-actions3">
                                <a href="{{ route('index') }}" class="product-action"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-bottom-action">
                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-bag mr--5"></i> Add To
                                Cart</a>
                            <button class="view-btn"><i class="fal fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-status-bar">
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fal fa-star"></i></div>
                            </div>
                            <span class="stock">In Stock</span>
                        </div>
                        <a href="{{ route('index') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/products/home5/7.png') }}" alt="product-image"></a>
                        <div class="contents">
                            <span class="product-type">Cookie</span>
                            <a href="{{ route('index') }}" class="product-title">Organic Broccoli Cuts</a>
                            <div class="product-bottom-content">
                                <span class="product-price">$230,00</span>
                                <button class="wishlist"><i class="rt-heart"></i></button>
                            </div>
                            <div class="product-actions product-actions3">
                                <a href="{{ route('index') }}" class="product-action"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-bottom-action">
                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-bag mr--5"></i> Add To
                                Cart</a>
                            <button class="view-btn"><i class="fal fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-status-bar">
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fal fa-star"></i></div>
                            </div>
                            <span class="stock">In Stock</span>
                        </div>
                        <a href="{{ route('index') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/products/home5/8.png') }}" alt="product-image"></a>
                        <div class="contents">
                            <span class="product-type">Cookie</span>
                            <a href="{{ route('index') }}" class="product-title">Mango Chunks</a>
                            <div class="product-bottom-content">
                                <span class="product-price">$230,00</span>
                                <button class="wishlist"><i class="rt-heart"></i></button>
                            </div>
                            <div class="product-actions product-actions3">
                                <a href="{{ route('index') }}" class="product-action"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-bottom-action">
                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-bag mr--5"></i> Add To
                                Cart</a>
                            <button class="view-btn"><i class="fal fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-status-bar">
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fal fa-star"></i></div>
                            </div>
                            <span class="stock">In Stock</span>
                        </div>
                        <a href="{{ route('index') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/products/home5/9.png') }}" alt="product-image"></a>
                        <div class="contents">
                            <span class="product-type">Cookie</span>
                            <a href="{{ route('index') }}" class="product-title">Turkey Burgers</a>
                            <div class="product-bottom-content">
                                <span class="product-price">$230,00 <span class="old-price">$460,00</span></span>
                                <button class="wishlist"><i class="rt-heart"></i></button>
                            </div>
                            <div class="product-features product-features3">
                                <div class="hot-tag product-tag">HOT</div>
                                <div class="discount-tag product-tag">-35%</div>
                            </div>
                            <div class="product-actions product-actions3">
                                <a href="{{ route('index') }}" class="product-action"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-bottom-action">
                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-bag mr--5"></i> Add To
                                Cart</a>
                            <button class="view-btn"><i class="fal fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-status-bar">
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fal fa-star"></i></div>
                            </div>
                            <span class="stock">In Stock</span>
                        </div>
                        <a href="{{ route('index') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/products/home5/10.png') }}" alt="product-image"></a>
                        <div class="contents">
                            <span class="product-type">Cookie</span>
                            <a href="{{ route('index') }}" class="product-title">Rising Cust Pizza</a>
                            <div class="product-bottom-content">
                                <span class="product-price">$230,00</span>
                                <button class="wishlist"><i class="rt-heart"></i></button>
                            </div>
                            <div class="product-actions product-actions3">
                                <a href="{{ route('index') }}" class="product-action"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-bottom-action">
                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-bag mr--5"></i> Add To
                                Cart</a>
                            <button class="view-btn"><i class="fal fa-eye"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Product Category Section End Here::.. -->

    <!-- ..::Discount Code Section Start Here::.. -->
    <div class="rts-discount-code-section section-space">
        <div class="container">
            <div class="discount-code-box">
                <div class="icon"><img src="{{ asset('assets/images/icons/percent-tag-xl.png') }}" alt="discount-icon"></div>
                <div class="discount-content">
                    <span class="pretitle">Use discount code in checkout!</span>
                    <h3 class="discound-title">Super discount for your first purchase.</h3>
                </div>
                <span class="discount-code">WEIBOO64%</span>
            </div>
        </div>
    </div>
    <!-- ..::Discount Code End Here::.. -->

    <!-- ..::Picked Category Section Start Here::.. -->
    <div class="rts-picked-product-section section-gap" id="Hand_Picked_Products">
        <div class="container">
            <div class="section-header section-header4">
                <span class="section-title section-title-2 mb--5
                ">Hand Picked Products</span>
                <a href="shop-main" class="go-btn">All Products <i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="row">
                <div class="col-d-35 col-xl-6 col-lg-6 col-md-6">
                    <div class="product detail-product one filterd-items">
                        <a href="{{ route('index') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/products/home5/7.png') }}" alt="product-thumb"></a>
                        <div class="contents">
                            <div class="rating-area">
                                <div class="rating-stars-group">
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <span class="rating-qnty">(120 Reviews)</span>
                                </div>
                            </div>
                            <a href="{{ route('index') }}" class="product-title">Organic Broccoli Cuts <br>
                                Android 10.0 OS</a>
                            <span class="product-price">$129.99 <span class="old-price">$349.99</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-d-35 col-xl-6 col-lg-6 col-md-6">
                    <div class="product detail-product one filterd-items">
                        <a href="{{ route('index') }}" class="product-thumb"><img
                                src="{{ asset('assets/images/products/home5/9.png') }}" alt="product-thumb"></a>
                        <div class="contents">
                            <div class="rating-area">
                                <div class="rating-stars-group">
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <span class="rating-qnty">(120 Reviews)</span>
                                </div>
                            </div>
                            <a href="{{ route('index') }}" class="product-title">Turkey Burgers <br>
                                Android 10.0 OS</a>
                            <span class="product-price">$129.99 <span class="old-price">$349.99</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-d-3 col-md-12">
                    <div class="row m-0">
                        <div class="col-xl-12 col-md-6">
                            <div class="product-item">
                                <a href="{{ route('index') }}" class="product-thumb"><img
                                        src="{{ asset('assets/images/products/home5/6.png') }}" alt="product-image"></a>
                                <div class="contents">
                                    <span class="product-type">Seafood</span>
                                    <a href="{{ route('index') }}" class="product-title">Chicok Butter with Canola Oil
                                        400ML</a>
                                    <span class="product-price">$230,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6 last-col">
                            <div class="product-item">
                                <a href="{{ route('index') }}" class="product-thumb"><img
                                        src="{{ asset('assets/images/products/home5/5.png') }}" alt="product-image"></a>
                                <div class="contents">
                                    <span class="product-type">Seafood</span>
                                    <a href="{{ route('index') }}" class="product-title">Chicok Butter with Canola Oil
                                        400ML</a>
                                    <span class="product-price">$230,00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Picked Category Section End Here::.. -->

    <!-- ..::Ad Banner Section Start Here::.. -->
    <div class="rts-ad-banner-section section-space">
        <div class="container">
            <div class="ad-banner-inner">
                <div class="ad-banner mr--20"><img src="{{ asset('assets/images/banner/giftcard.jpg') }}" alt="ad"></div>
                <div class="ad-banner"><img src="{{ asset('assets/images/banner/moneyback.jpg') }}" alt="ad"></div>
            </div>
        </div>
    </div>
    <!-- ..::Ad Banner Section End Here::.. -->

    <!-- ..::Feeds Section Start Here::.. -->
    <div class="rts-featured-product-section3 section-3" id="Shop_insights_feeds">
        <div class="container">
            <div class="rts-featured-product-section-inner">
                <div class="newsletter-contents">
                    <h4 class="section-pretitle">News</h4>
                    <h2 class="section-title-2 mb--20">Shop insights & feeds</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-1">
                            <div class="image-part">
                                <a href="#" class="image"><img src="{{ asset('assets/images/featured/top-view-table-full-food.jpg') }}"
                                        alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full date-full2">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta blog-meta2">
                                    <li><a href="#">WINTER DRESS</a></li>
                                </ul>
                                <div class="title title-2">
                                    <a href="#">Once that’s determined with a good, you need to come up with a name</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="{{ asset('assets/images/featured/author.png') }}" alt="Author Image">
                                    </div>
                                    <div class="info">
                                        <p class="author-name">PixcelsThemes</p>
                                        <p class="author-dsg">Author</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-2">
                            <div class="image-part">
                                <a href="#" class="image"><img src="{{ asset('assets/images/featured/chicken-skewers-with-slices-apples-chili.jpg') }}"
                                        alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full date-full2">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta blog-meta2">
                                    <li><a href="#">WINTER DRESS</a></li>
                                </ul>
                                <div class="title title-2">
                                    <a href="#">Once determined, you need to come up with a name a legal structure</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="{{ asset('assets/images/featured/author.png') }}" alt="Author Image">
                                    </div>
                                    <div class="info">
                                        <p class="author-name">PixcelsThemes</p>
                                        <p class="author-dsg">Author</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-3">
                            <div class="image-part">
                                <a href="#" class="image"><img src="{{ asset('assets/images/featured/chicken-skewers-with-slices-sweet-peppers-dill.jpg')}}"
                                        alt="Featured Image"></a>
                            </div>
                            <div class="blog-content">
                                <span class="date-full date-full2">
                                    <span class="day">25</span>
                                    <br>
                                    <span class="month">Jul</span>
                                </span>
                                <ul class="blog-meta blog-meta2">
                                    <li><a href="#">WINTER DRESS</a></li>
                                </ul>
                                <div class="title title-2">
                                    <a href="#">At the limit, statically generated, edge delivered a food</a>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <div class="avatar"><img src="{{ asset('assets/images/featured/author.png') }}" alt="Author Image">
                                    </div>
                                    <div class="info">
                                        <p class="author-name">PixcelsThemes</p>
                                        <p class="author-dsg">Author</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Feeds Section End Here::.. -->

    <!-- ..::Restriction Notice start Here::.. -->
    <div class="rts-restriction-notice section-gap">
        <h3 class="notice"><a href="{{ route('index') }}" class="highlight"><span class="star">**</span>See offer
                details.</a> Restrictions
            apply. Pricing, promotions and availability may vary by
            location and at Target.com</h3>
    </div>
    <!-- ..::Restriction Notice End Here::.. -->

    <!-- ..::Footer Start Here::.. -->
    <div class="footer footer-2 footer-3 footer-5">
        <div class="container">
            <div class="footer-features">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon"><img src="{{ asset('assets/images/icons/footerft1.png') }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">Free shipping</h3>
                                <p>Free shipping on orders over $65.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon"><img src="{{ asset('assets/images/icons/footerft2.png') }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">Free Returns</h3>
                                <p>30-days free return policy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon"><img src="{{ asset('assets/images/icons/footerft3.png') }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">Secured Payments</h3>
                                <p>We accept all major credit cards</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="feature-item last-child">
                            <div class="icon"><img src="{{ asset('assets/images/icons/footerft4.png') }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">Customer Service</h3>
                                <p>Top notch customer setvice</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 box-widget-col">
                        <div class="footer-widget footer-box-widget">
                            <div class="footer-logo"><img src="{{ asset('assets/images/logo99.webp') }}" alt="footer-logo"></div>
                            <p>Solid is the information & experience
                                directed at an end-user</p>
                            <div class="quick-contact">
                                <div class="phone contact-item">
                                    <div class="icon"><img src="{{ asset('assets/images/icons/24clock3.png') }}" alt="chat-icon">
                                    </div>
                                    <div class="contact-info">
                                        <a href="tel:0020500" class="service-time info">0020 500 - CALL -
                                            000</a>
                                        <span class="title">Mon - Fri: 9:00-20:00</span>
                                    </div>
                                </div>
                                <div class="email contact-item">
                                    <div class="icon"><img src="{{ asset('assets/images/icons/mail3.png') }}" alt="phone-icon">
                                    </div>
                                    <div class="contact-info">
                                        <a href="mailto:maktechsolution@gmail.com"
                                            class="email-address info">maktechsolution@gmail.com</a>
                                        <span class="title">Get Support</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="social-links-footer2 social-links-footer3">
                                <li><a class="platform fb" target="_blank" href="http://facebook.com"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li><a class="platform yt" target="_blank" href="http://youtube.com"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                                <li><a class="platform ttr" target="_blank" href="http://twitter.com"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li><a class="platform lkd" target="_blank" href="http://linkedin.com"><i
                                            class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title title-2">About Us</h3>
                            <p class="widget-text">Elegant pink origami design three type
                                of dimensional view and decoration co
                                Great for adding a decorative touch to
                                any room’s decor.</p>
                            <a href="#0" class="getin-touch">Get In Touch <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-13 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title title-2">Information</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item"><a href="#0">Custom Service</a></li>
                                <li class="widget-list-item"><a href="#0">FAQs</a></li>
                                <li class="widget-list-item"><a href="#0">Ordering Tracking</a></li>
                                <li class="widget-list-item"><a href="#0">Contacts</a></li>
                                <li class="widget-list-item"><a href="#0">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-13 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title title-2">My Account</h3>
                        <ul class="footer-widget">
                            <li class="widget-list-item"><a href="#0">Delivery Infomation</a></li>
                            <li class="widget-list-item"><a href="#0">Privacy Policy</a></li>
                            <li class="widget-list-item"><a href="#0">Discount</a></li>
                            <li class="widget-list-item"><a href="#0">Custom Service</a></li>
                            <li class="widget-list-item"><a href="#0">Terms & Condition</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-25 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title title-2">Get Newsletter</h3>
                        <div class="footer-widget newsletter-widget">
                            <p class="widget-text">Get 10% off your first order! Hurry up</p>
                            <div class="input-div">
                                <input type="email" placeholder="Enter email address">
                            </div>
                            <a href="#0" class="subscribe-btn">Subscribe Now <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottombar">
                    <div class="app-download">
                        <span class="download-text">Order faster with our App!</span>
                        <a href="http://appstore.com" target="_blank" class="download-store"><img
                                src="{{ asset('assets/images/items/appstore.jpg') }}" alt=""></a>
                        <a href="https://play.google.com/store/apps" target="_blank" class="download-store"><img
                                src="{{ asset('assets/images/items/playstore.jpg') }}" alt=""></a>
                    </div>
                    <div class="payment-methods"><img src="{{ asset('assets/images/footer/payment2.svg') }}" alt="payment-methods">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-bottom-inner">
                    <span class="copyright">Copyright & Design By <a href="http://maktechsolution.com" class="brand"
                            target="_blank">maktechsolution</a> -2024</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Footer End Here::.. -->

    <!-- ..::Newsletter Popup Start Here::.. -->
    <div class="rts-newsletter-popup">
        <div class="newsletter-close-btn"><i class="fal fa-times"></i></div>
        <div class="newsletter-inner">
            <h3 class="newsletter-heading">Get Weekly Newsletter</h3>
            <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack
                PS23. It is a completely modern design</p>
            <form>
                <div class="input-area">
                    <div class="input-div"><input type="text" placeholder="Your name">
                        <div class="input-icon"><i class="far fa-user"></i></div>
                    </div>
                    <div class="input-div"><input type="email" placeholder="Email address" required>
                        <div class="input-icon"><i class="far fa-envelope"></i></div>
                    </div>
                </div>
                <button type="submit" class="subscribe-btn">Subscribe Now <i
                        class="fal fa-long-arrow-right ml--5"></i></button>
            </form>
        </div>
    </div>
    <!-- ..::Newsletter Popup End Here::.. -->

    <!-- ..::Product-details Section Start Here::.. -->
    <div class="product-details-popup-wrapper">
        <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
            <div class="product-details-popup">
                <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
                <div class="details-product-area">
                    <div class="product-thumb-area">
                        <div class="cursor"></div>
                        <div class="thumb-wrapper one filterd-items figure">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url('{{ asset('assets/images/products/product-details.jpg') }}')"><img
                                    src="{{ asset('assets/images/products/product-details.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper two filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url('{{ asset('assets/images/products/product-filt2.jpg') }}')"><img
                                    src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper three filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url('{{ asset('assets/images/products/product-filt3.jpg') }}')"><img
                                    src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="product-thumb-filter-group">
                            <div class="thumb-filter filter-btn active" data-show=".one"><img
                                    src="{{ asset('assets/images/products/product-filt1.jpg') }}" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".two"><img
                                    src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".three"><img
                                    src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb-filter"></div>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="product-status">
                            <span class="product-catagory">Dress</span>
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                <span>10 Reviews</span>
                            </div>
                        </div>
                        <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock">In Stock</span></h2>
                        <span class="product-price"><span class="old-price">$9.35</span> $7.25</span>
                        <p>
                            Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a
                            completely modern design and you feel comfortable to put on this hijab.
                            Buy it at the best price.
                        </p>
                        <div class="product-bottom-action">
                            <div class="cart-edit">
                                <div class="quantity-edit action-item">
                                    <button class="button minus"><i class="fal fa-minus minus"></i></button>
                                    <input type="text" class="input" value="01" />
                                    <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                </div>
                            </div>
                            <a href="{{ route('index') }}" class="addto-cart-btn action-item"><i class="rt-basket-shopping"></i>
                                Add To
                                Cart</a>
                            <a href="{{ route('index') }}" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                        </div>
                        <div class="product-uniques">
                            <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                            <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops, Mens</span>
                            <span class="tags product-unipue"><span>Tags: </span> fashion, t-shirts, Men</span>
                        </div>
                        <div class="share-social">
                            <span>Share:</span>
                            <a class="platform" href="http://facebook.com" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="platform" href="http://twitter.com" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="platform" href="http://behance.com" target="_blank"><i
                                    class="fab fa-behance"></i></a>
                            <a class="platform" href="http://youtube.com" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="platform" href="http://linkedin.com" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Product-details Section End Here::.. -->

@endsection