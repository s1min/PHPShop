<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/wancezy/JDshop/Public/Home/css/iconfont.css">
    <link rel="stylesheet" href="/wancezy/JDshop/Public/Home/css/base.css">
    <link rel="stylesheet" href="/wancezy/JDshop/Public/Home/css/index.css">
    <style>
        .current {
            background-color: #db192a;
        }
    </style>
    <script src="/wancezy/JDshop/Public/Home/js/jquery-1.11.1.min.js"></script>
    <script>
        $(function () {

            // 轮播图
            var timer, timer2;
            var _this;
            var c = 7;

            $("#main-col2 .slider-top-img").mouseenter(function () {
                $("#main #main-col2 #prev").css({"display" : "block"});
                $("#main #main-col2 #next").css({"display" : "block"});
                // console.log(c);
            }).mouseleave(function () {
                $("#main-col2 #prev").css({"display" : "none"});
                $("#main-col2 #next").css({"display" : "none"});
            });

            function run() {
                c++;
                if (c == 8) {
                    c = 0;
                }

                $("#main-col2 .img-switch li").eq(c).fadeIn(1000).siblings("li").fadeOut(1000);
                $("#main-col2 .dot-switch li").eq(c).addClass("current").siblings("li").removeClass("current");
            }
            timer = setInterval(run,2000);

            $("#main-col2 .dot-switch li").mouseenter(function () {
                _this = $(this).index();    // 因为在timer2里的this指向的就不是$("#box ol li")了，所以先把$(this).index()赋给-this
                clearInterval(timer);
                timer2 = setTimeout(function () {
                    c = -this;
                    $("#main-col2 .dot-switch li").eq(c).addClass("current").siblings("li").removeClass("current");
                    $("#main-col2 .img-switch li").eq(c).stop().fadeIn(1000).siblings("li").fadeOut(1000);
                    clearInterval(timer);
                },500);
            });

            $("#main-col2 .dot-switch li").mouseleave(function () {
                clearInterval(timer);
                clearTimeout(timer2);
                timer = setInterval(run,2000);
            });

            $("#prev").mouseenter(function () {
                clearInterval(timer);
            }).mouseleave(function () {
                timer = setInterval(run,2000);
            });

            $("#prev").click(function () {
                c = c - 1;
                if (c == -1) {
                    c = 7
                }
                $("#main-col2 .dot-switch li").eq(c).addClass("current").siblings("li").removeClass("current");
                $("#main-col2 .img-switch li").eq(c).stop().fadeIn(1000).siblings("li").fadeOut(1000);
            });

            $("#next").mouseenter(function () {
                clearInterval(timer);
            }).mouseleave(function () {
                timer = setInterval(run,2000);
            });

            $("#next").click(function () {
                c = c + 1;
                if (c == 8) {
                    c = 0
                }
                $("#main-col2 .dot-switch li").eq(c).addClass("current").siblings("li").removeClass("current");
                $("#main-col2 .img-switch li").eq(c).stop().fadeIn(1000).siblings("li").fadeOut(1000);
            });



            // 右边tab栏切换
            $("#main-col3 .news-tab-head a").eq(0).mouseenter(function () {
                $("#main-col3 .news-tab-head .news-tab-head-active").animate({
                    "left" : "-2px"
                },300);
                $("#main #main-col3 .news .content-notice").css({"display" : "none"});
                $("#main #main-col3 .news .content-sale").css({"display" : "block"});

            });
            $("#main-col3 .news-tab-head a").eq(1).mouseenter(function () {
                $("#main-col3 .news-tab-head .news-tab-head-active").animate({
                    "left" : "50px"
                },300);
                $("#main #main-col3 .news .content-sale").css({"display" : "none"});
                $("#main #main-col3 .news .content-notice").css({"display" : "block"});
            });

        });

    </script>
</head>
<body class="index">
<!--头部广告开始-->
<div id="J_event">
    <div class="grid-c1" style="position: relative;">
        <a href="" id="J_event_lk"></a>
        <div id="J_event_close">×</div>
    </div>
</div>
<!--头部广告结束-->

