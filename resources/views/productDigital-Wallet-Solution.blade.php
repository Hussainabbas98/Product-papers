<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product-Digital-Wallet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<style>
    .bgFullImage {
        background-image: url('{{asset('images/productdigitalwallet/fullBg.png')}}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .firstSection {
        background-image: url('{{asset('images/productdigitalwallet/herosection.png')}}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .unstoppableSectionDiv {
        background-image: url('{{asset('images/productdigitalwallet/herosection.png')}}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .lastSectionBg {
        background-image: url('{{asset('images/productdigitalwallet/herosection.png')}}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .firstMainheading {
        font-family: 'Gilroy-Bold';
        font-size: 30px;
        font-weight: 400;
        letter-spacing: 0.02em;
        color: #074CA9;
    }

    .secondMainheading {
        font-family: 'Gilroy-Bold';
        font-size: 24px;
        font-weight: 400;
        letter-spacing: 0.02em;
        color: #074CA9;
    }

    .mainHeading {
        font-family: 'Gilroy-Bold';
        font-size: 24px;
        font-weight: 400;
        letter-spacing: 0.02em;
        color: #11B79E;
        padding-bottom: 16px;
    }

    .greenHeading {
        font-family: 'Gilroy-Bold';
        font-size: 22px;
        font-weight: 400;
        letter-spacing: 0.02em;
        color: #11B79E;
    }

    .coraParatext {
        font-family: 'Gilroy-Regular';
        font-size: 20px;
        font-weight: 400;
        letter-spacing: 0.01em;
        color: #25262B;
        line-height: 30px;
    }

    .keyHeading {
        font-family: 'Gilroy-Medium';
        font-size: 20px;
        font-weight: 400;
        letter-spacing: 0.02em;
        color: #25262B;
    }

    .keyCapimage {
        text-align: end;
    }

    .Maskgroupimage {
        /* text-align: end; */
        width: 100%
    }

    .miniappimage {
        text-align: end;
    }

    .miniUlList,
    .technicalList li {
        font-family: 'Gilroy-Regular';
        font-weight: 400;
        font-size: 20px;
        letter-spacing: 0.01em;
        color: #25262B;
        padding-left: 15px !important;
        margin-bottom: 14px;
    }

    .miniUlList li {
        margin-bottom: 14px;

    }

    .handMockDiv {
        background-color: #11B79E;
        border-radius: 20px;
        padding: 0px 10px;
    }

    .centralizedDiv {
        background-color: #11B79E;
        border-radius: 12px;
        padding: 20px 10px;
        text-align: center;
        height: 670px;

    }

    .miniAppDiv {
        background-color: #D3F6F1;
        border-radius: 12px;
        padding: 20px 10px;
    }

    .homeDemotxt-Wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .linkText {
        font-family: 'Gilroy-Bold';
        font-weight: 400;
        font-size: 20px;
        text-decoration: underline;
        color: #11B79E;
    }

    .journeyHeading {
        font-family: 'Gilroy-Semibold';
        font-weight: 400;
        letter-spacing: 0.01em;
        text-align: center;
        color: #25262B;
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

    .keyUlList li {
        font-size: 20px;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        font-family: 'Gilroy-Regular';
        font-weight: 400;
        letter-spacing: 0.01em;
    }

    .journeyDiv,
    .bussinessDiv {
        background-color: #D3F6F1B2;
        border-radius: 12px;
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
        border-radius: 12px !important;
    }

    .infoBox {
        background-color: #ffffff;
        border-radius: 12px;
        padding: 0px 20px 20px 20px;
    }

    .productOverviewDiv {
        background-color: #ffffff;
        border-radius: 12px;
        padding: 20px;
    }

    /* .productOverviewDiv, */
    .mobileScreenDiv,
    .adminPortalDiv,
    .whosDiv,
    .conversionDiv {
        padding: 60px;
    }

    .keyFeatureDiv,
    .adminPotalDiv,
    .bussinessDiv {
        padding: 70px;
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

    .Maskgroupimage {
        position: relative;
        height: 435px;
    }

    .MaskgroupimageDiv {
        position: absolute;
        height: 33px;
        top: -92px;
        width: 100%;
        left: 10px;
    }

    .MaskgroupimageDiv img {
        width: 100%;
    }

    .laptopMockupdiv {
        position: relative;
    }

    .laptopMockupimgdiv {
        position: absolute;
        left: 50px;
        top: -55px;
    }

    .infoIcon {
        margin-bottom: 15px;
    }

    .clientRoadmapDiv {
        margin-top: 70px;
    }

    .coreHeadingIcon {
        margin-right: 10px;
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
        max-width: 90% !important;
        width: 90% !important;
        margin: 0 auto;
    }



    /* new end */
    /* @media (max-width: 3024px) and (min-width: 1964px) {}

    @media (max-width: 2560px) and (min-width: 1550px) {} */

    /* ✅ MacBook Pro 14" (3024×1964 physical → 1512×982 CSS pixels) */
    @media only screen and (max-width: 1513px) and (min-width: 1500px) {
        .handMockDiv{
            height: 430px;
        }
    }

    /* @media (max-width: 1440px) {} */

    /* @media only screen and (max-width: 1280px) {} */

    @media (max-width: 1024px) {
        .MaskgroupimageDiv {
            top: 92px;
            left: 10px;
        }

        .centralizedDiv {
            height: 590px;
        }

        .laptopMockupimgdiv {
            left: 0px;
            top: 0px;
        }
    }

    @media (max-width: 991px) {}

    @media (max-width: 768px) {

        .walletImageWrap,
        .keyCapimage {
            display: none;
        }

        .handmocktext {
            margin-top: 40px;
        }

        .handMockDiv {
            height: 780px;
        }

        .MaskgroupimageDiv {
            top: -48px;
            left: 10px;
        }

        .centralizedDiv {
            height: 530px;
        }
    }

    @media (max-width: 767px) {

        .productOverviewDiv,
        .mobileScreenDiv,
        .adminPortalDiv,
        .whosDiv,
        .conversionDiv {
            padding: 60px 0px;
        }

        .keyFeatureDiv,
        .adminPotalDiv,
        .bussinessDiv {
            padding: 70px 0px;
        }

        .order1 {
            order: 1;
        }

        .order2 {
            order: 2;
        }
    }

    @media (max-width: 575.98px) {

        .walletHeading,
        .firstMainheading {
            font-size: 28px;
        }

        .paraText,
        .keyUlList li,
        .coraParatext,
        .textBold,
        .miniUlList li,
        .technicalList li {
            font-size: 16px;
        }

        .mainHeading {
            font-size: 20px;
        }

        .keyHeading,
        .secondMainheading,
        .greenHeading,
        .journeyHeading,
        .linkText {
            font-size: 18px;
        }

        .secondMainheading {
            margin-bottom: 20px;
        }

        .keyUlList {
            padding: 15px
        }

        .MaskgroupimageDiv {
            top: 0px;
        }

        .handMockDiv {
            height: 697px;
        }

        .walletCTA {
            font-size: 12px;
            padding: 6px 14px;
        }

        .productOverviewDiv {
            padding: 0px;
        }

        .centralizedDiv {
            height: 440px;
        }

        .journeyBtn {
            font-size: 12px !important;
            padding: 6px 14px !important;
        }
         .centralizedtext {
            padding-top: 1rem !important;
        }
    }

    @media only screen and (max-width: 540px) and (min-width: 500px) {
            .handMockDiv {
        height: 690px;
    }    
        .centralizedDiv {
        height: 380px;
    }
    }

    @media only screen and (max-width: 431px) and (min-width: 421px) {
         .handMockDiv {
        height: 700px;
    }
        .centralizedDiv {
        height: 400px;
    }
    }

    @media (max-width: 426px) {
            .handMockDiv {
        height: 697px;
    }
    }
    @media (max-width: 420px) {}

    @media only screen and (max-width: 415px) and (min-width: 413px) {
            .handMockDiv {
        height: 718px;
    }
    }

    @media only screen and (max-width: 412px) and (min-width: 392px) {
            .handMockDiv {
        height: 717px;
    }
    .centralizedDiv {
        height: 400px;
    }
    }

    @media only screen and (max-width: 391px) and (min-width: 376px) {
            .handMockDiv {
        height: 731px;
    }
    
    .centralizedDiv {
        height: 400px;
    }
    }

    @media (max-width: 376px) {
        .handMockDiv {
            height: 720px;
        }
    }

    @media (max-width: 375px) {}

    @media only screen and (max-width: 360px) and (min-width: 345px) {
            .handMockDiv {
        height: 739px;
    }
    .centralizedDiv {
        height: 400px;
    }
    }

    @media only screen and (max-width: 344px) and (min-width: 321px) {}

    @media (max-width: 320px) {
           .handMockDiv {
        height: 800px;
    }
    }
</style>
<body>

    <section class="bgFullImage">
        <section class="firstSection">
            <div class="container custom-container py-5">
                <div class="row align-items-center">

                    <!-- LEFT: Text -->
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 mb-4 mb-lg-0">
                        <div class="walletTextWrap">
                            <h1 class="walletHeading">
                                <span class="walletHeadingBlue">DIGITAL</span><br>
                                <span class="walletHeadingGreen">WALLET SOLUTION</span>
                            </h1>
                            <p class="paraText">
                                Empowering seamless, secure, and cashless transactions for the digital age.
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
                                <p class="activeUsersText mt-2">5M+ Active Users</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="walletImageWrap text-center">
                            <img src="{{ asset('images/productdigitalwallet/illustration.png') }}"
                                alt="Digital Wallet Image" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <section class="fullContent">
            <div class="container custom-container ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="financialDiv text-center">
                            <h1 class="firstMainheading">OUR ALL-IN-ONE FINANCIAL COMPANION</h1>
                        </div>
                    </div>
                </div>
            </div>

            {{-- productOverview Div --}}
            <div class="container custom-container py-5">
                <div class="productOverviewDiv">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="over_headingDiv">
                                <h1 class="mainHeading">PRODUCT OVERVIEW</h1>
                                <p class="paraText">The platform is a modular digital banking solution that enables
                                    financial
                                    institutions to launch fully branded mobile wallets, customized to different user
                                    segments
                                    and regulatory tiers.</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="keyCaptext">
                                <h1 class="keyHeading">Key capabilities include:</h1>
                                <p class="paraText">The mobile application is designed for intuitive shopping and high
                                    engagement:</p>
                                <ul class="keyUlList">
                                    <li>Multiple account types (Gen-Z, Freelancer, Level 0, Level 1, Ultra)</li>
                                    <li>Multilingual user interface</li>
                                    <li>Utility, government, and lifestyle payments</li>
                                    <li>Integrated savings, investments, and micro-insurance</li>
                                    <li>Merchant accounts with QR-based payment acceptance</li>
                                    <li>User engagement tools like Invite & Earn, Spin & Win, and loyalty programs</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="keyCapimage">
                                <img src="{{ asset('images/productdigitalwallet/productoverviewillustration.png') }}"
                                    alt="productoverviewillustration" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container custom-container py-5">
                <div class="handMockDiv">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="homeDemotxt-Wrapper">
                                <div class="handmocktext">
                                    <p class="paraText text-white">Whether addressing microfinance clients, freelancers,
                                        or high-net-worth individuals, the platform serves as a comprehensive financial
                                        interface
                                        tailored for all segments from low-limit, entry-level users to premium, fully
                                        verified
                                        accounts with advanced features. It not only enhances user convenience and
                                        accessibility
                                        but
                                        also empowers banks and financial institutions to explore new revenue streams,
                                        expand
                                        their
                                        reach, and deliver personalized services across diverse customer profiles.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="Maskgroupimage">
                                <div class="MaskgroupimageDiv">
                                    <img src="{{ asset('images/productdigitalwallet/mycardsimage.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="coreSectionDiv py-5">
                <div class="container custom-container px-lg-5">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="mobileScreenText text-center">
                                <h1 class="secondMainheading">CORE MODULES & FEATURE SET</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-5 order1">
                            <div class="coreDiv">
                                <h5 class="text-primary d-flex align-items-center mb-3">
                                    <img src="{{ asset('images/productdigitalwallet/transferpayments.png') }}"
                                        alt="Transfer Icon" class="coreHeadingIcon" />
                                    <span class="greenHeading">Transfers & Payments</span>
                                </h5>
                                <p class="coraParatext">
                                    Our solution empowers users to move money securely and instantly across banks,
                                    wallets,
                                    and borders,
                                    supporting wallet-to-wallet transfers, IBFT and RAAST for local interbank payments
                                    via
                                    account or mobile number,
                                    international remittances through licensed partners, and convenient features like
                                    scheduled payments,
                                    payment requests, money gifting, bill splitting, and donations.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-5 order2">
                            <div class="mobileScreenImgDiv text-center">
                                <img src="{{ asset('images/productdigitalwallet/transfer&paymentsscreen.png') }}"
                                    alt="Payment UI" class="img-fluid" style="max-height: 500px;" />
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-5 order2">
                            <div class="mobileScreenImgDiv text-center">
                                <img src="{{ asset('images/productdigitalwallet/ServicePayments&BillSettlement.png') }}"
                                    alt="Payment UI" class="img-fluid" style="max-height: 500px;" />
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-5 order1">
                            <div class="coreDiv">
                                <h5 class="text-primary d-flex align-items-center mb-3">
                                    <img src="{{ asset('images/productdigitalwallet/transferpayments.png') }}"
                                        alt="Transfer Icon" class="coreHeadingIcon" />
                                    <span class="greenHeading">Service Payments & Bill Settlement</span>
                                </h5>
                                <p class="coraParatext">
                                    The platform supports an extensive list of billers and payment categories, making it
                                    easier than ever to manage everyday expenses. Users can conveniently handle mobile
                                    recharges, purchase bundles, and pay for utility bills, broadband services, and
                                    education fees. It also facilitates government-related payments such as taxes and
                                    licensing, ensuring compliance without hassle. Beyond that, the platform enables
                                    healthcare and insurance premium payments, supports corporate and real estate
                                    transactions, and even caters to additional needs like charity contributions, toll
                                    payments, and various top-up services — creating a truly comprehensive solution for
                                    all
                                    financial obligations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-5 order1">
                            <div class="coreDiv">
                                <h5 class="text-primary d-flex align-items-center mb-3">
                                    <img src="{{ asset('images/productdigitalwallet/savinginvestments.png') }}"
                                        alt="Transfer Icon" class="coreHeadingIcon" />
                                    <span class="greenHeading">Savings & Investments</span>
                                </h5>
                                <p class="coraParatext">
                                    The platform empowers users to build long-term financial wellness through a range of
                                    investment and saving tools. It offers goal-based mutual fund investing integrated
                                    with
                                    licensed Asset Management Companies (AMCs), enabling users to plan and achieve their
                                    financial objectives efficiently. Additionally, the platform provides seamless
                                    access to
                                    stock trading via connected brokerage APIs, complete with real-time market data for
                                    informed decision-making. This combination of convenience and insight ensures that
                                    users
                                    can manage and grow their wealth with confidence and ease.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-5 order2">
                            <div class="mobileScreenImgDiv text-center">
                                <img src="{{ asset('images/productdigitalwallet/Savings&Investmentsscreen.png') }}"
                                    alt="Payment UI" class="img-fluid" style="max-height: 500px;" />
                            </div>
                        </div>

                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-5 order2">
                            <div class="mobileScreenImgDiv text-center">
                                <img src="{{ asset('images/productdigitalwallet/Credit&LendingServicesmobilescreen.png') }}"
                                    alt="Payment UI" class="img-fluid" style="max-height: 500px;" />
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-5 order1">
                            <div class="coreDiv">
                                <h5 class="text-primary d-flex align-items-center mb-3">
                                    <img src="{{ asset('images/productdigitalwallet/credit&lendingservices.png') }}"
                                        alt="Transfer Icon" class="coreHeadingIcon" />
                                    <span class="greenHeading">Credit & Lending Services</span>
                                </h5>
                                <p class="coraParatext">
                                    The platform provides flexible credit offerings specifically tailored to suit the
                                    financial needs of salaried professionals, freelancers, and daily wage earners. With
                                    products like Advance Salary, Advance Salary+, and Advance Cash, users can
                                    conveniently
                                    access funds when needed, ensuring financial stability and ease during critical
                                    times.
                                    These solutions are seamlessly integrated with employer payroll systems for quick
                                    disbursement and efficient management. Additionally, the platform offers the
                                    flexibility
                                    of early full repayment, empowering users with greater control over their financial
                                    commitments while promoting responsible borrowing practices.
                                </p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>


            <div class="unstoppableSectionDiv py-5">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="mobileScreenText text-center">
                                <h1 class="secondMainheading mb-5">WHAT MAKES THIS WALLET UNSTOPPABLE</h1>
                            </div>
                        </div>

                        <div class="col-md-6 mb-5">
                            <div class="infoBox">
                                <div class="infoIcon">
                                    <img src="{{ asset('images/productdigitalwallet/rewards.png') }}" alt="Rewards Icon">
                                </div>
                                <h6 class="greenHeading">Rewards & User Engagement</h6>
                                <p class="coraParatext">Incentivize retention with referral programs, daily draws like Spin
                                    &
                                    Win,
                                    and loyalty rewards.</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-5">
                            <div class="infoBox">
                                <div class="infoIcon">
                                    <img src="{{ asset('images/productdigitalwallet/lifestyles.png') }}"
                                        alt="Lifestyle Icon">
                                </div>
                                <h6 class="greenHeading">Lifestyle & Entertainment</h6>
                                <p class="coraParatext">Extend wallet use with event tickets, Umrah and travel bookings, and
                                    digital
                                    vouchers for top platforms.</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-5">
                            <div class="infoBox">
                                <div class="infoIcon">
                                    <img src="{{ asset('images/productdigitalwallet/insurance.png') }}"
                                        alt="Insurance Icon">
                                </div>
                                <h6 class="greenHeading">Insurance Services</h6>
                                <p class="coraParatext">Integrated micro-insurance for life, health, and travel with easy
                                    policy
                                    management and renewals.</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-5">
                            <div class="infoBox">
                                <div class="infoIcon">
                                    <img src="{{ asset('images/productdigitalwallet/merchantsolutions.png') }}"
                                        alt="Merchant Icon">
                                </div>
                                <h6 class="greenHeading">Merchant Solutions</h6>
                                <p class="coraParatext">Empower merchants with QR payments, digital wallets, advanced
                                    analytics,
                                    and
                                    seamless paperless onboarding.</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-5">
                            <div class="infoBox">
                                <div class="infoIcon">
                                    <img src="{{ asset('images/productdigitalwallet/accountmanagement.png') }}"
                                        alt="Account Icon">
                                </div>
                                <h6 class="greenHeading">Account Management</h6>
                                <p class="coraParatext">Complete control with wallet balance, transaction history, cash flow
                                    insights, and account upgrades.</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-5">
                            <div class="infoBox">
                                <div class="infoIcon">
                                    <img src="{{ asset('images/productdigitalwallet/fuelexpenses.png') }}" alt="Fuel Icon">
                                </div>
                                <h6 class="greenHeading">Fuel & Expense Management</h6>
                                <p class="coraParatext">Manage allowances, fleet expenses, and fuel budgets with prepaid
                                    cards
                                    and
                                    detailed reports.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container custom-container">
                <div class="miniAppDiv py-5">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="homeDemotxt-Wrapper ">
                                <div class="keyCaptext">
                                    <h1 class="mainHeading">Mini Apps & Open Ecosystem</h1>
                                    <p class="paraText">Supports in-app marketplaces and third-party integrations.</p>
                                    <ul class="miniUlList">
                                        <li><span class="textBold">Z-Store </span>for e-commerce</li>
                                        <li><span class="textBold">Plankly</span> integration for value-added services</li>
                                        <li><span class="textBold">Convex: </span>Access to exclusive games through a
                                            membership-based model</li>
                                        <li><span class="textBold">Open APIs </span>for fintech or non-financial partner app
                                            inclusion</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="miniappimage">
                                <img src="{{ asset('images/productdigitalwallet/miniapps&openecosyatem.png') }}"
                                    alt="miniapps&openecosyatem" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="technicalDiv py-5">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="technicaltext">
                                <h1 class="greenHeading">TECHINAL OVERVIEW</h1>
                                <p class="paraText">To support mission-critical financial operations, the platform is built
                                    with
                                    enterprise-grade architecture:</p>
                                <ul class="technicalList">
                                    <li>Cloud-native, microservices architecture with horizontal scalability — deployable on
                                        AWS, Azure, or private cloud</li>
                                    <li>End-to-end data encryption, biometric authentication (Face ID, Touch ID), and secure
                                        token-based session management</li>
                                    <li>Full regulatory compliance with KYC, AML, PSD2 equivalents, and data residency laws
                                        across jurisdictions</li>
                                    <li>Robust integration layer with real-time APIs for RAAST, IBFT, NADRA, telco billing
                                        systems, and third-party fintech providers</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container custom-container py-5">
                <div class="centralizedDiv">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="centralizedtext text-center pt-md-5">
                                <h1 class="secondMainheading text-white">CENTRALIZED ADMIN PORTAL</h1>
                                <p class="paraText text-white">The system offers real-time reporting and reconciliation,
                                    role-based
                                    controls with alerts, streamlined merchant onboarding and lifecycle management, and
                                    efficient transaction dispute resolution with escalation tracking.</p>
                            </div>
                            <div class="laptopMockupdiv">
                                <div class="laptopMockupimgdiv">
                                    <img src="{{ asset('images/productdigitalwallet/centralizedadminportal.png') }}"
                                        alt="centralizedadminportal" class="w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lastSectionBg">
                <div class="clientRoadmapDiv py-5">
                    <div class="container custom-container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="centralizedtext text-center">
                                    <p class="paraText">Our client-driven roadmap unlocks future-ready features like
                                        AI-powered
                                        insights, automated budgeting, NFC and wearable payments, in-app government
                                        services,
                                        and
                                        advanced digital KYC — all customizable to your needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container custom-container">
                    <div class="journeyDiv py-5">
                        <h2 class="journeyHeading mb-4">Start Your Journey With App In Snap!</h2>
                        <div class="journeyBtnDiv">
                            <a href="" class="btn btn-teal  journeyBtn">Contact Us Now</a>
                            <a href="{{asset('pdf/digital.pdf')}}" class="btn btn-teal  journeyBtn" download>Download PDF</a>
                        </div>
                    </div>
                </div>

                <div class="linkDiv py-5">
                    <div class="container custom-container my-3">
                        <a href="#" class="linkText">View Case Study</a>
                    </div>
                </div>
            </div>
        </section>
    </section>

</body>
</html>