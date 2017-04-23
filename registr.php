<!DOCTYPE html>
<html>
	<head>
		<title>Интернет портал объявлений</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="###" />
		<meta name="google-site-verification" content="yWTE9RXDMDyzr9Pb3UW4zQv3y4at_IsG73QFowuogVI" />
        <meta property="fb:app_id" content="220833171328492" />
		<link rel="apple-touch-icon" href="./files/favicon.png" />
		<meta property="og:image" content="https://skelbiu-static.dgn.lt/static/images/fbBg.jpg" />
        <link rel="canonical" href="https://www.skelbiu.lt/users/signup" />
		<link rel="alternate" href="https://ru.skelbiu.lt/users/signup" hreflang="ru" />
		<link rel="stylesheet" type="text/css" href="https://skelbiu-static.dgn.lt/static/vendor/font-awesome/css/font-awesome.css?v=SK-SK-JOB1-3292"/>
        <link rel="stylesheet" type="text/css" href="https://skelbiu-static.dgn.lt/static/css/common.css?v=SK-SK-JOB1-3292"/>
        <link rel="stylesheet" type="text/css" href="./files/css/login.css"/>
        <!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<![endif]-->
		<link REL="SHORTCUT ICON" HREF="/files/favicon.ico" />
		<script type="text/javascript" src="reg.js"></script>
		<script type="text/javascript" src="jquery-3.1.0.min.js"></script>

	</head>
	<body>
	

	<div id="message-container"></div>

	<div id="body" style="margin: 0 auto;">
		<div id="layout">
						

<div id="logoAndMenu">
            <a href="index.php" id="logoarea"><img src="./files/logo.png" alt="logo" /></a>
                <a id="siteSlogan" href="/nemokami-skelbimai"><span>БЕСПЛАТНЫЕ ОБЪЯВЛЕНИЯ!</span></a>
        <div id="topMenuNav">
        
        <ul id="mainTopMenu">
            <li><a href="login.php"  rel="nofollow">Войти</a></li>
            <li><a href="registr.php"  rel="nofollow">Зарегистрироваться</a></li>
		</ul>
    </div>
</div>
    <form action="###" id="searchForm">
        <div id="mainSearchArea">
            <div id="mainSearchAreaControls">
                <div id="addNewItemArea">
                <a href="/obliaviat/" id="addNewItem"><i></i> Подай объявление</a>
                </div>
                <input type="text" name="keywords" placeholder="Поиск по сайту" value="" id="searchKeyword" maxlength="50">
				<button name="submit_bn" type="submit" id="searchButton"><i class="fa fa-search"></i></button>
                <div id="selectboxCategory">
                    <ul>
						<li data-value="0"><a class="search_select_category" href="###" data-category="0" data-title="Все объявления">Все объявления</a></li>
						<li data-value="1"><a class="search_select_category" data-category="1" data-title="Транспорт" href="###">Транспорт</a></li>
						<li data-value="2"><a class="search_select_category" data-category="2" data-title="Недвижимость" href="###">Недвижимость</a></li>
						<li data-value="3"><a class="search_select_category" data-category="3" data-title="Товары для дома" href="###">Товары для дома</a></li>
						<li data-value="4"><a class="search_select_category" data-category="4" data-title="Техника" href="###">Техника</a></li>
						<li data-value="5"><a class="search_select_category" data-category="5" data-title="Развлечения" href="###">Развлечения</a></li>
                    </ul>
                    <span>Все объявления</span> <i class="fa fa-caret-down"></i>
                </div>
                <div id="selectboxCities"><span>По России</span><i class="fa fa-caret-down"></i></div>
            </div>
        </div>
        
        <input type="hidden" name="cities" value="0" id="searchInCities" />
        <input type="hidden" name="distance" value="0" id="searchDistance" />
        <input type="hidden" name="mainCity" value="0" id="searchMainCity" />
        <input type="hidden" name="search" value="1" />
        <input type="hidden" name="category_id" value="0" id="categoryField" />
        <input type="hidden" name="type" id="type" value="0" />
        <input type="hidden" name="user_type" value="0" id="user_type" />
        <input type="hidden" name="ad_since_min" value="0" id="ad_since_min" />
        <input type="hidden" name="ad_since_max" value="0" id="ad_since_max" />
        <input type="hidden" name="visited_page" value="" id="visited_page" />
                <input type="hidden" name="detailsSearch" value="0" id="detailsSearchOn" />
    </form>
			<div id="container">
				<div id="contentArea">
                    
<div id="register-form">
    <h2>Регистрация</h2>
    <!--<span id="register-slogan">Я согласен <a href="###" target="_blank">с условиями пользовательского соглашения</a> </span>-->
    <form method="post" style="display: inline-block; width: 300px; margin-bottom: 40px; margin-right: -1px;" id="registrationForm" autocomplete="off">
        <div class="group" >
            <input type="text" name="login"  size="25" tabindex="2" maxlength="50" class="material-input" required autocomplete="off" id="login" />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Логин</label>
            <i></i>
        </div>
		
		<div class="group" >
            <input type="text" name="name"  size="25" tabindex="2" maxlength="50" class="material-input" required autocomplete="off" id="name" />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Ф.И.О.</label>
            <i></i>
        </div>
		
		<div class="group" >
            <input type="text" name="phone"  size="25" tabindex="2" maxlength="50" class="material-input" required autocomplete="off" id="phone" />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Телефон</label>
            <i></i>
        </div>
		
		<div class="group" >
            <input type="text" name="email"  size="25" tabindex="2" maxlength="50" class="material-input" required autocomplete="off" id="email" />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Email</label>
            <i></i>
        </div>
		
        <div class="group">
            <input type="password" name="password"  size="25" tabindex="2" maxlength="30" class="material-input" required autocomplete="off" id="password" />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Пароль</label>
            <i></i>
        </div>
		
		<div class="group">
            <input type="password" name="confPassword" size="25" tabindex="2" maxlength="30" class="material-input" required autocomplete="off" id="confPassword" />
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Подтверждение пароля</label>
            <i></i>
        </div>

        <div id="submitRegForm" class="mb-10">
            <input type="submit" value="Регистрация" alt="Зарегистрироваться"  tabindex="6" id="login-button" onClick="toReg()">
        </div>

    </form>
