<?php
if(!empty($_REQUEST['ref'])){
    setcookie('refer', $_REQUEST['ref'], time()+86400);
}
?>

<!doctype html>
<html class="no-js">
<head>
	<meta charset="UTF-8">
	<title>RDCToken.io much more than a token.</title>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="RDCToken.io much more than a token.">
	<meta name="keywords" content="">
	<link rel="shortcut icon" type="image/x-icon" href="assets/site/img/favicon.png">	
	<link rel="stylesheet" href="assets/site/fonts/fonts.css">
	<link rel="stylesheet" href="assets/site/css/bundle.css">
	<link rel="stylesheet" href="assets/site/css/build.css">

	<meta property="og:title" content="RDCToken.io much more than a token." />
	<meta property="og:description" content="RDCToken.io much more than a token." />
	<meta property="og:url" content="RDCToken.io/index.php" />
	<meta property="og:image" content="assets/site/img/share.jpg" />

	<link rel="author" href="humans.txt" />
    <script type="text/javascript" >
        var keyValuePairs = location.search.slice(1).split("&");
        var retorno = '';
        var d = new Date();
        var dias = 30; /* Quantidade de dias para o Cookie estar disponível */
        d.setTime(d.getTime() + (dias*24*60*60*1000));
        var expires = "expires="+d.toGMTString();
        keyValuePairs.forEach(function(keyValuePair) {
            keyValuePair = keyValuePair.split('=');
            if(keyValuePair[0]=='click_id') {
                document.cookie = 'clickCityAdsID='+keyValuePair[1] + "; " + expires + ";domain=.RDCToken.io;path=/";
            }
            if(keyValuePair[0]=='utm_source') {
                document.cookie = 'origem='+keyValuePair[1] + "; " + expires + ";domain=.RDCToken.io;path=/";
            }
            if(keyValuePair[0]=='gclid'){
                document.cookie = 'origem=adwords;' + expires + ";domain=.RDCToken.io;path=/";
            }
        });
    </script>