<!--头部导航开始-->
<div id="shortcut">
    <div class="w">
        <ul class="fl">
            <li id="ttbar-mycity" class="dorpdown">
                <div class="dt cw-icon ui-areamini-text-wrap">
                    <span class="iconfont icon-address"></span>
                    <a href="" class="ui-areamini-text">北京</a>
                </div>
                <div class="dd dorpdown-layer">
                    <div class="dd-spacer"></div>
                    <div class="ui-areamini-content-wrap">
                        <div class="ui-areamini-content">
                            <div class="ui-areamini-list">
                                <div class="ui-areamini-item">
                                    <a href="" class="ui-areamini-lk selected">北京</a>
                                </div>
                                <div class="ui-areamini-item">
                                    <a href="" class="ui-areamini-lk">上海</a>
                                </div>
                                <div class="ui-areamini-item">
                                    <a href="" class="ui-areamini-lk">天津</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="fr">
            <li class="fore1" id="ttbar-login">
                <?php if (!$_SESSION['user']) { ?>
                    <a href="<?php echo u('login/index');?>" class="link-login">你好,请登录</a>&nbsp;&nbsp;
                    <a href="<?php echo u('register/index');?>" class="link-regist style-red">免费注册</a>
                <?php } else { ?>
                <div class="dt cw-icon">
                    <i class="icon-plus-nickname"></i>
                    <i class="ci-right">
                        <s>◇</s>
                    </i>
                    <a href="" class="nickname">Vic</a>
                </div>
                <div class="dd dorpdown-layer">
                    <div class="dd-spacer"></div>
                    <div class="userinfo">
                        <div class="u-pic">
                            <a href="">
                                <img src="../images/myOrder/no-img_mid_.jpg" alt="">
                            </a>
                        </div>
                        <div class="u-plus">
                            <a href="" class="link-logout">退出</a>
                            <a href="" class="icon-plus-dropdown"></a>
                        </div>
                        <div class="u-msg">
                            <a href="">试用PLUS会员领免运费券&gt;</a>
                        </div>
                    </div>
                    <div class="badge-list">
                        <a href="javascript:void(0);" class="badge-list-prev">&lt;</a>
                        <div class="u-badges">
                            <div class="badge-panel-main">
                                <div class="badge-panel fore1">
                                    <a href="">
                                        <i></i>
                                        <p class="u-name">免费试用</p>
                                    </a>
                                </div>
                                <div class="badge-panel fore2">
                                    <a href="">
                                        <i></i>
                                        <p class="u-name">自营运费补贴</p>
                                    </a>
                                </div>
                                <div class="badge-panel fore3">
                                    <a href="">
                                        <i></i>
                                        <p class="u-name">售后服务</p>
                                    </a>
                                </div>
                                <div class="badge-panel fore4">
                                    <a href="">
                                        <i></i>
                                        <p class="u-name">评价奖励</p>
                                    </a>
                                </div>
                                <div class="badge-panel fore5">
                                    <a href="">
                                        <i></i>
                                        <p class="u-name">会员特价</p>
                                    </a>
                                </div>
                                <div class="badge-panel fore8">
                                    <a href="">
                                        <i></i>
                                        <p class="u-name">装机服务</p>
                                    </a>
                                </div>
                                <div class="badge-panel fore6">
                                    <a href="">
                                        <i></i>
                                        <p class="u-name">生日礼包</p>
                                    </a>
                                </div>
                                <div class="badge-panel fore7">
                                    <a href="">
                                        <i></i>
                                        <p class="u-name">专享礼包</p>
                                    </a>
                                </div>
                                <div class="badge-panel fore9">
                                    <a href="">
                                        <i></i>
                                        <p class="u-name">贵宾专线</p>
                                    </a>
                                </div>
                                <div class="badge-panel fore10">
                                    <a href="">
                                        <i></i>
                                        <p class="u-name">运费券</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="badge-list-next">&gt;</a>
                    </div>
                </div>
                <?php } ?>
            </li>
            <li class="spacer"></li>
            <li class="fore2">
                <div class="dt">
                    <a href="./view/myOrder.html">我的订单</a>
                </div>
            </li>
            <li class="spacer"></li>
            <li class="fore3 dorpdown" id="ttbar-myjd">
                <div class="dt cw-icon">
                    <a href="">我的京东</a>
                    <span class="iconfont icon-arrowDown"></span>
                </div>
                <div class="dd dorpdown-layer">
                    <div class="dd-spacer"></div>
                    <div class="myjdlist">
                        <div class="fore1">
                            <div class="item">
                                <a href="">待处理订单</a>
                            </div>
                            <div class="item">
                                <a href="">返修退换货</a>
                            </div>
                            <div class="item">
                                <a href="">降价商品</a>
                            </div>
                        </div>
                        <div class="fore2">
                            <div class="item">
                                <a href="">消息</a>
                            </div>
                            <div class="item">
                                <a href="">我的问答</a>
                            </div>
                            <div class="item">
                                <a href="">我的关注</a>
                            </div>
                        </div>
                    </div>
                    <div class="myjdlist myjdlist-2">
                        <div class="fore1">
                            <div class="item">
                                <a href="">我的京豆</a>
                            </div>
                            <div class="item">
                                <a href="">京东白条</a>
                            </div>
                        </div>
                        <div class="fore2">
                            <div class="item">
                                <a href="">我的优惠券</a>
                            </div>
                            <div class="item">
                                <a href="">我的理财</a>
                            </div>
                        </div>
                    </div>
                </div>

            </li>
            <li class="spacer"></li>
            <li class="fore4">
                <div class="dt">
                    <a href="">京东会员</a>
                </div>
            </li>
            <li class="spacer"></li>
            <li class="fore5">
                <div class="dt">
                    <a href="">企业采购</a>
                </div>
            </li>
            <li class="spacer"></li>
            <li class="fore8 dorpdown" id="ttbar-serv">
                <div class="dt cw-icon">
                    <a href="javascript:;">客户服务</a>
                    <span class="iconfont icon-arrowDown"></span>
                </div>
                <div class="dd dorpdown-layer">
                    <div class="dd-spacer"></div>
                    <div class="item-client">客户</div>
                    <div class="item">
                        <a href="">帮助中心</a>
                    </div>
                    <div class="item">
                        <a href="">售后服务</a>
                    </div>
                    <div class="item">
                        <a href="">在线客服</a>
                    </div>
                    <div class="item">
                        <a href="">意见建议</a>
                    </div>
                    <div class="item">
                        <a href="">电话客服</a>
                    </div>
                    <div class="item">
                        <a href="">客服邮箱</a>
                    </div>
                    <div class="item">
                        <a href="">金融咨询</a>
                    </div>
                    <div class="item">
                        <a href="">售全球客服</a>
                    </div>
                    <div class="item-business">商户</div>
                    <div class="item">
                        <a href="">合作招商</a>
                    </div>
                    <div class="item">
                        <a href="">京东商学院</a>
                    </div>
                    <div class="item">
                        <a href="">商家后台</a>
                    </div>
                    <div class="item">
                        <a href="">京麦工作台</a>
                    </div>
                    <div class="item">
                        <a href="">商家帮助</a>
                    </div>
                    <div class="item">
                        <a href="">规则平台</a>
                    </div>
                </div>
            </li>
            <li class="spacer"></li>
            <li class="fore9 dorpdown" id="ttbar-navs" style="z-index: 22;">
                <div class="dt cw-icon">
                    <a href="javascript:;">网站导航</a>
                    <span class="iconfont icon-arrowDown"></span>
                </div>
                <div class="dd dorpdown-layer">
                    <div class="dd-spacer"></div>
                    <dl class="fore1">
                        <dt>特色主题</dt>
                        <dd>
                            <div class="item">
                                <a href="">品牌头条</a>
                            </div>
                            <div class="item">
                                <a href="">发现好货</a>
                            </div>
                            <div class="item">
                                <a href="">京东预售</a>
                            </div>
                            <div class="item">
                                <a href="">京东金融</a>
                            </div>
                            <div class="item">
                                <a href="">京东试用</a>
                            </div>
                            <div class="item">
                                <a href="">港澳售</a>
                            </div>
                            <div class="item">
                                <a href="">优惠券</a>
                            </div>
                            <div class="item">
                                <a href="">闪购</a>
                            </div>
                            <div class="item">
                                <a href="">京东会员</a>
                            </div>
                            <div class="item">
                                <a href="">秒杀</a>
                            </div>
                            <div class="item">
                                <a href="">定期送</a>
                            </div>
                            <div class="item">
                                <a href="">装机大师</a>
                            </div>
                            <div class="item">
                                <a href="">新奇特</a>
                            </div>
                            <div class="item">
                                <a href="">企业金融服务</a>
                            </div>
                            <div class="item">
                                <a href="">礼品购</a>
                            </div>
                            <div class="item">
                                <a href="">智能馆</a>
                            </div>
                            <div class="item">
                                <a href="">0元评测</a>
                            </div>
                            <div class="item">
                                <a href="">In货推荐</a>
                            </div>
                            <div class="item">
                                <a href="">北京老字号</a>
                            </div>
                            <div class="item">
                                <a href="">买什么</a>
                            </div>
                        </dd>
                    </dl>
                    <dl class="fore2">
                        <dt>行业频道</dt>
                        <dd>
                            <div class="item">
                                <a href="">服装城</a>
                            </div>
                            <div class="item">
                                <a href="">家用电器</a>
                            </div>
                            <div class="item">
                                <a href="">电脑办公</a>
                            </div>
                            <div class="item">
                                <a href="">手机</a>
                            </div>
                            <div class="item">
                                <a href="">美妆馆</a>
                            </div>
                            <div class="item">
                                <a href="">食品</a>
                            </div>
                            <div class="item">
                                <a href="">智能数码</a>
                            </div>
                            <div class="item">
                                <a href="">母婴</a>
                            </div>
                            <div class="item">
                                <a href="">家装城</a>
                            </div>
                            <div class="item">
                                <a href="">运动户外</a>
                            </div>
                            <div class="item">
                                <a href="">整车</a>
                            </div>
                            <div class="item">
                                <a href="">图书</a>
                            </div>
                            <div class="item">
                                <a href="">农资频道</a>
                            </div>
                            <div class="item">
                                <a href="">京东智能</a>
                            </div>
                            <div class="item">
                                <a href="">玩3C</a>
                            </div>
                        </dd>
                    </dl>
                    <dl class="fore3">
                        <dt>生活服务</dt>
                        <dd>
                            <div class="item">
                                <a href="" >京东众筹</a>
                            </div>
                            <div class="item">
                                <a href="">白条</a>
                            </div>
                            <div class="item">
                                <a href="">京东金融App</a>
                            </div>
                            <div class="item">
                                <a href="">京东小金库</a>
                            </div>
                            <div class="item">
                                <a href="">理财</a>
                            </div>
                            <div class="item">
                                <a href="">话费</a>
                            </div>
                            <div class="item">
                                <a href="">旅行</a>
                            </div>
                            <div class="item">
                                <a href="">彩票</a>
                            </div>
                            <div class="item">
                                <a href="">游戏</a>
                            </div>
                            <div class="item">
                                <a href="">机票酒店</a>
                            </div>
                            <div class="item">
                                <a href="">电影票</a>
                            </div>
                            <div class="item">
                                <a href="">水电煤</a>
                            </div>
                            <div class="item">
                                <a href="">京东到家</a>
                            </div>
                            <div class="item">
                                <a href="">京东微联</a>
                            </div>
                            <div class="item">
                                <a href="">京东众测</a>
                            </div>
                        </dd>
                    </dl>
                    <dl class="fore4">
                        <dt>更多精选</dt>
                        <dd>
                            <div class="item">
                                <a href="">京东社区</a>
                            </div>
                            <div class="item">
                                <a href="">京东通信</a>
                            </div>
                            <div class="item">
                                <a href="">在线读书</a>
                            </div>
                            <div class="item">
                                <a href="">京东E卡</a>
                            </div>
                            <div class="item">
                                <a href="">智能社区</a>
                            </div>
                            <div class="item">
                                <a href="">游戏社区</a>
                            </div>
                            <div class="item">
                                <a href="">京友邦</a>
                            </div>
                            <div class="item">
                                <a href="">合作招商</a>
                            </div>
                            <div class="item">
                                <a href="">企业采购</a>
                            </div>
                            <div class="item">
                                <a href="">服务市场</a>
                            </div>
                            <div class="item">
                                <a href="">乡村招募</a>
                            </div>
                            <div class="item">
                                <a href="">校园加盟</a>
                            </div>
                            <div class="item">
                                <a href="">办公生活馆</a>
                            </div>
                            <div class="item">
                                <a href="">知识产权维权</a>
                            </div>
                            <div class="item">
                                <a href="">English Site</a>
                            </div>
                        </dd>
                    </dl>
                </div>
            </li>
            <li class="spacer"></li>
            <li class="fore10 mobile" id="J_mobile">
                <div class="dt mobile-txt">手机京东</div>
                <div class="mobile-static">
                    <div class="mobile-static-qrcode"></div>
                </div>
                <div class="mobile-pop">
                    <div class="mobile-pop-item">
                        <div class="mobile-pop-qrcode mobile-pop-qrcode-1">
                            <img src="/wancezy/JDshop/Public/Home/images/index/qrcode-1.png" alt="">
                        </div>
                        <div class="mobile-pop-info">
                            <h5 class="mobile-pop-tit">
                                <a href="">手机京东</a>
                            </h5>
                            <p class="mobile-pop-value">新人专享礼包</p>
                            <p class="mobile-pop-device">
                                <a class="mobile-pop-device-lk mobile-pop-device-ios" href="">APP Store</a>
                                <a class="mobile-pop-device-lk mobile-pop-device-and" href="">安卓市场</a>
                                <a class="mobile-pop-device-lk mobile-pop-device-pad" href="">APP Store</a>
                            </p>
                        </div>
                    </div>
                    <div class="mobile-pop-item">
                        <div class="mobile-pop-qrcode mobile-pop-qrcode-2">
                            <img src="/wancezy/JDshop/Public/Home/images/index/qrcode-2.jpg" alt="">
                        </div>
                        <div class="mobile-pop-info">
                            <h5 class="mobile-pop-tit">关注京东微信</h5>
                            <p class="mobile-pop-value">
                                新人专享礼包
                                <br>
                                新粉最高180元
                                <br>
                                惊喜礼包
                            </p>
                        </div>
                    </div>
                    <div class="mobile-pop-item">
                        <div class="mobile-pop-qrcode mobile-pop-qrcode-1">
                            <img src="/wancezy/JDshop/Public/Home/images/index/qrcode-3.jpg" alt="">
                        </div>
                        <div class="mobile-pop-info">
                            <h5 class="mobile-pop-tit">
                                <a href="">京东金融客户端</a>
                            </h5>
                            <p class="mobile-pop-value">新人专享128元大礼包</p>
                            <p class="mobile-pop-device">
                                <a class="mobile-pop-device-lk mobile-pop-device-ios" href="">APP Store</a>
                                <a class="mobile-pop-device-lk mobile-pop-device-and" href="">安卓市场</a>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--头部导航结束-->

<!--头部开始-->
<div id="header">
    <div class="w">
        <div id="logo" class="logo">
            <h1 class="logo-tit">
                <a href="" class="logo-tit-lk">京东</a>
            </h1>
        </div>
        <div id="search">
            <div class="search-m">
                <div class="form">
                    <input type="text" name="" id="keyword" class="text" placeholder="小米手机">
                    <span class="photo-search-btn">
                        <form id="search-img-upload" action="">
                            <span class="upload-bg"></span>
                            <input type="file" name="file" id="" class="upload-trigger">
                        </form>
                    </span>
                    <button class="button">
                        <span class="iconfont icon-search"></span>
                    </button>
                </div>
            </div>
        </div>
        <div id="settleup" class="dorpdown">
            <div class="cw-icon">
                <span class="iconfont icon-cart"></span>
                <a href="">我的购物车</a>
                <span class="ci-count" id="shopping-amount">0</span>
            </div>
            <div class="dorpdown-layer">
                <div class="cart-pop">
                    <div class="cart-empty">
                        <i class="cart-empty-img"></i>购物车中还没有商品,赶紧选购吧
                    </div>
                </div>
            </div>

        </div>
        <div id="hotwords">
            <a href="" class="style-red">家电0元约</a>
            <a href="">满160减60</a>
            <a href="">农用物资</a>
            <a href="">儿童凉鞋</a>
            <a href="">品质家电</a>
            <a href="">足浴盆木桶</a>
            <a href="">自动喂食机</a>
            <a href="">买二免一</a>
        </div>
        <div id="navitems">
            <ul id="navitems_group1">
                <li class="fore1"><a href="">秒杀</a></li>
                <li class="fore2"><a href="">优惠券</a></li>
                <li class="fore3"><a href="">闪购</a></li>
                <li class="fore4"><a href="">拍卖</a></li>
            </ul>
            <div class="spacer"></div>
            <ul id="navitems_group2">
                <li class="fore1"><a href="">服装城</a></li>
                <li class="fore2"><a href="">京东超市
                    <img style="position: absolute; top: 0;right: -30px; margin-left: 0px; width: 30px; height: 18px;" src="/wancezy/JDshop/Public/Home/images/header/duanwujie.png">
                </a></li>
                <li class="fore3"><a href="">生鲜</a></li>
                <li class="fore4"><a href="">全球购</a></li>
            </ul>
            <div class="spacer"></div>
            <ul id="navitems_group3">
                <li class="fore1"><a href="">京东金融</a></li>
            </ul>
        </div>
        <div id="treasure">
            <a href="" id="J_promo_lk" class="promo-lk"></a>
        </div>
    </div>
</div>
<!--头部结束-->