</div>
<script type="text/javascript">
    var badFilledTxt = "Это поле является обязательным.";
</script>                </div>
				<div class="LineHeight20"></div>
			</div>
		<div id="footerAreaSmall" class="otp">
            <div id="footerDataSmall">
                    <div id="footerHelpLine">Сайт в разработке</div>
                    <div id="footerWorkTime"></div>
            </div>
            
			<div id="footerMenuSmall" class="otp">
                
            </div>

            <div id="ourSites" class="otp">
                <div id="diginet_logo">
                    <a class="link-diginet" href="###" target="_blank">
                        <span class="digil_l digil_g">J</span><span class="digil_l digil_y">O</span><span class="digil_l digil_b">K</span><span class="digil_l digil_r">E</span><span class="digil_l">R</span><span class="digil_l">I</span><span class="digil_l">T</span><br>
                        <div class="digil_c"></div>
                    </a>
                </div>
            </div>
            <div class="cl"></div>

        </div>
    


<script src="https://tags.crwdcntrl.net/c/9933/cc_af.js?ns=_cc9933" id="LOTCC_9933" async="async"></script>


<noscript>
    <img src="https://pubads.g.doubleclick.net/activity;dc_iu=/146733436/DFPAudiencePixel;ord=1?" width=1 height=1 border=0/>
</noscript>        </div>
		<div class="clear"></div>
	</div>

	
            <script src="https://skelbiu-static.dgn.lt/static/vendor/jquery-1.8.2.min/index.js?v=SK-SK-JOB1-3292" type="text/javascript"></script>
            <script src="https://skelbiu-static.dgn.lt/static/vendor/devbridge-autocomplete/dist/jquery.autocomplete.min.js?v=SK-SK-JOB1-3292" type="text/javascript"></script>
            <script src="https://skelbiu-static.dgn.lt/static/js/header/autocomplete.js?v=SK-SK-JOB1-3292" type="text/javascript"></script>
            <script src="https://skelbiu-static.dgn.lt/static/js/fancybox.js?v=SK-SK-JOB1-3292" type="text/javascript"></script>
            <script src="https://skelbiu-static.dgn.lt/static/js/lazyload.js?v=SK-SK-JOB1-3292" type="text/javascript"></script>
            <script src="https://skelbiu-static.dgn.lt/static/js/main.js?v=SK-SK-JOB1-3292" type="text/javascript"></script>
            <script src="https://skelbiu-static.dgn.lt/static/js/tinybox.js?v=SK-SK-JOB1-3292" type="text/javascript"></script>
            <script src="https://skelbiu-static.dgn.lt/static/js/messages/Messages.js?v=SK-SK-JOB1-3292" type="text/javascript"></script>
    
                        <script src="https://skelbiu-static.dgn.lt/static//js/mobile/signup.js?v=SK-SK-JOB1-3292" type="text/javascript"></script>
            
    <script type="text/javascript">
        jQuery.noConflict();
    </script>

    
<script type="text/javascript">
    <!--//--><![CDATA[//><!--
    var pp_gemius_identifier = 'bJiaqFx025Yb.k8LgeEeRtWZ74G1M2eT.85BGRdic1T.Z7';

    // lines below shouldn't be edited
    function gemius_pending(i) { window[i] = window[i] || function() {var x = window[i+'_pdata'] = window[i+'_pdata'] || []; x[x.length]=arguments;};};
    gemius_pending('gemius_hit'); gemius_pending('gemius_event'); gemius_pending('pp_gemius_hit'); gemius_pending('pp_gemius_event');
    (function(d,t) {try {var gt=d.createElement(t),s=d.getElementsByTagName(t)[0],l='http'+((location.protocol=='https:')?'s':''); gt.setAttribute('async','async');
        gt.setAttribute('defer','defer'); gt.src=l+'://galt.hit.gemius.pl/xgemius.js'; s.parentNode.insertBefore(gt,s);} catch (e) {}})(document,'script');
    //--><!]]>
</script>
    <script type='text/javascript'>
    headerAutocomplete.setCategoryHint("Поиск в категории");
    indexMain.setAllCitiesText('Вся Литва');
    indexMain.setTitlePage(0);
            indexMain.setSearchRefreshValue(0);
        var currency = '&euro;';
    var site = 'SKELBIU';
    var level_price = '0.75';
    var bold_price = '0.145';
</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-8203247-1', 'auto');

    
    ga('require', 'displayfeatures');
            ga('send', 'pageview');
    
    ga('create', 'UA-78164529-2', 'auto', {
        'name': 'master',
        'allowLinker': true
    });
    ga('master.require', 'linker');
    ga('master.linker:autoLink', ['15min.lt', 'aruodas.lt', 'versliukai.lt', 'autoplius.lt', 'kainos.lt', 'cvbankas.lt', 'ntzemelapis.lt']);
    ga('master.send', 'pageview');
</script>

	
	    	</body>
</html>
