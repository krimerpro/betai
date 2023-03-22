@extends('layouts.default')
@section('content')

<!-- Banner Section start -->
<section class="banner-section">
    <div class="overlay">
        <div class="shape-area">
            <img src="{{ asset('images/coin-2.png') }}" class="obj-1" alt="image">
            <img src="{{ asset('images/winner-cup.png') }}" class="obj-2" alt="image">
        </div>
        <div class="banner-content">
            <div class="container">
                <div class="content-shape">
                    <img src="{{ asset('images/coin-1.png') }}" class="obj-1" alt="image">
                    <img src="{{ asset('images/coin-3.png') }}" class="obj-2" alt="image">
                    <img src="{{ asset('images/coin-3.png') }}" class="obj-3" alt="image">
                    <img src="{{ asset('images/coin-4.png') }}" class="obj-4" alt="image">
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="main-content">
                            <div class="top-area section-text">
                                <h4 class="sub-title">Bet & Win Today!</h4>
                                <h1 class="title">BET AI</h1>
                                <p class="xlr">The fastest, easiest way to bet on sports.NBA, Tennis & Soccer,
                                    Choose on which team to bet and win</p>
                            </div>
                            <div class="bottom-area">
                                <span class="btn-border">
                                    <a href="https://t.me/BetAIOnline" class="cmn-btn reg" target="_blank">JOIN US</a>
                                </span>

                                <span class="btn-border">
                                    <a href="https://poocoin.app/tokens/" class="cmn-btn reg" target="_blank">CHART</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="counter-section">
        <div class="container">
            <div class="row cus-mar">
                <div class="col-xl-4 col-md-6">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="{{ asset('images/icon/counter-icon-1.png') }}" alt="image">
                        </div>
                        <div class="text-area">
                            <h3 class="m-none"><span></span><span class="counter">1000000000</span></h3>
                            <p>Total Supply $BET</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="{{ asset('images/icon/counter-icon-2.png') }}" alt="image">
                        </div>
                        <div class="text-area">
                            <h3 class="m-none"><span class="counter">2</span>%</h3>
                            <p>Tax</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="{{ asset('images/icon/counter-icon-3.png') }}" alt="image">
                        </div>
                        <div class="text-area">
                            <h3 class="m-none"><span class="counter">4</span>%</h3>
                            <p>Max Bag & Transaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section end -->

<!-- About bitbetio start -->
<section class="about-bitbetio" id="about">
    <div class="overlay pt-120 pb-120">
        <div class="shape-area">
            <img src="{{ asset('images/crypto-fanus-1.png') }}" class="obj-1" alt="image">
            <img src="{{ asset('images/crypto-fanus-2.png') }}" class="obj-2" alt="image">
        </div>
        <div class="container">
            <div class="row d-flex align-items-end">
                <div class="col-lg-6">
                    <div class="image-area d-rtl left-side">
                        <img src="{{ asset('images/about-bitbetio-image.png') }}" alt="images" class="max-un">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-text">
                        <h5 class="sub-title">A Next-Level Sports Betting</h5>
                        <h2 class="title">A Revolution in Online Betting</h2>
                        <p>BET AI is a user-friendly, decentralised, peer-to-peer betting platform.</p>
                    </div>
                    <div class="row cus-mar">
                        <div class="col-sm-6 col-6">
                            <div class="single-item">
                                <img src="{{ asset('images/icon/about-icon-1.png') }}" alt="images">
                                <h5>Peer-to-peer</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-6">
                            <div class="single-item">
                                <img src="{{ asset('images/icon/about-icon-2.png') }}" alt="images">
                                <h5>No limits</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-6">
                            <div class="single-item">
                                <img src="{{ asset('images/icon/about-icon-3.png') }}" alt="images">
                                <h5>Decentralised</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-6">
                            <div class="single-item">
                                <img src="{{ asset('images/icon/about-icon-4.png') }}" alt="images">
                                <h5>Community-powered</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About bitbetio end -->