</head>
<body>    
        <header>
        <div class="container">
            <img src="images/rdc-logo.png" alt="RDCToken.io much more than a token." class="logo" width="230">
            <span class="hamburger hamburger--squeeze" id="openMenu">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </span>
            <div class="navigations">
                <nav class="navigation" id="navigation">
                    <ul>
                        <li><a href="#why-rdctoken" class="active">WHAT IS RDCT?</a></li>
                        <li><a href="#specification">SPECIFICATION</a></li>
                        <li><a href="#coin-distribution">COIN DISTRIBUTION</a></li>
                        <li><a href="#timeline">TIMELINE</a></li>
                        <li><a href="#roadmap">ROADMAP</a></li>
                        <li><a href="#downloads">Downloads</a></li>
                    </ul>
                </nav>
                <a href="https://rdctoken.io/admin" class="btn small">LOGIN</a>
            </div>
        </div>
    </header>
    <section class="main-header" id="main-header">
        <div class="container">
            <div class="main-header-title">
                <h1>RDCToken.io much more than a token.</h1>
                <p class="subtitle">A complete solution for anyone looking for a digital currency as an investment.</p>
                <div class="main-header-title-btns">
                    <!--<a href="downloads/en/businessplan.pdf" target="_blank" class="btn big glow-with-inner">BUSINESS PLAN</a>-->
                    <a href="downloads/whitepaper_rev05.pdf" target="_blank" class="btn big glow active">WHITEPAPER</a>
                </div>
            </div>
            <div class="main-header-coin">
                <div class="main-header-coin-button">
                    <a href="#" class="btn big glow-with-inner">NO-ICO SYSTEM</a>
                </div>
                
                <div class="main-header-coin-bar">
                    <p>Innovative and totally differentiated system to take to its users the possibility of acquiring project assets.</p>
                </div>
                <div class="main-header-coin-helper">
                    <img src="assets/site/img/setaazulclaro.png">
                    <p>Check out our website in other languages.</p>
                </div>
                <nav class="main-header-coin-menu">
                    <a href="en.php">
                        <img src="assets/site/img/en.png" alt="">
                    </a>
                    <a href="index.php">
                        <img src="assets/site/img/pt.png" alt="">
                    </a><!--
                    <a href="es.html">
                        <img src="assets/site/img/es.png" alt="">
                    </a>
                    -->
                </nav>

            </div>
        </div>
    </section>
    <section class="what-is-rdct" id="what-is-rdct">
        <div class="container">
            <div class="what-is-rdct-info">
                <h3>What is RDCToken.io?</h3>
                <p>RDCT is a decentralized, open source, open-source, point-to-point virtual currency developed from a fork of PIVX and that comes to the market bringing differential to have several products and services linked to your project, which makes it unique for those who seek to acquire crypto as an investment.
            </div><!--
            <div class="what-is-rdct-video" id="video">
                <div class="video-content">
                    <a href="#" class="play" data-youtube="sEjV-o4dWNk" id="play"></a>
                </div>
            </div>-->
        </div>
    </section>
    <section class="specification" id="specification">
        <div class="container">
            <h3>Specifications</h3>
            <div class="specification-list">
                <div class="specification-item">
                    <img src="assets/site/img/icon-1.png" alt="">
                    <p>COIN ALGORITHM <br>SCRYPT: (PoSe)</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-2.png" alt="">
                    <p>ABBREVIATION OF <br>CURRENCY: RDCT</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-3.png" alt="">
                    <p>SUPPLY MAX: <br>25.5 MILLION</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-4.png" alt="">
                    <p>PRE-MINEDS: <br>RDCT3.75 MILLION</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-5.png" alt="">
                    <p>CURRENCY MATURITY: <br>30 BLOCKS</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-6.png" alt="">
                    <p>REWARD BY <br>BLOCK 5 RDCT</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-7.png" alt="">
                    <p>BLOCK SPACE: <br>3 MINUTES</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-8.png" alt="">
                    <p>MASTERNODE:<br> 7.500 RDCT</p>
                </div>

                <div class="specification-item">
                    <img src="assets/site/img/icon-9.png" alt="">
                    <p>BLOCK REWARD <br>20 years</p>
                </div>

                <div class="specification-item">
                    <img src="assets/site/img/icon-10.png" alt="">
                    <p>NETWORK <br>CONFIRMATION: 6</p>
                </div>
            </div>
        </div>
    </section>
    <section class="why-rdctoken" id="why-rdctoken">
        <div class="container">
            <h3>Why RDCT?</h3>
            <div class="why-rdctoken-list">
                <img src="assets/site/img/globe.png" class="why-rdctoken-globe">
                <div class="why-rdctoken-item item-1">
                    <div class="why-rdctoken-item-icon">
                        <img src="assets/site/img/fast.png" alt="">
                    </div>
                    <div class="why-rdctoken-item-text">
                        <h4>FAST</h4>
                        <p>Confirmation of transactions takes place in secondss</p>
                    </div>
                </div>
                <div class="why-rdctoken-item item-2">
                    <div class="why-rdctoken-item-text">
                        <h4>RELIABLE</h4>
                        <p>Masternode system that guarantees the security of your coins and confidence in the network</p>
                    </div>
                    <div class="why-rdctoken-item-icon">
                        <img src="assets/site/img/lowfees.png" alt="">
                    </div>
                </div>
                <div class="why-rdctoken-item item-3">
                    <div class="why-rdctoken-item-icon">
                        <img src="assets/site/img/reliable.png" alt="">
                    </div>
                    <div class="why-rdctoken-item-text">
                        <h4>LOW FEES</h4>
                        <p>Transparency and confirmation rates in the very low network</p>
                    </div>
                </div>
                <div class="why-rdctoken-item item-4">
                    <div class="why-rdctoken-item-text">
                        <h4>PRIVATE</h4>
                        <p>Privacy guaranteed with anonymous transactions</p>
                    </div>
                    <div class="why-rdctoken-item-icon">
                        <img src="assets/site/img/private.png" alt="">
                    </div>
                </div>
                <div class="why-rdctoken-item item-5">
                    <div class="why-rdctoken-item-icon">
                        <img src="assets/site/img/secure.png" alt="">
                    </div>
                    <div class="why-rdctoken-item-text">
                        <h4>SECURE</h4>
                        <p>Security is the strongest blockchain technology and would not be any different in our system</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="coin-distribution" id="coin-distribution">
        <h3>Coin Distribution</h3>
        <div class="container">
            <div class="coin-distribution-ico">
                <h4>NO-ICO Distribution</h4>
                <div class="coin-distribuition-graphic">
                    <img src="assets/site/img/graphic-pt-br.png" alt="">
                </div>
            </div>
            <div class="coin-distribution-allocation">
                <h4>Allocation of Funds <br><small>Total Coin Supply - 3.750.000 RDCT</small></h4>
                <div class="coin-distribution-list">
                    <div class="coin-distribuition-item">
                        <div class="green-bar width-15"></div>
                        <div class="coin-distribution-item-text">Founders - <strong>10%</strong></div>
                    </div>
                    <div class="coin-distribuition-item">
                        <div class="green-bar width-25"></div>
                        <div class="coin-distribution-item-text">Reserve Fund - <strong>25%</strong></div>
                    </div>
                    <div class="coin-distribuition-item">
                        <div class="green-bar width-5"></div>
                        <div class="coin-distribution-item-text">Servers for PoW - <strong>8%</strong></div>
                    </div>
                    <div class="coin-distribuition-item">
                        <div class="green-bar width-15"></div>
                        <div class="coin-distribution-item-text">Server and coin for PoS & PoSe - <strong>12%</strong></div>
                    </div>
                    <div class="coin-distribuition-item">
                        <div class="green-bar width-5"></div>
                        <div class="coin-distribution-item-text">Physical structure - <strong>10%</strong></div>
                    </div>
                    <div class="coin-distribuition-item">
                        <div class="green-bar 15"></div>
                        <div class="coin-distribution-item-text">Development of new projects - <strong>15%</strong></div>
                    </div>
                    <div class="coin-distribuition-item">
                        <div class="green-bar width-20"></div>
                        <div class="coin-distribution-item-text">Global Marketing - <strong>20%</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="buy-rdct-now" id="buy-rdct-now">
        <div class="container">
            <h3>Buy RDCT now</h3>
            <div class="buy-rdct-now-list">
                <p>Pay with</p>
                <img src="assets/site/img/bitcoin.png" alt="">
                <img src="assets/site/img/dash.png" alt="">
                <img src="assets/site/img/litecoin.png" alt="">
                <a href="https://rdctoken.io/admin/" class="btn big glow-with-inner">BUY NOW</a>
            </div>
        </div>
    </section>
    <section class="timeline" id="timeline">
        <h3>Timeline <br><span class="title-ico">NO-ICO</span></h3>
        <div class="timeline-list">
            <div class="container">
                <div class="timeline-item bottom active start">
                    <div class="timeline-icon"></div>
                    <div class="timeline-item-text">
                        <p class="timeline-item-part timeline-item-start">Start NO-ICO System</p>
                    </div>
                </div>
                <div class="timeline-item top active">
                    <div class="timeline-icon"></div>
                    <div class="timeline-item-text">
                        <p class="timeline-item-part">Step 1 <br><small>After pre-sale</small></p>
                        <p class="timeline-item-info"> Total coins 850.000 RDCT</p>
                    </div>
                </div>
                <div class="timeline-item bottom active">
                    <div class="timeline-icon"></div>
                    <div class="timeline-item-text">
                        <p class="timeline-item-part">Step 2 <br><small>After Step 1</small></p>
                        <p class="timeline-item-info"> Total coins 1,125,000 RDCT</p>
                    </div>
                </div>
                <div class="timeline-item top">
                    <div class="timeline-icon"></div>
                    <div class="timeline-item-text">
                        <p class="timeline-item-part">Step 3 <br><small>After Step 2</small></p>
                        <p class="timeline-item-info"> Total coins 1,375,000 RDCT </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="roadmap" id="roadmap">
            <div class="container">
                <h3>ROAD MAP</h3>
                <div class="roadmap-list">
                    <div class="roadmap-list-item left">
                        <div class="roadmap-list-num" data-number="1">1</div>
                        <div class="roadmap-list-info roadmap-list-info-1 left">
                            <h4>Abril/18 </h4>
                            <p>Site launch RDCToken.io 1.0</p>
                        </div>
                    </div>
                    <div class="roadmap-list-item right">
                        <div class="roadmap-list-num" data-number="2">2</div>
                        <div class="roadmap-list-info roadmap-list-info-2 right">
                            <h4>Junho/18 </h4>
                            <p>Pre-sale closure</p>
                        </div>
                    </div>
                    <div class="roadmap-list-item left">
                        <div class="roadmap-list-num" data-number="3">3</div>
                        <div class="roadmap-list-info roadmap-list-info-3 left">
                            <h4>Julho/18</h4>
                            <p>Launch services 4stake.com</p>
                        </div>
                    </div>
                    <div class="roadmap-list-item right">
                        <div class="roadmap-list-num" data-number="4">4</div>
                        <div class="roadmap-list-info roadmap-list-info-4 right">
                            <h4>Agost/18</h4>
                            <p>SWAP TOKEN ERC20 -> RDCT COIN</p>
                            <p>Sales Phase 2</p>

                        </div>
                    </div>
                    <div class="roadmap-list-item left">
                        <div class="roadmap-list-num" data-number="5">5</div>
                        <div class="roadmap-list-info roadmap-list-info-5 left">
                            <h4>Setembro/18</h4>
                            <p>WINDOWS WALLET / LINUX WALLET / BLOCKCHAIN EXPLORER</p>
                            <p>Listings in Exchanges</p>
                        </div>
                    </div>
                    <div class="roadmap-list-item right">
                        <div class="roadmap-list-num" data-number="6">6</div>
                        <div class="roadmap-list-info roadmap-list-info-6 right">
                            <h4>Outubro/18</h4>
                            <p>Launch of new services</p>
                        </div>
                    </div>
                    <div class="roadmap-list-item left">
                        <div class="roadmap-list-num" data-number="7">7</div>
                        <div class="roadmap-list-info roadmap-list-info-7 left">
                            <h4>Novembro / 18</h4>
                            <p>Launch of support sites</p>
                        </div>
                    </div>
                    <div class="roadmap-list-item right">
                        <div class="roadmap-list-num" data-number="8">8</div>
                        <div class="roadmap-list-info roadmap-list-info-8 right">
                            <h4>Dezembro/18</h4>
                            <p>Home audit system</p>
                        </div>
                    </div>
                    <div class="roadmap-list-item left">
                        <div class="roadmap-list-num" data-number="9">9</div>
                        <div class="roadmap-list-info roadmap-list-info-9 left">
                            <h4>JANEIRO / 19,</h4>
                            <p>Start of the network profits RDCT</p>
                        </div>
                    </div>
                    <!--
                    <div class="roadmap-list-item right">
                        <div class="roadmap-list-num" data-number="10">10</div>
                        <div class="roadmap-list-info roadmap-list-info-10 left">
                            <h4>fevereiro / 19</h4>
                            <p>CERIMONIA ANUAL RDCTOKEN</p>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </section>
        <!--
    <section class="questions" id="questions">
        <div class="container">
            <h3>Questions</h3>
            <div class="questions-list">
                <div class="questions-item">
                    <div class="questions-item-header">I bought RDCT and now?</div>
                    <div class="questions-item-content">
                        <p>After the purchase, we advise you to keep the crypto-coins in your Windows or Mac (Nasdacoin-QT) wallet, as this will mine new coins and after 15 days you will receive the gains from the currency appreciation.</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">Where can I sell RDCT?</div>
                    <div class="questions-item-content">
                        <p>Since the purchase of an ICO is an investment, we advise you to keep your CTO for as long as possible. However, if you choose to sell your coins you can sell them in a partner exchange.</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">How can I participate in ICO?</div>
                    <div class="questions-item-content">
                        <p>Simply pre-register and transfer funds using the currency of your choice directly to your wallet ... After this, simply carry out the purchase process normally.</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">What is the minimum and maximum quantity I can buy?</div>
                    <div class="questions-item-content">
                        <p>The minimum purchase amount is $ 100 USD and the maximum amount per transaction is $ 100,000 USD</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">What is the initial RDC quote?</div>
                    <div class="questions-item-content">
                        <p>The initial price of RDC will be $ 0.99 USD</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">What methods of payment?</div>
                    <div class="questions-item-content">
                        <p>Bitcoin, Litecoin and Dash</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">What is the forecast of appreciation of the currency?</div>
                    <div class="questions-item-content">
                        <p>Due to the great potential of the Affiliate System, we expect a minimum valuation between 100% and 200% in the first 40 days.</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">When do I start receiving income?</div>
                    <div class="questions-item-content">
                        <p>After the minimum period of 15 days your coins will be able to mine new blocks thus ensuring a monthly return of 15% monthly in the first 6 months. Note: this yield is independent of the appreciation of the currency.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <section class="redes-sociais" id="downloads">
        <div class="container">
            <h3>Downloads</h3>
            <nav class="redes-sociais-list">
                <a href="downloads/Win.zip" class="windows">
                    <img src="assets/site/img/windows.png" alt="">
                </a>
                <a href="downloads/Mac.zip" class="mac" download>
                    <img src="assets/site/img/mac.png" alt="">
                </a>
                <a href="https://github.com/rdct/rdct" class="gh" target="_blank">
                    <img src="assets/site/img/github.png" alt="">
                </a>
            </nav>
        </div>
    </section>
    <footer>
        <div class="container">
            <img src="images/rdc-logo.png" class="footer-logo" style="float: left" width="230">
            <nav class="footer-navigation" style="float: left">
                <a href="#why-rdctoken">WHY RDCT?</a>
                <a href="#">WHAT IS RDCT?</a>
                <a href="#coin-distribution">DISTRIBUTION</a>
                <a href="#timeline">TIMELINE</a>


            </nav>
            
        </div>
    </footer>
<script src="assets/site/js/jquery.js"></script>
<script src="assets/site/js/build.js"></script>

</body>
</html>