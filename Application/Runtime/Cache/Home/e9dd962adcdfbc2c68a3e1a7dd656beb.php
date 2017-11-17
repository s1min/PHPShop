<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/addToCart.css">
</head>
<body class="addToCart">
<!--shortcut开始-->
<div id="shortcut-2">
    <div class="w">
        <ul class="fl">
            <li class="dorpdown" id="ttbar-mycity">
                <div class="dt cw-icon ui-areamini-text-wrap">
                    <i class="ci-right">
                        <s>◇</s>
                    </i>
                    送至:
                    <span class="ui-areamini-text">北京</span>
                </div>
                <div class="dd dorpdown-layer">
                    <div class="dd-spacer"></div>
                    <div class="ui-areamini-content-wrap" style="left: auto;">
                        <div class="ui-areamini-content">
                            <div class="ui-areamini-content-list">
                                <div class="item">
                                    <a href="javascript:void(0)" class="selected">北京</a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="">上海</a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="">天津</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="fr">
            <li class="fore1 dorpdown" id="ttbar-login">
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
            </li>
            <li class="spacer"></li>
            <li class="fore2">
                <div class="dt">
                    <a href="">我的订单</a>
                </div>
            </li>
            <li class="spacer"></li>
            <li class="fore3 dorpdown" id="ttbar-myjd">
                <div class="dt cw-icon">
                    <i class="ci-right">
                        <s>◇</s>
                    </i>
                    <a href="">我的京东</a>
                </div>
                <div class="dd dorpdown-layer">
                    <div class="dd-spacer"></div>
                    <div class="myjdlist1">
                        <div class="fore1">
                            <div class="item">
                                <a href="">待处理订单
                                    <span id="num-unfinishedorder"></span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">返修退换货</a>
                            </div>
                            <div class="item">
                                <a href="">降价商品
                                    <span id="num-reduction"></span>
                                </a>
                            </div>
                        </div>
                        <div class="fore2">
                            <div class="item">
                                <a href="">消息
                                    <span id="num-tip"></span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">我的问答
                                    <span id="num-consultation"></span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">我的关注</a>
                            </div>
                        </div>
                    </div>
                    <div class="myjdlist2">
                        <div class="fore1">
                            <div class="item">
                                <a href="">我的京豆</a>
                            </div>
                            <div class="item baitiao">
                                <a href="">我的白条</a>
                            </div>
                        </div>
                        <div class="fore2">
                            <div class="item">
                                <a href="">我的优惠券
                                    <span id="num-ticket"></span>
                                </a>
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
            <li class="fore6 dorpdown" id="ttbar-apps">
                <div class="dt cw-icon">
                    <i class="ci-left"></i>
                    <i class="ci-right">
                        <s>◇</s>
                    </i>
                    <a href="">手机京东</a>
                </div>
                <div class="dd dorpdown-layer">
                    <div class="dd-spacer"></div>
                    <div class="dd-inner" id="ttbar-apps-main">
                        <a href="" class="link link1">手机京东</a>
                        <a href="" class="link link3">京东金融客户端</a>
                        <a href="" class="link link4">新人专享大礼包</a>
                        <a href="" class="link link5">新人专享128元大礼包</a>
                    </div>
                </div>
            </li>
            <li class="spacer"></li>
            <li class="fore7 dorpdown" id="ttbar-atte">
                <div class="dt cw-icon">
                    <i class="ci-right">
                        <s>◇</s>
                    </i>
                    关注京东
                </div>
                <div class="dd dorpdown-layer">
                    <div class="dd-spacer"></div>
                    <div class="dd-inner" id="ttbar-atte-main">
                        <img src="../images/myOrder/ttbar-atte.jpg" alt="">
                    </div>
                </div>
            </li>
            <li class="spacer"></li>
            <li class="fore8 dorpdown" id="ttbar-serv">
                <div class="dt cw-icon">
                    <i class="ci-right">
                        <s>◇</s>
                    </i>
                    客户服务
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
            <li class="fore9 dorpdown" id="ttbar-navs" style="padding: 0;">
                <div class="dt cw-icon">
                    <i class="ci-right">
                        <s>◇</s>
                    </i>
                    网站导航
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
        </ul>
    </div>
</div>
<!--shortcut结束-->