<!-- How it Works start -->
<section class="how-it-works">
    <div class="overlay pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h5 class="sub-title">Get to Know</h5>
                        <h2 class="title">How BET AI Works?</h2>
                        <p>Our platform has been designed from the ground up to be tailored to the unique form of
                            betting and settlement offered by the blockchain. Follow these simple steps and make
                            profits!</p>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <ul class="nav" role="tablist">
                            <li class="nav-item" role="presentation">
                                <h5 class="nav-link active" id="sport-tab" data-bs-toggle="tab"
                                    data-bs-target="#sport" role="tab" aria-controls="sport" aria-selected="true">
                                    <span class="image-area">
                                        <img src="{{ asset('images/icon/how-works-icon-1.png') }}" alt="icon">
                                    </span>
                                    Choose a sport
                                </h5>
                            </li>
                            <li class="nav-item" role="presentation">
                                <h5 class="nav-link" id="match-tab" data-bs-toggle="tab" data-bs-target="#sport"
                                    role="tab" aria-controls="match" aria-selected="false">
                                    <span class="image-area">
                                        <img src="{{ asset('images/icon/how-works-icon-2.png') }}" alt="icon">
                                    </span>
                                    Choose a match
                                </h5>
                            </li>
                            <li class="nav-item" role="presentation">
                                <h5 class="nav-link" id="team-tab" data-bs-toggle="tab" data-bs-target="#sport"
                                    role="tab" aria-controls="team" aria-selected="lse">
                                    <span class="image-area">
                                        <img src="{{ asset('images/icon/how-works-icon-3.png') }}" alt="icon">
                                    </span>
                                    Choose your team
                                </h5>
                            </li>
                            <li class="nav-item" role="presentation">
                                <h5 class="nav-link" id="odds-tab" data-bs-toggle="tab" data-bs-target="#odds"
                                    role="tab" aria-controls="odds" aria-selected="lse">
                                    <span class="image-area">
                                        <img src="{{ asset('images/icon/how-works-icon-4.png') }}" alt="icon">
                                    </span>
                                    Choose your odds
                                </h5>
                            </li>
                            <li class="nav-item" role="presentation">
                                <h5 class="nav-link" id="amount-tab" data-bs-toggle="tab" data-bs-target="#sport"
                                    role="tab" aria-controls="amount" aria-selected="false">
                                    <span class="image-area">
                                        <img src="{{ asset('images/icon/how-works-icon-5.png') }}" alt="icon">
                                    </span>
                                    Choose your amount
                                </h5>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="sport" role="tabpanel"
                                aria-labelledby="sport-tab">
                                <h4>Select a Sport</h4>
                                <div class="img-area">
                                    <img src="{{ asset('images/process-img-1.png') }}" alt="image">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="match" role="tabpanel" aria-labelledby="match-tab">
                                <h4>Select a Match</h4>
                                <div class="img-area">
                                    <img src="{{ asset('images/process-img-2.png') }}" alt="image">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
                                <h4>Select a Team</h4>
                                <div class="img-area">
                                    <img src="{{ asset('images/process-img-3.png') }}" alt="image">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="odds" role="tabpanel" aria-labelledby="odds-tab">
                                <h4>Select Odds</h4>
                                <div class="img-area">
                                    <img src="{{ asset('images/process-img-4.png') }}" alt="image">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="amount" role="tabpanel" aria-labelledby="amount-tab">
                                <h4>Select Bet Amount </h4>
                                <div class="img-area">
                                    <img src="{{ asset('images/process-img-5.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How it Works end -->

<!-- Amazing Features start -->
<section class="amazing-features" id="coolfeatures">
    <div class="overlay pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h5 class="sub-title">Leading the Crypto bets escrow services</h5>
                        <h2 class="title">An Exhaustive list of Amazing Features</h2>
                        <p>BET AI is the most advanced sports crypto beting platform and highest stakes across
                            multiple bookmakers and exchanges.</p>
                    </div>
                </div>
            </div>
            <div class="features-carousel">
                <div class="single-slide">
                    <div class="slide-content">
                        <div class="icon-area">
                            <img src="{{ asset('images/icon/amazing-features-icon-1.png') }}" alt="icon">
                        </div>
                        <h5>Safety</h5>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-content">
                        <div class="icon-area">
                            <img src="{{ asset('images/icon/amazing-features-icon-2.png') }}" alt="icon">
                        </div>
                        <h5>Transparency</h5>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-content">
                        <div class="icon-area">
                            <img src="{{ asset('images/icon/amazing-features-icon-3.png') }}" alt="icon">
                        </div>
                        <h5>Low Commissions</h5>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-content">
                        <div class="icon-area">
                            <img src="{{ asset('images/icon/amazing-features-icon-4.png') }}" alt="icon">
                        </div>
                        <h5>Player is king</h5>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-content">
                        <div class="icon-area">
                            <img src="{{ asset('images/icon/amazing-features-icon-3.png') }}" alt="icon">
                        </div>
                        <h5>Low Commissions</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Amazing Features end -->

