<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:44:"./template/mobile/new2/user\add_address.html";i:1499420874;s:41:"./template/mobile/new2/public\header.html";i:1499420874;s:45:"./template/mobile/new2/public\header_nav.html";i:1499420874;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>新增收货地址--<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <link rel="stylesheet" href="__STATIC__/css/style.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/iconfont.css"/>
    <script src="__STATIC__/js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/js/style.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/js/mobile-util.js" type="text/javascript" charset="utf-8"></script>
    <script src="__PUBLIC__/js/global.js"></script>
    <script src="__STATIC__/js/layer.js"  type="text/javascript" ></script>
    <script src="__STATIC__/js/swipeSlide.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body class="pore_add">

<div class="classreturn loginsignup ">
    <div class="content">
        <div class="ds-in-bl return">
            <a href="javascript:history.back(-1)"><img src="__STATIC__/images/return.png" alt="返回"></a>
        </div>
        <div class="ds-in-bl search center">
            <span>新增收货地址</span>
        </div>
        <div class="ds-in-bl menu">
            <a href="javascript:void(0);"><img src="__STATIC__/images/class1.png" alt="菜单"></a>
        </div>
    </div>
</div>
<div class="flool tpnavf">
    <div class="footer">
        <ul>
            <li>
                <a class="yello" href="<?php echo U('Index/index'); ?>">
                    <div class="icon">
                        <i class="icon-shouye iconfont"></i>
                        <p>首页</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Goods/categoryList'); ?>">
                    <div class="icon">
                        <i class="icon-fenlei iconfont"></i>
                        <p>分类</p>
                    </div>
                </a>
            </li>
            <li>
                <!--<a href="shopcar.html">-->
                <a href="<?php echo U('Cart/cart'); ?>">
                    <div class="icon">
                        <i class="icon-gouwuche iconfont"></i>
                        <p>购物车</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('User/index'); ?>">
                    <div class="icon">
                        <i class="icon-wode iconfont"></i>
                        <p>我的</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="floor my p edit">
    <form action="<?php echo U('Mobile/User/add_address'); ?>" method="post" id="addressForm">
        <div class="content">
            <div class="floor list7">
                <div class="myorder p">
                    <div class="content30">
                        <a href="javascript:void(0)">
                            <div class="order">
                                <div class="fl">
                                    <span>收货人:</span>
                                </div>
                                <div class="fl">
                                    <input type="text" value="<?php echo $address['consignee']; ?>" name="consignee"/>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="myorder p">
                    <div class="content30">
                        <a href="javascript:void(0)">
                            <div class="order">
                                <div class="fl">
                                    <span>手机号码:</span>
                                </div>
                                <div class="fl">
       <input type="tel" value="<?php echo $address['mobile']; ?>" name="mobile" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"/>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="myorder p">
                    <div class="content30">
                        <a href="javascript:void(0)" onclick="locationaddress(this);">
                            <div class="order">
                                <div class="fl">
                                    <span>所在地区: </span>
                                </div>
                                <div class="fl">
                                    <input id="area" value=""  type="text">
                                    <input type="hidden" value="<?php echo $address['province']; ?>" name="province" class="hiddle_area"/>
                                    <input type="hidden" value="<?php echo $address['city']; ?>" name="city" class="hiddle_area"/>
                                    <input type="hidden" value="<?php echo $address['district']; ?>" name="district" class="hiddle_area"/>
                                </div>
                                <div class="fr">
                                    <i class="Mright"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="myorder p">
                    <div class="content30">
                        <a href="javascript:void(0)">
                            <div class="order">
                                <div class="fl">
                                    <span>详细地址:</span>
                                </div>
                                <div class="fl">
                                    <input type="text" value="<?php echo $address['address']; ?>" name="address"/>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="myorder p">
                    <div class="content30">
                        <a href="javascript:void(0)">
                            <div class="order">
                                <div class="fl">
                                    <span>设为默认地址</span>
                                </div>
                                <div class="fr">
                                    <i id='default_addr' class="Mright turnoff <?php if($address['is_default'] == 1): ?>turnup<?php endif; ?>"></i>
                                </div>
                            </div>
                            <input type="hidden" name="is_default" value="<?php echo $address['is_default']; ?>"/>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $address['address_id']; ?>" />
        <div class="edita">
            <div class="content30">
                <?php if(\think\Request::instance()->param('source') == 'cart2'): ?> <!--如果是下订单时提交过了的页面-->
                    <input type="button" value="保存并使用该地址" class="dotm_btn1 beett" onclick="checkForm()" />
                    <input type="hidden" name="source" value="<?php echo \think\Request::instance()->param('source'); ?>" />
                <?php else: ?>
                    <input type="button" value="保存该地址" class="dotm_btn1 beett" onclick="checkForm()" />
                <?php endif; ?>
            </div>
        </div>
    </form>