<!--logo-search-cart开始-->
<div id="logo-search-car-1">
    <div class="w">
        <div id="logo-1">
            <a href="" class="logo">京东</a>
        </div>
        <div id="search-1">
            <div class="form">
                <input type="text" id="key" class="text">
                <button class="button cw-icon">
                    <i></i>搜索
                </button>
            </div>
        </div>
        <div id="settleup-1" class="dorpdown">
            <div class="cw-icon">
                <i class="ci-left"></i>
                <i class="ci-right">&gt;</i>
                <i class="ci-count" id="shopping-amount">4</i>
                <a href="">我的购物车</a>
            </div>
            <div class="dorpdown-layer">
                <div class="spacer"></div>
                <div class="prompt">
                    <div class="nogoods">
                        <b></b>购物车中还没有商品，赶紧选购吧！
                    </div>
                </div>
                <!--<div id="settleup-content">-->

                <!--</div>-->
            </div>
        </div>
        <div id="hotwords" class="haveline">
            <a href="">a21新品</a>
            <b>|</b>
            <a href="">森马</a>
            <b>|</b>
            <a href="">美特斯邦威</a>
            <b>|</b>
            <a href="">真维斯</a>
        </div>
        <span class="clr"></span>
    </div>
</div>
<!--logo-search-cart结束-->

<!--nav开始-->
<div id="nav-2">
    <div class="w">
        <div id="categorys-2" class="dorpdown" style="height: auto;left: 0;position: absolute;">
            <div class="dt">
                <a href="">全部商品分类
                    <i class="ci-right">
                        <s>◇</s>
                    </i>
                </a>
            </div>
            <div class="dd"></div>
        </div>
        <div id="navitems-2" style="padding-left: 210px;">
            <ul id="navitems-group1">
                <li id="nav-home" class="fore1"><a href="">首页</a></li>
                <li id="nav-fashion" class="fore2"><a href="">服装城</a></li>
                <li id="nav-beauty" class="fore3"><a href="">美妆馆</a></li>
                <li id="nav-chaoshi" class="fore4"><a href="">京东超市</a></li>
                <li id="nav-fresh" class="fore5"><a href="">生鲜</a></li>
            </ul>
            <ul id="navitems-group2">
                <li id="nav-jdww" class="fore6"><a href="">全球购</a></li>
                <li id="nav-red" class="fore7"><a href="">闪购</a></li>
                <li id="nav-auction" class="fore8"><a href="">拍卖</a></li>
                <li id="nav-jr" class="fore9"><a href="">金融</a></li>
            </ul>
        </div>
        <span class="clr"></span>
    </div>
</div>
<!--nav结束-->

<!--main开始-->
<div id="main">
    <div class="success-wrap">
        <div class="w">
            <div class="m succeed-box">
                <div class="mc success-cont">
                    <div class="success-lcol">
                        <div class="success-top">
                            <b class="succ-icon"></b>
                            <h3 class="ftx-02">商品已成功加入购物车！</h3>
                        </div>
                        <div class="p-item">
                            <div class="p-img">
                                <a href="">
                                    <img src="../images/addToCart/p-img-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="p-info">
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装上衣修身休闲圆领短袖t恤男4621330029-2 特白 170/84A/M</a>
                                </div>
                                <div class="p-extra">
                                    <span class="txt">颜色：特白</span>
                                    <span class="txt">尺码：170/84A/M</span>
                                    <span class="txt">/  数量：1</span>
                                </div>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </div>
                    <div class="success-btns success-btns-new">
                        <div class="success-ad">
                            <a href="#none"></a>
                        </div>
                        <div class="clr"></div>
                        <div>
                            <a class="btn-tobback" href="">查看商品详情</a>
                            <a class="btn-addtocart" href="">
                                <b></b>去购物车结算
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w">
        <div class="m m1" id="similar">
            <div class="mt">
                <h3>购买了该商品的用户还购买了</h3>
            </div>
            <div style="position: relative;">
                <div class="mc s-panel-main" style="width: 2420px;left: -1210px;position: absolute;">
                    <div class="goods-list s-panel" style="float: left;display: block;">
                        <ul>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-1-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-1-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-1-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-1-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-1-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-1-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-1-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-1-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="goods-list s-panel ui-switchable-panel-selected" style="float: left;display: block;">
                        <ul>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-2-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-2-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-2-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-2-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-2-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-2-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-2-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="p-img">
                                    <a href="">
                                        <img src="../images/addToCart/similar-2-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="p-name">
                                    <a href="">以纯线上品牌a21 夏装新品男装撞色微弹休闲修身时尚短袖T恤4621330081 黑色 170/84A/M</a>
                                </div>
                                <div class="p-price">
                                    <strong>
                                        <em>￥</em>
                                        <i>65.00</i>
                                    </strong>
                                </div>
                                <div class="p-btn">
                                    <a href="#none" class="btn-append">
                                        <b></b>加入购物车
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="s-panel-nav">
                <ul>
                    <li class="s-nav-item curr">1</li>
                    <li class="s-nav-item">2</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--main结束-->

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
</body>
</html>