<!--中间轮播图,二级菜单部分开始-->
<div id="main" class="fs">
    <div class="grid-c1 fs-inner">
        <!--左边二级菜单-->
        <div class="fs-col1">
            <div class="cate">
                <ul class="cate-menu">
                    <?php if(is_array($levelData)): foreach($levelData as $key=>$v): ?><li class="cate-menu-item">
                        <?php if(is_array($v["_data"])): foreach($v["_data"] as $key=>$vv): if($vv['c_name'] == end($v['_data'])['c_name']): ?><a href="<?php echo u('list/index',['c_id'=>$v['c_id']]);?>" class="cate-menu-lk"><?php echo ($vv['c_name']); ?></a>
                                <?php else: ?>
                                <a href="<?php echo u('list/index',['c_id'=>$v['c_id']]);?>" class="cate-menu-lk"><?php echo ($vv['c_name']); ?></a>
                                <span class="cate-menu-line">/</span><?php endif; endforeach; endif; ?>

                        <div class="cate-pop">
                            <div class="cate-part">
                                <div class="cate-part-col1">
                                    <div class="cate-channel">
                                        <?php if(is_array($v["_data"])): foreach($v["_data"] as $key=>$vv): ?><a href="<?php echo u('List/index',['c_id'=>$vv['c_id']]);?>" class="cate-channel-lk">
                                            <?php echo ($vv['c_name']); ?><span class="cate-channel-arrow"></span>
                                        </a><?php endforeach; endif; ?>
                                    </div>
                                    <div class="cate-detail">
                                        <?php if(is_array($v["_data"])): foreach($v["_data"] as $key=>$vv): ?><dl class="cate-detail-item cate-detail-item1">
                                            <dt class="cate-detail-tit">
                                                <a href="<?php echo u('List/index',['c_id'=>$vv['c_id']]);?>" class="cate-detail-tit-lk">
                                                    <?php echo ($vv['c_name']); ?><span class="cate-detail-tit-arrow"></span>
                                                </a>
                                            </dt>
                                            <dd class="cate-detail-con">
                                                <?php if(is_array($vv["_data"])): foreach($vv["_data"] as $key=>$vvv): ?><a href="<?php echo u('List/index',['c_id'=>$vvv['c_id']]);?>" class="cate-detail-con-lk"><?php echo ($vvv['c_name']); ?></a><?php endforeach; endif; ?>
                                            </dd>
                                        </dl><?php endforeach; endif; ?>
                                    </div>
                                </div>
                                <div class="cate-part-col2">
                                    <div class="cate-brand">
                                        <?php if(is_array($brandData)): foreach($brandData as $key=>$v): ?><a href="" class="cate-brand-lk">
                                            <img width="83" height="35" src="<?php echo ($v['b_logo']); ?>" alt="">
                                        </a><?php endforeach; endif; ?>

                                    </div>
                                    <div class="cate-promotion">
                                        <a href="" class="cate-promotion">
                                            <img src="/wancezy/JDshop/Public/Home/images/middle/promotion-1.jpg!q90" alt="">
                                        </a>
                                        <a href="" class="cate-promotion">
                                            <img src="/wancezy/JDshop/Public/Home/images/middle/promotion-1.jpg!q90" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
        <!--中间轮播图-->
        <div id="main-col2" class="fs-col2">
            <div class="slider">
                <div class="slider-main slider-top-img">
                    <ul class="slider-list img-switch">
                        <li class="slider-item">
                            <a href="" class="slider-item-lk">
                                <img src="/wancezy/JDshop/Public/Home/images/middle/slider/slider-1.jpg" alt="" class="slider-item-img">
                                <i class="mod-actmark mod-actmark-focus"></i>
                            </a>
                        </li>
                        <li class="slider-item">
                            <a href="" class="slider-item-lk">
                                <img src="/wancezy/JDshop/Public/Home/images/middle/slider/slider-2.jpg" alt="" class="slider-item-img">
                                <i class="mod-actmark mod-actmark-focus"></i>
                            </a>
                        </li>
                        <li class="slider-item">
                            <a href="" class="slider-item-lk">
                                <img src="/wancezy/JDshop/Public/Home/images/middle/slider/slider-3.jpg" alt="" class="slider-item-img">
                                <i class="mod-actmark mod-actmark-focus"></i>
                            </a>
                        </li>
                        <li class="slider-item">
                            <a href="" class="slider-item-lk">
                                <img src="/wancezy/JDshop/Public/Home/images/middle/slider/slider-4.jpg" alt="" class="slider-item-img">
                                <i class="mod-actmark mod-actmark-focus"></i>
                            </a>
                        </li>
                        <li class="slider-item">
                            <a href="" class="slider-item-lk">
                                <img src="/wancezy/JDshop/Public/Home/images/middle/slider/slider-5.jpg" alt="" class="slider-item-img">
                                <i class="mod-actmark mod-actmark-focus"></i>
                            </a>
                        </li>
                        <li class="slider-item">
                            <a href="" class="slider-item-lk">
                                <img src="/wancezy/JDshop/Public/Home/images/middle/slider/slider-6.jpg" alt="" class="slider-item-img">
                                <i class="mod-actmark mod-actmark-focus"></i>
                            </a>
                        </li>
                        <li class="slider-item">
                            <a href="" class="slider-item-lk">
                                <img src="/wancezy/JDshop/Public/Home/images/middle/slider/slider-7.jpg" alt="" class="slider-item-img">
                                <i class="mod-actmark mod-actmark-focus"></i>
                            </a>
                        </li>
                        <li class="slider-item">
                            <a href="" class="slider-item-lk">
                                <img src="/wancezy/JDshop/Public/Home/images/middle/slider/slider-8.jpg" alt="" class="slider-item-img">
                                <i class="mod-actmark mod-actmark-focus"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="slider-indicator slider-top-dot">
                        <ul class="dot-switch">
                            <li class="slider-indicator-btn"></li>
                            <li class="slider-indicator-btn"></li>
                            <li class="slider-indicator-btn"></li>
                            <li class="slider-indicator-btn"></li>
                            <li class="slider-indicator-btn"></li>
                            <li class="slider-indicator-btn"></li>
                            <li class="slider-indicator-btn"></li>
                            <li class="slider-indicator-btn slider-indicator-btn-last"></li>
                        </ul>
                    </div>
                    <a id="prev" href="javascript:;" class="slider-control-item slider-control-prev" style="display: block;">
                        <span class="slider-control-arrow slider-control-arrow-prev"></span>
                    </a>
                    <a id="next" href="javascript:;" class="slider-control-item slider-control-next">
                        <span class="slider-control-arrow slider-control-arrow-next"></span>
                    </a>
                </div>
                <div class="slider-extend">
                    <div class="slider-bi">
                        <a href="" class="slider-bi-lk">
                            <img src="/wancezy/JDshop/Public/Home/images/middle/slider/slider-bi-1.jpg!q90" alt="" class="slider-bi-img">
                        </a>
                    </div>
                    <div class="slider-bi">
                        <a href="" class="slider-bi-lk">
                            <img src="/wancezy/JDshop/Public/Home/images/middle/slider/slider-bi-2.jpg!q90" alt="" class="slider-bi-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--右边个人信息-->
        <div class="fs-col3">
            <div class="user">
                <div class="user-info">
                    <div class="user-info-avatar">
                        <a href="" class="user-info-avatar-lk"></a>
                        <img src="/wancezy/JDshop/Public/Home/images/middle/user/no_login.jpg" alt="" class="user-info-avatar-img">
                    </div>
                    <div class="user-info-show">
                        <p class="user-info-tip">Hi,欢迎来到京东!</p>
                        <p>
                            <a href="" class="user-info-login">登录</a>
                            <a href="" class="user-info-register">注册</a>
                        </p>
                    </div>
                </div>
                <div class="user-profit">
                    <a href="" class="user-profit-lk">新人福利</a>
                    <a href="" class="user-profit-lk">PLUS会员</a>
                </div>
            </div>
            <div class="news">
                <div class="mod-tab news-tab">
                    <div class="mod-tab-head">
                        <a href="" class="mod-tab-head-item news-first">促销</a>
                        <a href="" class="mod-tab-head-item news-last">公告</a>
                        <div class="news-tab-active"></div>
                        <a href="" class="news-more">更多</a>
                    </div>
                    <div class="mod-tab-content">
                        <div class="mod-tab-content-item mod-tab-content-promotion">
                            <ul class="news-list">
                                <li class="news-item">
                                    <a href="" class="news-lk">【爆款】最高10元抵1000！</a>
                                </li>
                                <li class="news-item">
                                    <a href="" class="news-lk">【超级预售】定金1元抵300！</a>
                                </li>
                                <li class="news-item">
                                    <a href="" class="news-lk">居家生活爆品低至6.18元</a>
                                </li>
                                <li class="news-item">
                                    <a href="" class="news-lk">有颜不败家，挑剃618！</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mod-tab-content-item mod-tab-content-announcement">
                            <ul class="news-list">
                                <li class="news-item">
                                    <a href="" class="news-lk">ZENITH真力时入驻京东</a>
                                </li>
                                <li class="news-item">
                                    <a href="" class="news-lk"> “4.28配送员日”2000名五星一线员工获表彰</a>
                                </li>
                                <li class="news-item">
                                    <a href="" class="news-lk">京东热水器品类安装收费封顶</a>
                                </li>
                                <li class="news-item">
                                    <a href="" class="news-lk">英国超市ASDA入驻京东</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="service-entry">
                    <ul class="service-list">
                        <li class="service-item">
                            <a href="" class="service-lk">
                                <i class="service-ico service-ico-huafei"></i>
                                <span class="service-txt">话费</span>
                            </a>
                        </li>
                        <li class="service-item">
                            <a href="" class="service-lk">
                                <span class="service-corner">
                                    <i class="service-corner-txt">减</i>
                                    <i class="service-corner-ico"></i>
                                </span>
                                <i class="service-ico service-ico-jipiao"></i>
                                <span class="service-txt">机票</span>
                            </a>
                        </li>
                        <li class="service-item">
                            <a href="" class="service-lk">
                                <i class="service-ico service-ico-jiudian"></i>
                                <span class="service-txt">酒店</span>
                            </a>
                        </li>
                        <li class="service-item">
                            <a href="" class="service-lk">
                                <i class="service-ico service-ico-youxi"></i>
                                <span class="service-txt">游戏</span>
                            </a>
                        </li>
                        <li class="service-item">
                            <a href="" class="service-lk">
                                <i class="service-ico service-ico-qiyegou"></i>
                                <span class="service-txt">企业购</span>
                            </a>
                        </li>
                        <li class="service-item">
                            <a href="" class="service-lk">
                                <i class="service-ico service-ico-jiayouka"></i>
                                <span class="service-txt">加油卡</span>
                            </a>
                        </li>
                        <li class="service-item">
                            <a href="" class="service-lk">
                                <i class="service-ico service-ico-dianyingpiao"></i>
                                <span class="service-txt">电影票</span>
                            </a>
                        </li>
                        <li class="service-item">
                            <a href="" class="service-lk">
                                <span class="service-corner">
                                    <i class="service-corner-txt">抢</i>
                                    <i class="service-corner-ico"></i>
                                </span>
                                <i class="service-ico service-ico-huochepiao"></i>
                                <span class="service-txt">火车票</span>
                            </a>
                        </li>
                        <li class="service-item">
                            <a href="" class="service-lk">
                                <i class="service-ico service-ico-zhongchou"></i>
                                <span class="service-txt">众筹</span>
                            </a>
                        </li>
                        <li class="service-item">
                            <a href="" class="service-lk">
                                <i class="service-ico service-ico-licai"></i>
                                <span class="service-txt">理财</span>
                            </a>
                        </li>
                        <li class="service-item">
                            <a href="" class="service-lk">
                                <i class="service-ico service-ico-lipinka"></i>
                                <span class="service-txt">礼品卡</span>
                            </a>
                        </li>
                        <li class="service-item">
                            <a href="" class="service-lk">
                                <i class="service-ico service-ico-baitiao"></i>
                                <span class="service-txt">白条</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="service-pop"></div>
            </div>
        </div>
    </div>
    <div id="J_fs_act" class="fs-act">
        <a id="J_fs_act_lk" class="fs-act-lk" href=""></a>
    </div>