<!-- More Features start -->
<section class="more-features">
    <div class="overlay pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-0 order-1">
                    <div class="img-area">
                        <img src="{{ asset('images/more-features-image.png') }}" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <h5 class="sub-title">A new betting world</h5>
                        <h2 class="title">Bets on future currencies prices between users</h2>
                        <p>Cutting out bookmakers, opens a new betting experience for players.</p>
                    </div>
                    <div class="content-area">
                        <div class="single-item">
                            <div class="image-area">
                                <img src="{{ asset('images/icon/more-features-icon-1.png') }}" alt="image">
                            </div>
                            <div class="text-area">
                                <h5>Pool Bets</h5>
                                <p>Players bet on their predicted outcomes and all stakes go into a single pool.
                                    Winners share the pool. The odds are dynamic and depend on the number of
                                    participants and the amounts they wagered.</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="image-area">
                                <img src="{{ asset('images/icon/more-features-icon-2.png') }}" alt="image">
                            </div>
                            <div class="text-area">
                                <h5>Head to head betting</h5>
                                <p>The purest form of peer-to-peer betting. One player opens the bet and defines the
                                    odds and another player matches the bet. Players are not bound by unfavourable,
                                    centrally-defined odds.</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="image-area">
                                <img src="{{ asset('images/icon/more-features-icon-3.png') }}" alt="image">
                            </div>
                            <div class="text-area">
                                <h5>Multi- Player Bets</h5>
                                <p>High rollers can wager large amounts by offering bets that can be partially
                                    matched by multiple players. Similar to head-to-head bets, the odds are defined
                                    by the player who opens the bet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- More Features end -->

<!-- FAQs In start -->
<section class="faqs-section" id="faq">
    <div class="overlay pt-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <h5 class="sub-title">Frequently Asked Questions</h5>
                        <h2 class="title">If you have questions we have answer</h2>
                        <p>Answers for our most popular questions about sportsbetting, crypto, and BET AI</p>
                    </div>
                </div>
            </div>
            <div class="row faq-bg d-flex justify-content-center">
                <div class="col-xl-10">
                    <div class="faq-box mt-60 mb-60">
                        <div class="accordion" id="accordionFaqs">
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        I want to play at BET AI, What do i need to do?
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionFaqs">
                                    <div class="accordion-body">
                                        <p>You need to buy and hold $BET tokens</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        How fast do I get paid once I win a bet?
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionFaqs">
                                    <div class="accordion-body">
                                        <p>Very fast, since it based on blockchain!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        Can I set the odds for any bet I want?
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionFaqs">
                                    <div class="accordion-body">
                                        <p>Yes you can!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingsix">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                        aria-expanded="false" aria-controls="collapsesix">
                                        What makes us unique?
                                    </button>
                                </h5>
                                <div id="collapsesix" class="accordion-collapse collapse"
                                    aria-labelledby="headingsix" data-bs-parent="#accordionFaqs">
                                    <div class="accordion-body">
                                        <p>We are the best online betting for sports on blockchain! We provide Bet AI bot to make all things easier!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingeight">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseeight"
                                        aria-expanded="false" aria-controls="collapseeight">
                                        How do I deposit/transfer money to my transactions?
                                    </button>
                                </h5>
                                <div id="collapseeight" class="accordion-collapse collapse"
                                    aria-labelledby="headingeight" data-bs-parent="#accordionFaqs">
                                    <div class="accordion-body">
                                        <p>Just connect your wallet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseNight"
                                        aria-expanded="false" aria-controls="collapseNight">
                                        How do I withdraw money from my BET AI Bets account?
                                    </button>
                                </h5>
                                <div id="collapseNight" class="accordion-collapse collapse"
                                    aria-labelledby="headingNine" data-bs-parent="#accordionFaqs">
                                    <div class="accordion-body">
                                        <p>Directly send your funds to your wallet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQs In end -->

@stop
