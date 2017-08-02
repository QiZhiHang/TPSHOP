<?php
//000000000000s:266094:"<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>商品列表</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/tpshop.css" />
	<script src="/template/pc/rainbow/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/public/js/layer/layer-min.js"></script>
	<script src="/public/js/global.js"></script>
	<script src="/public/js/pc_common.js"></script>
	<link rel="stylesheet" href="/template/pc/rainbow/static/css/location.css" type="text/css">
    <style>
        @media screen and (max-width: 1260px) {
            .header .ecsc-join{
                display: none;
            }
            .top-ri-header ul li{
                padding: 0 4px;
            }
            .list1 .dd{
                width: 200px !important;
            }
            .footer{
                min-width: inherit;
            }
            .navitems{
                width: 840px;
            }
            .categorys .dt a{
                width: 100px;
            }
            .categorys{
                width: 140px;
            }
            .footer .foot-list-fl{
                width: 608px;
            }
            .footer .foot-list-fl ul{
                width: 120px;
            }
            .categorys .cata-nav-name h3{
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .home_categorys .cata-nav-layer{
                left: 180px !important;
            }
            .categorys .cata-nav-layer{
                width: 840px;
            }
            .categorys .cata-nav-layer .cata-nav-rigth{
                display: none;
            }
            .categorys .dt a:before{
                margin-right: 0;
                width: 0;
            }
            .sendaddress{
                display: none;
            }
            .tp_h_alone .ecsc-search{
                margin: 10px 0 0 66px;
            }
            .tp_h_alone .navitems{
                width: 800px;
            }
            .tp_h_alone .categorys2 .cata-nav-layer .cata-nav-rigth{
                display: none;
            }
            .tp_h_alone .categorys2 .cata-nav-layer{
                width: 800px;
            }
        }
        @media screen and (min-width: 1260px){
            .tp_h_alone .ecsc-search{
               margin: 10px 0 0 290px;
            }
            .u-g-cart{
                width: 160px;
            }
        }
    </style>
</head>
<body>
<!-- 新浪获取ip地址 -start-->
<!--header-s-->
    <div class="tpshop-tm-hander tp_h_alone p">
        <!--导航栏-s-->
        <div class="top-hander p">
            <div class="w1224 pr p">
                <div class="fl">
                    <!-- 收货地址，物流运费 -start-->
                    <div class="sendaddress pr fl">
                        <span>送货至：</span>
                        <span>
                            <ul class="list1">
                                <li class="summary-stock though-line">
                                    <div class="dd" style="border-right:0px;width:200px;">
                                        <div class="store-selector add_cj_p">
                                            <div class="text"><div></div><b></b></div>
                                            <div onclick="$(this).parent().removeClass('hover')" class="close"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </span>
                    </div>
                    <!-- 收货地址，物流运费 -end-->
                        <div class="fl nologin">
                            <a class="red" href="/index.php/Home/user/login.html">Hi.请登录</a>
                            <a href="/index.php/Home/user/reg.html">免费注册</a>
                        </div>
                        <div class="fl islogin">
                            <a class="red userinfo" href="/index.php/Home/user/index.html" ></a>
                            <a  href="/index.php/Home/user/logout.html"  title="退出" target="_self">安全退出</a>
                        </div>
                </div>
                <div class="top-ri-header fr">
                    <ul>
                        <li><a target="_blank" href="/index.php/Home/User/order_list.html">我的订单</a></li>
                        <li class="spacer"></li>
                        <li><a target="_blank" href="/index.php/Home/User/visit_log.html">我的浏览</a></li>
                        <li class="spacer"></li>
                        <li><a target="_blank" href="/index.php/Home/User/coupon.html">我的优惠券</a></li>
                        <li class="spacer"></li>
                        <li><a target="_blank" href="/index.php/Home/User/goods_collect.html">我的收藏</a></li>
                        <li class="spacer"></li>
                        <li><a target="_blank" title="点击这里给我发消息" href="/index.php/Home/Article/detail/article_id/22.html" target="_blank">在线客服</a></li>
                        <li class="spacer"></li>
                        <li class="hover-ba-navdh">
                            <div class="nav-dh">
                                <span>网站导航</span>
                                <i class="share-a_a1"></i>
                                <div class="conta-hv-nav">
                                    <ul>
                                        <li>
                                            <a href="/index.php/Home/Activity/group_list.html">团购</a>
                                        </li>
                                        <li>
                                            <a href="/index.php/Home/Activity/flash_sale_list.html">抢购</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--导航栏-e-->
        <div class="nav-middan-z p">
            <div class="header w1224 p">
                <div class="ecsc-logo">
                    <a href="/index.php/home/Index/index.html" class="logo"> <img src="/public/images/newLogo.png"></a>
                </div>
                <!--搜索-s-->
                <div class="ecsc-search">
                    <form id="searchForm" name="" method="get" action="/index.php/Home/Goods/search.html" class="ecsc-search-form">
                        <input autocomplete="off" name="q" id="q" type="text" value="" placeholder="搜索关键字" class="ecsc-search-input">
                        <button type="submit" class="ecsc-search-button" onclick="if($.trim($('#q').val()) != '') $('#searchForm').submit();"><i></i></button>
                        <div class="candidate p">
                            <ul id="search_list"></ul>
                        </div>
                        <script type="text/javascript">
                            ;(function($){
                                $.fn.extend({
                                    donetyping: function(callback,timeout){
                                        timeout = timeout || 1e3;
                                        var timeoutReference,
                                                doneTyping = function(el){
                                                    if (!timeoutReference) return;
                                                    timeoutReference = null;
                                                    callback.call(el);
                                                };
                                        return this.each(function(i,el){
                                            var $el = $(el);
                                            $el.is(':input') && $el.on('keyup keypress',function(e){
                                                if (e.type=='keyup' && e.keyCode!=8) return;
                                                if (timeoutReference) clearTimeout(timeoutReference);
                                                timeoutReference = setTimeout(function(){
                                                    doneTyping(el);
                                                }, timeout);
                                            }).on('blur',function(){
                                                doneTyping(el);
                                            });
                                        });
                                    }
                                });
                            })(jQuery);

                            $('.ecsc-search-input').donetyping(function(){
                                search_key();
                            },500).focus(function(){
                                var search_key = $.trim($('#q').val());
                                if(search_key != ''){
                                    $('.candidate').show();
                                }
                            });
                            $('.candidate').mouseleave(function(){
                                $(this).hide();
                            });

                            function searchWord(words){
                                $('#q').val(words);
                                $('#searchForm').submit();
                            }
                            function search_key(){
                                var search_key = $.trim($('#q').val());
                                if(search_key != ''){
                                    $.ajax({
                                        type:'post',
                                        dataType:'json',
                                        data: {key: search_key},
                                        url:"/index.php/Home/Api/searchKey.html",
                                        success:function(data){
                                            if(data.status == 1){
                                                var html = '';
                                                $.each(data.result, function (n, value) {
                                                    html += '<li onclick="searchWord(\''+value.keywords+'\');"><div class="search-item">'+value.keywords+'</div><div class="search-count">约'+value.goods_num+'个商品</div></li>';
                                                });
                                                html += '<li class="close"><div class="search-count">关闭</div></li>';
                                                $('#search_list').empty().append(html);
                                                $('.candidate').show();
                                            }else{
                                                $('#search_list').empty();
                                            }
                                        }
                                    });
                                }
                            }
                        </script>
                    </form>
                    <div class="keyword">
                        <ul>
                                                            <li>
                                    <a href="/index.php/Home/Goods/search/q/%E6%89%8B%E6%9C%BA.html" target="_blank">手机</a>
                                </li>
                                                            <li>
                                    <a href="/index.php/Home/Goods/search/q/%E5%B0%8F%E7%B1%B3.html" target="_blank">小米</a>
                                </li>
                                                            <li>
                                    <a href="/index.php/Home/Goods/search/q/iphone.html" target="_blank">iphone</a>
                                </li>
                                                            <li>
                                    <a href="/index.php/Home/Goods/search/q/%E4%B8%89%E6%98%9F.html" target="_blank">三星</a>
                                </li>
                                                            <li>
                                    <a href="/index.php/Home/Goods/search/q/%E5%8D%8E%E4%B8%BA.html" target="_blank">华为</a>
                                </li>
                                                            <li>
                                    <a href="/index.php/Home/Goods/search/q/%E5%86%B0%E7%AE%B1.html" target="_blank">冰箱</a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <!--搜索-e-->
                <!--购物车-s-->
                
                <div class="shopingcar-index fr">
                    <div class="u-g-cart fr fixed" id="hd-my-cart">
                        <a href="/index.php/Home/Cart/cart.html">
                            <div class="c-n fl" >
                                <i class="share-shopcar-index"></i>
                                <span>我的购物车<em class="sc_z" id="cart_quantity"></em></span>
                            </div>
                        </a>
                        <div class="u-fn-cart u-mn-cart" id="show_minicart"></div>
                    </div>
                </div>
                <!--购物车-e-->
            </div>
        </div>
        <!--商品分类-s-->
        <div class="nav p">
            <div class="w1224 p">
                <div class="categorys2 home_categorys">
                    <div class="dt">
                        <a href="/index.php/Home/Goods/all_category.html" target="_blank"><i class="share-a_a2"></i>全部商品分类</a>
                    </div>
                    <!--全部商品分类-s-->
                    <div class="dd">
                        <div class="cata-nav">
                            <!-- 外层循环点-->
                                                        <div class="item fore1">
                                                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <div class="contiw-cer"><span class="share-icon-1"></span></div>
                                            <a href="/index.php/Home/Goods/goodsList/id/1.html" title="手机 、 数码 、 通信">手机 、 数码 、 通信</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="subitems">
                                                                                            <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/12.html" target="_blank">手机配件<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/100.html" target="_blank">电池 电源 充电器</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/102.html" target="_blank">贴膜,保护套</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/13.html" target="_blank">摄影摄像<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/103.html" target="_blank">数码相机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/104.html" target="_blank">单反相机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/105.html" target="_blank">摄像机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/106.html" target="_blank">镜头</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/107.html" target="_blank">数码相框</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/14.html" target="_blank">运营商<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/108.html" target="_blank">选号码</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/109.html" target="_blank">办套餐</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/110.html" target="_blank">合约机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/111.html" target="_blank">中国移动</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/15.html" target="_blank">数码配件<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/112.html" target="_blank">充值卡</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/113.html" target="_blank">读卡器</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/114.html" target="_blank">支架</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/115.html" target="_blank">滤镜</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/16.html" target="_blank">娱乐影视<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/116.html" target="_blank">音响麦克风</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/117.html" target="_blank">耳机/耳麦</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/17.html" target="_blank">电子教育<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/118.html" target="_blank">学生平板</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/119.html" target="_blank">点读机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/120.html" target="_blank">电纸书</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/121.html" target="_blank">电子词典</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/122.html" target="_blank">复读机</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/18.html" target="_blank">手机通讯<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/124.html" target="_blank">对讲机</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/123.html" target="_blank">手机<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                            </dd>
                                                </dl>
                                                                                            <!--商品分类底部广告-s-->
                                            <div class="advertisement_down">
                                                <ul>                                                
                                                                                                            <li>
                                                            <a href="http://www.tp-shop.cn/" >
                                                                <img src="/public/upload/ad/2017/05-20/b6978d49ea385b990772c356af29d54f.jpg" title="" style="" width="129" height="45"/>
                                                            </a>
                                                        </li>
                                                                                                    
                                                </ul>
                                            </div>
                                            <!--商品分类底部广告-e-->
                                        </div>
                                    </div>
                                    <!--商品分类右侧广告-s-->
                                    <div class="cata-nav-rigth">
                                                                                    <a href="http://www.tp-shop.cn" target="_blank">
                                                <img src="/public/upload/ad/2017/05-20/aa6a2d01e781859ca75eb915c7fa27ce.jpg" title="" style=""/>
                                            </a>
                                                                            </div>
                                    <!--商品分类右侧广告-e-->
                                </div>
                            </div>
                                                        <div class="item fore1">
                                                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <div class="contiw-cer"><span class="share-icon-2"></span></div>
                                            <a href="/index.php/Home/Goods/goodsList/id/2.html" title="家用电器">家用电器</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="subitems">
                                                                                            <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/19.html" target="_blank">生活电器<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/125.html" target="_blank">录音机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/126.html" target="_blank">饮水机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/127.html" target="_blank">烫衣机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/128.html" target="_blank">电风扇</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/129.html" target="_blank">电话机</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/20.html" target="_blank">大家电<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/130.html" target="_blank">电视</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/131.html" target="_blank">冰箱</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/132.html" target="_blank">空调</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/133.html" target="_blank">洗衣机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/134.html" target="_blank">热水器</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/21.html" target="_blank">厨房电器<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/135.html" target="_blank">料理/榨汁机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/136.html" target="_blank">电饭锅</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/137.html" target="_blank">微波炉</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/138.html" target="_blank">豆浆机</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/22.html" target="_blank">个护健康<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/139.html" target="_blank">剃须刀</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/140.html" target="_blank">吹风机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/141.html" target="_blank">按摩器</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/142.html" target="_blank">足浴盆</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/143.html" target="_blank">血压计</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/23.html" target="_blank">五金交电<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/144.html" target="_blank">厨卫五金</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/145.html" target="_blank">门铃门锁</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/146.html" target="_blank">开关插座</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/147.html" target="_blank">电动工具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/148.html" target="_blank">监控安防</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/149.html" target="_blank">仪表仪器</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/150.html" target="_blank">电线线缆</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/151.html" target="_blank">浴霸/排气扇</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/152.html" target="_blank">灯具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/153.html" target="_blank">水龙头</a>                                                    </dd>
                                                </dl>
                                                                                            <!--商品分类底部广告-s-->
                                            <div class="advertisement_down">
                                                <ul>                                                
                                                                                                            <li>
                                                            <a href="http://www.tp-shop.cn/" >
                                                                <img src="/public/upload/ad/2017/05-20/b6978d49ea385b990772c356af29d54f.jpg" title="" style="" width="129" height="45"/>
                                                            </a>
                                                        </li>
                                                                                                    
                                                </ul>
                                            </div>
                                            <!--商品分类底部广告-e-->
                                        </div>
                                    </div>
                                    <!--商品分类右侧广告-s-->
                                    <div class="cata-nav-rigth">
                                                                                    <a href="http://www.tp-shop.cn" target="_blank">
                                                <img src="/public/upload/ad/2017/05-20/aa6a2d01e781859ca75eb915c7fa27ce.jpg" title="" style=""/>
                                            </a>
                                                                            </div>
                                    <!--商品分类右侧广告-e-->
                                </div>
                            </div>
                                                        <div class="item fore1">
                                                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <div class="contiw-cer"><span class="share-icon-3"></span></div>
                                            <a href="/index.php/Home/Goods/goodsList/id/3.html" title="电脑、办公">电脑、办公</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="subitems">
                                                                                            <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/24.html" target="_blank">网络产品<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/154.html" target="_blank">网络配件</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/155.html" target="_blank">路由器</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/156.html" target="_blank">网卡</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/157.html" target="_blank">交换机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/158.html" target="_blank">网络存储</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/159.html" target="_blank">3G/4G/5G上网</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/160.html" target="_blank">网络盒子</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/25.html" target="_blank">办公设备<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/161.html" target="_blank">复合机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/162.html" target="_blank">办公家具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/163.html" target="_blank">摄影机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/164.html" target="_blank">碎纸机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/165.html" target="_blank">白板</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/166.html" target="_blank">投影配件</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/167.html" target="_blank">考勤机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/168.html" target="_blank">多功能一体机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/169.html" target="_blank">收款/POS机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/170.html" target="_blank">打印机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/171.html" target="_blank">会员视频音频</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/172.html" target="_blank">传真设备</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/173.html" target="_blank">保险柜</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/174.html" target="_blank">验钞/点钞机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/175.html" target="_blank">装订/封装机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/176.html" target="_blank">扫描设备</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/177.html" target="_blank">安防监控</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/26.html" target="_blank">文具耗材<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/178.html" target="_blank">文具管理</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/179.html" target="_blank">本册便签</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/180.html" target="_blank">硒鼓/墨粉</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/181.html" target="_blank">计算器</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/182.html" target="_blank">墨盒</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/183.html" target="_blank">笔类</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/184.html" target="_blank">色带</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/185.html" target="_blank">画具画材</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/186.html" target="_blank">纸类</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/187.html" target="_blank">财会用品</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/188.html" target="_blank">办公文具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/189.html" target="_blank">刻录碟片</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/190.html" target="_blank">学生文具</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/27.html" target="_blank">电脑整机<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/191.html" target="_blank">平板电脑</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/192.html" target="_blank">台式机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/193.html" target="_blank">一体机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/194.html" target="_blank">笔记本</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/195.html" target="_blank">超极本</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/28.html" target="_blank">电脑配件<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/196.html" target="_blank">内存</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/197.html" target="_blank">组装电脑</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/198.html" target="_blank">机箱</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/199.html" target="_blank">电源</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/200.html" target="_blank">CPU</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/201.html" target="_blank">显示器</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/202.html" target="_blank">主板</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/203.html" target="_blank">刻录机/光驱</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/204.html" target="_blank">显卡</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/205.html" target="_blank">声卡/扩展卡</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/206.html" target="_blank">硬盘</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/207.html" target="_blank">散热器</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/208.html" target="_blank">固态硬盘</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/209.html" target="_blank">装机配件</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/29.html" target="_blank">外设产品<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/210.html" target="_blank">线缆</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/211.html" target="_blank">鼠标</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/212.html" target="_blank">手写板</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/213.html" target="_blank">键盘</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/214.html" target="_blank">电脑工具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/215.html" target="_blank">网络仪表仪器</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/216.html" target="_blank">UPS</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/217.html" target="_blank">U盘</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/218.html" target="_blank">插座</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/219.html" target="_blank">移动硬盘</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/220.html" target="_blank">鼠标垫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/221.html" target="_blank">摄像头</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/30.html" target="_blank">游戏设备<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/222.html" target="_blank">游戏软件</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/223.html" target="_blank">游戏周边</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/224.html" target="_blank">游戏机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/225.html" target="_blank">游戏耳机</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/226.html" target="_blank">手柄方向盘</a>                                                    </dd>
                                                </dl>
                                                                                            <!--商品分类底部广告-s-->
                                            <div class="advertisement_down">
                                                <ul>                                                
                                                                                                            <li>
                                                            <a href="http://www.tp-shop.cn/" >
                                                                <img src="/public/upload/ad/2017/05-20/b6978d49ea385b990772c356af29d54f.jpg" title="" style="" width="129" height="45"/>
                                                            </a>
                                                        </li>
                                                                                                    
                                                </ul>
                                            </div>
                                            <!--商品分类底部广告-e-->
                                        </div>
                                    </div>
                                    <!--商品分类右侧广告-s-->
                                    <div class="cata-nav-rigth">
                                                                                    <a href="http://www.tp-shop.cn" target="_blank">
                                                <img src="/public/upload/ad/2017/05-20/aa6a2d01e781859ca75eb915c7fa27ce.jpg" title="" style=""/>
                                            </a>
                                                                            </div>
                                    <!--商品分类右侧广告-e-->
                                </div>
                            </div>
                                                        <div class="item fore1">
                                                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <div class="contiw-cer"><span class="share-icon-4"></span></div>
                                            <a href="/index.php/Home/Goods/goodsList/id/4.html" title="家居、家具、家装、厨具">家居、家具、家装、厨具</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="subitems">
                                                                                            <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/31.html" target="_blank">生活日用<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/227.html" target="_blank">清洁工具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/228.html" target="_blank">收纳用品</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/229.html" target="_blank">雨伞雨具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/230.html" target="_blank">浴室用品</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/231.html" target="_blank">缝纫/针织用品</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/232.html" target="_blank">洗晒/熨烫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/233.html" target="_blank">净化除味</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/32.html" target="_blank">家装软饰<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/234.html" target="_blank">节庆饰品</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/235.html" target="_blank">手工/十字绣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/236.html" target="_blank">桌布/罩件</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/237.html" target="_blank">钟饰</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/238.html" target="_blank">地毯地垫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/239.html" target="_blank">装饰摆件</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/240.html" target="_blank">沙发垫套/椅垫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/241.html" target="_blank">花瓶花艺</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/242.html" target="_blank">帘艺隔断</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/243.html" target="_blank">创意家居</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/244.html" target="_blank">相框/照片墙</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/245.html" target="_blank">保暖防护</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/246.html" target="_blank">装饰字画</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/247.html" target="_blank">香薰蜡烛</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/248.html" target="_blank">墙贴/装饰贴</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/33.html" target="_blank">宠物生活<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/249.html" target="_blank">水族用品</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/250.html" target="_blank">宠物玩具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/251.html" target="_blank">宠物主粮</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/252.html" target="_blank">宠物牵引</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/253.html" target="_blank">宠物零食</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/254.html" target="_blank">宠物驱虫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/255.html" target="_blank">猫砂/尿布</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/256.html" target="_blank">洗护美容</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/257.html" target="_blank">家居日用</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/258.html" target="_blank">医疗保健</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/259.html" target="_blank">出行装备</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/34.html" target="_blank">厨具<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/260.html" target="_blank">剪刀菜饭</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/261.html" target="_blank">厨房配件</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/262.html" target="_blank">水具酒具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/263.html" target="_blank">餐具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/264.html" target="_blank">茶具/咖啡具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/265.html" target="_blank">烹饪锅具</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/35.html" target="_blank">家装建材<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/266.html" target="_blank">电工电料</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/267.html" target="_blank">墙地材料</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/268.html" target="_blank">装饰材料</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/269.html" target="_blank">装修服务</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/270.html" target="_blank">沐浴花洒</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/271.html" target="_blank">灯饰照明</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/272.html" target="_blank">开关插座</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/273.html" target="_blank">厨房卫浴</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/274.html" target="_blank">油漆涂料</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/275.html" target="_blank">五金工具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/276.html" target="_blank">龙头</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/36.html" target="_blank">家纺<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/277.html" target="_blank">床品套件</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/278.html" target="_blank">抱枕靠垫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/279.html" target="_blank">被子</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/280.html" target="_blank">布艺软饰</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/281.html" target="_blank">被芯</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/282.html" target="_blank">窗帘窗纱</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/283.html" target="_blank">床单被罩</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/284.html" target="_blank">蚊帐</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/285.html" target="_blank">床垫床褥</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/286.html" target="_blank">凉席</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/287.html" target="_blank">电地毯</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/288.html" target="_blank">毯子</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/289.html" target="_blank">毛巾浴巾</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/37.html" target="_blank">家具<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/290.html" target="_blank">餐厅家具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/291.html" target="_blank">电脑椅</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/292.html" target="_blank">书房家具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/293.html" target="_blank">衣柜</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/294.html" target="_blank">储物家具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/295.html" target="_blank">茶几</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/296.html" target="_blank">阳台/户外</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/297.html" target="_blank">电视柜</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/298.html" target="_blank">商业办公</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/299.html" target="_blank">餐桌</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/300.html" target="_blank">卧室家具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/301.html" target="_blank">床</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/302.html" target="_blank">电脑桌</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/303.html" target="_blank">客厅家具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/304.html" target="_blank">床垫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/305.html" target="_blank">鞋架/衣帽架</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/306.html" target="_blank">客厅家具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/307.html" target="_blank">沙发</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/38.html" target="_blank">灯具<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/308.html" target="_blank">吸顶灯</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/309.html" target="_blank">吊灯</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/310.html" target="_blank">筒灯射灯</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/311.html" target="_blank">氛围照明</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/312.html" target="_blank">LED灯</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/313.html" target="_blank">节能灯</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/314.html" target="_blank">落地灯</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/315.html" target="_blank">五金电器</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/316.html" target="_blank">应急灯/手电</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/317.html" target="_blank">台灯</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/318.html" target="_blank">装饰灯</a>                                                    </dd>
                                                </dl>
                                                                                            <!--商品分类底部广告-s-->
                                            <div class="advertisement_down">
                                                <ul>                                                
                                                                                                            <li>
                                                            <a href="http://www.tp-shop.cn/" >
                                                                <img src="/public/upload/ad/2017/05-20/b6978d49ea385b990772c356af29d54f.jpg" title="" style="" width="129" height="45"/>
                                                            </a>
                                                        </li>
                                                                                                    
                                                </ul>
                                            </div>
                                            <!--商品分类底部广告-e-->
                                        </div>
                                    </div>
                                    <!--商品分类右侧广告-s-->
                                    <div class="cata-nav-rigth">
                                                                                    <a href="http://www.tp-shop.cn" target="_blank">
                                                <img src="/public/upload/ad/2017/05-20/aa6a2d01e781859ca75eb915c7fa27ce.jpg" title="" style=""/>
                                            </a>
                                                                            </div>
                                    <!--商品分类右侧广告-e-->
                                </div>
                            </div>
                                                        <div class="item fore1">
                                                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <div class="contiw-cer"><span class="share-icon-5"></span></div>
                                            <a href="/index.php/Home/Goods/goodsList/id/5.html" title="男装、女装、童装、内衣">男装、女装、童装、内衣</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="subitems">
                                                                                            <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/39.html" target="_blank">女装<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/319.html" target="_blank">短外套</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/320.html" target="_blank">羊毛衫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/321.html" target="_blank">雪纺衫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/322.html" target="_blank">礼服</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/323.html" target="_blank">风衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/324.html" target="_blank">羊绒衫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/325.html" target="_blank">牛仔裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/326.html" target="_blank">马甲</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/327.html" target="_blank">衬衫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/328.html" target="_blank">半身裙</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/329.html" target="_blank">休闲裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/330.html" target="_blank">吊带/背心</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/331.html" target="_blank">羽绒服</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/332.html" target="_blank">T恤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/333.html" target="_blank">大码女装</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/334.html" target="_blank">正装裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/335.html" target="_blank">设计师/潮牌</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/336.html" target="_blank">毛呢大衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/337.html" target="_blank">小西装</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/338.html" target="_blank">中老年女装</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/339.html" target="_blank">加绒裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/340.html" target="_blank">棉服</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/341.html" target="_blank">打底衫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/342.html" target="_blank">皮草</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/343.html" target="_blank">短裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/344.html" target="_blank">连衣裙</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/345.html" target="_blank">打底裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/346.html" target="_blank">真皮皮衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/347.html" target="_blank">婚纱</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/348.html" target="_blank">卫衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/349.html" target="_blank">针织衫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/350.html" target="_blank">仿皮皮衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/351.html" target="_blank">旗袍/唐装</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/40.html" target="_blank">男装<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/352.html" target="_blank">羊毛衫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/353.html" target="_blank">休闲裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/354.html" target="_blank">POLO衫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/355.html" target="_blank">加绒裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/356.html" target="_blank">衬衫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/357.html" target="_blank">短裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/358.html" target="_blank">真皮皮衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/359.html" target="_blank">毛呢大衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/360.html" target="_blank">中老年男装</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/361.html" target="_blank">卫衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/362.html" target="_blank">风衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/363.html" target="_blank">大码男装</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/364.html" target="_blank">羽绒服</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/365.html" target="_blank">T恤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/366.html" target="_blank">仿皮皮衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/367.html" target="_blank">羊绒衫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/368.html" target="_blank">棉服</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/369.html" target="_blank">马甲/背心</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/370.html" target="_blank">西服</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/371.html" target="_blank">设计师/潮牌</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/372.html" target="_blank">针织衫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/373.html" target="_blank">西服套装</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/374.html" target="_blank">西裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/375.html" target="_blank">工装</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/376.html" target="_blank">夹克</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/377.html" target="_blank">牛仔裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/378.html" target="_blank">卫裤/运动裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/379.html" target="_blank">唐装/中山装</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/41.html" target="_blank">内衣<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/380.html" target="_blank">保暖内衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/381.html" target="_blank">大码内衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/382.html" target="_blank">吊带/背心</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/383.html" target="_blank">秋衣秋裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/384.html" target="_blank">文胸</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/385.html" target="_blank">内衣配件</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/386.html" target="_blank">睡衣/家居服</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/387.html" target="_blank">男式内裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/388.html" target="_blank">泳衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/389.html" target="_blank">打底裤袜</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/390.html" target="_blank">女式内裤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/391.html" target="_blank">塑身美体</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/392.html" target="_blank">休闲棉袜</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/393.html" target="_blank">连裤袜/丝袜</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/394.html" target="_blank">美腿袜</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/395.html" target="_blank">商务男袜</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/396.html" target="_blank">打底衫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/397.html" target="_blank">情趣内衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/398.html" target="_blank">情侣睡衣</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/399.html" target="_blank">少女文胸</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/400.html" target="_blank">文胸套装</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/401.html" target="_blank">抹胸</a>                                                    </dd>
                                                </dl>
                                                                                            <!--商品分类底部广告-s-->
                                            <div class="advertisement_down">
                                                <ul>                                                
                                                                                                            <li>
                                                            <a href="http://www.tp-shop.cn/" >
                                                                <img src="/public/upload/ad/2017/05-20/b6978d49ea385b990772c356af29d54f.jpg" title="" style="" width="129" height="45"/>
                                                            </a>
                                                        </li>
                                                                                                    
                                                </ul>
                                            </div>
                                            <!--商品分类底部广告-e-->
                                        </div>
                                    </div>
                                    <!--商品分类右侧广告-s-->
                                    <div class="cata-nav-rigth">
                                                                                    <a href="http://www.tp-shop.cn" target="_blank">
                                                <img src="/public/upload/ad/2017/05-20/aa6a2d01e781859ca75eb915c7fa27ce.jpg" title="" style=""/>
                                            </a>
                                                                            </div>
                                    <!--商品分类右侧广告-e-->
                                </div>
                            </div>
                                                        <div class="item fore1">
                                                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <div class="contiw-cer"><span class="share-icon-7"></span></div>
                                            <a href="/index.php/Home/Goods/goodsList/id/7.html" title="鞋、箱包、珠宝、手表">鞋、箱包、珠宝、手表</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="subitems">
                                                                                            <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/49.html" target="_blank">精品男包<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/436.html" target="_blank">商务公文包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/437.html" target="_blank">单肩/斜挎包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/438.html" target="_blank">男士手包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/439.html" target="_blank">双肩包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/440.html" target="_blank">钱包/卡包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/441.html" target="_blank">钥匙包</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/50.html" target="_blank">功能箱包<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/442.html" target="_blank">旅行包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/443.html" target="_blank">妈咪包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/444.html" target="_blank">电脑包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/445.html" target="_blank">休闲运动包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/446.html" target="_blank">相机包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/447.html" target="_blank">腰包/胸包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/448.html" target="_blank">登山包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/449.html" target="_blank">旅行配件</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/450.html" target="_blank">拉杆箱/拉杆包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/451.html" target="_blank">书包</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/51.html" target="_blank">珠宝<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/452.html" target="_blank">彩宝</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/453.html" target="_blank">时尚饰品</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/454.html" target="_blank">铂金</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/455.html" target="_blank">钻石</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/456.html" target="_blank">天然木饰</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/457.html" target="_blank">翡翠玉石</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/458.html" target="_blank">珍珠</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/459.html" target="_blank">纯金K金饰品</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/460.html" target="_blank">金银投资</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/461.html" target="_blank">银饰</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/462.html" target="_blank">水晶玛瑙</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/52.html" target="_blank">钟表<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/463.html" target="_blank">座钟挂钟</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/464.html" target="_blank">男表</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/465.html" target="_blank">女表</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/466.html" target="_blank">儿童表</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/467.html" target="_blank">智能手表</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/53.html" target="_blank">时尚女鞋<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/468.html" target="_blank">女靴</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/469.html" target="_blank">布鞋/绣花鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/470.html" target="_blank">鱼嘴鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/471.html" target="_blank">雪地靴</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/472.html" target="_blank">凉鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/473.html" target="_blank">雨鞋/雨靴</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/474.html" target="_blank">单鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/475.html" target="_blank">拖鞋/人字拖</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/476.html" target="_blank">鞋配件</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/477.html" target="_blank">高跟鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/478.html" target="_blank">马丁靴</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/479.html" target="_blank">帆布鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/480.html" target="_blank">休闲鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/481.html" target="_blank">妈妈鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/482.html" target="_blank">踝靴</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/483.html" target="_blank">防水台</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/484.html" target="_blank">内增高</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/485.html" target="_blank">松糕鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/486.html" target="_blank">坡跟鞋</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/54.html" target="_blank">流行男鞋<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/487.html" target="_blank">增高鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/488.html" target="_blank">鞋配件</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/489.html" target="_blank">拖鞋/人字拖</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/490.html" target="_blank">凉鞋/沙滩鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/491.html" target="_blank">休闲鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/492.html" target="_blank">雨鞋/雨靴</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/493.html" target="_blank">商务休闲鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/494.html" target="_blank">定制鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/495.html" target="_blank">正装鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/496.html" target="_blank">男靴</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/497.html" target="_blank">帆布鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/498.html" target="_blank">传统布鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/499.html" target="_blank">工装鞋</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/500.html" target="_blank">功能鞋</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/55.html" target="_blank">潮流女包<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/501.html" target="_blank">钥匙包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/502.html" target="_blank">单肩包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/503.html" target="_blank">手提包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/504.html" target="_blank">斜挎包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/505.html" target="_blank">双肩包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/506.html" target="_blank">钱包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/507.html" target="_blank">手拿包/晚宴包</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/508.html" target="_blank">卡包/零钱包</a>                                                    </dd>
                                                </dl>
                                                                                            <!--商品分类底部广告-s-->
                                            <div class="advertisement_down">
                                                <ul>                                                
                                                                                                            <li>
                                                            <a href="http://www.tp-shop.cn/" >
                                                                <img src="/public/upload/ad/2017/05-20/b6978d49ea385b990772c356af29d54f.jpg" title="" style="" width="129" height="45"/>
                                                            </a>
                                                        </li>
                                                                                                    
                                                </ul>
                                            </div>
                                            <!--商品分类底部广告-e-->
                                        </div>
                                    </div>
                                    <!--商品分类右侧广告-s-->
                                    <div class="cata-nav-rigth">
                                                                                    <a href="http://www.tp-shop.cn" target="_blank">
                                                <img src="/public/upload/ad/2017/05-20/aa6a2d01e781859ca75eb915c7fa27ce.jpg" title="" style=""/>
                                            </a>
                                                                            </div>
                                    <!--商品分类右侧广告-e-->
                                </div>
                            </div>
                                                        <div class="item fore1">
                                                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <div class="contiw-cer"><span class="share-icon-6"></span></div>
                                            <a href="/index.php/Home/Goods/goodsList/id/6.html" title="个人化妆">个人化妆</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="subitems">
                                                                                            <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/42.html" target="_blank">身体护肤<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/402.html" target="_blank">沐浴</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/403.html" target="_blank">润肤</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/404.html" target="_blank">颈部</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/405.html" target="_blank">手足</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/406.html" target="_blank">纤体塑形</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/407.html" target="_blank">美胸</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/408.html" target="_blank">套装</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/43.html" target="_blank">口腔护理<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/409.html" target="_blank">牙膏/牙粉</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/410.html" target="_blank">牙刷/牙线</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/411.html" target="_blank">漱口水</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/412.html" target="_blank">套装</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/44.html" target="_blank">女性护理<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/413.html" target="_blank">卫生巾</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/414.html" target="_blank">卫生护垫</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/415.html" target="_blank">私密护理</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/416.html" target="_blank">脱毛膏</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/45.html" target="_blank">香水彩妆<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/417.html" target="_blank">唇部</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/418.html" target="_blank">美甲</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/419.html" target="_blank">美容工具</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/420.html" target="_blank">套装</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/421.html" target="_blank">香水</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/422.html" target="_blank">底妆</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/423.html" target="_blank">腮红</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/424.html" target="_blank">眼部</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/46.html" target="_blank">清洁用品<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/95.html" target="_blank">纸品湿巾</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/96.html" target="_blank">衣物清洁</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/97.html" target="_blank">家庭清洁</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/98.html" target="_blank">一次性用品</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/99.html" target="_blank">驱虫用品</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/47.html" target="_blank">面部护肤<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/425.html" target="_blank">面膜</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/426.html" target="_blank">剃须</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/427.html" target="_blank">套装</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/428.html" target="_blank">清洁</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/429.html" target="_blank">护肤</a>                                                    </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/index.php/Home/Goods/goodsList/id/48.html" target="_blank">洗发护发<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                                    <a href="/index.php/Home/Goods/goodsList/id/430.html" target="_blank">套装</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/431.html" target="_blank">洗发</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/432.html" target="_blank">护发</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/433.html" target="_blank">染发</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/434.html" target="_blank">造型</a>                                                            <a href="/index.php/Home/Goods/goodsList/id/435.html" target="_blank">假发</a>                                                    </dd>
                                                </dl>
                                                                                            <!--商品分类底部广告-s-->
                                            <div class="advertisement_down">
                                                <ul>                                                
                                                                                                            <li>
                                                            <a href="http://www.tp-shop.cn/" >
                                                                <img src="/public/upload/ad/2017/05-20/b6978d49ea385b990772c356af29d54f.jpg" title="" style="" width="129" height="45"/>
                                                            </a>
                                                        </li>
                                                                                                    
                                                </ul>
                                            </div>
                                            <!--商品分类底部广告-e-->
                                        </div>
                                    </div>
                                    <!--商品分类右侧广告-s-->
                                    <div class="cata-nav-rigth">
                                                                                    <a href="http://www.tp-shop.cn" target="_blank">
                                                <img src="/public/upload/ad/2017/05-20/aa6a2d01e781859ca75eb915c7fa27ce.jpg" title="" style=""/>
                                            </a>
                                                                            </div>
                                    <!--商品分类右侧广告-e-->
                                </div>
                            </div>
                                                    </div>
                    </div>
                    <!--全部商品分类-e-->
                </div>
                <!--导航栏-s-->
                 <div class="navitems" id="nav">
                    <ul>
                        <li class="index_modify">
                            <a href="/index.php/home/Index/index.html" class="selected">首页</a>
                        </li>
                                                    <li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=123" target="_blank" <span>手机城</span></a></li>
                                                    <li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=51" target="_blank" <span>珠宝</span></a></li>
                                                    <li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=goodsList&amp;id=20" target="_blank" <span>家电城</span></a></li>
                                                    <li class="page"><a href="/index.php?m=Home&c=Activity&a=promoteList" <span>促销商品</span></a></li>
                                                    <li class="page"><a href="/index.php?m=Home&amp;c=Activity&amp;a=pre_sell_list" target="_blank" <span>预售</span></a></li>
                                                    <li class="page"><a href="/index.php/Home/Goods/goodsList/id/1.html" target="_blank" <span>数码城</span></a></li>
                                                    <li class="page"><a href="/index.php?m=Home&amp;c=Activity&amp;a=group_list" <span>团购</span></a></li>
                                                    <li class="page"><a href="/index.php?m=Home&amp;c=Goods&amp;a=integralMall" <span>积分商城</span></a></li>
                                            </ul>
                    <!-- <div class="wrap-line" style="width: 72px; left: 20px;">
                        <span style="left:15px;"></span>
                    </div> -->
                </div>
                <!--导航栏-e-->
            </div>
        </div>
        <!--商品分类-e-->
    </div>
    <!--header-e-->
<div class="search-box p">
	<div class="w1430">
		<div class="search-path fl">
			<a href="/index.php/Home/Goods/goodsList/id/1.html">全部结果</a>
			<i class="litt-xyb"></i>
							<a href="/index.php/Home/Goods/goodsList/id/1.html">手机 、 数码 、 通信</a>
							<i class="litt-xyb"></i>
			<!--如果当前分类是三级分类 则二级也要显示-->
						<!--如果当前分类是三级分类 则二级也要显示-->
						<!--当前分类-->
							<div class="havedox">
					<div class="disenk"><span><a href="/index.php/Home/Goods/goodsList/id/1.html">手机 、 数码 、 通信</a></span><i class="litt-xxd"></i></div>
					<div class="hovshz">
						<ul>
															<li><a href="/index.php/Home/Goods/goodsList/id/12.html">手机配件</a></li>
															<li><a href="/index.php/Home/Goods/goodsList/id/13.html">摄影摄像</a></li>
															<li><a href="/index.php/Home/Goods/goodsList/id/14.html">运营商</a></li>
															<li><a href="/index.php/Home/Goods/goodsList/id/15.html">数码配件</a></li>
															<li><a href="/index.php/Home/Goods/goodsList/id/16.html">娱乐影视</a></li>
															<li><a href="/index.php/Home/Goods/goodsList/id/17.html">电子教育</a></li>
															<li><a href="/index.php/Home/Goods/goodsList/id/18.html">手机通讯</a></li>
															<li><a href="/index.php/Home/Goods/goodsList/id/123.html">手机</a></li>
													</ul>
					</div>
				</div>
				<i class="litt-xyb"></i>
					</div>
				<div class="search-clear fr">
			<span><a href="/index.php/Home/Goods/goodsList/id/1.html">清空筛选条件</a></span>
		</div>
	</div>
</div>
<!-- 筛选 start -->
<div class="search-opt troblect">
    <div class="w1430">
        <div class="opt-list">
            <!-- 品牌筛选 start -->
                            <dl class="brand-section m-tr">
                    <dt>品牌</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-box brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/brand_id/11" data-href="/index.php/home/Goods/goodsList/id/1/brand_id/11"  data-key='brand' data-val='11'>
                                            <i class="litt-zd"></i>
                                            <img src="/public/upload/brand/2016/04-01/11887884.jpg"/>
                                            <span>品牌-首信/capital</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/brand_id/17" data-href="/index.php/home/Goods/goodsList/id/1/brand_id/17"  data-key='brand' data-val='17'>
                                            <i class="litt-zd"></i>
                                            <img src="/public/upload/brand/2016/04-01/17747973.jpg"/>
                                            <span>品牌-现代/HYUNDAI</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm" onClick="submitMoreFilter('brand',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                        <!-- 品牌筛选 end -->
            <!-- 规格筛选 start -->
                                <dl class="brand-section m-tr">
                        <dt>屏幕</dt>
                        <dd class="ri-section">
                            <div class="lf-list">
                                <div class="brand-list">
                                    <div class="clearfix p">
                                                                                    <a href="/index.php/home/Goods/goodsList/id/1/spec/7_21" data-href="/index.php/home/Goods/goodsList/id/1/spec/7_21" data-key='7' data-val='21'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>触屏</span>
                                            </a>
                                                                            </div>
                                    <div class="surclofix p">
                                        <a href="javascript:;" class="u-confirm" onClick="submitMoreFilter('spec',this);">确定</a>
                                        <a href="javascript:;" class="u-cancel">取消</a>
                                    </div>
                                </div>
                            </div>
                            <div class="lr-more">
                                <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                            </div>
                        </dd>
                    </dl>
                                    <dl class="brand-section m-tr">
                        <dt>颜色</dt>
                        <dd class="ri-section">
                            <div class="lf-list">
                                <div class="brand-list">
                                    <div class="clearfix p">
                                                                                    <a href="/index.php/home/Goods/goodsList/id/1/spec/24_103" data-href="/index.php/home/Goods/goodsList/id/1/spec/24_103" data-key='24' data-val='103'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>土豪金</span>
                                            </a>
                                                                                    <a href="/index.php/home/Goods/goodsList/id/1/spec/24_104" data-href="/index.php/home/Goods/goodsList/id/1/spec/24_104" data-key='24' data-val='104'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>象牙白</span>
                                            </a>
                                                                                    <a href="/index.php/home/Goods/goodsList/id/1/spec/24_105" data-href="/index.php/home/Goods/goodsList/id/1/spec/24_105" data-key='24' data-val='105'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>宝石蓝</span>
                                            </a>
                                                                            </div>
                                    <div class="surclofix p">
                                        <a href="javascript:;" class="u-confirm" onClick="submitMoreFilter('spec',this);">确定</a>
                                        <a href="javascript:;" class="u-cancel">取消</a>
                                    </div>
                                </div>
                            </div>
                            <div class="lr-more">
                                <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                            </div>
                        </dd>
                    </dl>
                                    <dl class="brand-section m-tr">
                        <dt>合约套餐</dt>
                        <dd class="ri-section">
                            <div class="lf-list">
                                <div class="brand-list">
                                    <div class="clearfix p">
                                                                                    <a href="/index.php/home/Goods/goodsList/id/1/spec/25_106" data-href="/index.php/home/Goods/goodsList/id/1/spec/25_106" data-key='25' data-val='106'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>乐享4G套餐59元</span>
                                            </a>
                                                                                    <a href="/index.php/home/Goods/goodsList/id/1/spec/25_107" data-href="/index.php/home/Goods/goodsList/id/1/spec/25_107" data-key='25' data-val='107'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>乐享4G套餐79元</span>
                                            </a>
                                                                                    <a href="/index.php/home/Goods/goodsList/id/1/spec/25_108" data-href="/index.php/home/Goods/goodsList/id/1/spec/25_108" data-key='25' data-val='108'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>乐享4G套餐99元</span>
                                            </a>
                                                                                    <a href="/index.php/home/Goods/goodsList/id/1/spec/25_109" data-href="/index.php/home/Goods/goodsList/id/1/spec/25_109" data-key='25' data-val='109'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>乐享4G套餐129元</span>
                                            </a>
                                                                                    <a href="/index.php/home/Goods/goodsList/id/1/spec/25_110" data-href="/index.php/home/Goods/goodsList/id/1/spec/25_110" data-key='25' data-val='110'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>乐享4G套餐169元</span>
                                            </a>
                                                                                    <a href="/index.php/home/Goods/goodsList/id/1/spec/25_111" data-href="/index.php/home/Goods/goodsList/id/1/spec/25_111" data-key='25' data-val='111'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>乐享4G套餐199元</span>
                                            </a>
                                                                            </div>
                                    <div class="surclofix p">
                                        <a href="javascript:;" class="u-confirm" onClick="submitMoreFilter('spec',this);">确定</a>
                                        <a href="javascript:;" class="u-cancel">取消</a>
                                    </div>
                                </div>
                            </div>
                            <div class="lr-more">
                                <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                            </div>
                        </dd>
                    </dl>
                                    <dl class="brand-section m-tr">
                        <dt>套餐</dt>
                        <dd class="ri-section">
                            <div class="lf-list">
                                <div class="brand-list">
                                    <div class="clearfix p">
                                                                                    <a href="/index.php/home/Goods/goodsList/id/1/spec/26_112" data-href="/index.php/home/Goods/goodsList/id/1/spec/26_112" data-key='26' data-val='112'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>微型卡</span>
                                            </a>
                                                                                    <a href="/index.php/home/Goods/goodsList/id/1/spec/26_113" data-href="/index.php/home/Goods/goodsList/id/1/spec/26_113" data-key='26' data-val='113'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span>普通卡</span>
                                            </a>
                                                                            </div>
                                    <div class="surclofix p">
                                        <a href="javascript:;" class="u-confirm" onClick="submitMoreFilter('spec',this);">确定</a>
                                        <a href="javascript:;" class="u-cancel">取消</a>
                                    </div>
                                </div>
                            </div>
                            <div class="lr-more">
                                <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                            </div>
                        </dd>
                    </dl>
                            <!-- 规格筛选 end -->
            <!-- 属性筛选 start -->
                            <dl class="brand-section m-tr">
                    <dt>操作系统</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/69_Android 4.4+EMUI 3.0" data-href="/index.php/home/Goods/goodsList/id/1/attr/69_Android 4.4+EMUI 3.0" data-val='Android 4.4+EMUI 3.0' data-key='69'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >Android 4.4+EMUI 3.0</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/69_EMUI 3.1（兼容Android 5.1）" data-href="/index.php/home/Goods/goodsList/id/1/attr/69_EMUI 3.1（兼容Android 5.1）" data-val='EMUI 3.1（兼容Android 5.1）' data-key='69'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >EMUI 3.1（兼容Android 5.1）</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/69_华为 EMUI 3.1（兼容 Android 5.0）" data-href="/index.php/home/Goods/goodsList/id/1/attr/69_华为 EMUI 3.1（兼容 Android 5.0）" data-val='华为 EMUI 3.1（兼容 Android 5.0）' data-key='69'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >华为 EMUI 3.1（兼容 Android 5.0）</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/69_华为 EMUI 4.0（兼容Android 6.0）" data-href="/index.php/home/Goods/goodsList/id/1/attr/69_华为 EMUI 4.0（兼容Android 6.0）" data-val='华为 EMUI 4.0（兼容Android 6.0）' data-key='69'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >华为 EMUI 4.0（兼容Android 6.0）</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/69_android" data-href="/index.php/home/Goods/goodsList/id/1/attr/69_android" data-val='android' data-key='69'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >android</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/69_IOS" data-href="/index.php/home/Goods/goodsList/id/1/attr/69_IOS" data-val='IOS' data-key='69'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >IOS</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/69_ios" data-href="/index.php/home/Goods/goodsList/id/1/attr/69_ios" data-val='ios' data-key='69'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >ios</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>红外/蓝牙</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/80_BT4.0" data-href="/index.php/home/Goods/goodsList/id/1/attr/80_BT4.0" data-val='BT4.0' data-key='80'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >BT4.0</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/80_BT4.1" data-href="/index.php/home/Goods/goodsList/id/1/attr/80_BT4.1" data-val='BT4.1' data-key='80'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >BT4.1</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/80_BT4.1，支持BT4.1+LE" data-href="/index.php/home/Goods/goodsList/id/1/attr/80_BT4.1，支持BT4.1+LE" data-val='BT4.1，支持BT4.1+LE' data-key='80'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >BT4.1，支持BT4.1+LE</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/80_BT4.2 支持BLE" data-href="/index.php/home/Goods/goodsList/id/1/attr/80_BT4.2 支持BLE" data-val='BT4.2 支持BLE' data-key='80'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >BT4.2 支持BLE</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>上市日期</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/172_2008年06月" data-href="/index.php/home/Goods/goodsList/id/1/attr/172_2008年06月" data-val='2008年06月' data-key='172'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >2008年06月</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>颜色</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/185_黑色" data-href="/index.php/home/Goods/goodsList/id/1/attr/185_黑色" data-val='黑色' data-key='185'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >黑色</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>屏幕颜色</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/186_1600万" data-href="/index.php/home/Goods/goodsList/id/1/attr/186_1600万" data-val='1600万' data-key='186'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >1600万</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>屏幕分辨率</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/188_176x220 像素" data-href="/index.php/home/Goods/goodsList/id/1/attr/188_176x220 像素" data-val='176x220 像素' data-key='188'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >176x220 像素</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>产品名称</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/321_索扬 SY10-200" data-href="/index.php/home/Goods/goodsList/id/1/attr/321_索扬 SY10-200" data-val='索扬 SY10-200' data-key='321'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >索扬 SY10-200</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/321_ROMOSS/罗马仕 sense 6" data-href="/index.php/home/Goods/goodsList/id/1/attr/321_ROMOSS/罗马仕 sense 6" data-val='ROMOSS/罗马仕 sense 6' data-key='321'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >ROMOSS/罗马仕 sense 6</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/321_Xiaopad/小派 M20000" data-href="/index.php/home/Goods/goodsList/id/1/attr/321_Xiaopad/小派 M20000" data-val='Xiaopad/小派 M20000' data-key='321'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >Xiaopad/小派 M20000</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/321_ROMOSS/罗马仕 sense 4" data-href="/index.php/home/Goods/goodsList/id/1/attr/321_ROMOSS/罗马仕 sense 4" data-val='ROMOSS/罗马仕 sense 4' data-key='321'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >ROMOSS/罗马仕 sense 4</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/321_Xiaomi/小米" data-href="/index.php/home/Goods/goodsList/id/1/attr/321_Xiaomi/小米" data-val='Xiaomi/小米' data-key='321'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >Xiaomi/小米</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/321_科智 50000" data-href="/index.php/home/Goods/goodsList/id/1/attr/321_科智 50000" data-val='科智 50000' data-key='321'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >科智 50000</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>品牌</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/322_索扬" data-href="/index.php/home/Goods/goodsList/id/1/attr/322_索扬" data-val='索扬' data-key='322'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >索扬</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/322_ROMOSS/罗马仕" data-href="/index.php/home/Goods/goodsList/id/1/attr/322_ROMOSS/罗马仕" data-val='ROMOSS/罗马仕' data-key='322'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >ROMOSS/罗马仕</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/322_Xiaopad/小派" data-href="/index.php/home/Goods/goodsList/id/1/attr/322_Xiaopad/小派" data-val='Xiaopad/小派' data-key='322'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >Xiaopad/小派</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/322_Xiaomi/小米" data-href="/index.php/home/Goods/goodsList/id/1/attr/322_Xiaomi/小米" data-val='Xiaomi/小米' data-key='322'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >Xiaomi/小米</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/322_科智" data-href="/index.php/home/Goods/goodsList/id/1/attr/322_科智" data-val='科智' data-key='322'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >科智</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>电池容量</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/323_20000mAh" data-href="/index.php/home/Goods/goodsList/id/1/attr/323_20000mAh" data-val='20000mAh' data-key='323'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >20000mAh</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/323_15001mAh(含)-20000mAh" data-href="/index.php/home/Goods/goodsList/id/1/attr/323_15001mAh(含)-20000mAh" data-val='15001mAh(含)-20000mAh' data-key='323'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >15001mAh(含)-20000mAh</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/323_8100mAh" data-href="/index.php/home/Goods/goodsList/id/1/attr/323_8100mAh" data-val='8100mAh' data-key='323'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >8100mAh</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/323_10400mAh" data-href="/index.php/home/Goods/goodsList/id/1/attr/323_10400mAh" data-val='10400mAh' data-key='323'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >10400mAh</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/323_10000mAh移动电源 NDY-02-AN" data-href="/index.php/home/Goods/goodsList/id/1/attr/323_10000mAh移动电源 NDY-02-AN" data-val='10000mAh移动电源 NDY-02-AN' data-key='323'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >10000mAh移动电源 NDY-02-AN</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/323_16000mAh" data-href="/index.php/home/Goods/goodsList/id/1/attr/323_16000mAh" data-val='16000mAh' data-key='323'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >16000mAh</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>品牌</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/324_佳能" data-href="/index.php/home/Goods/goodsList/id/1/attr/324_佳能" data-val='佳能' data-key='324'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >佳能</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/324_尼康" data-href="/index.php/home/Goods/goodsList/id/1/attr/324_尼康" data-val='尼康' data-key='324'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >尼康</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/324_索尼" data-href="/index.php/home/Goods/goodsList/id/1/attr/324_索尼" data-val='索尼' data-key='324'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >索尼</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>单反级别</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/325_入门级" data-href="/index.php/home/Goods/goodsList/id/1/attr/325_入门级" data-val='入门级' data-key='325'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >入门级</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/325_中级" data-href="/index.php/home/Goods/goodsList/id/1/attr/325_中级" data-val='中级' data-key='325'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >中级</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/325_高级" data-href="/index.php/home/Goods/goodsList/id/1/attr/325_高级" data-val='高级' data-key='325'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >高级</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>屏幕尺寸</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/326_3英寸" data-href="/index.php/home/Goods/goodsList/id/1/attr/326_3英寸" data-val='3英寸' data-key='326'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >3英寸</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/326_3.2英寸" data-href="/index.php/home/Goods/goodsList/id/1/attr/326_3.2英寸" data-val='3.2英寸' data-key='326'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >3.2英寸</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>储存介质</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/327_SD卡" data-href="/index.php/home/Goods/goodsList/id/1/attr/327_SD卡" data-val='SD卡' data-key='327'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >SD卡</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/327_sd卡" data-href="/index.php/home/Goods/goodsList/id/1/attr/327_sd卡" data-val='sd卡' data-key='327'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >sd卡</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>像素</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/328_2416万" data-href="/index.php/home/Goods/goodsList/id/1/attr/328_2416万" data-val='2416万' data-key='328'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >2416万</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/328_1800万" data-href="/index.php/home/Goods/goodsList/id/1/attr/328_1800万" data-val='1800万' data-key='328'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >1800万</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/328_2020万" data-href="/index.php/home/Goods/goodsList/id/1/attr/328_2020万" data-val='2020万' data-key='328'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >2020万</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/328_2000万" data-href="/index.php/home/Goods/goodsList/id/1/attr/328_2000万" data-val='2000万' data-key='328'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >2000万</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/328_2010万" data-href="/index.php/home/Goods/goodsList/id/1/attr/328_2010万" data-val='2010万' data-key='328'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >2010万</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>手机制式</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/173_GSM,850,900,1800,1900" data-href="/index.php/home/Goods/goodsList/id/1/attr/173_GSM,850,900,1800,1900" data-val='GSM,850,900,1800,1900' data-key='173'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >GSM,850,900,1800,1900</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                            <dl class="brand-section m-tr">
                    <dt>外观样式</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/attr/178_翻盖" data-href="/index.php/home/Goods/goodsList/id/1/attr/178_翻盖" data-val='翻盖' data-key='178'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span >翻盖</span>
                                        </a>
                                                                    </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                                    </div>
                    </dd>
                </dl>
                        <!-- 属性筛选 end -->
            <!-- 价格筛选 start -->
                            <dl class="brand-section m-tr">
                    <dt>价格</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/price/0-1360">
                                            <span>1360元以下</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/price/1360-2720">
                                            <span>1360-2720元</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/price/2720-4080">
                                            <span>2720-4080元</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/price/4080-5440">
                                            <span>4080-5440元</span>
                                        </a>
                                                                            <a href="/index.php/home/Goods/goodsList/id/1/price/5440-6800">
                                            <span>5440-6800元</span>
                                        </a>
                                                                    </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <!--<a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>-->
                            <!--<a href="javascript:void(0)"><span class="gd_more">更多</span><i class="litt-tcr"></i></a>-->
                            <!--填写筛选价格区间-s-->
                            <form action="/index.php/Home/Goods/goodsList/id/1" method="post" id="price_form">
                                <input type="text" onpaste="this.value=this.value.replace(/[^\d]/g,'')" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" name="start_price" id="start_price" value=""/>
                                <span>-</span>
                                <input type="text" onpaste="this.value=this.value.replace(/[^\d]/g,'')" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"  name="end_price" id="end_price" value=""/>
                                <input type="submit" value="确定" onClick="if($('#start_price').val() !='' && $('#end_price').val() !='' ) $('#price_form').submit();"/>
                            </form>
                            <!--填写筛选价格区间-e-->
                        </div>
                    </dd>
                </dl>
                        <!-- 价格筛选 end -->
        </div>
        <p class="moreamore"><a >浏览更多</a></p>
    </div>
</div>
<!-- 筛选 end -->


<div class="shop-list-tour ma-to-20 p">
	<div class="w1430">
		<div class="tjhot fl">
			<div class="sx_topb"><h3>推荐热卖</h3></div>
			<div class="tjhot-shoplist" id="ajax_hot_goods">
                                    <div class="alone-shop">
                        <a href="/index.php/Home/Goods/goodsInfo/id/1.html"><img class="lazy" data-original="/public/upload/goods/thumb/1/goods_thumb_1_180_180.jpeg"/></a>
                        <p class="line-two-hidd"><a href="/index.php/Home/Goods/goodsInfo/id/1.html">Apple iPhone 6s Plus 16G 玫瑰金 移动联通电信4G手机</a></p>
                        <p class="price-tag"><span class="li_xfo">￥</span><span>6007.00</span></p>
                        <p class="store-alone"><a href="/index.php/Home/Store/index.html"></a></p>
                    </div>
                                    <div class="alone-shop">
                        <a href="/index.php/Home/Goods/goodsInfo/id/39.html"><img class="lazy" data-original="/public/upload/goods/thumb/39/goods_thumb_39_180_180.jpeg"/></a>
                        <p class="line-two-hidd"><a href="/index.php/Home/Goods/goodsInfo/id/39.html">华为（HUAWEI） M2 10.0 平板电脑 WiFi 月光银</a></p>
                        <p class="price-tag"><span class="li_xfo">￥</span><span>2288.00</span></p>
                        <p class="store-alone"><a href="/index.php/Home/Store/index.html"></a></p>
                    </div>
                                    <div class="alone-shop">
                        <a href="/index.php/Home/Goods/goodsInfo/id/40.html"><img class="lazy" data-original="/public/upload/goods/thumb/40/goods_thumb_40_180_180.jpeg"/></a>
                        <p class="line-two-hidd"><a href="/index.php/Home/Goods/goodsInfo/id/40.html">荣耀X2 标准版 双卡双待双通 移动/联通双4G 16GB ROM（月光银）</a></p>
                        <p class="price-tag"><span class="li_xfo">￥</span><span>1999.00</span></p>
                        <p class="store-alone"><a href="/index.php/Home/Store/index.html"></a></p>
                    </div>
                                    <div class="alone-shop">
                        <a href="/index.php/Home/Goods/goodsInfo/id/41.html"><img class="lazy" data-original="/public/upload/goods/thumb/41/goods_thumb_41_180_180.jpeg"/></a>
                        <p class="line-two-hidd"><a href="/index.php/Home/Goods/goodsInfo/id/41.html">华为（HUAWEI） M2 8英寸平板电脑（1920×1200 IPS屏 海思麒麟930 16GB WiFi）香槟金</a></p>
                        <p class="price-tag"><span class="li_xfo">￥</span><span>1588.00</span></p>
                        <p class="store-alone"><a href="/index.php/Home/Store/index.html"></a></p>
                    </div>
                                    <div class="alone-shop">
                        <a href="/index.php/Home/Goods/goodsInfo/id/42.html"><img class="lazy" data-original="/public/upload/goods/thumb/42/goods_thumb_42_180_180.png"/></a>
                        <p class="line-two-hidd"><a href="/index.php/Home/Goods/goodsInfo/id/42.html">Teclast/台电 X80 Plus WIFI 32GB Win10平板电脑双系统8英寸</a></p>
                        <p class="price-tag"><span class="li_xfo">￥</span><span>499.00</span></p>
                        <p class="store-alone"><a href="/index.php/Home/Store/index.html"></a></p>
                    </div>
                			</div>
		</div>
		<div class="stsho fr">
			<div class="sx_topb ba-dark-bg">
				<div class="f-sort fl">
					<ul>
						<li class="red">
                            <a href="/index.php/Home/Goods/goodsList/id/1">综合</a>
                        </li>
						<li class="">
                            <a href="/index.php/Home/Goods/goodsList/id/1/sort/sales_sum">销量</a>
                        </li>
													<li class="">
                                <a href="/index.php/Home/Goods/goodsList/id/1/sort/shop_price/sort_asc/desc">价格<i class="litt-zzx1"></i></a>
                            </li>
												<li class="">
                            <a href="/index.php/Home/Goods/goodsList/id/1/sort/comment_count">评论</a>
                        </li>
						<li class="">
                            <a href="/index.php/Home/Goods/goodsList/id/1/sort/is_new">新品</a>
                        </li>
					</ul>
				</div>
				<div class="f-address fl">
					<!--<div class="shd_address">-->
						<!--<div class="shd">收货地：</div>-->
						<!--<div class="add_cj_p"><input type="text" id="city" /></div>-->
					<!--</div>-->
				</div>
				<div class="f-total fr">
										<div class="all-sec">共<span>36</span>个商品</div>
					<div class="all-fy">
						<a >&lt;</a>
							<p class="fy-y"><span class="z-cur">1</span>/<span>3</span></p>
						<a href="/index.php/Home/Goods/goodsList/id/1/p/2.html" >&gt;</a>
					</div>
				</div>
			</div>
			<div class="shop-list-splb p">
				<ul>
                                                <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/1.html">
                                            <img class="lazy-list" data-original="/public/upload/goods/thumb/1/goods_thumb_1_236_236.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/03-09/56e01a54a2c6d.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/03-09/56e01a54bcc53.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/03-09/56e01a54de5a9.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/03-09/56e01a4088d3b.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em class="li_xfo">￥</em><em>6007.00</em></span>
                                        <span class="old"><em>￥</em><em>6107.00</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/1.html">
                                            Apple iPhone 6s Plus 16G 玫瑰金 移动联通电信4G手机                                        </a>
                                    </div>
                                    <div class="shop_name2">
                                        <a class="co_hchh" href="/index.php/Home/Store/index.html">
                                                                                    </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_1" type="text" value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add(1);" class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut(1);"  class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            <a href="javascript:void(0);" onclick="AjaxAddCart(1,$('#number_'+1).val(),0);">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                                    <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/45.html">
                                            <img class="lazy-list" data-original="/public/upload/goods/thumb/45/goods_thumb_45_236_236.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695e931ca316.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695e931b2751.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695e9319ae9b.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695e9317eceb.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em class="li_xfo">￥</em><em>1999.00</em></span>
                                        <span class="old"><em>￥</em><em>2099.00</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/45.html">
                                            华为 HUAWEI C199S 麦芒3S 电信4G智能手机FDD-LTE /TD-LTE/CDMA2000/GSM（麦芒金）                                        </a>
                                    </div>
                                    <div class="shop_name2">
                                        <a class="co_hchh" href="/index.php/Home/Store/index.html">
                                                                                    </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_45" type="text" value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add(45);" class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut(45);"  class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            <a href="javascript:void(0);" onclick="AjaxAddCart(45,$('#number_'+45).val(),0);">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                                    <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/46.html">
                                            <img class="lazy-list" data-original="/public/upload/goods/thumb/46/goods_thumb_46_236_236.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695ef5a121e0.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695ef59edc08.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695ef59db973.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695ef59bfea3.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em class="li_xfo">￥</em><em>999.00</em></span>
                                        <span class="old"><em>￥</em><em>1099.00</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/46.html">
                                            【北京移动老用户专享 话费六折】荣耀畅玩5X 双卡双待 移动版 智能手机（破晓银）                                        </a>
                                    </div>
                                    <div class="shop_name2">
                                        <a class="co_hchh" href="/index.php/Home/Store/index.html">
                                                                                    </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_46" type="text" value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add(46);" class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut(46);"  class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            <a href="javascript:void(0);" onclick="AjaxAddCart(46,$('#number_'+46).val(),0);">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                                    <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/47.html">
                                            <img class="lazy-list" data-original="/public/upload/goods/thumb/47/goods_thumb_47_236_236.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695f46121de2.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695f46109a55.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695f460d9be3.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em class="li_xfo">￥</em><em>1399.00</em></span>
                                        <span class="old"><em>￥</em><em>1499.00</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/47.html">
                                            【联通合约机 50元本地套餐】荣耀畅玩5X 双卡双待 增强全网通版 智能手机（落日金）                                        </a>
                                    </div>
                                    <div class="shop_name2">
                                        <a class="co_hchh" href="/index.php/Home/Store/index.html">
                                                                                    </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_47" type="text" value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add(47);" class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut(47);"  class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            <a href="javascript:void(0);" onclick="AjaxAddCart(47,$('#number_'+47).val(),0);">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                                    <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/48.html">
                                            <img class="lazy-list" data-original="/public/upload/goods/thumb/48/goods_thumb_48_236_236.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695f99db14f2.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5695f99d8cf8f.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em class="li_xfo">￥</em><em>2099.00</em></span>
                                        <span class="old"><em>￥</em><em>2199.00</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/48.html">
                                            荣耀7 双卡双待双通 移动4G版 16GB存储（冰河银）豪华套装一                                        </a>
                                    </div>
                                    <div class="shop_name2">
                                        <a class="co_hchh" href="/index.php/Home/Store/index.html">
                                                                                    </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_48" type="text" value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add(48);" class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut(48);"  class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            <a href="javascript:void(0);" onclick="AjaxAddCart(48,$('#number_'+48).val(),0);">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                                    <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/49.html">
                                            <img class="lazy-list" data-original="/public/upload/goods/thumb/49/goods_thumb_49_236_236.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/569600fcb09e9.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/569600fc992df.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/569600fc73203.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em class="li_xfo">￥</em><em>999.00</em></span>
                                        <span class="old"><em>￥</em><em>1099.00</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/49.html">
                                            荣耀畅玩5X 双卡双待 移动版 智能手机（破晓银）                                        </a>
                                    </div>
                                    <div class="shop_name2">
                                        <a class="co_hchh" href="/index.php/Home/Store/index.html">
                                                                                    </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_49" type="text" value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add(49);" class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut(49);"  class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            <a href="javascript:void(0);" onclick="AjaxAddCart(49,$('#number_'+49).val(),0);">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                                    <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/50.html">
                                            <img class="lazy-list" data-original="/public/upload/goods/thumb/50/goods_thumb_50_236_236.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/569603691addc.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/56960369057f8.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/56960368e45f5.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/56960368c2524.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/5696034e703e1.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em class="li_xfo">￥</em><em>1199.00</em></span>
                                        <span class="old"><em>￥</em><em>1299.00</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/50.html">
                                            华为 HUAWEI 畅享5S 全网通 2GB RAM+16GB ROM（金色）                                        </a>
                                    </div>
                                    <div class="shop_name2">
                                        <a class="co_hchh" href="/index.php/Home/Store/index.html">
                                                                                    </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_50" type="text" value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add(50);" class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut(50);"  class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            <a href="javascript:void(0);" onclick="AjaxAddCart(50,$('#number_'+50).val(),0);">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                                    <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/51.html">
                                            <img class="lazy-list" data-original="/public/upload/goods/thumb/51/goods_thumb_51_236_236.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/56960931469a8.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/56960930d4628.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/56960930b6a32.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/01-13/569609309b338.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em class="li_xfo">￥</em><em>3699.00</em></span>
                                        <span class="old"><em>￥</em><em>3799.00</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/51.html">
                                            华为 HUAWEI Mate 8 4GB+64GB版 全网通（香槟金）                                        </a>
                                    </div>
                                    <div class="shop_name2">
                                        <a class="co_hchh" href="/index.php/Home/Store/index.html">
                                                                                    </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_51" type="text" value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add(51);" class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut(51);"  class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            <a href="javascript:void(0);" onclick="AjaxAddCart(51,$('#number_'+51).val(),0);">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                                    <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/104.html">
                                            <img class="lazy-list" data-original="/public/upload/goods/thumb/104/goods_thumb_104_236_236.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/03-12/56e3e746ede36.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/03-12/56e3e746b2582.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/03-12/56e3e7467c108.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/03-12/56e3eb73912ff.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em class="li_xfo">￥</em><em>2999.00</em></span>
                                        <span class="old"><em>￥</em><em>2099.00</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/104.html">
                                            小米手机5,十余项黑科技，很轻狠快                                        </a>
                                    </div>
                                    <div class="shop_name2">
                                        <a class="co_hchh" href="/index.php/Home/Store/index.html">
                                                                                    </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_104" type="text" value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add(104);" class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut(104);"  class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            <a href="javascript:void(0);" onclick="AjaxAddCart(104,$('#number_'+104).val(),0);">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                                    <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/105.html">
                                            <img class="lazy-list" data-original="/public/upload/goods/thumb/105/goods_thumb_105_236_236.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-19/5715e06372f03.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-19/5715e09a61ded.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-19/5715e09a54c53.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-19/5715e09a415d0.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em class="li_xfo">￥</em><em>5588.00</em></span>
                                        <span class="old"><em>￥</em><em>5688.00</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/105.html">
                                            原封国行【优惠套餐】Apple/苹果 iPhone 6s 4.7英寸 4G手机                                        </a>
                                    </div>
                                    <div class="shop_name2">
                                        <a class="co_hchh" href="/index.php/Home/Store/index.html">
                                                                                    </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_105" type="text" value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add(105);" class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut(105);"  class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            <a href="javascript:void(0);" onclick="AjaxAddCart(105,$('#number_'+105).val(),0);">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                                    <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/115.html">
                                            <img class="lazy-list" data-original="/public/upload/goods/thumb/115/goods_thumb_115_236_236.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-20/57175033b5c37.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-20/5717505a692de.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-20/57175059b2046.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-20/5717505971f72.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-20/57175059527f4.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em class="li_xfo">￥</em><em>84.90</em></span>
                                        <span class="old"><em>￥</em><em>184.90</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/115.html">
                                            爸爸2陆毅代言索扬20000毫安充电宝轻薄正品手机通用移动电源MAh                                        </a>
                                    </div>
                                    <div class="shop_name2">
                                        <a class="co_hchh" href="/index.php/Home/Store/index.html">
                                                                                    </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_115" type="text" value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add(115);" class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut(115);"  class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            <a href="javascript:void(0);" onclick="AjaxAddCart(115,$('#number_'+115).val(),0);">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                                    <li>
                                <div class="s_xsall">
                                    <div class="xs_img">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/116.html">
                                            <img class="lazy-list" data-original="/public/upload/goods/thumb/116/goods_thumb_116_236_236.jpeg"/>
                                        </a>
                                    </div>
                                    <div class="xs_slide">
                                        <div class="small-xs-shop">
                                            <ul>
                                                                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-20/57175203bd715.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-20/5717521b0b94c.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-20/5717521abe1ba.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-20/5717521aa865d.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                            <li>
                                                            <a href="javascript:void(0);">
                                                                <img class="lazy-list" data-original="/public/upload/goods/2016/04-20/5717521a58129.jpg"/>
                                                            </a>
                                                        </li>
                                                                                                </ul>
                                        </div>
                                    </div>
                                    <div class="price-tag">
                                        <span class="now"><em class="li_xfo">￥</em><em>89.00</em></span>
                                        <span class="old"><em>￥</em><em>189.00</em></span>
                                    </div>
                                    <div class="shop_name2">
                                        <a href="/index.php/Home/Goods/goodsInfo/id/116.html">
                                            ROMOSS/罗马仕 sense6 20000M毫安充电宝 正品手机通用移动电源                                        </a>
                                    </div>
                                    <div class="shop_name2">
                                        <a class="co_hchh" href="/index.php/Home/Store/index.html">
                                                                                    </a>
                                    </div>
                                    <div class="J_btn_statu">
                                        <div class="p-num">
                                            <input class="J_input_val" id="number_116" type="text" value="1">
                                            <p class="act">
                                                <a href="javascript:void(0);" onClick="goods_add(116);" class="litt-zzyl1"></a>
                                                <a href="javascript:void(0);" onClick="goods_cut(116);"  class="litt-zzyl2"></a>
                                            </p>
                                        </div>
                                        <div class="p-btn">
                                            <a href="javascript:void(0);" onclick="AjaxAddCart(116,$('#number_'+116).val(),0);">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        
				</ul>
			</div>
			<div class="page p">
				<div class='dataTables_paginate paging_simple_numbers'><ul class='pagination'>  <li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="example1" href="#">1</a></li><li class="paginate_button"><a class="num" href="/index.php/home/goods/goodsList/id/1/p/2.html">2</a></li><li class="paginate_button"><a class="num" href="/index.php/home/goods/goodsList/id/1/p/3.html">3</a></li> <li id="example1_next" class="paginate_button next"><a class="next" href="/index.php/home/goods/goodsList/id/1/p/2.html">下一页</a></li> </ul></div>			</div>
		</div>
	</div>
</div>
<div class="underheader-floor p specilike">
	<div class="w1430">
		<div class="layout-title">
			<span class="fl">猜你喜欢</span>
            <span class="update_h fr" onclick="favourite();">
                <i class="litt-hyh"></i>
                换一换
            </span>
		</div>
		<ul class="ul-li-column p" id="favourite_goods">
		</ul>
	</div>
</div>
<script>
	/****猜你喜欢****/
	var favorite_page = 0;
	function favourite()
	{
		favorite_page++;
		$.ajax({
			type: "GET",
			url: "/index.php?m=Home&c=Index&a=ajax_favorite&i=7&p="+favorite_page,//+tab,
			success: function (data) {
				if(data == ''){
					favorite_page = 0;
					favourite();
				}else{
					$('#favourite_goods').html(data);
					lazy_ajax();
				}

			}
		});
	}
</script>
<!--footer-s-->
<div class="footer p">
	<div class="mod_service_inner">
        <!--只有这个页面的class是w1430-->
		<div class="w1430">
			<ul>
				<li>
					<div class="mod_service_unit">
						<h5 class="mod_service_duo">多</h5>
						<p>品类齐全，轻松购物</p>
					</div>
				</li>
				<li>
					<div class="mod_service_unit">
						<h5 class="mod_service_kuai">快</h5>
						<p>多仓直发，极速配送</p>
					</div>
				</li>
				<li>
					<div class="mod_service_unit">
						<h5 class="mod_service_hao">好</h5>
						<p>正品行货，精致服务</p>
					</div>
				</li>
				<li>
					<div class="mod_service_unit">
						<h5 class="mod_service_sheng">省</h5>
						<p>天天低价，畅选无忧</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="w1430">
		<//include file="public/footer_index" />
        <div class="footer-ewmcode">
            <div class="foot-list-fl">
                                    <ul>
                        <li class="foot-th">
                            售后服务                        </li>
                                                    <li>
                                <a href="/index.php/Home/Article/detail/article_id/1.html">保修日期</a>
                            </li>
                                                    <li>
                                <a href="/index.php/Home/Article/detail/article_id/12.html">保修政策</a>
                            </li>
                                                    <li>
                                <a href="/index.php/Home/Article/detail/article_id/13.html">退换货政策</a>
                            </li>
                                                    <li>
                                <a href="/index.php/Home/Article/detail/article_id/14.html">退换货流程</a>
                            </li>
                                            </ul>
                                    <ul>
                        <li class="foot-th">
                            新手上路                         </li>
                                            </ul>
                                    <ul>
                        <li class="foot-th">
                            关于我们                        </li>
                                            </ul>
                                    <ul>
                        <li class="foot-th">
                            配送方式                         </li>
                                            </ul>
                                    <ul>
                        <li class="foot-th">
                            购物指南                        </li>
                                            </ul>
                            </div>
            <div class="QRcode-fr">
                <ul>
                    <li class="foot-th">客户端</li>
                    <li><img src="/template/pc/rainbow/static/images/qrcode.png"/></li>
                </ul>
                <ul>
                    <li class="foot-th">微信</li>
                    <li><img src="/template/pc/rainbow/static/images/qrcode.png"/></li>
                </ul>
            </div>
        </div>
        <div class="mod_copyright p">
            <div class="grid-top">
                                    <a href="/index.php/Home/Article/detail/article_id/3.html">【中奖名单】荣耀手环zero点评有奖活动</a>
                    <span>|</span>
                                    <a href="/index.php/Home/Article/detail/article_id/112.html">TPshop商城V1.0版震感发布</a>
                    <span>|</span>
                                <a href="javascript:void (0);">客服热线:123456789</a>
            </div>
            <p>Copyright © 2016-2025 TPshop商城 版权所有 保留一切权利 备案号:粤00-123456号</p>

            <p class="mod_copyright_auth">
                <a class="mod_copyright_auth_ico mod_copyright_auth_ico_1" href="" target="_blank">经营性网站备案中心</a>
                <a class="mod_copyright_auth_ico mod_copyright_auth_ico_2" href="" target="_blank">可信网站信用评估</a>
                <a class="mod_copyright_auth_ico mod_copyright_auth_ico_3" href="" target="_blank">网络警察提醒你</a>
                <a class="mod_copyright_auth_ico mod_copyright_auth_ico_4" href="" target="_blank">诚信网站</a>
                <a class="mod_copyright_auth_ico mod_copyright_auth_ico_5" href="" target="_blank">中国互联网举报中心</a>
                <a class="mod_copyright_auth_ico mod_copyright_auth_ico_6" href="" target="_blank">网络举报APP下载</a>
            </p>
        </div>
	</div>
	<div class="soubao-sidebar">
    <div class="soubao-sidebar-bg"></div>
    <div class="sidertabs tab-lis-1">
        <div class="sider-top-stra sider-midd-1">
            <div class="icon-tabe-chan">
                <a href="/index.php/Home/User/index.html">
                    <i class="share-side share-side1"></i>
                    <i class="share-side tab-icon-tip triangleshow"></i>
                </a>

                <div class="dl_login">
                    <div class="hinihdk">
                        <img src="/template/pc/rainbow/static/images/dl.png"/>

                        <p class="loginafter nologin"><span>你好，请先</span><a href="/index.php/Home/user/login.html">登录！</a></p>
                        <!--未登录-e--->
                        <!--登录后-s--->
                        <p class="loginafter islogin">
                            <span class="id_jq userinfo">陈xxxxxxx</span>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;</span><a href="/index.php/Home/user/logout.html" title="点击退出">退出！</a>
                        </p>
                        <!--未登录-s--->
                    </div>
                </div>
            </div>
            <div class="icon-tabe-chan shop-car">
                <a href="javascript:void(0);" onclick="ajax_side_cart_list()">
                    <div class="tab-cart-tip-warp-box">
                        <div class="tab-cart-tip-warp">
                            <i class="share-side share-side1"></i>
                            <i class="share-side tab-icon-tip"></i>
                            <span class="tab-cart-tip">购物车</span>
                            <span class="tab-cart-num J_cart_total_num" id="tab_cart_num">0</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="icon-tabe-chan massage">
                <a href="/index.php/Home/User/message_notice.html" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">消息</span>
                </a>
            </div>
        </div>
        <div class="sider-top-stra sider-midd-2">
            <div class="icon-tabe-chan mmm">
                <a href="/index.php/Home/User/goods_collect.html" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">收藏</span>
                </a>
            </div>
            <div class="icon-tabe-chan hostry">
                <a href="/index.php/Home/User/visit_log.html" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">足迹</span>
                </a>
            </div>
            <!--<div class="icon-tabe-chan sign">-->
                <!--<a href="" target="_blank">-->
                    <!--<i class="share-side share-side1"></i>-->
                    <!--&lt;!&ndash;<i class="share-side tab-icon-tip"></i>&ndash;&gt;-->
                    <!--<span class="tab-tip">签到</span>-->
                <!--</a>-->
            <!--</div>-->
        </div>
    </div>
    <div class="sidertabs tab-lis-2">
        <div class="icon-tabe-chan advice">
            <a title="点击这里给我发消息" href="tencent://message/?uin=123456789&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
                <i class="share-side share-side1"></i>
                <!--<i class="share-side tab-icon-tip"></i>-->
                <span class="tab-tip">在线咨询</span>
            </a>
        </div>
        <div class="icon-tabe-chan request">
            <a href="" target="_blank">
                <i class="share-side share-side1"></i>
                <!--<i class="share-side tab-icon-tip"></i>-->
                <span class="tab-tip">意见反馈</span>
            </a>
        </div>
        <div class="icon-tabe-chan qrcode">
            <a href="" target="_blank">
                <i class="share-side share-side1"></i>
                <i class="share-side tab-icon-tip triangleshow"></i>
                <span class="tab-tip qrewm">
                    <img src="/template/pc/rainbow/static/images/qrcode.png"/>
                    扫一扫下载APP
                </span>
            </a>
        </div>
        <div class="icon-tabe-chan comebacktop">
            <a href="" target="_blank">
                <i class="share-side share-side1"></i>
                <!--<i class="share-side tab-icon-tip"></i>-->
                <span class="tab-tip">返回顶部</span>
            </a>
        </div>
    </div>
    <div class="shop-car-sider">

    </div>
</div>
<script src="/template/pc/rainbow/static/js/common.js"></script>
</div>
<!--footer-e-->
<script src="/template/pc/rainbow/static/js/lazyload.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/template/pc/rainbow/static/js/popt.js" type="text/javascript" charset="utf-8"></script>
<script src="/template/pc/rainbow/static/js/headerfooter.js" type="text/javascript" charset="utf-8"></script>
<script src="/template/pc/rainbow/static/js/location.js"></script>
<script type="text/javascript">

//        更多
         $('.gd_more').parent().click(function(){
         	var jed = $(this).parents('.lr-more').siblings();
         	jed.toggleClass('ov-inh').find('.brand-box').toggleClass('ov-inh');
         	if(jed.toggleClass('ov-inh').find('.brand-list')){
         		jed.toggleClass('ov-inh').find('.brand-list').toggleClass('ov-inh');
         	}
         	if(jed.hasClass('ov-inh')){
         		$(this).find('.gd_more').html('收起');
         	}else{
         		$(this).find('.gd_more').html('更多');
         	}
         })
        var cancelBtn = null;
        /***多选 start*****/
        $('.dx_choice').parent().click(function(){
            var _this = this;
            var st = 0;
            var jed = $(_this).parents('.ri-section'); //当前选项层DIV

            //关闭前一个多选框
            if(cancelBtn != null){
                $(cancelBtn).parent().siblings('.clearfix').find('a').each(function(i,o){
                    $(o).removeClass('addhover-js').find('.litt-zd').hide(); //针对品牌筛选的红色边框和右下角对勾隐藏
                    $(o).removeClass('red_hov_cli')    //针对纯文字型选项，隐藏筛选的选中状态
                    .attr('href',$(o).data('href'))  //还原连接
                    .children('input').prop('checked',false).hide(); //隐藏多选框
                    $(o).unbind('click');
                });
                $(cancelBtn).parents('.lf-list').siblings('.lr-more').show(); //显示其它多选按钮
                $(cancelBtn).parents('.ri-section').removeClass('sum_ov_inh'); //移除多选样式

            }
            cancelBtn = jed.find('.u-cancel'); //前一个取消按钮

            //打开多选
            jed.addClass('sum_ov_inh'); //添加这一行的样式
            //遍历a标签
            jed.find('.clearfix>a').each(function(i,o){
                $(o).attr('href','javascript:;'); //移除连接
                $(o).children('input').show();  //显示多选框
                $(o).bind('click',function(){
                    if($(o).hasClass('red_hov_cli')){
                        //取消选中
                        $(o).find('i').toggle()
                        $(o).removeClass('addhover-js'); //针对品牌选项，改变筛选的选中状态
                        $(o).removeClass('red_hov_cli')
                        $(o).children('input').prop("checked",false);
                        $(o).parent().siblings('.surclofix').children('.u-confirm').removeClass('u-confirm01');
                        st--;
                    }else{
                        $(o).addClass('red_hov_cli')
                        $(o).children('input').prop("checked",true);
                        $(o).find('i').toggle()
                        $(o).addClass('addhover-js');
                        $(o).parent().siblings('.surclofix').children('.u-confirm').addClass('u-confirm01');
                        st++;
                    }
                    //如果没有选中项,确定按钮点不了
                    if(st==0){
                        jed.find('.u-confirm').disabled=true;
                    }
                });
            });
            //隐藏当前多选按钮
            $(_this).parent().hide();
        });

        /***多选 end*****/
        //############   取消多选        ###########
        $('.surclofix .u-cancel').each(function(){
            $(this).click(function(){
                var jed = $(this).parents('.ri-section');
                //遍历a标签
                jed.find('.clearfix>a').each(function(i,o){
                    $(o).removeClass('addhover-js').find('.litt-zd').hide(); //针对品牌筛选的红色边框和右下角对勾隐藏
                    $(o).removeClass('red_hov_cli')    //针对纯文字型选项，隐藏筛选的选中状态
                     .attr('href',$(o).data('href'))  //还原连接
                     .children('input').prop('checked',false).hide(); //隐藏多选框
                    $(o).unbind('click');
                });
                jed.find('.lr-more').show(); //显示多选按钮
                jed.removeClass('sum_ov_inh') //移除这一行的样式
                $('.u-confirm').removeClass('u-confirm01'); //移除确定按钮可点击标识
            });
        })

    $(function() {
        favourite();
        //左侧边栏JS
//		ajax_hot_goods();
//		ajax_sales_goods();
    //############   更多类别属性筛选  start     ###########
    $('.moreamore').click(function(){
        $('.m-tr').each(function(i,o){
            if(i >  7){
                var attrdisplay = $(o).css('display');
                if(attrdisplay == 'none'){
                    $(o).css('display','block');
                }
                if(attrdisplay == 'block'){
                    $(o).css('display','none');
                }
            }
        });
        if($(this).hasClass('checked')){
            $(this).removeClass('checked').html('<a class="red">收起</a>');
        }else{
            $(this).addClass('checked').html('<a >更多选项</a>');
        }
    })
    $('.moreamore').trigger('click').html('<a >更多选项</a>'); //  默认点击一下
    //############   更多类别属性筛选   end    ###########

    /***价格排序 start*****/
    var price_i = 0;
    $('.f-sort ul li').click(function(){
        $(this).addClass('red').siblings().removeClass('red').find('i').removeClass('litt-zzx2').removeClass('litt-zzx3').addClass('litt-zzx1');
        var jd = $(this).find('i');
        price_i++;
        if(price_i>2)price_i=1;
        switch(price_i){
            case 1:jd.addClass('litt-zzx2').removeClass('litt-zzx1').removeClass('litt-zzx3');break;
            case 2:jd.addClass('litt-zzx3').removeClass('litt-zzx2').removeClass('litt-zzx1');break;
        }
    })
    /***价格排序 end*******/
    /***地址选择 start*****/
    $("#city").click(function (e) {
        SelCity(this,e);
    });
    /***地址选择 end*****/
    /***是否自营 start****/
    $('.choice-mo-shop ul li').click(function(){
        $(this).find('.litt-zzdg1').toggleClass('litt-zzdg2');
        $(this).find('a').toggleClass('red');
    })
    /***是否自营 end****/
    /***滑过浏览商品 start***/
    $('.small-xs-shop ul li').hover(function(){
        $(this).addClass('bored').siblings().removeClass('bored');
        var small_src = $(this).find('img').attr('src');
        $(this).parents('.s_xsall').find('.xs_img').find('img').attr('src',small_src);
    },function(){

    })
    /***滑过浏览商品 end***/
})

	/****加减购物车数额***/
	function goods_cut($val){
		var num_val=document.getElementById('number_'+$val);
		var new_num=num_val.value;
		var Num = parseInt(new_num);
		if(Num>1)Num=Num-1;
		num_val.value=Num;
	}

	function goods_add($val){
		var num_val=document.getElementById('number_'+$val);
		var new_num=num_val.value;
		var Num = parseInt(new_num);
		Num=Num+1;
		num_val.value=Num;
	}
	/****加减购物车数额***/

        //############   点击多选确定按钮      ############
// t 为类型  是品牌 还是 规格 还是 属性
// btn 是点击的确定按钮用于找位置
get_parment = {"id":"1"};
function submitMoreFilter(t,btn)
{
    // 没有被勾选的时候
    if(!$(btn).hasClass("u-confirm01")){
        return false;
    }

    // 获取现有的get参数
    var key = ''; // 请求的 参数名称
    var val = new Array(); // 请求的参数值
    $(btn).parent().siblings(".clearfix").find(".red_hov_cli").each(function(i,o){
        key = $(o).data('key');
        val.push($(o).data('val'));
    });
    //parment = key+'_'+val.join('_');
//        return false;
    // 品牌
    if(t == 'brand')
    {
        get_parment.brand_id = val.join('_');
    }
    // 规格
    if(t == 'spec')
    {
        if(get_parment.hasOwnProperty('spec'))
        {
            get_parment.spec += '@'+key+'_'+val.join('_');
        }
        else
        {
            get_parment.spec = key+'_'+val.join('_');
        }
    }
    // 属性
    if(t == 'attr')
    {
        if(get_parment.hasOwnProperty('attr'))
        {
            get_parment.attr += '@'+key+'_'+val.join('_');
        }
        else
        {
            get_parment.attr = key+'_'+val.join('_');
        }
    }
    // 组装请求的url
    var url = '';
    for ( var k in get_parment )
    {
        url += "&"+k+'='+get_parment[k];
    }
    console.log('get_parment',get_parment);
    location.href ="/index.php?m=Home&c=Goods&a=goodsList"+url;
}
//媒体查询
$(function(){
    window.onresize=resizeauto;
    resizeauto();
    function resizeauto(){
        var windowW = $(window).width();
        if(windowW > 1447){
            $('.w1430,.w1224,.w1000').addClass('w1430').removeClass('w1224').removeClass('w1000');
        }else if(windowW <= 1447 && windowW > 1241){
            $('.w1430,.w1224,.w1000').addClass('w1224').removeClass('w1430').removeClass('w1000');
        }else if(windowW <= 1241){
            $('.w1430,.w1224,.w1000').addClass('w1000').removeClass('w1224').removeClass('w1430');
        }
    }
})
</script>
</body>
</html>";
?>