</div>
<!--中间轮播图,二级菜单部分结束-->

<!--京东秒杀开始-->
<div id="seckill" class="sk">
    <div class="grid-c1 box sk-inner">
        <div class="box-hd">
            <div class="box-hd-col1 fl">
                <i class="box-hd-dec"></i>
                <i class="box-hd-icon"></i>
                <h3 class="box-tit">京东秒杀</h3>
                <a href="" class="box-subtit">总有你想不到的低价
                    <i class="box-subtit-arrow"></i>
                </a>
            </div>
            <div class="box-hd-col2 fr">
                <div class="sk-cd fl">
                    <span class="sk-cd-tip">当前场次</span>
                    <div class="sk-cd-main">
                        <div class="cd">
                            <div class="cd-item">
                                <span class="cd-hour cd-item-txt">00</span>
                            </div>
                            <div class="cd-split">
                                <i class="cd-split-dot cd-split-top"></i>
                                <i class="cd-split-dot cd-split-bottom"></i>
                            </div>
                            <div class="cd-item">
                                <span class="cd-minute cd-item-txt">00</span>
                            </div>
                            <div class="cd-split">
                                <i class="cd-split-dot cd-split-top"></i>
                                <i class="cd-split-dot cd-split-bottom"></i>
                            </div>
                            <div class="cd-item">
                                <span class="cd-second cd-item-txt">00</span>
                            </div>
                        </div>
                    </div>
                    <span class="sk-cd-tip">后结束抢购</span>
                </div>
            </div>
        </div>
        <div class="box-bd">
            <div class="sk-list-wrapper">
                <ul class="sk-list">
                    <?php if(is_array($seckillData)): foreach($seckillData as $key=>$v): ?><li class="sk-list-item">
                        <div class="sk-item-pic">
                            <div class="sk-item-tag">
                                <span class="sk-item-tag-txt">超级秒</span>
                            </div>
                            <a href="" class="sk-item-pic-lk">
                                <img src="<?php echo ($v['pic']); ?>" alt="" class="sk-item-img">
                                <p class="sk-item-name"><?php echo ($v['goods_name']); ?></p>
                            </a>
                            <div class="sk-item-shadow"></div>
                        </div>
                        <p class="sk-item-price">
                            <span class="mod-price sk-item-price-new">
                                <i>¥</i>
                                <span><?php echo ($v['mall_price']); ?></span>
                            </span>
                            <span class="mod-price sk-item-price-origin">
                                <i>¥</i>
                                <del><?php echo ($v['market_price']); ?></del>
                            </span>
                        </p>
                    </li><?php endforeach; endif; ?>

                </ul>
                <div class="sk-controls">
                    <a href="" class="sk-controls-item sk-controls-prev">
                        <span class="sk-controls-arrow sk-controls-arrow-prev"></span>
                    </a>
                    <a href="" class="sk-controls-item sk-controls-next">
                        <span class="sk-controls-arrow sk-controls-arrow-next"></span>
                    </a>
                </div>
                <div class="sk-split"></div>
            </div>
            <a href="" class="sk-special">
                <img src="/wancezy/JDshop/Public/Home/images/seckill/special.jpg!q90" alt="" class="sk-special-pic">
            </a>
        </div>
    </div>
</div>
<!--京东秒杀结束-->

<!--发现好货,优品专辑,排行榜开始-->
<div id="fbt" class="fbt">
    <div class="grid-c1 fbt-inner">
        <div class="box find fbt-col1">
            <div class="box-hd">
                <i class="box-hd-arrow"></i>
                <i class="box-hd-dec"></i>
                <h3 class="box-tit">发现好货</h3>
                <a href="" class="box-subtit">发现品质生活
                    <i class="box-subtit-arrow"></i>
                </a>
            </div>
            <div class="box-bd">
                <ul class="find-list">
                    <?php if(is_array($tpData)): foreach($tpData as $key=>$v): ?><li class="find-item">
                        <a href="<?php echo u('content/index',['g_id'=>$v['g_id']]);?>" class="find-item-lk">
                            <p class="find-item-name" style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap"><?php echo ($v['goods_name']); ?></p>
                            <img src="<?php echo ($v['pic']); ?>" alt="" class="find-item-img">
                        </a>
                    </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
        <div class="box sup fbt-col2">
            <div class="box-hd">
                <i class="box-hd-arrow"></i>
                <i class="box-hd-dec"></i>
                <h3 class="box-tit">优品专辑</h3>
                <a href="" class="box-subtit">甄选优质好物
                    <i class="box-subtit-arrow"></i>
                </a>
            </div>
            <div class="box-bd sup-tab">
                <div class="sup-page">
                    <a href="" class="sup-page-lk">
                        <p class="sup-desc">想要王者玩的嗨,2千元手机就够了</p>
                        <?php if(is_array($fbtPhoneData)): foreach($fbtPhoneData as $key=>$v): ?><img src="<?php echo ($v['pic']); ?>" alt="" class="sup-img"><?php endforeach; endif; ?>
                    </a>
                    <div class="sup-sep"></div>
                    <a href="" class="sup-page-lk">
                        <p class="sup-desc">小仙女出街</p>
                        <?php if(is_array($femaleData)): foreach($femaleData as $key=>$v): ?><img src="<?php echo ($v['pic']); ?>" alt="" class="sup-img"><?php endforeach; endif; ?>
                    </a>
                </div>
                <!--<a href="" class="sup-btn sup-btn-prev">-->
                    <!--<span class="sup-btn-arrow sup-btn-arrow-prev"></span>-->
                <!--</a>-->
                <!--<a href="" class="sup-btn sup-btn-next">-->
                    <!--<span class="sup-btn-arrow sup-btn-arrow-next"></span>-->
                <!--</a>-->
                <!--<ul class="sup-ind">-->
                    <!--<li class="sup-ind-item active"></li>-->
                    <!--<li class="sup-ind-item"></li>-->
                    <!--<li class="sup-ind-item"></li>-->
                <!--</ul>-->
            </div>
        </div>
        <div class="box top fbt-col3">
            <div class="box-hd">
                <i class="box-hd-arrow"></i>
                <i class="box-hd-dec"></i>
                <h3 class="box-tit">排行榜</h3>
                <a href="" class="box-subtit">专属你的购物指南
                    <i class="box-subtit-arrow"></i>
                </a>
            </div>
            <div class="box-bd top-tab">
                <div class="top-tab-head">
                    <a href="" class="top-tab-head-item">T恤</a>
                    <a href="" class="top-tab-head-item">坚果炒货</a>
                    <a href="" class="top-tab-head-item">大家电</a>
                    <a href="" class="top-tab-head-item">户外风衣</a>
                    <a href="" class="top-tab-head-item">厨房小电</a>
                    <div class="top-tab-active"></div>
                </div>
                <div class="top-tab-content">
                    <div class="top-tab-content-item">
                        <ul class="top-list">
                            <?php if(is_array($txuData)): foreach($txuData as $k=>$v): ?><li class="top-item top-item-1">
                                <a href="<?php echo u('content/index',['g_id'=>$v['g_id']]);?>" class="top-lk">
                                    <div class="top-rank top-rank-<?php echo ($k+1); ?>"><?php echo ($k+1); ?></div>
                                    <div class="top-pic">
                                        <img src="<?php echo ($v['pic']); ?>" alt="" class="top-img">
                                    </div>
                                    <p class="top-name"><?php echo ($v['goods_name']); ?></p>
                                </a>
                            </li><?php endforeach; endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--发现好货,优品专辑,排行榜结束-->

<!--领券中心开始-->
<div id="coupon" class="coupon">
    <div class="grid-c1 coupon-inner">
        <div class="coupon-hd">
            <a href="" class="coupon-entry">
                <h3 class="coupon-entry-tit">领券中心</h3>
                <span class="coupon-entry-gap"></span>
                <p class="coupon-entry-txt coupon-entry-txt1">没抢到?</p>
                <p class="coupon-entry-txt coupon-entry-txt2">可以去看看更多优惠券</p>
                <span class="coupon-entry-btn">前往领券中心
                    <i class="coupon-entry-btn-ico"></i>
                </span>
            </a>
        </div>
        <div class="coupon-bd">
            <ul class="coupon-list">
                <li class="coupon-item coupon-item-1">
                    <a href="" class="coupon-item-lk">
                        <div class="coupon-info">
                            <p class="mod-price coupon-price">
                                <i>¥</i>100
                            </p>
                            <p class="coupon-desc">
                                <span class="coupon-desc-txt">仅可购买荣耀指定商品</span>
                            </p>
                            <p class="coupon-limit">
                                <span class="coupon-limit-txt">消费满500元可用</span>
                            </p>
                            <p class="coupon-more">更多好券</p>
                        </div>
                        <img src="/wancezy/JDshop/Public/Home/images/coupon/coupon-1.jpg!q90.webp" alt="" class="coupon-img">
                    </a>
                    <span class="coupon-item-shadow"></span>
                </li>
                <li class="coupon-item coupon-item-1">
                    <a href="" class="coupon-item-lk">
                        <div class="coupon-info">
                            <p class="mod-price coupon-price">
                                <i>¥</i>100
                            </p>
                            <p class="coupon-desc">
                                <span class="coupon-desc-txt">仅可购买荣耀指定商品</span>
                            </p>
                            <p class="coupon-limit">
                                <span class="coupon-limit-txt">消费满500元可用</span>
                            </p>
                            <p class="coupon-more">更多好券</p>
                        </div>
                        <img src="/wancezy/JDshop/Public/Home/images/coupon/coupon-1.jpg!q90.webp" alt="" class="coupon-img">
                    </a>
                    <span class="coupon-item-shadow"></span>
                </li>
                <li class="coupon-item coupon-item-1">
                    <a href="" class="coupon-item-lk">
                        <div class="coupon-info">
                            <p class="mod-price coupon-price">
                                <i>¥</i>100
                            </p>
                            <p class="coupon-desc">
                                <span class="coupon-desc-txt">仅可购买荣耀指定商品</span>
                            </p>
                            <p class="coupon-limit">
                                <span class="coupon-limit-txt">消费满500元可用</span>
                            </p>
                            <p class="coupon-more">更多好券</p>
                        </div>
                        <img src="/wancezy/JDshop/Public/Home/images/coupon/coupon-1.jpg!q90.webp" alt="" class="coupon-img">
                    </a>
                    <span class="coupon-item-shadow"></span>
                </li>
                <li class="coupon-item coupon-item-1">
                    <a href="" class="coupon-item-lk">
                        <div class="coupon-info">
                            <p class="mod-price coupon-price">
                                <i>¥</i>100
                            </p>
                            <p class="coupon-desc">
                                <span class="coupon-desc-txt">仅可购买荣耀指定商品</span>
                            </p>
                            <p class="coupon-limit">
                                <span class="coupon-limit-txt">消费满500元可用</span>
                            </p>
                            <p class="coupon-more">更多好券</p>
                        </div>
                        <img src="/wancezy/JDshop/Public/Home/images/coupon/coupon-1.jpg!q90.webp" alt="" class="coupon-img">
                    </a>
                    <span class="coupon-item-shadow"></span>
                </li>
                <li class="coupon-item coupon-item-1">
                    <a href="" class="coupon-item-lk">
                        <div class="coupon-info">
                            <p class="mod-price coupon-price">
                                <i>¥</i>100
                            </p>
                            <p class="coupon-desc">
                                <span class="coupon-desc-txt">仅可购买荣耀指定商品</span>
                            </p>
                            <p class="coupon-limit">
                                <span class="coupon-limit-txt">消费满500元可用</span>
                            </p>
                            <p class="coupon-more">更多好券</p>
                        </div>
                        <img src="/wancezy/JDshop/Public/Home/images/coupon/coupon-1.jpg!q90.webp" alt="" class="coupon-img">
                    </a>
                    <span class="coupon-item-shadow"></span>
                </li>

            </ul>
        </div>
    </div>
