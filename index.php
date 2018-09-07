<?php
if(!empty($_REQUEST['ref'])){
    setcookie('refer', $_REQUEST['ref'], time()+86400);
}
?>
<!doctype html>
<html class="no-js">
<head>
	<meta charset="UTF-8">
	<title>RDCToken.io</title>
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="RDCToken.io muito mais que um token">
	<meta name="keywords" content="">
	<link rel="shortcut icon" type="image/x-icon" href="assets/site/img/favicon.png">	
	<link rel="stylesheet" href="assets/site/fonts/fonts.css">
	<link rel="stylesheet" href="assets/site/css/bundle.css">
	<link rel="stylesheet" href="assets/site/css/build.css">

	<meta property="og:title" content="RDCToken.io" />
	<meta property="og:description" content="RDCToken.io muito mais que um token." />
	<meta property="og:url" content="index.php" />
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
            <img src="images/rdc-logo.png" alt="RDCToken.io muito mais que um token" class="logo" width="230">
            <span class="hamburger hamburger--squeeze" id="openMenu">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </span>
            <div class="navigations">
                <nav class="navigation" id="navigation">
                    <ul>
                        <li><a href="#why-rdctoken" class="active">SOBRE RDCT</a></li>
                        <li><a href="#specification">ESPECIFICAÇÃO</a></li>
                        <li><a href="#coin-distribution">DISTRIBUIÇÃO DA MOEDA</a></li>
                        <li><a href="#timeline">TIMELINE</a></li>
                        <li><a href="#roadmap">ROAD MAP</a></li>
                        <!--<li><a href="#questions">F.A.Q</a></li>-->
                        <li><a href="#downloads">DOWNLOADS</a></li>
                    </ul>
                </nav>
                <a href="https://rdctoken.io/admin" class="btn small">LOGIN</a>
            </div>

        </div>
    </header>
    <section class="main-header" id="main-header">
        <div class="container">
            <div class="main-header-title">
                <h1>RDCToken </h1>
                <p class="subtitle">Uma solução completa para quem procura uma moeda digital como investimento.</p>
                <div class="main-header-title-btns">
                    <!--<a href="downloads/pt-br/planodenegocios.pdf" target="_blank" class="btn big glow-with-inner">Plano de negocio</a>-->
                    <a href="downloads/whitepaper_rev05.pdf" target="_blank" class="btn big glow active">WHITEPAPER</a>
                </div>
            </div>

            <div class="main-header-coin">
                <div class="main-header-coin-button">
                    <a href="#" class="btn big glow-with-inner">NO-ICO System</a>
                </div>
                
                <div class="main-header-coin-bar">
                    <p>Sistema inovador e totalmente diferenciado de levar a seus usuários a possibilidade de aquisição de ativos do projeto.</p>
                </div>

                <div class="main-header-coin-helper">
                    <img src="assets/site/img/setaazulclaro.png">
                    <p>Confira nosso site em outro idioma.</p>

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
                <h3>O que é o RDCToken?</h3>
                <p>O RDCT é uma Moeda virtual criptografada descentralizada, de código aberto, ponto-a-ponto, desenvolvida a partir de um fork do PIVX e que vem para o mercado trazendo diferencial de ter diversos produtos e serviços vinculados ao seu projeto, o que torna ela unica para quem busca adquirir cripto como investimento.</p>
            </div><!--
            <div class="what-is-rdct-video" id="video">
                <div class="video-content">
                    <a href="#" class="play" data-youtube="sEjV-o4dWNk" id="play"></a>
                    <img src="images/videoEmbed.fw.png"/>
                </div>
            </div>-->
        </div>
    </section>
    <section class="specification" id="specification">
        <div class="container">
            <h3>Especificações</h3>
            <div class="specification-list">
                <div class="specification-item">
                    <img src="assets/site/img/icon-1.png" alt="">
                    <p>COIN ALGORITHM <br>SCRYPT: Masternode (PoSe) </p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-2.png" alt="">
                    <p>SIGLA DA <br>MOEDA: RDCT</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-3.png" alt="">
                    <p>SUPPLY MÁXIMO: <br>RDCT 25.5 MILHÕES</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-4.png" alt="">
                    <p>PRÉ MINERADAS: <br>RDCT 3.75 MILHÕES</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-5.png" alt="">
                    <p>MATURIDADE DA MOEDA: <br>30 BLOCOS</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-6.png" alt="">
                    <p>RECOMPENSAS POR BLOCO: <br>5 RDCT</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-7.png" alt="">
                    <p>ESPAÇAMENTO DO <br>BLOCO: 3 MINUTOS</p>
                </div>
                <div class="specification-item">
                    <img src="assets/site/img/icon-8.png" alt="">
                    <p>MASTERNODE: <br>7.500 RDCT</p>
                </div>

                <div class="specification-item">
                    <img src="assets/site/img/icon-9.png" alt="">
                    <p>BLOCK REWARD: <br>20 anos</p>
                </div>

                <div class="specification-item">
                    <img src="assets/site/img/icon-10.png" alt="">
                    <p>CONFIRMAÇÃO <br>DE REDE: 6</p>
                </div>
            </div>
        </div>
    </section>
    <section class="why-rdctoken" id="why-rdctoken">
        <div class="container">
            <h3>Por que RDCToken?</h3>
            <div class="why-rdctoken-list">
                <img src="assets/site/img/globe.png" class="why-rdctoken-globe">
                <div class="why-rdctoken-item item-1">
                    <div class="why-rdctoken-item-icon">
                        <img src="assets/site/img/fast.png" alt="">
                    </div>
                    <div class="why-rdctoken-item-text">
                        <h4>RÁPIDO</h4>
                        <p>A confirmação das transações acontece em questão de segundos</p>
                    </div>
                </div>
                <div class="why-rdctoken-item item-2">
                    <div class="why-rdctoken-item-text">
                        <h4>CONFIANÇA</h4>
                        <p>Sistema de masternodes que garante a segurança de suas moedas.</p>
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
                        <h4>CUSTO BAIXO</h4>
                        <p>Taxas de transferência baixíssimas</p>
                    </div>
                </div>
                <div class="why-rdctoken-item item-4">
                    <div class="why-rdctoken-item-text">
                        <h4>PRIVACIDADE</h4>
                        <p>Privacidade garantida com transações anonimas</p>
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
                        <h4>SEGURO,</h4>
                        <p>Segurança é o forte da tecnologia blockchain e não seria diferente em nosso sistema</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="coin-distribution" id="coin-distribution">
        <h3>Distribuição da Moeda</h3>
        <div class="container">
            <div class="coin-distribution-ico">
                <h4>Distribuição do NO-ICO</h4>
                <div class="coin-distribuition-graphic">
                    <img src="assets/site/img/graphic-pt-br.png" alt="">
                </div>
            </div>
            <div class="coin-distribution-allocation">
                <h4>Distribuição de Fundos <br><small>Total Coin Supply - 3.750.000 RDCT</small></h4>
                <div class="coin-distribution-list">
                    <div class="coin-distribuition-item">
                        <div class="green-bar width-15"></div>
                        <div class="coin-distribution-item-text">Fundadores - <strong>10%</strong></div>
                    </div>
                    <div class="coin-distribuition-item">
                        <div class="green-bar width-25"></div>
                        <div class="coin-distribution-item-text">Fundo de Reserva - <strong>25%</strong></div>
                    </div>
                    <div class="coin-distribuition-item">
                        <div class="green-bar width-5"></div>
                        <div class="coin-distribution-item-text">Servidores PoW - <strong>8%</strong></div>
                    </div>
                    <div class="coin-distribuition-item">
                        <div class="green-bar width-15"></div>
                        <div class="coin-distribution-item-text">Coins para PoS e PoSe - <strong>12%</strong></div>
                    </div>
                    <div class="coin-distribuition-item">
                        <div class="green-bar width-5"></div>
                        <div class="coin-distribution-item-text">Estrutura física - <strong>10%</strong></div>
                    </div>
                    <div class="coin-distribuition-item">
                        <div class="green-bar width-20"></div>
                        <div class="coin-distribution-item-text">Desenvolvimento de Novos projetos - <strong>15%</strong></div>
                    </div>

                    <div class="coin-distribuition-item">
                        <div class="green-bar width-20"></div>
                        <div class="coin-distribution-item-text">Marketing global - <strong>20%</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="buy-rdct-now" id="buy-rdct-now">
        <div class="container">
            <h3>Comprar RDCT Agora</h3>
            <div class="buy-rdct-now-list">
                <p>Pagar com:</p>
                <img src="assets/site/img/bitcoin.png" alt="">
                <img src="assets/site/img/dash.png" alt="">
                <img src="assets/site/img/litecoin.png" alt="">
                <a href="https://rdctoken.io/admin/" class="btn big glow-with-inner">Comprar Agora:</a>
            </div>
        </div>
    </section>
    <section class="timeline" id="timeline">
        <h3>Timeline <span class="title-ico">NO-ICO</span></h3>
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
                        <p class="timeline-item-part">Fase 1 <br><small>Após pre-venda</small></p>
                        <p class="timeline-item-info"> Total de Moedas <br>RDCT 875.000</p>
                    </div>
                </div>
                <div class="timeline-item bottom active">
                    <div class="timeline-icon"></div>
                    <div class="timeline-item-text">
                        <p class="timeline-item-part">Fase 2 <br><small>Após Fase 1</small></p>
                        <p class="timeline-item-info"> Total de Moedas <br>RDCT 1.125.000</p>
                    </div>
                </div>
                <div class="timeline-item top">
                    <div class="timeline-icon"></div>
                    <div class="timeline-item-text">
                        <p class="timeline-item-part">Fase 3 <br><small>Após Fase 2</small></p>
                        <p class="timeline-item-info"> Total de Moedas <br>RDCT 1.375.000</p>
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
                        <p>Lançamento site RDCToken.io 1.0</p>
                    </div>
                </div>
                <div class="roadmap-list-item right">
                    <div class="roadmap-list-num" data-number="2">2</div>
                    <div class="roadmap-list-info roadmap-list-info-2 right">
                        <h4>Junho/18 </h4>
                        <p>Encerramento pre-venda</p>
                    </div>
                </div>
                <div class="roadmap-list-item left">
                    <div class="roadmap-list-num" data-number="3">3</div>
                    <div class="roadmap-list-info roadmap-list-info-3 left">
                        <h4>Julho/18</h4>
                        <p>Lançamento serviços 4stake.com</p>
                    </div>
                </div>
                <div class="roadmap-list-item right">
                    <div class="roadmap-list-num" data-number="4">4</div>
                    <div class="roadmap-list-info roadmap-list-info-4 right">
                        <h4>Agosto/18</h4>
                        <p>SWAP TOKEN ERC20 -> RDCT COIN</p>
                        <p>Inicio vendas Fase 2</p>
                    </div>
                </div>
                <div class="roadmap-list-item left">
                    <div class="roadmap-list-num" data-number="5">5</div>
                    <div class="roadmap-list-info roadmap-list-info-5 left">
                        <h4>Setembro/18</h4>
                        <p>WINDOWS WALLET / LINUX WALLET / BLOCKCHAIN EXPLORER</p>
                        <p>Listagem em Exchanges</p>
                    </div>
                </div>
                <div class="roadmap-list-item right">
                    <div class="roadmap-list-num" data-number="6">6</div>
                    <div class="roadmap-list-info roadmap-list-info-6 right">
                        <h4>Outubro/18</h4>
                        <p>Lançamento de novos serviços</p>
                    </div>
                </div>
                <div class="roadmap-list-item left">
                    <div class="roadmap-list-num" data-number="7">7</div>
                    <div class="roadmap-list-info roadmap-list-info-7 left">
                        <h4>Novembro / 18</h4>
                        <p>Lançamento de sites de apoio</p>
                    </div>
                </div>
                <div class="roadmap-list-item right">
                    <div class="roadmap-list-num" data-number="8">8</div>
                    <div class="roadmap-list-info roadmap-list-info-8 right">
                        <h4>Dezembro/18</h4>
                        <p>Inicio sistema de auditoria</p>
                    </div>
                </div>
                <div class="roadmap-list-item left">
                    <div class="roadmap-list-num" data-number="9">9</div>
                    <div class="roadmap-list-info roadmap-list-info-9 left">
                        <h4>JANEIRO / 19,</h4>
                        <p>Inicio das divisões dos lucros da rede RDCT</p>
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
            <h3>F.A.Q</h3>
            <div class="questions-list">
                <div class="questions-item">
                    <div class="questions-item-header">Compre RDCT Agora?</div>
                    <div class="questions-item-content">
                        <p>Após a compra de suas RDCT aconselhamos que as mantenham em sua carteira e lembre-se que exchange não é carteira.</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">Onde posso vender RDCT?</div>
                    <div class="questions-item-content">
                        <p>Tendo em vista que a compra de uma ICO é um investimento aconselhamos você guardar o maximo de tempo… porem se optar por vender suas moedas você pode vender na troca.ninja ou em qualquer outra exchange parceira. Em breve poderá vender na exchange propria da do nosso sistema</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">Como posso participar da NO-ICO?</div>
                    <div class="questions-item-content">
                        <p>Basta fazer cadastro em nosso painel e adquirir atraves de nossa loja.</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">Qual a quantidade mínima e máxima que posso comprar?</div>
                    <div class="questions-item-content">
                        <p>Não temos limitadores de compra.</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">Qual o preço inicial da RDCT?</div>
                    <div class="questions-item-content">
                        <p>O preço é ajustado de acordo com o mercado, durante a pre-venda foi 0,10.</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">Quais formas de pagamento?</div>
                    <div class="questions-item-content">
                        <p>Podes usar qualquer moeda aceita no coinpayments.</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">Qual a expectativa de valorização da moeda?</div>
                    <div class="questions-item-content">
                        <p>A valorização e liquidez de nossa moeda se da em virtude dos projetos de apoio que temos, afinal não somos apenas um token ou moeda, somos um ativos que recebe dividendos.</p>
                    </div>
                </div>
                <div class="questions-item">
                    <div class="questions-item-header">Quando começo a receber rendimentos?</div>
                    <div class="questions-item-content">
                        <p>A partir do dia 01/01/2019 você recebe rendimentos de nossos projetos, porem, com masternode é possivel receber rendimentos diariamente.</p>
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
                <a href="#" class="windows">
                    <img src="assets/site/img/windows.png" alt="">
                </a>
                <a href="#" class="mac" download>
                    <img src="assets/site/img/mac.png" alt="">
                </a>
                <a href="https://github.com/reidocoin" class="gh" target="_blank">
                    <img src="assets/site/img/github.png" alt="">
                </a>
            </nav>
        </div>
    </section>
    <footer>
        <div class="container">
            <img src="images/rdc-logo.png" class="footer-logo" style="float: left" width="230">
            <nav class="footer-navigation" style="float: left">
                <a href="#why-rdctoken">PORQUE RDCTOKEN?</a>
                <a href="#">O QUE É RDCT?</a>
                <a href="#coin-distribution">DISTRIBUIÇÃO</a>
                <a href="#timeline">ROAD MAP</a>
                <!--<a href="#questions">F.A.Q</a>-->
            </nav>
            
        </div>
    </footer>
<script src="assets/site/js/jquery.js"></script>
<script src="assets/site/js/build.js"></script>

</body>


</html>