</div>
<!--选择地区-s-->
<div class="container" >
    <div class="city">
        <div class="screen_wi_loc">
            <div class="classreturn loginsignup">
                <div class="content">
                    <div class="ds-in-bl return seac_retu">
                        <a href="javascript:void(0);" onclick="closelocation();"><img src="__STATIC__/images/return.png" alt="返回"></a>
                    </div>
                    <div class="ds-in-bl search center">
                        <span class="sx_jsxz">选择地区</span>
                    </div>
                    <div class="ds-in-bl suce_ok">
                        <a href="javascript:void(0);">&nbsp;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="province-list"></div>
        <div class="city-list" style="display:none"></div>
        <div class="area-list" style="display:none"></div>
    </div>
</div>
<!--选择地区-e-->
<div class="ed_shdele">
    <div class="sfk">是否删除该地址?</div>
    <div class="lineq">
        <span class="clos">取消</span>
        <span class="sur">确定</span>
    </div>
</div>
<div class="mask-filter-div" style="display: none;"></div>
<script src="__STATIC__/js/mobile-location.js"></script>
<script type="text/javascript">
    $(function(){
        $('.turnoff').click(function(){
            $(this).toggleClass('turnup');
            $("input[name=is_default]").val(Number($(this).hasClass('turnup')));
        });
    })
</script>
<script type="text/javascript">
    $(function(){
        $('.menu').click(function(){
            $('.ed_shdele').show();
            $('.mask-filter-div').show();
        })
        $('.ed_shdele .clos').click(function(){
            $('.ed_shdele').hide();
            $('.mask-filter-div').hide();
        })
    });
</script>
<script type="text/javascript">
    function checkForm(){
        var consignee = $('input[name="consignee"]').val();
        var address = $('input[name="address"]').val();
        var mobile = $('input[name="mobile"]').val();
        var area = $('#area').val();
        var error = '';
        if(consignee == ''){
            error += '收货人不能为空 <br/>';
        }
        if(address == ''){
            error += '请填写地址 <br/>';
        }
        if(!checkMobile(mobile)){
            error += '手机号码格式有误 <br/>';
        }
        if(area == '') {
            error += '所在地区不能为空 <br/>';
        }
        if(error){
            layer.open({content:error,time:2});
            return false;
        }

        return $('#addressForm').submit();
    }
</script>
<script type="text/javascript">
    function locationaddress(e){
        $('.container').animate({width: '14.4rem', opacity: 'show'}, 'normal',function(){
            $('.container').show();
        });
        if(!$('.container').is(":hidden")){
            $('body').css('overflow','hidden')
            cover();
            $('.mask-filter-div').css('z-index','9999');
        }
    }
    function closelocation(){
        var province_div = $('.province-list');
        var city_div = $('.city-list');
        var area_div = $('.area-list');
        if(area_div.is(":hidden") == false){
            area_div.hide();
            city_div.show();
            province_div.hide();
            return;
        }
        if(city_div.is(":hidden") == false){
            area_div.hide();
            city_div.hide();
            province_div.show();
            return;
        }
        if(province_div.is(":hidden") == false){
            area_div.hide();
            city_div.hide();
            $('.container').animate({width: '0', opacity: 'show'}, 'normal',function(){
                $('.container').hide();
            });
            undercover();
            $('.mask-filter-div').css('z-index','inherit');
            return;
        }
    }
    $('body').on('click', '.area-list p', function () {
        var area = ' '+getCookie('province_name')+' '+getCookie('city_name')+' '+getCookie('district_name');
        $("#area").val(area);
        $("input[name=province]").val(getCookie('province_id'));
        $("input[name=city]").val(getCookie('city_id'));
        $("input[name=district]").val(getCookie('district_id'));
    });
</script>
</body>
</html>
