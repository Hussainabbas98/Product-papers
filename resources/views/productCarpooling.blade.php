@extends('master.master_page')
@section('canonicalTags')
    <link rel="canonical" href="{{ $canonicalUrl }}">
@endsection
<style>
    .walletTextWrap {
        text-align: center;
    }

    .imageWidth {
        width: 80% !important;
    }

    .yellowHeading {
        font-family: 'Gilroy-Semibold';
        font-weight: 400;
        font-size: 24px;
        letter-spacing: 0.01em;
        color: #FF9E22;
    }

    .custom-card {
        position: relative;
        padding: 2rem;
        border-radius: 1rem;
        min-height: 350px;
        color: white;
        margin-top: 2rem;
    }

    .circle-badge {
        position: absolute;
        top: -25px;
        left: 50%;
        transform: translateX(-50%);
        /* background-color: #fff; */
        color: #fff;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        font-weight: 600;
        border-radius: 50%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        font-size: 1.2rem;
        border: 2px solid #fff;
    }

    .custom-title {
        font-size: 1.25rem;
        font-weight: bold;
        margin-top: 2.5rem;
    }

    .card-purple,
    .badgePurple {
        background-color: #8570CF;
    }

    .card-pink,
    .badgePink {
        background-color: #FF928E;
    }

    .card-blue,
    .badgeBlue {
        background-color: #35C7F1;
    }

    .moreOverRow {
        padding-top: 100px;
    }

    .organizationBgDiv {
        background-color: #EDEAF8;
        padding: 25px;
        height: 370px;
        display: flex;
        align-items: center;
        text-align: center;
        border-radius: 20px;
    }

    .conclusionDiv {
        display: flex;
        align-items: center;
        text-align: center;
    }

    .mobileFeatureDiv {
        padding: 0px 60px;
    }

    .adminPortalImgRow {
        padding-bottom: 100px;
    }






    .mobileScreenDiv {
        background-image: url('{{asset('images/productEcommerce/mobilescreensshadow.png')}}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .adminPortalDiv {
        /* background-image: url('{{asset('images/productEcommerce/adminportalbgshadow.png')}}'); */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .firstSection {
        background-image: url('{{asset('images/productCarpooling/bannerBg.png')}}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        /* background-color: #1E1E37; */
    }

    .mainHeading {
        font-family: 'Gilroy-Bold';
        font-size: 24px;
        font-weight: 400;
        letter-spacing: 0.02em;
        color: #0A2DA4;
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
        color: #0A2DA4;
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

    .journeyDiv {
        /* background-image: url('{{asset('images/productEcommerce/journeyBg.png')}}'); */
        background-color: #F7A041;
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
        background-color: #0A2DA4 !important;
        border-radius: 5px !important;
        padding: 10px 25px !important;
    }

    /* .adminCardDiv{
        border-radius: 12px;
        background-color: #ffffff;
        display: flex;
    } */

    .whosDiv,
    .adminPotalDiv {
        background-color: #F7F8FB;
    }

    .keyFeatureDiv {
        background: linear-gradient(90deg, #F7A041, #FFA710);
    }

    .adminPortalDivbg {
        background-color: #20222B;
    }

    .linkDiv,
    .conversionDiv,
    .adminPortalDiv {
        background-color: #ffffff;
    }

    .bannerDiv {
        padding: 80px 60px 250px 60px;
        position: relative;
    }

    .walletImageWrap {
        position: absolute;
        left: 0px;
        right: 0px;
        top: 180px;
    }

    .productOverviewDiv {
        padding: 260px 60px 60px 60px;
    }

    .mobileScreenDiv,
    .whosDiv,
    .conversionDiv,
    .linkDiv {
        padding: 60px;
    }


    .bussinessDiv,
    .organizationDiv {
        padding: 15px 60px;
    }

    .adminPortalDiv {
        padding: 60px 0px 0px 0px;
    }

    .keyFeatureDiv,
    .adminPotalDiv {
        padding: 70px;
    }

    .whosDiv {
        margin-top: 70px;
    }

    .walletHeading {
        font-size: 64px;
        letter-spacing: 0.02em;
        font-family: 'Gilroy-Bold';
        font-weight: 400;
    }

    .bannerrPara {
        font-family: 'Gilroy-Medium';
        font-size: 24px !important;
        font-weight: 400;
        color: #fff;
        margin: 15px 0px;
    }

    .walletHeadingBlue {
        color: #074CA9;
    }

    .walletHeadingGreen {
        color: #11B79E;
    }

    .walletCTA {
        display: inline-block;
        background-color: #0A2DA4;
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

    .img-fluid {
        width: 100%;
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

        .imageWidth {
            width: 100% !important;
        }

        .walletImageWrap {
            left: 0px;
            top: 180px;
        }

        .productOverviewDiv {
            padding: 170px 60px 60px 60px;
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


        .mobileScreenDiv,
        .adminPortalDiv,
        .whosDiv,
        .conversionDiv,
        .linkDiv {
            padding: 60px 0px;
        }

        .productOverviewDiv {
            padding: 100px 20px 0px 20px;
        }

        .bussinessDiv,
        .mobileFeatureDiv,
        .organizationDiv {
            padding: 20px;
        }

        .keyFeatureDiv,
        .adminPotalDiv {
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
            top: 185px;
        }

        .adminPortalImgRow {
            padding-bottom: 20px;
        }

        .walletHeading {
            font-size: 20px;
        }
        .bannerrPara{
            font-size: 16px !important;
        }

        .mainHeading,
        .feature-card h5,
        .feature-box h5,
        .bussinessmainHeading,
        .journeyHeading,
        .linkText,
        .yellowHeading {
            font-size: 18px;
        }

        .paraText,
        .textBold,
        .feature-card p,
        .feature-box p,
        .whosUl li,
        .whosTextBold,
        .checklist li,
        .bussinessUl li {
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
@section('section')
    <section class="firstSection">
        <div class="bannerDiv">
            <div class="container custom-container">
                <div class="row align-items-center">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4 mb-lg-0">
                        <div class="walletTextWrap">
                            <h1 class="walletHeading">
                                <span class="walletHeadingBlue text-white">CARPOOLING PLATFORM </span><br>
                            </h1>
                            <p class="bannerrPara text-white">
                                Scalable Ride-Sharing Solution with Admin Portal and Mobile App
                            </p>

                            <a href="#" class="walletCTA mt-3">Let’s Discuss Your Goals</a>

                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="walletImageWrap text-center">
                            <img src="{{ asset('images/productCarpooling/mainImage.png') }}" alt="Digital Wallet Image"
                                class="img-fluid imageWidth">
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
                            <h1 class="mainHeading">OVERVIEW</h1>
                            <p class="paraText">This carpooling system is a complete, end-to-end platform designed to manage
                                and optimize shared mobility operations. It connects drivers and passengers through a robust
                                mobile application, while offering <span class="textBold"> administrators full control and
                                    visibility</span> through a web-based backend portal.</p>
                            <p class="paraText">The platform is built for scalability, real-time tracking, role-based user
                                access, and financial transparency, making it ideal for<span class="textBold"> transport
                                    operators, corporate mobility programs, and urban commute solutions.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bussinessDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="over_headingDiv">
                            <h1 class="mainHeading">ADMIN PORTAL FEATURES</h1>
                            <p class="paraText">The web-based admin panel allows backend operators to monitor, manage, and
                                configure platform operations efficiently. It includes comprehensive analytics and user role
                                segmentation</p>
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
                            <h1 class="yellowHeading">Dashboard Analytics</h1>
                            <ul class="paraText">
                                <li>Total users, blocked users, gender breakdown</li>
                                <li>Ride activity: active, inactive, completed, canceled</li>
                                <li>Financial tracking: collected and pending payments</li>
                                <li>Visual charts: user trends, ride schedules, request outcomes</li>
                            </ul>
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
                            <h1 class="yellowHeading">User and Role Management</h1>
                            <ul class="paraText">
                                <li>Admins can add, edit, or deactivate drivers and passengers</li>
                                <li>Role assignment: driver, passenger, owner</li>
                                <li>Search and user status tracking</li>
                            </ul>
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
                            <h1 class="yellowHeading">Operational Controls</h1>
                            <ul class="paraText">
                                <li>Fare and schedule configuration</li>
                                <li>Vehicle and document verification</li>
                                <li>FAQs and tutorial uploads to assist users within the platform</li>
                                <li>Notification broadcasting for system updates and alerts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="keyheadingDiv">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="keyHeadingText text-center">
                    <h1 class="mainHeading">ADMIN PORTAL INTERFACE</h1>
                </div>
            </div>
        </div>
        <div class="keyFeatureDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <img src="{{asset('images/productCarpooling/yellowImage.png')}}" alt="yellow image"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="bussinessDiv mt-5">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="over_headingDiv">
                            <h1 class="mainHeading">MOBILE APP FEATURE</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobileFeatureDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bussinessText">
                            <h1 class="yellowHeading">Driver Functionality</h1>
                            <ul class="paraText">
                                <li>Schedule management: add/edit ride timings, routes, and vehicle details</li>
                                <li>Ride request management: view and respond to incoming passenger requests</li>
                                <li>Ride summaries with passenger details, fare, and payment method</li>
                                <li>Real-time status tracking for each ride</li>
                                <li>Notification panel for alerts and updates</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobileFeatureDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bussinessText">
                            <h1 class="yellowHeading">Passenger Functionality</h1>
                            <ul class="paraText">
                                <li>Ride search based on location, time, and availability</li>
                                <li>Request rides with profile view of drivers</li>
                                <li>Track request status: accepted, rejected, or pending</li>
                                <li>Ride history and past booking records</li>
                                <li>Pre-scheduling for regular commutes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobileFeatureDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bussinessText">
                            <h1 class="yellowHeading">Wallet Integration & Account Linking</h1>
                            <ul class="paraText">
                                <li>Securely link the user’s phone number to supported wallet providers (e.g., Zindigi,
                                    easypaisa etc.)</li>
                                <li>Real-time display of wallet balance within the app for clear transaction control</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobileFeatureDiv">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bussinessText">
                            <h1 class="yellowHeading">In-App Payments & Transactions</h1>
                            <ul class="paraText">
                                <li>Users can view available wallet balance before initiating a ride or payment</li>
                                <li>Seamless experience for linking and unlinking payment accounts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobileFeatureDiv mb-5">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bussinessText">
                            <h1 class="yellowHeading">Invite & Earn Program</h1>
                            <ul class="paraText">
                                <li>Built-in referral system to drive organic growth</li>
                                <li>Users share a unique invite code and receive bonus points on sign-up</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="adminPortalDivbg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="adminPortalText">
                            <h1 class="mainHeading text-white text-center mt-5 mb-5">MOBILE APPLICATION INTERFACE</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adminPortalImgRow">
                <div class="container">
                    <div class="row mb-4 mb-sm-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper mt-md-5">
                                <img src="{{ asset('images/productCarpooling/light1.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Tap on create Account</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper">
                                <img src="{{ asset('images/productCarpooling/light2.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Details</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper mt-md-5">
                                <img src="{{ asset('images/productCarpooling/light3.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Account Created Successfully</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper">
                                <img src="{{ asset('images/productCarpooling/light4.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Transcation Successfull</p>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper mt-md-5">
                                <img src="{{ asset('images/productCarpooling/light5.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Tap on create Account</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper">
                                <img src="{{ asset('images/productCarpooling/light6.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Details</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper mt-md-5">
                                <img src="{{ asset('images/productCarpooling/light7.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Account Created Successfully</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper">
                                <img src="{{ asset('images/productCarpooling/light8.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Transcation Successfull</p>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper mt-md-5">
                                <img src="{{ asset('images/productCarpooling/light9.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Tap on create Account</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper">
                                <img src="{{ asset('images/productCarpooling/light10.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Details</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper mt-md-5">
                                <img src="{{ asset('images/productCarpooling/light11.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Account Created Successfully</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper">
                                <img src="{{ asset('images/productCarpooling/light12.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Transcation Successfull</p>
                                </div> --}}
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
                            <h1 class="mainHeading text-center mb-5">DARK MODE INTERFACE</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adminPortalImgRow">
                <div class="container">
                    <div class="row mb-4 mb-sm-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper mt-md-5">
                                <img src="{{ asset('images/productCarpooling/dark1.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Tap on create Account</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper">
                                <img src="{{ asset('images/productCarpooling/dark2.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Details</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper mt-md-5">
                                <img src="{{ asset('images/productCarpooling/dark3.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Account Created Successfully</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper">
                                <img src="{{ asset('images/productCarpooling/dark4.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Transcation Successfull</p>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper mt-md-5">
                                <img src="{{ asset('images/productCarpooling/dark5.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Tap on create Account</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper">
                                <img src="{{ asset('images/productCarpooling/dark6.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Details</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper mt-md-5">
                                <img src="{{ asset('images/productCarpooling/dark7.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Account Created Successfully</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper">
                                <img src="{{ asset('images/productCarpooling/dark8.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Transcation Successfull</p>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                    <div class="row mb-4 mb-sm-0">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper mt-md-5">
                                <img src="{{ asset('images/productCarpooling/dark9.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Tap on create Account</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper">
                                <img src="{{ asset('images/productCarpooling/dark10.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Details</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper mt-md-5">
                                <img src="{{ asset('images/productCarpooling/dark11.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Account Created Successfully</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="mobile_img_Wrapper">
                                <img src="{{ asset('images/productCarpooling/dark12.png') }}" alt="" class="img-fluid">
                                {{-- <div class="instructions text-center">
                                    <p>Transcation Successfull</p>
                                </div> --}}
                            </div>

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
                            <h1 class="mainHeading">Platform Benefits & Use Cases</h1>
                            <ul class="paraText">
                                <li>Automated ride matching, scheduling, and transparent fares</li>
                                <li>Scalable for organizations, campuses, businesses, and public services</li>
                                <li>Streamlined workflows that reduce manual coordination and admin overhead</li>
                                <li>Ideal for corporate ride-sharing, school/university transport, and daily employee
                                    commutes</li>
                                <li>Supports public-private transport networks and managed fleet services for communities or
                                    smart cities</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="organizationDiv">
            <div class="container custom-container">
                <div class="conclusionDiv">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="bussinessText text-left">
                                <h1 class="mainHeading">CONCLUSION</h1>
                                <p class="paraText">The carpooling platform combines operational control, user convenience,
                                    and real-time mobility features in one scalable solution. With a powerful admin backend
                                    and a user-friendly mobile interface, it is built to serve modern transportation
                                    demands.
                                    Whether you're managing your transportation fleet or running an app-based mobility
                                    service, this platform is designed to support and scale with your operations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="journeyDiv">
            <div class="container custom-container">
                <h2 class="journeyHeading mb-4">Start Your Journey With App In Snap!</h2>
                <div class="journeyBtnDiv">
                    <a href="{{route('contact')}}" class="btn btn-teal  journeyBtn">Contact Us Now</a>
                    <a href="{{asset('pdf/Carpoolingpdf.pdf')}}" class="btn btn-teal  journeyBtn" download>Download PDF</a>
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




@endsection