</div>
<!--领券中心结束-->

<!--rec-1开始-->
<div id="rec_1" class="rec">
    <div class="grid-c1 rec-inner">
        <ul class="rec-list">
            <li class="rec-item">
                <a href="" class="rec-lk">
                    <img src="/wancezy/JDshop/Public/Home/images/rec/rec-1/rec-1-1.jpg!q90" alt="" class="rec-img">
                </a>
            </li>
            <li class="rec-item">
                <a href="" class="rec-lk">
                    <img src="/wancezy/JDshop/Public/Home/images/rec/rec-1/rec-1-1.jpg!q90" alt="" class="rec-img">
                </a>
            </li>
            <li class="rec-item">
                <a href="" class="rec-lk">
                    <img src="/wancezy/JDshop/Public/Home/images/rec/rec-1/rec-1-1.jpg!q90" alt="" class="rec-img">
                </a>
            </li>
        </ul>
    </div>
</div>
<!--rec-1结束-->

<!--享品质开始-->
<div id="entry_1" class="entry-c3 entry-1">
    <div class="ftit">
        <div class="grid-c1 ftit-inner">
            <h3>享品质</h3>
        </div>
    </div>
    <div class="grid-c1 entry-inner">
        <ul class="entry-list">
            <li class="entry-item live">
                <div class="live-inner"></div>
            </li>
            <li class="entry-item entry-item-1">
                <a href="javascript:;" class="entry-lk">
                    <div class="entry-bg">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">新品首发</h4>
                            <p class="entry-info-desc">三星Galaxy S8  限量抢购</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-1/item-1.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-2">
                <a href="javascript:;" class="entry-lk">
                    <div class="entry-bg" style="background:#DBCF6E">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">会逛</h4>
                            <p class="entry-info-desc">进口零食6.18元抢</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-1/item-2.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-3">
                <a href="javascript:;" class="entry-lk">
                    <div class="entry-bg" style="background:#534b5d">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">奢侈大牌</h4>
                            <p class="entry-info-desc">尽享品质生活</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-1/item-3.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-1">
                <a href="javascript:;" class="entry-lk">
                    <div class="entry-bg" style="background:#3b838c">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">智能生活</h4>
                            <p class="entry-info-desc">只能潮货 嗨购不停</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-1/item-4.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-1">
                <a href="javascript:;" class="entry-lk">
                    <div class="entry-bg" style="background:#d58717">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">京东超市</h4>
                            <p class="entry-info-desc">牛奶低至第二件半价</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-1/item-5.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-1">
                <a href="javascript:;" class="entry-lk">
                    <div class="entry-bg" style="background:#7e5944">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">白条商城</h4>
                            <p class="entry-info-desc">最高12期免息</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-1/item-6.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-7">
                <a href="javascript:;" class="entry-lk">
                    <div class="entry-bg" style="background:#a93931">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">设计师推荐</h4>
                            <p class="entry-info-desc">全球设计精选</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-1/item-7.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-7">
                <a href="javascript:;" class="entry-lk">
                    <div class="entry-bg" style="background:#642663">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">全球尖货</h4>
                            <p class="entry-info-desc">全球自营好货</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-1/item-8.jpg" alt="" class="entry-img">
                </a>
            </li>

        </ul>
    </div>
</div>
<!--享品质结束-->

<!--rec-2开始-->
<div id="rec_2" class="rec">
    <div class="grid-c1 rec-inner">
        <ul class="rec-list">
            <li class="rec-item">
                <a href="" class="rec-lk">
                    <img src="/wancezy/JDshop/Public/Home/images/rec/rec-2/rec-2-1.jpg!q90" alt="" class="rec-img">
                </a>
            </li>
            <li class="rec-item">
                <a href="" class="rec-lk">
                    <img src="/wancezy/JDshop/Public/Home/images/rec/rec-2/rec-2-1.jpg!q90" alt="" class="rec-img">
                </a>
            </li>
            <li class="rec-item">
                <a href="" class="rec-lk">
                    <img src="/wancezy/JDshop/Public/Home/images/rec/rec-2/rec-2-1.jpg!q90" alt="" class="rec-img">
                </a>
            </li>
        </ul>
    </div>
</div>
<!--rec-2结束-->

<!--PHP遍历开始-->
<!--服装城-->
<div id="portal_1" class="chn">

    <div class="grid-c1 chn-inner chn-c1">
        <!--循环类目入口模块开始-->
        <div class="chn-col chn-col1">
            <div class="pt pt-computer">
                <div class="pt-hd pt-hd-qrcode">
                    <h3 class="pt-tit">服装城</h3>
                    <div class="pt-qrcode">
                        <div class="pt-qrcode-ico"></div>
                        <div class="pt-qrcode-pop">
                            <div class="pt-qrcode-arrow"></div>
                            <div class="pt-qrcode-item">
                                <div class="pt-qrcode-img">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-diannao.png" alt="" class="mod-loading">
                                </div>
                                <div class="pt-qrcode-txt">进入男馆</div>
                            </div>
                            <div class="pt-qrcode-split"></div>
                            <div class="pt-qrcode-item">
                                <div class="pt-qrcode-img">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-shuma.png" alt="" class="mod-loading">
                                </div>
                                <div class="pt-qrcode-txt">进入女馆</div>
                            </div>
                        </div>
                    </div>
                    <dic class="pt-tags">
                        <a href="" class="pt-tags-item">女装盛宴</a>
                        <a href="" class="pt-tags-item">型格男装</a>
                        <a href="" class="pt-tags-item">套装</a>
                        <a href="" class="pt-tags-item">珠宝</a>
                        <a href="" class="pt-tags-item">奢品</a>
                        <a href="" class="pt-tags-item">穿搭</a>
                    </dic>
                </div>
                <div class="pt-bd-wrapper">
                    <div class="pt-bd pt-bd-col1">
                        <div class="pt-bd-inner">
                            <!--封面图开始-->
                            <div class="pt-cover">
                                <a href="" class="pt-cover-lk">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">
                                    <i class="mod-actmark mod-actmark-portal"></i>
                                </a>
                            </div>
                            <!--封面图结束-->
                            <!--图片列表区域开始-->
                            <div class="pt-bi pt-bi-4">
                                <span class="pt-bi-split pt-bi-split-h"></span>
                                <span class="pt-bi-split pt-bi-split-v"></span>
                                <?php if(is_array($femaleClotheData)): foreach($femaleClotheData as $key=>$v): ?><a href="<?php echo u('content/index',['g_id'=>$v['g_id']]);?>" class="pt-bi-item">
                                    <p class="pt-bi-tit">女装盛宴</p>
                                    <p class="pt-bi-promo">抢神券</p>
                                    <img src="<?php echo ($v['pic']); ?>" alt="" class="pt-bi-img">
                                </a><?php endforeach; endif; ?>
                            </div>
                            <!--图片列表区域结束-->
                            <!--底部广告区域开始-->
                            <div class="pt-more">
                                <a href="" class="pt-more-item">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg" alt="" class="pt-more-img">
                                </a>
                                <a href="" class="pt-more-item">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-2.jpg" alt="" class="pt-more-img">
                                </a>
                                <a href="" class="pt-more-item">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-3.jpg" alt="" class="pt-more-img">
                                </a>
                            </div>
                            <!--底部广告区域结束-->
                        </div>
                        <div class="pt-bd-hide"></div>
                    </div>
                    <div class="pt-bd pt-bd-col2">
                        <div class="pt-bd-inner">
                            <!--封面图开始-->
                            <div class="pt-cover">
                                <a href="" class="pt-cover-lk">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">
                                    <i class="mod-actmark mod-actmark-portal"></i>
                                </a>
                            </div>
                            <!--封面图结束-->
                            <!--图片列表区域开始-->
                            <div class="pt-bi pt-bi-4">
                                <span class="pt-bi-split pt-bi-split-h"></span>
                                <span class="pt-bi-split pt-bi-split-v"></span>
                                <?php if(is_array($maleClotheData)): foreach($maleClotheData as $key=>$v): ?><a href="<?php echo u('content/index',['g_id'=>$v['g_id']]);?>" class="pt-bi-item">
                                    <p class="pt-bi-tit">格调男装</p>
                                    <p class="pt-bi-promo">不止5折</p>
                                    <img src="<?php echo ($v['pic']); ?>" alt="" class="pt-bi-img">
                                </a><?php endforeach; endif; ?>
                            </div>
                            <!--图片列表区域结束-->
                            <!--底部广告区域开始-->
                            <div class="pt-more">
                                <a href="" class="pt-more-item">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-4.jpg" alt="" class="pt-more-img">
                                </a>
                                <a href="" class="pt-more-item">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-5.jpg" alt="" class="pt-more-img">
                                </a>
                                <a href="" class="pt-more-item">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-6.jpg" alt="" class="pt-more-img">
                                </a>
                            </div>
                            <!--底部广告区域结束-->
                        </div>
                        <div class="pt-bd-hide"></div>
                    </div>
                    <div class="pt-ft">
                        <div class="pt-logo">
                            <div class="pt-logo-list-wrapper">
                                <ul class="pt-logo-list">
                                    <?php if(is_array($clotheBrand)): foreach($clotheBrand as $key=>$v): ?><li class="pt-logo-item">
                                        <a href="" class="pt-logo-lk">
                                            <img src="<?php echo ($v['b_logo']); ?>" alt="" class="pt-logo-img">
                                        </a>
                                    </li><?php endforeach; endif; ?>
                                </ul>
                            </div>
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--循环类目入口模块结束-->
    </div>
</div>

