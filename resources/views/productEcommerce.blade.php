<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product E-COMMERCE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<style>
    .mobileScreenDiv {
        background-image: url('{{asset('images/productEcommerce/mobilescreensshadow.png')}}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .adminPortalDiv {
        background-image: url('{{asset('images/productEcommerce/adminportalbgshadow.png')}}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .firstSection {
        background-image: url('{{asset('images/productEcommerce/heroBg.png')}}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .mainHeading {
        font-family: 'Gilroy-Bold';
        font-size: 24px;
        font-weight: 400;
        letter-spacing: 0.02em;
        color: #051E75;
        padding-bottom: 16px;
    }

    .bussinessmainHeading {
        font-family: 'Gilroy-Bold';
        font-size: 36px;
        font-weight: 400;
        letter-spacing: 0.02em;
        color: #ffffff;
        padding-bottom: 20px;
    }

    .linkText {
        font-family: 'Gilroy-Bold';
        font-weight: 400;
        font-size: 20px;
        text-decoration: underline;
        color: #051E75;
    }

    .bussinessUl li {
        font-family: 'Gilroy-Medium';
        font-size: 22px;
        letter-spacing: 0.02em;
        color: #ffffff;
        margin-bottom: 14px;
    }

    .bussinessUl li::marker {
        color: #ffffff;
    }

    .bussinessUl {
        padding-left: 20px;
    }

    .journeyHeading {
        font-family: 'Gilroy-Semibold';
        font-weight: 400;
        font-size: 32px;
        letter-spacing: 0.01em;
        text-align: center;
        color: #ffffff;
    }

    .whosUl li {
        font-family: 'Gilroy-Regular';
        font-weight: 400;
        font-size: 22px;
        letter-spacing: 0.01em;
        color: #000000;
        margin-bottom: 14px;
    }

    .whosTextBold {
        font-family: 'Gilroy-Semibold';
        font-weight: 400;
        font-size: 22px;
        letter-spacing: 0.01em;
        color: #000000;
    }

    .paraText {
        font-family: 'Gilroy-Regular';
        font-weight: 400;
        font-size: 20px;
        letter-spacing: 0.01em;
        color: #25262B;
        padding-bottom: 10px;
        line-height: 30px;
    }

    .textBold {
        font-family: 'Gilroy-Semibold';
        font-weight: 400;
        font-size: 20px;
        letter-spacing: 0.01em;
        color: #25262B;
    }

    .feature-card {
        background: #fff;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        border-left: 5px solid #00c4b4;
    }

    .feature-card h5 {
        font-family: 'Gilroy-Bold';
        font-weight: 400;
        font-size: 22px;
        color: #002c6e;
        letter-spacing: 0.02em;
    }

    .feature-card p {
        color: #25262B;
        font-size: 20px;
        font-family: 'Gilroy-Regular';
        font-weight: 400;
        letter-spacing: 0.01em;
        line-height: 30px;
    }

    .feature-box h5 {
        font-family: 'Gilroy-Bold';
        font-weight: 400;
        font-size: 22px;
        color: #002c6e;
        letter-spacing: 0.02em;
    }

    .feature-box p {
        color: #25262B;
        font-size: 18px;
        font-family: 'Gilroy-Regular';
        font-weight: 400;
        letter-spacing: 0.01em;
        line-height: 30px;
    }

    .border-col {
        border-right: 1px solid #e2e6ea;
    }

    .adminCardContainer {
        background-color: white;
        padding: 40px 30px;
        border-radius: 12px;
        /* box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05); */
        /* margin: 40px auto; */
        /* max-width: 1200px; */
    }

    .mobileScreenImgDiv img {
        width: 100%;
    }

    .feature-box {
        text-align: center;
        padding: 20px 0px;
    }

    .feature-box img {
        height: 60px;
        margin-bottom: 20px;
    }

    .checklist {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .checklist li {
        font-size: 22px;
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        font-family: 'Gilroy-Regular';
        font-weight: 400;
        letter-spacing: 0.02em;
    }

    .checklist li i {
        color: #11B79E;
        margin-right: 10px;
        font-size: 24px;
    }

    .journeyDiv {
        padding: 100px 0px;
    }

    .journeyDiv,
    .bussinessDiv {
        background-image: url('{{asset('images/productEcommerce/journeyBg.png')}}');
    }

    .journeyBtnDiv {
        gap: 20px;
        justify-content: center !important;
        flex-wrap: wrap !important;
        display: flex;
    }

    .journeyBtn {
        color: #ffffff !important;
        font-family: 'Gilroy-Bold';
        font-weight: 400;
        font-size: 20px;
        background-color: #11B79E !important;
        border-radius: 5px !important;
        padding: 10px 25px !important;
    }

    /* .adminCardDiv{
        border-radius: 12px;
        background-color: #ffffff;
        display: flex;
    } */

    .whosDiv,
    .adminPotalDiv,
    .keyFeatureDiv {
        background-color: #F7F8FB;
    }

    .linkDiv,
    .conversionDiv,
    .adminPortalDiv {
        background-color: #ffffff;
    }

    .bannerDiv {
        padding: 60px 60px 250px 60px;
        position: relative;
    }

    .walletImageWrap {
        position: absolute;
        left: -60px;
        top: -130px;
    }

    .productOverviewDiv,
    .mobileScreenDiv,
    .whosDiv,
    .conversionDiv,
    .linkDiv {
        padding: 60px;
    }

    .adminPortalDiv {
        padding: 60px 0px;
    }

    .keyFeatureDiv,
    .adminPotalDiv,
    .bussinessDiv {
        padding: 70px;
    }

    .whosDiv {
        margin-top: 70px;
    }

    .walletHeading {
        font-size: 55px;
        letter-spacing: 0.02em;
        font-family: 'Gilroy-Bold';
        font-weight: 400;
    }

    .walletHeadingBlue {
        color: #074CA9;
    }

    .walletHeadingGreen {
        color: #11B79E;
    }

    .walletCTA {
        display: inline-block;
        background-color: #00b894;
        color: #fff;
        padding: 10px 22px;
        border-radius: 8px;
        font-weight: 400;
        font-family: 'Gilroy-Bold';
        text-decoration: none;
        transition: background 0.3s;
    }

    .walletCTA:hover {
        background-color: #019b79;
    }

    .walletUsers {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .userGroup {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .userGroup img {
        width: 100%;
        height: auto;
        border-radius: 50%;
        /* background: #e0f7ef; */
        /* padding: 3px; */
    }

    .plusCount {
        background-color: #ffffff;
        padding: 5px 10px;
        border-radius: 50px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        font-weight: 600;
        font-size: 14px;
    }

    .activeUsersText {
        font-weight: 400;
        font-size: 20px;
        color: #222;
        font-family: "Gilroy-Medium"
    }

    .admin2img {
        text-align: end;
    }

    .adminPortalImg {
        width: 100%
    }

    @import url('https://fonts.cdnfonts.com/css/gilroy');

    @font-face {
        font-family: 'Gilroy-Regular';
        src: url('../fonts/gilroy-regular.ttf') format('truetype');
        font-weight: 400;
    }

    @font-face {
        font-family: 'Gilroy-Bold';
        src: url('../fonts/gilroy-bold.ttf') format('truetype');
        font-weight: 700;
    }

    @font-face {
        font-family: 'Gilroy-Semibold';
        src: url('../fonts/gilroy-semibold.ttf') format('truetype');
        font-weight: 700;
    }

    @font-face {
        font-family: 'Gilroy-Medium';
        src: url('../fonts/gilroy-medium.ttf') format('truetype');
        font-weight: 500;
    }

    @font-face {
        font-family: 'Manjari-Regular';
        src: url('../fonts/Manjari-Regular.ttf') format('truetype');
        font-weight: 400;
    }

    .site-header,
    .site-footer {
        display: none !important;
    }

    .scroll-to-top {
        background-color: #B81312 !important;
    }

    .custom-container {
        max-width: 100% !important;
        width: 100% !important;
        margin: 0 auto;
    }


    /* new end */
    /* @media (max-width: 3024px) and (min-width: 1964px) {}

    @media (max-width: 2560px) and (min-width: 1550px) {} */

    /* ✅ MacBook Pro 14" (3024×1964 physical → 1512×982 CSS pixels) */
    /* @media only screen and (max-width: 1513px) and (min-width: 982px) {}

    @media (max-width: 1440px) {}

    @media only screen and (max-width: 1280px) {}

    @media (max-width: 1024px) {}

    @media (max-width: 991px) {} */

    @media (max-width: 768px) {
        .walletHeading {
            font-size: 46px;
        }

        .walletImageWrap {
            left: 170px;
            top: -200px;
        }

        .bussinessmainHeading {
            font-size: 24px;
        }

        .order1 {
            order: 1;
        }

        .order2 {
            order: 2;
        }

        .whosUl li,
        .whosTextBold,
        .checklist li,
        .bussinessUl li {
            font-size: 20px;
        }
    }

    @media (max-width: 767px) {

        .productOverviewDiv,
        .mobileScreenDiv,
        .adminPortalDiv,
        .whosDiv,
        .conversionDiv,
        .linkDiv {
            padding: 60px 0px;
        }

        .keyFeatureDiv,
        .adminPotalDiv,
        .bussinessDiv {
            padding: 70px 0px;
        }

        .bannerDiv {
            padding: 50px 0px 250px 0px;
            position: relative;
        }
    }

    @media (max-width: 575.98px) {
        .walletImageWrap {
            left: 0px;
            top: -40px;
        }

        .walletHeading {
            font-size: 26px;
        }

        .mainHeading, .feature-card h5, .feature-box h5, .bussinessmainHeading, .journeyHeading, .linkText  {
            font-size: 18px;
        }

        .paraText, .textBold, .feature-card p, .feature-box p, .whosUl li, .whosTextBold, .checklist li, .bussinessUl li {
            font-size: 16px;
        }

        .walletCTA {
            font-size: 12px;
            padding: 6px 14px;
        }
        .journeyBtn {
            font-size: 12px !important;
            padding: 6px 14px !important;
        }
        
    }

    /* @media only screen and (max-width: 540px) and (min-width: 500px) {}

    @media (max-width: 426px) {}

    @media (max-width: 420px) {}

    @media only screen and (max-width: 415px) and (min-width: 413px) {}

    @media only screen and (max-width: 412px) and (min-width: 392px) {}

    @media only screen and (max-width: 391px) and (min-width: 376px) {}

    @media (max-width: 376px) {}

    @media (max-width: 375px) {}

    @media only screen and (max-width: 360px) and (min-width: 345px) {}

    @media only screen and (max-width: 344px) and (min-width: 321px) {}

    @media (max-width: 320px) {} */
</style>

    <section class="firstSection">
        <div class="bannerDiv">
            <div class="container custom-container">
                <div class="row align-items-center">

                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 mb-4 mb-lg-0">
                        <div class="walletTextWrap">
                            <h1 class="walletHeading">
                                <span class="walletHeadingBlue text-white">E-COMMERCE SOLUTION</span><br>
                            </h1>
                            <p class="paraText text-white">
                                A Scalable E-Commerce Platform to Launch, Run & Grow Your Online Business
                            </p>

                            <a href="#" class="walletCTA">Let’s Discuss Your Goals</a>

                            <div class="walletUsers mt-4">
                                <div class="userGroup">
                                    <img src="{{ asset('images/productdigitalwallet/profile.png') }}" />
                                    {{-- <img src="https://img.icons8.com/ios-filled/40/26e07f/user-female-circle.png" />
                                    --}}
                                    {{-- <img src="https://img.icons8.com/ios-filled/40/26e07f/user.png" /> --}}
                                    {{-- <span class="plusCount">+5M</span> --}}
                                </div>
                                <p class="activeUsersText text-white mt-2">5M+ Active Users</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="walletImageWrap text-center">
                            <img src="{{ asset('images/productEcommerce/herosectionmobilescreens.png') }}"
                                alt="Digital Wallet Image" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="fullContent">
        {{-- productOverview Div --}}
        <div class="productOverviewDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="over_headingDiv">
                            <h1 class="mainHeading">PRODUCT OVERVIEW</h1>
                            <p class="paraText">This modern,<span class="textBold"> mobile-first e-commerce solution</span>
                                offers everything you need to
                                power a high-performing online retail business. With dedicated mobile apps and a robust
                                admin portal, it empowers retailers, brands, and service providers to manage products,
                                orders, customers, and payments with ease.</p>
                            <p class="paraText">Built for <span class="textBold">speed, usability, and scale,</span> the
                                platform enables
                                <span class="textBold"> direct-to-consumer sales, loyalty-building, and real-time
                                    tracking</span>—all from a beautifully
                                crafted digital storefront.
                                Whether you're launching a niche store or managing a diverse product catalog, this solution
                                delivers the tools to <span class="textBold">grow fast and convert better.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="keyheadingDiv">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="keyHeadingText text-center">
                    <h1 class="mainHeading">KEY FEATURES</h1>
                </div>
            </div>
        </div>
        <div class="keyFeatureDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="mobileApptext">
                            <h1 class="mainHeading">MOBILE APP FOR CUSTOMERS</h1>
                            <p class="paraText">The mobile application is designed for intuitive shopping and high
                                engagement:</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-5">
                        <div class="feature-card">
                            <h5>Onboarding & Authentication</h5>
                            <p>Secure registration, login, and password recovery.</p>
                        </div>
                        <div class="feature-card">
                            <h5>Smart Product Navigation</h5>
                            <p>Home, category-wise browsing, search, favorites, and product detail pages.</p>
                        </div>
                        <div class="feature-card">
                            <h5>One-Click Cart & Checkout</h5>
                            <p>Seamless add-to-cart, shipping address input, and delivery selection.</p>
                        </div>
                        <div class="feature-card">
                            <h5>Flexible Payment Options</h5>
                            <p>Cash on delivery, card checkout, installment plans, and point redemption.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-5">
                        <div class="onboadingImgDiv">
                            <img src="{{ asset('images/productEcommerce/mobileappcustomersillustration1.png') }}"
                                class="w-100" alt="mobileappcustomersillustration1">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 order2">
                        <div class="onboadingImgDiv">
                            <img src="{{ asset('images/productEcommerce/illustration2.png') }}" alt="illustration2"
                                class="w-100">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 order1">
                        <div class="feature-card">
                            <h5>Order Tracking</h5>
                            <p>Real-time order status updates with partner integration and driver details.</p>
                        </div>
                        <div class="feature-card">
                            <h5>Loyalty Rewards</h5>
                            <p>Built-in points system and membership tiers to retain customers.</p>
                        </div>
                        <div class="feature-card">
                            <h5>Ratings & Reviews</h5>
                            <p>Customers can rate purchases, leave feedback, and upload images or videos.</p>
                        </div>
                        <div class="feature-card">
                            <h5>Notifications</h5>
                            <p>Timely updates on orders, exclusive promotions, and exciting new arrivals.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mobileScreenDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="mobileScreenText text-center">
                            <h1 class="mainHeading">MOBILE SCREENS</h1>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-5">
                        <div class="mobileScreenImgDiv">
                            <img src="{{ asset('images/productEcommerce/1-3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-5">
                        <div class="mobileScreenImgDiv">
                            <img src="{{ asset('images/productEcommerce/2-4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-5">
                        <div class="mobileScreenImgDiv">
                            <img src="{{ asset('images/productEcommerce/2-3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-5">
                        <div class="mobileScreenImgDiv">
                            <img src="{{ asset('images/productEcommerce/1-4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-5">
                        <div class="mobileScreenImgDiv">
                            <img src="{{ asset('images/productEcommerce/9-2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-5">
                        <div class="mobileScreenImgDiv">
                            <img src="{{ asset('images/productEcommerce/8-2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-5">
                        <div class="mobileScreenImgDiv">
                            <img src="{{ asset('images/productEcommerce/3-5.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-5">
                        <div class="mobileScreenImgDiv">
                            <img src="{{ asset('images/productEcommerce/6-2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-5">
                        <div class="mobileScreenImgDiv">
                            <img src="{{ asset('images/productEcommerce/1-8.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-5">
                        <div class="mobileScreenImgDiv">
                            <img src="{{ asset('images/productEcommerce/4-4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-5">
                        <div class="mobileScreenImgDiv">
                            <img src="{{ asset('images/productEcommerce/3-11.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mb-5">
                        <div class="mobileScreenImgDiv">
                            <img src="{{ asset('images/productEcommerce/3-7.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="adminPotalDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="mobileScreenText">
                            <h1 class="mainHeading">Admin Portal for Store Management</h1>
                            <p class="paraText">A powerful backend dashboard to control everything behind the scenes:</p>
                        </div>
                    </div>
                    <div class="adminCardContainer">
                        <div class="row">
                            <div class="col-md-4 border-col">
                                <div class="feature-box">
                                    <img src="{{asset('images/productEcommerce/product_catalog_management.png')}}"
                                        alt="product_catalog_management">
                                    <h5>Product Catalog Management</h5>
                                    <p>Add/edit categories, SKUs, pricing, stock status, and imagery.</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-col">
                                <div class="feature-box">
                                    <img src="{{asset('images/productEcommerce/Orderprocessing.png')}}"
                                        alt="Orderprocessing">
                                    <h5>Order Processing</h5>
                                    <p>View, manage, dispatch, or cancel orders with timeline tracking.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-box">
                                    <img src="{{asset('images/productEcommerce/customermanagement.png')}}"
                                        alt="customermanagement">
                                    <h5>Customer Management</h5>
                                    <p>Track customer activity, preferences, and membership data.</p>
                                </div>
                            </div>
                        </div>

                        {{--
                        <hr class="my-4" style="border-color: #e2e6ea;"> --}}

                        <div class="row">
                            <div class="col-md-4 border-col">
                                <div class="feature-box">
                                    <img src="{{asset('images/productEcommerce/shipping&diliveringmanagement.png')}}"
                                        alt="shipping&diliveringmanagement">
                                    <h5>Shipping & Delivery Management</h5>
                                    <p>Assign delivery partners, view shipment statuses, and resolve delays.</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-col">
                                <div class="feature-box">
                                    <img src="{{asset('images/productEcommerce/paymentoversight.png')}}"
                                        alt="paymentoversight">
                                    <h5>Payment Oversight</h5>
                                    <p>Monitor payments (COD, card, wallet), discounts, and tax applications.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-box">
                                    <img src="{{asset('images/productEcommerce/reportingdashboard.png')}}"
                                        alt="reportingdashboard">
                                    <h5>Reporting Dashboard</h5>
                                    <p>View trends, order summaries, top-selling products, and inventory alerts.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="adminPortalDiv">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="adminPortalText">
                            <h1 class="mainHeading text-center mb-5">ADMIN PORTAL</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adminPortalImgRow">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="adminPortalImgDiv">
                            <img class="adminPortalImg mb-5" src="{{asset('images/productEcommerce/admin1.png')}}"
                                alt="Zstoreloginimage">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="adminPortalImgDiv admin2img">
                            <img class="adminPortalImg mb-5" src="{{asset('images/productEcommerce/admin2.png')}}"
                                alt="Zstoreloginimage2">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="adminPortalImgDiv">
                            <img class="adminPortalImg mb-5" src="{{asset('images/productEcommerce/admin3.png')}}"
                                alt="Zstoreloginimage3">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="adminPortalImgDiv admin2img">
                            <img class="adminPortalImg mb-5" src="{{asset('images/productEcommerce/admin4.png')}}"
                                alt="Zstoreloginimage4">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bussinessDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bussinessText">
                            <h1 class="bussinessmainHeading">BUSSINESS BENEFITS</h1>
                            <ul class="bussinessUl">
                                <li>One-Click Payment Integration for seamless checkout</li>
                                <li>Loyalty Points & Membership Tiers (Silver, Gold, Platinum) to incentivize repeat
                                    business</li>
                                <li>Advanced Order Tracking with visual steps and delivery partner selection</li>
                                <li>Dynamic Offers, Rewards & Coupons to drive conversions</li>
                                <li>Feedback-Driven Design enabling reviews with media and customer satisfaction forms</li>
                                <li>Multi-Partner Delivery Support for fast, region-wise logistics</li>
                                <li>Admin-Level Control to define business rules, update listings, and manage support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="whosDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="whosText">
                            <h1 class="mainHeading">WHO IT'S FOR </h1>
                            <p class="paraText">This solution adapts effortlessly across various business models:</p>
                            <ul class="whosUl">
                                <li><span class="whosTextBold">Retailers </span>– Launch branded stores for fashion,
                                    electronics, home decor,
                                    or specialty items</li>
                                <li><span class="whosTextBold">Service Businesses</span>– Sell digital products,
                                    subscriptions, or
                                    booking-based services</li>
                                <li><span class="whosTextBold">Wholesale Distributors</span> – Manage large volume B2B sales
                                    with custom
                                    order flows</li>
                                <li><span class="whosTextBold">Brands & Manufacturers </span> – Run D2C storefronts with
                                    full pricing and
                                    inventory control</li>
                                <li><span class="whosTextBold">Startups & Entrepreneurs </span>– Quickly launch MVPs or
                                    pilot stores without
                                    infrastructure delays</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="conversionDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="conversionText">
                            <h1 class="mainHeading">CONVERSION-READY, MOBILE-FIRST</h1>
                            <p class="paraText">
                                This solution isn’t just about listing products. It's about creating experiences that:
                            </p>
                            <ul class="checklist">
                                <li><i class="fa-solid fa-circle-check"></i> Reduce friction at checkout</li>
                                <li><i class="fa-solid fa-circle-check"></i> Encourage reorders through points and tiers
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Build trust with reliable tracking</li>
                                <li><i class="fa-solid fa-circle-check"></i> Drive engagement with personalized dashboards
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Scale with built-in analytics</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="journeyDiv">
            <div class="container custom-container">
                <h2 class="journeyHeading mb-4">Start Your Journey With App In Snap!</h2>
                <div class="journeyBtnDiv">
                    <a href="" class="btn btn-teal  journeyBtn">Contact Us Now</a>
                    <a href="{{asset('pdf/ecommerce.pdf')}}" class="btn btn-teal  journeyBtn" download>Download PDF</a>
                </div>
            </div>
        </div>

        <div class="linkDiv py-5">
            <div class="container custom-container my-3">
                <div class="row">
                    <div class="col-xl-12">
                        <a href="#" class="linkText">View Case Study</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>