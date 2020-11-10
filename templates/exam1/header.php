<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
        <title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?
        use Bitrix\Main\Page\Asset;
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/reset.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.css");
        Asset::getInstance()->addString('<link rel="icon" type="image/vnd.microsoft.icon"  href="'.SITE_TEMPLATE_PATH.'/img/favicon.ico">'); 
        $APPLICATION->ShowHead();
     ?>

    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
</head>

<body>
    <div id="page-wrapper">
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                	
<? if((date('H')>=9)and(date('H')<=18)){ ?>
<?
$APPLICATION->IncludeFile(
	SITE_TEMPLATE_PATH."/include/phone.php",
	Array(),
	Array("MODE"=>"html")
);
?>
 <?
        } else {?><?

$APPLICATION->IncludeFile(
	SITE_TEMPLATE_PATH."/include/mail.php",
	Array(),
	Array("MODE"=>"html")
);
?><?}
        	?>

                    
                </div>
                <div class="actions-block">
                    <form action="/" class="main-frm-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                    <nav class="menu-block">
                        <ul>
                            <li class="att popup-wrap">
                                <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
                                <form action="/" class="frm-login popup-block">
                                    <div class="frm-title">Войти на сайт</div>
                                    <a href="" class="btn-close">Закрыть</a>
                                    <div class="frm-row"><input type="text" placeholder="Логин"></div>
                                    <div class="frm-row"><input type="password" placeholder="Пароль"></div>
                                    <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
                                    <div class="frm-row">
                                        <div class="frm-chk">
                                            <input type="checkbox" id="login">
                                            <label for="login">Запомнить меня</label>
                                        </div>
                                    </div>
                                    <div class="frm-row"><input type="submit" value="Войти"></div>
                                </form>
                            </li>
                            <li><a href="">Зарегистрироваться</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
        <nav class="nav">
            <div class="inner-wrap">
                <div class="menu-block popup-wrap">
                    <a href="" class="btn-menu btn-toggle"></a>
                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "horizontal",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
                    
                        
                    <div class="menu-overlay"></div>
                </div>
            </div>
        </nav>
        <!-- /nav -->
          <? if(GetPagePath()!="/"){
        ?>
        <!-- breadcrumbs -->
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "template1", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>
        
        <!-- /breadcrumbs -->
        <?
        } ?>
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">
      
        <? if(GetPagePath()!="/"){
        ?>
            <header>
                <h1>Заголlddовок страницы</h1>
            </header>
            <hr>
        <?
        } ?>