<!--电脑,手机城-->
<div id="portal_2" class="chn">
    <div class="grid-c1 chn-inner chn-c2">
        <!--循环类目入口模块开始-->
        <div class="chn-col chn-col1">
            <div class="pt pt-electronic">
                <div class="pt-hd pt-hd-qrcode">
                    <h3 class="pt-tit">电脑馆</h3>
                    <div class="pt-qrcode">
                        <div class="pt-qrcode-ico"></div>
                        <div class="pt-qrcode-pop">
                            <div class="pt-qrcode-arrow"></div>
                            <div class="pt-qrcode-item">
                                <div class="pt-qrcode-img">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-electronic.png" alt="" class="mod-loading">
                                </div>
                                <div class="pt-qrcode-txt">扫码进入手机版</div>
                            </div>
                        </div>
                    </div>
                    <dic class="pt-tags">
                        <a href="" class="pt-tags-item">游戏极品</a>
                        <a href="" class="pt-tags-item">装机大师</a>
                        <a href="" class="pt-tags-item">职场必备</a>

                    </dic>
                </div>
                <div class="pt-bd-wrapper">
                    <div class="pt-bd pt-bd-col1">
                        <div class="pt-bd-inner">
                            <!--封面图开始-->
                            <div class="pt-cover">
                                <a href="" class="pt-cover-lk">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-2/computer.jpg" alt="" class="pt-cover-img">
                                    <i class="mod-actmark mod-actmark-portal"></i>
                                </a>
                            </div>
                            <!--封面图结束-->
                            <!--图片列表区域开始-->
                            <div class="pt-bi pt-bi-4">
                                <span class="pt-bi-split pt-bi-split-h"></span>
                                <span class="pt-bi-split pt-bi-split-v"></span>
                                <?php if(is_array($computerData)): foreach($computerData as $key=>$v): ?><a href="<?php echo u('content/index',['g_id'=>$v['g_id']]);?>" class="pt-bi-item">
                                    <p class="pt-bi-tit">电脑满减</p>
                                    <p class="pt-bi-promo">最高减990</p>
                                    <img src="<?php echo ($v['pic']); ?>" alt="" class="pt-bi-img">
                                </a><?php endforeach; endif; ?>

                            </div>
                            <!--图片列表区域结束-->
                            <!--底部广告区域开始-->
                            <div class="pt-more">
                                <a href="" class="pt-more-item">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-2/more-1.jpg" alt="" class="pt-more-img">
                                </a>
                                <a href="" class="pt-more-item">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-2/more-2.jpg" alt="" class="pt-more-img">
                                </a>
                                <a href="" class="pt-more-item">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-2/more-3.jpg" alt="" class="pt-more-img">
                                </a>
                            </div>
                            <!--底部广告区域结束-->
                        </div>
                        <div class="pt-bd-hide"></div>
                    </div>
                    <div class="pt-ft">
                        <div class="pt-logo">
                            <div class="pt-logo-list-wrapper">
                                <ul class="pt-logo-list">
                                    <?php if(is_array($computerBrand)): foreach($computerBrand as $key=>$v): ?><li class="pt-logo-item">
                                        <a href="javascript:;" class="pt-logo-lk">
                                            <img src="<?php echo ($v['b_logo']); ?>" alt="" class="pt-logo-img">
                                        </a>
                                    </li><?php endforeach; endif; ?>
                                </ul>
                            </div>
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chn-col chn-col2">
            <div class="pt pt-phone">
                <div class="pt-hd pt-hd-qrcode">
                    <h3 class="pt-tit">搞机派</h3>
                    <div class="pt-qrcode">
                        <div class="pt-qrcode-ico"></div>
                        <div class="pt-qrcode-pop">
                            <div class="pt-qrcode-arrow"></div>
                            <div class="pt-qrcode-item">
                                <div class="pt-qrcode-img">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-phone.png" alt="" class="mod-loading">
                                </div>
                                <div class="pt-qrcode-txt">扫码进入手机版</div>
                            </div>
                        </div>
                    </div>
                    <dic class="pt-tags">
                        <a href="" class="pt-tags-item">金属机身</a>
                        <a href="" class="pt-tags-item">快速充电</a>
                        <a href="" class="pt-tags-item">拍照神器</a>
                        <a href="" class="pt-tags-item">后置双摄像头</a>
                    </dic>
                </div>
                <div class="pt-bd-wrapper">
                    <div class="pt-bd pt-bd-col1">
                        <div class="pt-bd-inner">
                            <!--封面图开始-->
                            <div class="pt-cover">
                                <a href="" class="pt-cover-lk">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-2/phone.jpg" alt="" class="pt-cover-img">
                                    <i class="mod-actmark mod-actmark-portal"></i>
                                </a>
                            </div>
                            <!--封面图结束-->
                            <!--图片列表区域开始-->
                            <div class="pt-bi pt-bi-4">
                                <span class="pt-bi-split pt-bi-split-h"></span>
                                <span class="pt-bi-split pt-bi-split-v"></span>
                                <?php if(is_array($phoneData)): foreach($phoneData as $key=>$v): ?><a href="<?php echo u('content/index',['g_id'=>$v['g_id']]);?>" class="pt-bi-item">
                                    <p class="pt-bi-tit">人气机型</p>
                                    <p class="pt-bi-promo">抢神券</p>
                                    <img src="<?php echo ($v['pic']); ?>" alt="" class="pt-bi-img">
                                </a><?php endforeach; endif; ?>

                            </div>
                            <!--图片列表区域结束-->
                            <!--底部广告区域开始-->
                            <div class="pt-more">
                                <a href="" class="pt-more-item">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-2/more-4.jpg" alt="" class="pt-more-img">
                                </a>
                                <a href="" class="pt-more-item">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-2/more-5.jpg" alt="" class="pt-more-img">
                                </a>
                                <a href="" class="pt-more-item">
                                    <img src="/wancezy/JDshop/Public/Home/images/portal/portal-2/more-6.jpg" alt="" class="pt-more-img">
                                </a>
                            </div>
                            <!--底部广告区域结束-->
                        </div>
                        <div class="pt-bd-hide"></div>
                    </div>
                    <div class="pt-ft">
                        <div class="pt-logo">
                            <div class="pt-logo-list-wrapper">
                                <ul class="pt-logo-list">
                                    <?php if(is_array($phoneBrand)): foreach($phoneBrand as $key=>$v): ?><li class="pt-logo-item">
                                        <a href="javascript:;" class="pt-logo-lk">
                                            <img src="<?php echo ($v['b_logo']); ?>" alt="" class="pt-logo-img">
                                        </a>
                                    </li><?php endforeach; endif; ?>
                                </ul>
                            </div>
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--循环类目入口模块结束-->
    </div>
</div>

<!--PHP遍历结束-->

<!--爱生活开始-->
<!--爱逛,爱美丽-->
<!--<div id="portal_1" class="chn chn-t">-->
    <!--<div class="ftit">-->
        <!--<div class="grid-c1 ftit-inner">-->
            <!--<h3>爱生活</h3>-->
        <!--</div>-->
    <!--</div>-->
    <!--<div class="grid-c1 chn-inner chn-c2">-->
        <!--&lt;!&ndash;循环类目入口模块&ndash;&gt;-->
        <!--<div class="chn-col chn-col1">-->
            <!--<div class="pt pt-cloth">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">爱逛</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-cloth.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">DICKIES</a>-->
                        <!--<a href="" class="pt-tags-item">PLUS会员</a>-->
                        <!--<a href="" class="pt-tags-item">儿童腕表</a>-->
                        <!--<a href="" class="pt-tags-item">珠宝</a>-->
                        <!--<a href="" class="pt-tags-item">小天鹅</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<?php if(is_array($maleClotheData)): foreach($maleClotheData as $key=>$v): ?>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="<?php echo ($v['pic']); ?>" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<?php endforeach; endif; ?>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="chn-col chn-col2">-->
            <!--<div class="pt pt-beauty">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">爱美丽</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-beauty.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">防晒</a>-->
                        <!--<a href="" class="pt-tags-item">底妆</a>-->
                        <!--<a href="" class="pt-tags-item">护肤套装</a>-->
                        <!--<a href="" class="pt-tags-item">爽肤水</a>-->
                        <!--<a href="" class="pt-tags-item">洗护</a>-->
                        <!--<a href="" class="pt-tags-item">女性护理</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<?php if(is_array($femaleClotheData)): foreach($femaleClotheData as $key=>$v): ?>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">女装盛宴</p>-->
                                    <!--<p class="pt-bi-promo">抢神券</p>-->
                                    <!--<img src="<?php echo ($v['pic']); ?>" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<?php endforeach; endif; ?>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash;循环类目入口结束&ndash;&gt;-->
    <!--</div>-->
<!--</div>-->

<!--家电馆,搞机派-->
<!--<div id="portal_2" class="chn">-->
    <!--<div class="grid-c1 chn-inner chn-c2">-->
        <!--&lt;!&ndash;循环类目入口模块开始&ndash;&gt;-->
        <!--<div class="chn-col chn-col1">-->
            <!--<div class="pt pt-electronic">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">家电馆</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-electronic.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">0元约好货</a>-->
                        <!--<a href="" class="pt-tags-item">冰箱</a>-->
                        <!--<a href="" class="pt-tags-item">618优惠</a>-->
                        <!--<a href="" class="pt-tags-item">0元安装</a>-->
                        <!--<a href="" class="pt-tags-item">平板电视</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="chn-col chn-col2">-->
            <!--<div class="pt pt-phone">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">搞机派</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-phone.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">金属机身</a>-->
                        <!--<a href="" class="pt-tags-item">快速充电</a>-->
                        <!--<a href="" class="pt-tags-item">拍照神器</a>-->
                        <!--<a href="" class="pt-tags-item">后置双摄像头</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash;循环类目入口模块结束&ndash;&gt;-->
    <!--</div>-->
<!--</div>-->

<!--电脑数码-->
<!--<div id="portal_3" class="chn">-->
    <!--<div class="grid-c1 chn-inner chn-c1">-->
        <!--&lt;!&ndash;循环类目入口模块开始&ndash;&gt;-->
        <!--<div class="chn-col chn-col1">-->
            <!--<div class="pt pt-computer">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">电脑数码</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-diannao.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">进入电脑馆</div>-->
                            <!--</div>-->
                            <!--<div class="pt-qrcode-split"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-shuma.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">进入数码馆</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">IT精选</a>-->
                        <!--<a href="" class="pt-tags-item">电脑馆</a>-->
                        <!--<a href="" class="pt-tags-item">游戏极品</a>-->
                        <!--<a href="" class="pt-tags-item">装机大师</a>-->
                        <!--<a href="" class="pt-tags-item">职场焕新</a>-->
                        <!--<a href="" class="pt-tags-item">女神频道</a>-->
                        <!--<a href="" class="pt-tags-item">虚拟现实</a>-->
                        <!--<a href="" class="pt-tags-item">二合一平板</a>-->
                        <!--<a href="" class="pt-tags-item">电子教育</a>-->
                        <!--<a href="" class="pt-tags-item">飞行馆</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-bd pt-bd-col2">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash;循环类目入口模块结束&ndash;&gt;-->
    <!--</div>-->
<!--</div>-->

<!--玩3C,爱运动-->
<!--<div id="portal_4" class="chn">-->
    <!--<div class="grid-c1 chn-inner chn-c2">-->
        <!--&lt;!&ndash;循环类目入口模块开始&ndash;&gt;-->
        <!--<div class="chn-col chn-col1">-->
            <!--<div class="pt pt-3c">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">玩3C</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-3c.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">手机</a>-->
                        <!--<a href="" class="pt-tags-item">电脑办公</a>-->
                        <!--<a href="" class="pt-tags-item">数码</a>-->
                        <!--<a href="" class="pt-tags-item">以旧换新</a>-->
                        <!--<a href="" class="pt-tags-item">二手优品</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="chn-col chn-col2">-->
            <!--<div class="pt pt-sport">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">爱运动</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-sport.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">跑步鞋</a>-->
                        <!--<a href="" class="pt-tags-item">冲锋衣</a>-->
                        <!--<a href="" class="pt-tags-item">动感单车</a>-->
                        <!--<a href="" class="pt-tags-item">电动车</a>-->
                        <!--<a href="" class="pt-tags-item">户外风衣</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash;循环类目入口模块结束&ndash;&gt;-->
    <!--</div>-->
<!--</div>-->

<!--rec-3开始-->
<!--<div id="rec_3" class="rec">-->
    <!--<div class="grid-c1 rec-inner">-->
        <!--<ul class="rec-list">-->
            <!--<li class="rec-item">-->
                <!--<a href="" class="rec-lk">-->
                    <!--<img src="/wancezy/JDshop/Public/Home/images/rec/rec-3/rec-3-1.jpg!q90" alt="" class="rec-img">-->
                <!--</a>-->
            <!--</li>-->
            <!--<li class="rec-item">-->
                <!--<a href="" class="rec-lk">-->
                    <!--<img src="/wancezy/JDshop/Public/Home/images/rec/rec-3/rec-3-1.jpg!q90" alt="" class="rec-img">-->
                <!--</a>-->
            <!--</li>-->
            <!--<li class="rec-item">-->
                <!--<a href="" class="rec-lk">-->
                    <!--<img src="/wancezy/JDshop/Public/Home/images/rec/rec-3/rec-3-1.jpg!q90" alt="" class="rec-img">-->
                <!--</a>-->
            <!--</li>-->
        <!--</ul>-->
    <!--</div>-->
<!--</div>-->
<!--rec-3结束-->

<!--爱吃-->
<!--<div id="portal_5" class="chn">-->
    <!--<div class="grid-c1 chn-inner chn-c1">-->
        <!--&lt;!&ndash;循环类目入口模块开始&ndash;&gt;-->
        <!--<div class="chn-col chn-col1">-->
            <!--<div class="pt pt-eat">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">爱吃</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-eat.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">进入爱吃</div>-->
                            <!--</div>-->

                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">休闲零食</a>-->
                        <!--<a href="" class="pt-tags-item">坚果</a>-->
                        <!--<a href="" class="pt-tags-item">牛奶</a>-->
                        <!--<a href="" class="pt-tags-item">饮料冲调</a>-->
                        <!--<a href="" class="pt-tags-item">食用油</a>-->
                        <!--<a href="" class="pt-tags-item">大米</a>-->
                        <!--<a href="" class="pt-tags-item">白酒</a>-->
                        <!--<a href="" class="pt-tags-item">红酒</a>-->
                        <!--<a href="" class="pt-tags-item">粽子</a>-->
                        <!--<a href="" class="pt-tags-item">鸡蛋</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-bd pt-bd-col2">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash;循环类目入口模块结束&ndash;&gt;-->
    <!--</div>-->
<!--</div>-->

<!--爱宝宝,爱家-->
<!--<div id="portal_6" class="chn">-->
    <!--<div class="grid-c1 chn-inner chn-c2">-->
        <!--&lt;!&ndash;循环类目入口模块开始&ndash;&gt;-->
        <!--<div class="chn-col chn-col1">-->
            <!--<div class="pt pt-baby">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">爱宝宝</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-baby.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">洗护喂养</a>-->
                        <!--<a href="" class="pt-tags-item">妈妈专区</a>-->
                        <!--<a href="" class="pt-tags-item">寝居服饰</a>-->
                        <!--<a href="" class="pt-tags-item">婴儿推车</a>-->
                        <!--<a href="" class="pt-tags-item">安全座椅</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="chn-col chn-col2">-->
            <!--<div class="pt pt-family">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">爱家</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-family.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">装修</a>-->
                        <!--<a href="" class="pt-tags-item">设计帮</a>-->
                        <!--<a href="" class="pt-tags-item">家具</a>-->
                        <!--<a href="" class="pt-tags-item">花洒</a>-->
                        <!--<a href="" class="pt-tags-item">炒锅</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash;循环类目入口模块结束&ndash;&gt;-->
    <!--</div>-->
<!--</div>-->

<!--爱阅读,爱车-->
<!--<div id="portal_7" class="chn">-->
    <!--<div class="grid-c1 chn-inner chn-c2">-->
        <!--&lt;!&ndash;循环类目入口模块开始&ndash;&gt;-->
        <!--<div class="chn-col chn-col1">-->
            <!--<div class="pt pt-reading">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">爱阅读</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-reading.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">外语</a>-->
                        <!--<a href="" class="pt-tags-item">历史</a>-->
                        <!--<a href="" class="pt-tags-item">经营</a>-->
                        <!--<a href="" class="pt-tags-item">摄影</a>-->
                        <!--<a href="" class="pt-tags-item">编程</a>-->
                        <!--<a href="" class="pt-tags-item">电子书</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="chn-col chn-col2">-->
            <!--<div class="pt pt-car">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">爱车</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-car.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">雨刮器</a>-->
                        <!--<a href="" class="pt-tags-item">高清记录仪</a>-->
                        <!--<a href="" class="pt-tags-item">换季保养</a>-->
                        <!--<a href="" class="pt-tags-item">美容洗车</a>-->
                        <!--<a href="" class="pt-tags-item">车品超市</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash;循环类目入口模块结束&ndash;&gt;-->
    <!--</div>-->
<!--</div>-->

<!--爱游戏,生活旅行,京东金融-->
<!--<div id="portal_8" class="chn">-->
    <!--<div class="grid-c1 chn-inner chn-c3">-->
        <!--&lt;!&ndash;循环类目入口模块开始&ndash;&gt;-->
        <!--<div class="chn-col chn-col1">-->
            <!--<div class="pt pt-game">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">爱游戏</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-game.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">女神专区</a>-->
                        <!--<a href="" class="pt-tags-item">装机大师</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="chn-col chn-col2">-->
            <!--<div class="pt pt-travel">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">生活旅行</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-travel.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">机票</a>-->
                        <!--<a href="" class="pt-tags-item">火车票</a>-->
                        <!--<a href="" class="pt-tags-item">电影票</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="chn-col chn-col3">-->
            <!--<div class="pt pt-finance">-->
                <!--<div class="pt-hd pt-hd-qrcode">-->
                    <!--<h3 class="pt-tit">京东金融</h3>-->
                    <!--<div class="pt-qrcode">-->
                        <!--<div class="pt-qrcode-ico"></div>-->
                        <!--<div class="pt-qrcode-pop">-->
                            <!--<div class="pt-qrcode-arrow"></div>-->
                            <!--<div class="pt-qrcode-item">-->
                                <!--<div class="pt-qrcode-img">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/qrcode/qrcode-finance.png" alt="" class="mod-loading">-->
                                <!--</div>-->
                                <!--<div class="pt-qrcode-txt">扫码进入手机版</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<dic class="pt-tags">-->
                        <!--<a href="" class="pt-tags-item">小金库</a>-->
                        <!--<a href="" class="pt-tags-item">打白条</a>-->
                        <!--<a href="" class="pt-tags-item">筹好物</a>-->
                    <!--</dic>-->
                <!--</div>-->
                <!--<div class="pt-bd-wrapper">-->
                    <!--<div class="pt-bd pt-bd-col1">-->
                        <!--<div class="pt-bd-inner">-->
                            <!--&lt;!&ndash;封面图开始&ndash;&gt;-->
                            <!--<div class="pt-cover">-->
                                <!--<a href="" class="pt-cover-lk">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/cover-1.jpg!q90" alt="" class="pt-cover-img">-->
                                    <!--<i class="mod-actmark mod-actmark-portal"></i>-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;封面图结束&ndash;&gt;-->
                            <!--&lt;!&ndash;图片列表区域开始&ndash;&gt;-->
                            <!--<div class="pt-bi pt-bi-4">-->
                                <!--<span class="pt-bi-split pt-bi-split-h"></span>-->
                                <!--<span class="pt-bi-split pt-bi-split-v"></span>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-bi-item">-->
                                    <!--<p class="pt-bi-tit">格调男装</p>-->
                                    <!--<p class="pt-bi-promo">不止5折</p>-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-bi-1.jpg!q90.webp" alt="" class="pt-bi-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;图片列表区域结束&ndash;&gt;-->
                            <!--&lt;!&ndash;底部广告区域开始&ndash;&gt;-->
                            <!--<div class="pt-more">-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                                <!--<a href="" class="pt-more-item">-->
                                    <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/more-1.jpg!q90" alt="" class="pt-more-img">-->
                                <!--</a>-->
                            <!--</div>-->
                            <!--&lt;!&ndash;底部广告区域结束&ndash;&gt;-->
                        <!--</div>-->
                        <!--<div class="pt-bd-hide"></div>-->
                    <!--</div>-->
                    <!--<div class="pt-ft">-->
                        <!--<div class="pt-logo">-->
                            <!--<div class="pt-logo-list-wrapper">-->
                                <!--<ul class="pt-logo-list">-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="pt-logo-item">-->
                                        <!--<a href="" class="pt-logo-lk">-->
                                            <!--<img src="/wancezy/JDshop/Public/Home/images/portal/portal-1/pt-logo-img/GAP.jpg" alt="" class="pt-logo-img">-->
                                        <!--</a>-->
                                    <!--</li>-->
                                <!--</ul>-->
                            <!--</div>-->
                            <!--<div class="pt-logo-btn-wrapper">-->
                                <!--<div class="pt-logo-btn pt-logo-btn-prev">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                                <!--<div class="pt-logo-btn pt-logo-btn-next">-->
                                    <!--<span class="pt-logo-btn-arrow"></span>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash;循环类目入口模块结束&ndash;&gt;-->
    <!--</div>-->
<!--</div>-->

<!--爱生活结束-->

<!--购特色开始-->
<div id="entry_2" class="entry-c7 entry-2">
    <div class="ftit">
        <div class="grid-c1 ftit-inner">
            <h3>购特色</h3>
        </div>
    </div>
    <div class="grid-c1 entry-inner">
        <ul class="entry-list">
            <li class="entry-item entry-item-1">
                <a href="" class="entry-lk">
                    <div class="entry-bg">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">司法拍卖</h4>
                            <p class="entry-info-desc">法院好货 公开抢拍</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-2/item-1.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-1">
                <a href="" class="entry-lk">
                    <div class="entry-bg" style="background:#7E6285">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">环球时尚</h4>
                            <p class="entry-info-desc">环球名品 奢华精选</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-2/item-2.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-1">
                <a href="" class="entry-lk">
                    <div class="entry-bg" style="background:#CE4040">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">品牌特卖</h4>
                            <p class="entry-info-desc">品牌限时特卖</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-2/item-3.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-1">
                <a href="" class="entry-lk">
                    <div class="entry-bg" style="background:#459263">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">京东健康</h4>
                            <p class="entry-info-desc">药品医疗营养滋补计生</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-2/item-4.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-1">
                <a href="" class="entry-lk">
                    <div class="entry-bg" style="background:#DC694F">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">陪伴宝宝</h4>
                            <p class="entry-info-desc">陪伴宝宝</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-2/item-5.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-1">
                <a href="" class="entry-lk">
                    <div class="entry-bg" style="background:#5C90B6">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">企业购</h4>
                            <p class="entry-info-desc">法院好货 公开抢拍</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-2/item-6.jpg" alt="" class="entry-img">
                </a>
            </li>
            <li class="entry-item entry-item-1">
                <a href="" class="entry-lk">
                    <div class="entry-bg" style="background:#D7BF1D">
                        <div class="entry-info">
                            <h4 class="entry-info-tit">IN货推荐</h4>
                            <p class="entry-info-desc">折叠锂电车1元起筹</p>
                        </div>
                    </div>
                    <img src="/wancezy/JDshop/Public/Home/images/entry/entry-2/item-7.jpg" alt="" class="entry-img">
                </a>
            </li>
        </ul>
    </div>
</div>
<!--购特色结束-->

<!--rec-4开始-->
<div id="rec_4" class="rec">
    <div class="grid-c1 rec-inner">
        <ul class="rec-list">
            <li class="rec-item">
                <a href="" class="rec-lk">
                    <img src="/wancezy/JDshop/Public/Home/images/rec/rec-4/rec-4-1.jpg!q90" alt="" class="rec-img">
                </a>
            </li>
            <li class="rec-item">
                <a href="" class="rec-lk">
                    <img src="/wancezy/JDshop/Public/Home/images/rec/rec-4/rec-4-1.jpg!q90" alt="" class="rec-img">
                </a>
            </li>
            <li class="rec-item">
                <a href="" class="rec-lk">
                    <img src="/wancezy/JDshop/Public/Home/images/rec/rec-4/rec-4-1.jpg!q90" alt="" class="rec-img">
                </a>
            </li>
        </ul>
    </div>
</div>
<!--rec-4结束-->

<!--还没逛够开始-->
<div id="more" class="more">
    <div class="ftit">
        <div class="grid-c1 ftit-inner">
            <h3>还没逛够</h3>
        </div>
    </div>
    <div class="grid-c1 more-inner">
        <ul class="more-list">
            <?php if(is_array($goodsData)): foreach($goodsData as $key=>$v): ?><li class="more-item more-item-1">
                <a href="<?php echo u('content/index',['g_id'=>$v['g_id']]);?>" class="more-item-lk">
                    <img src="<?php echo ($v['pic']); ?>" alt="" class="more-photo">
                    <div class="more-info">
                        <p class="more-info-name"><?php echo ($v['goods_name']); ?></p>
                        <p class="more-info-price mod-price">
                            <i>¥</i>
                            <span class="more-info-price-txt"><?php echo ($v['mall_price']); ?></span>
                        </p>
                    </div>
                </a>
            </li><?php endforeach; endif; ?>

        </ul>
    </div>
</div>
<!--还没逛够结束-->

<!--页脚开始-->
<div id="footer" class="mod_footer">
    <div class="mod_service">
        <div class="mod_service_inner w">
            <div class="mod_service_list">
                <li class="mod_service_item">
                    <div class="mod_service_unit">
                        <h5 class="mod_service_tit mod_service_duo">多</h5>
                        <p class="mod_service_txt">品类齐全，轻松购物</p>
                    </div>
                </li>
                <li class="mod_service_item">
                    <div class="mod_service_unit">
                        <h5 class="mod_service_tit mod_service_kuai">快</h5>
                        <p class="mod_service_txt">多仓直发，急速配送</p>
                    </div>
                </li>
                <li class="mod_service_item">
                    <div class="mod_service_unit">
                        <h5 class="mod_service_tit mod_service_hao">好</h5>
                        <p class="mod_service_txt">正品行货，精致服务</p>
                    </div>
                </li>
                <li class="mod_service_item">
                    <div class="mod_service_unit">
                        <h5 class="mod_service_tit mod_service_sheng">省</h5>
                        <p class="mod_service_txt">天天低价，畅选无忧</p>
                    </div>
                </li>
            </div>
        </div>
    </div>
    <div class="mod_help">
        <div class="mod_help_inner w">
            <div class="mod_help_list">
                <div class="mod_help_nav">
                    <h5 class="mod_help_nav_tit">购物指南</h5>
                    <ul class="mod_help_nav_con">
                        <li>
                            <a href="">购物流程</a>
                        </li>
                        <li>
                            <a href="">会员介绍</a>
                        </li>
                        <li>
                            <a href="">生活旅行</a>
                        </li>
                        <li>
                            <a href="">常见问题</a>
                        </li>
                        <li>
                            <a href="">大家电</a>
                        </li>
                        <li>
                            <a href="">联系客服</a>
                        </li>
                    </ul>
                </div>
                <div class="mod_help_nav">
                    <h5 class="mod_help_nav_tit">配送方式</h5>
                    <ul class="mod_help_nav_con">
                        <li>
                            <a href="">上门自提</a>
                        </li>
                        <li>
                            <a href="">211限时达</a>
                        </li>
                        <li>
                            <a href="">配送服务查询</a>
                        </li>
                        <li>
                            <a href="">配送费收取标准</a>
                        </li>
                        <li>
                            <a href="">海外配送</a>
                        </li>
                    </ul>
                </div>
                <div class="mod_help_nav">
                    <h5 class="mod_help_nav_tit">支付方式</h5>
                    <ul class="mod_help_nav_con">
                        <li>
                            <a href="">货到付款</a>
                        </li>
                        <li>
                            <a href="">在线支付</a>
                        </li>
                        <li>
                            <a href="">分期付款</a>
                        </li>
                        <li>
                            <a href="">邮局汇款</a>
                        </li>
                        <li>
                            <a href="">公司转账</a>
                        </li>
                    </ul>
                </div>
                <div class="mod_help_nav">
                    <h5 class="mod_help_nav_tit">售后服务</h5>
                    <ul class="mod_help_nav_con">
                        <li>
                            <a href="">售后政策</a>
                        </li>
                        <li>
                            <a href="">价格保护</a>
                        </li>
                        <li>
                            <a href="">退款说明</a>
                        </li>
                        <li>
                            <a href="">返修/退换货</a>
                        </li>
                        <li>
                            <a href="">取消订单</a>
                        </li>
                    </ul>
                </div>
                <div class="mod_help_nav">
                    <h5 class="mod_help_nav_tit">特色服务</h5>
                    <ul class="mod_help_nav_con">
                        <li>
                            <a href="">夺宝岛</a>
                        </li>
                        <li>
                            <a href="">DIY装机</a>
                        </li>
                        <li>
                            <a href="">延保服务</a>
                        </li>
                        <li>
                            <a href="">京西E卡</a>
                        </li>
                        <li>
                            <a href="">京西通信</a>
                        </li>
                        <li>
                            <a href="">京西J+</a>
                        </li>
                    </ul>
                </div>
                <div class="mod_help_cover">
                    <h5 class="mod_help_cover_tit">京西自营覆盖区县</h5>
                    <div class="mod_help_cover_con">
                        <p class="mod_help_cover_info">
                            京西已向全国2661个区县提供自营配送服务，支持货到付款、POS机刷卡和售后上门服务。
                        </p>
                        <p class="mod_help_cover_more">
                            <a href="">查看详情></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mod_copyright">
        <div class="mod_copyright_inner w">
            <p class="mod_copyright_links">
                <a href="">关于我们</a>
                <span class="mod_copyright_split">|</span>
                <a href="">联系我们</a>
                <span class="mod_copyright_split">|</span>
                <a href="">联系客服</a>
                <span class="mod_copyright_split">|</span>
                <a href="">合作招商</a>
                <span class="mod_copyright_split">|</span>
                <a href="">营销中心</a>
                <span class="mod_copyright_split">|</span>
                <a href="">手机京西</a>
                <span class="mod_copyright_split">|</span>
                <a href="">友情链接</a>
                <span class="mod_copyright_split">|</span>
                <a href="">销售联盟</a>
                <span class="mod_copyright_split">|</span>
                <a href="">京西社区</a>
                <span class="mod_copyright_split">|</span>
                <a href="">风险监测</a>
                <span class="mod_copyright_split">|</span>
                <a href="">隐私政策</a>
                <span class="mod_copyright_split">|</span>
                <a href="">京西公益</a>
                <span class="mod_copyright_split">|</span>
                <a href="">English Site</a>
                <span class="mod_copyright_split">|</span>
                <a href="">Contact Us</a>
            </p>
            <div class="mod_copyright_info">
                <p>
                    <a href="">京公网安备 11000002000088号</a>
                    <span class="mod_copyright_split">|</span>
                    <a href="">京ICP证070359号</a>
                    <span class="mod_copyright_split">|</span>
                    <a href="">互联网药品信息服务资格证编号(京)-经营性-2014-0008</a>
                    <span class="mod_copyright_split">|</span>
                    <a href="">新出发京零 字第大120007号</a>
                </p>
                <p>
                    <a href="">互联网出版许可证编号新出网证(京)字150号</a>
                    <span class="mod_copyright_split">|</span>
                    <a href="">出版物经营许可证</a>
                    <span class="mod_copyright_split">|</span>
                    <a href="">网络文化经营许可证京网文[2014]2148-348号</a>
                    <span class="mod_copyright_split">|</span>
                    <a href="">违法和不良信息举报电话：4006561155</a>
                </p>
                <p>
                    <a href="">Copyright&nbsp;&nbsp;©&nbsp;&nbsp;2004&nbsp;-&nbsp;2017&nbsp;&nbsp;京西JX.com&nbsp;版权所有</a>
                    <span class="mod_copyright_split">|</span>
                    <a href="">消费者维权热线：4006067733&nbsp;&nbsp;经营证照</a>
                </p>
                <p>
                    <span style="font-size: 12px;">京西旗下网站：</span>
                    <a href="">京西钱包</a>
                    <span class="mod_copyright_split">|</span>
                    <a href="">京西云</a>
                </p>
            </div>
            <p class="mod_copyright_auth">
                <a href="" class="mod_copyright_auth_ico_1 mod_copyright_auth_ico"></a>
                <a href="" class="mod_copyright_auth_ico_2 mod_copyright_auth_ico"></a>
                <a href="" class="mod_copyright_auth_ico_3 mod_copyright_auth_ico"></a>
                <a href="" class="mod_copyright_auth_ico_4 mod_copyright_auth_ico"></a>
                <a href="" class="mod_copyright_auth_ico_5 mod_copyright_auth_ico"></a>
                <a href="" class="mod_copyright_auth_ico_6 mod_copyright_auth_ico"></a>
            </p>
        </div>
    </div>
</div>
<!--页脚结束-->

<script src="./Public/Home/js/jquery-1.11.1.min.js"></script>
<script src="./Public/Home/js/index/head.js"></script>
<script src="./Public/Home/js/index/seckill.js"></script>
</body>
</html>