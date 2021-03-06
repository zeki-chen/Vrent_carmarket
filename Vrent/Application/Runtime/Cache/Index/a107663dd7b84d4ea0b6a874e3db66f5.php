<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="Keywords" content="VRent"/>
    <title>租车</title>


    <link href="/czq/Vrent/Public/Index/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/czq/Vrent/Public/Index/css/lrtk.css" type="text/css" rel="stylesheet">
    <link href="/czq/Vrent/Public/Index/css/magiczoomplus.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="/czq/Vrent/Public/Index/owlcarousel/owl.carousel.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="/czq/Vrent/Public/Index/owlcarousel/owl.theme.css" type="text/css" media="all"/>
    <link href="/czq/Vrent/Public/Validform_v5.3.2/css/validform.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/czq/Vrent/Public/Index/css/detail.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>


<div id="fade" class="black_overlay"></div>
<div class="register_div">
    <a href="#" onclick="close_RegisterHtml()" class="close_login_reg"><img src="/czq/Vrent/Public/Index/images/close.jpg"
                                                                            alt="cha" class="close_lr_img"></a>
    <form action="<?php echo U('Index/register');?>" method="get" class="mainform reg_content_div">

        <h2 class="reg_title">注册</h2>
        <input type="text" name="tel" class="reg_ipt phone_ipt" placeholder="手机号" autocomplete='tel'>
        <span class="explain2">手机号可用于登录、找回密码、接收订单通知等服务</span>
        <input type="password" name="pwd" placeholder="登录密码" class="reg_ipt password_ipt" autocomplete='pw'>
        <label class="demo--label show_pw_label"><input class="demo--radio" type="checkbox" name="demo-checkbox1">
            <span class="demo--checkbox demo--radioInput"></span><span class="show_p">显示密码</span>
        </label>

        <span class="explain2">密码为6-20个字符，可由英文、数字及符号组成</span>
        <input type="password" name="pwd" placeholder="确认密码" class="reg_ipt con_password_ipt"
               onBlur=confirmByRegister(this) autocomplete='con_pw'>
        <label class="demo--label show_pw_label"><input class="demo--radio" type="checkbox" name="demo-checkbox1">
            <span class="demo--checkbox demo--radioInput"></span><span class="show_p">显示密码</span>
        </label>
        <span class="explain3 explain2">请再次输入密码</span>
        <input type="text" name="" placeholder="手机验证码" class="reg_ipt">
        <button class="phone_check_btn">发送验证码</button>
        <div class="read_div"><label class="demo--label"><input class="demo--radio" type="checkbox"
                                                                name="demo-checkbox1">
            <span class="demo--checkbox demo--radioInput"></span><span class="show_p">我已阅读并同意</span><a href="#"
                                                                                                       class="denglu">《VRent用户服务协议》</a>
        </label></div>
        <button type="submit" class="reg_btn">提交注册</button>
        <span>已经注册？</span><a href="javascript:void(0)" onclick="show_loginHtml()" class="denglu please_denglu">请登录</a>
    </form>
</div>


<div class="login_div" id="login_div">
    <a href="javascript:void(0)" onclick="close_loginHtml()" class="close_login_reg"><img
            src="/czq/Vrent/Public/Index/images/close.png" alt="cha" class="close_lr_img"></a>
    <form action="<?php echo U('Index/login');?>" method="post" class="mainform login_content_div">
        <h2 class="reg_title">登录</h2>
        <input type="text" name="tel" class="reg_ipt phone_ipt" placeholder="手机号码" autocomplete='tel'>

        <input type="password" name="pwd" placeholder="密码登录" class="reg_ipt password_ipt" autocomplete='pw'>

        <div class="login_n">
            <label class="demo--label" for="auto_log"><input class="demo--radio" id="auto_log" type="checkbox"
                                                             name="demo-checkbox1">
                <!--  --><span class="demo--checkbox demo--radioInput auto_login"></span><span
                        class="show_p">下次自动登录</span><!--  -->

            </label>
            <a href="#" class="denglu forget_pw">忘记密码</a>
        </div>
        <button type="submit" class="reg_btn">会员登录</button>
        <span class="login_expalin">还没有账号?</span><a href="javascript:void(0)" onclick="show_RegisterHtml()"
                                                    class="denglu login_expalin">现在注册</a>

    </form>
</div>

<form class="mainform go_order_div" action="<?php echo U('Detail/addorder');?>" method="post" >
    <a href="javascript:void(0)" onclick="close_order()" class="close_login_reg"><img
            src="/czq/Vrent/Public/Index/images/close.png" alt="cha" class="close_lr_img"></a>
    <h2 class="reg_title">订车</h2>
   <!--  <a href="javascript:void(0)" onclick="close_order()" class="close_login_reg"><img
            src="/czq/Vrent/Public/Index/images/close.png" alt="cha" class="close_lr_img"></a> -->
    <div class="go_order_list"><span class="go_order_title go_order_title1">姓名</span>
        <input type="text" name="remarks" value="<?php echo ($user["true_name"]); ?>" class="reg_ipt go_order_ipt go_order_ipt1" autocomplete='name' datatype="*" nullmsg=" "></div>
    <input type="hidden" name="user_id" value="<?php echo ($user["user_id"]); ?>">
    <input type="hidden" name="car_id" value="<?php echo ($model["car_id"]); ?>">
    <input type="hidden" name="sent_id" value="<?php echo ($model["user_id"]); ?>">
    <div class="go_order_list"><span class="go_order_title">手机号码</span><input type="text" name="tel"
                                                                              class="reg_ipt go_order_ipt go_order_ipt2"
                                                                              autocomplete='tel' datatype="*" nullmsg=" "></div>
    <div class="go_order_list"><span class="go_order_title">取车时间</span><input type="text"
                                                                              class="demo-input reg_ipt go_order_ipt go_order_ipt3"
                                                                              id="day_time1"></div>
    <div class="go_order_list"><span class="go_order_title">还车时间</span><input type="text"
        class="demo-input reg_ipt go_order_ipt go_order_ipt3" id="day_time2"></div>
    <div class="go_order_list">
        <label class="demo--label" for="go_order_insurance"><input class="demo--radio" id="go_order_insurance" type="checkbox" name="demo-checkbox1">
         <span class="demo--checkbox demo--radioInput auto_login"></span><span class="insurance">购买保险</span>
        </label>
        <span class="insurance_price">30元保险费</span>
        <p class="order_explain">购买保险是用来赔偿自己修车的钱。当被保车辆部分损失一次赔款金额与免赔金额之和(不含施救费)等于保险金额时，或被保车辆全部损失时，保险人支付赔款后，车辆损失保险责任终止。</p>
    </div> 
    <div class="go_order_list">
        <label class="demo--label" for="go_order_know"><input class="demo--radio" id="go_order_know" type="checkbox" name="demo-checkbox1">
         <span class="demo--checkbox demo--radioInput auto_login"></span><span class="insurance">租车需知</span>
        </label>
        <p class="order_explain">本平台只提供中间服务，如车大面积损坏，车主与租车用户应自主调节沟通。注意：租车时请务必拍照留底，尽量不少于4张。</p>
    </div>                                                               
    <button type="submit" class="reg_btn go_order_btn" >立即支付</button>
</form>


<div class="head_div">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="sr-only">展开导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="/czq/Vrent/Public/Index/images/VRR.png" class="VR_img"></a>
        </div>
        <div class="collapse navbar-collapse navv" id="menu">

            <ul class="nav navbar-nav">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li class="active"><a href="<?php echo U('Search/search');?>#">租车</a></li>
                <li><a href="<?php echo U('Index/index');?>#about_div">关于我们</a></li>
                <li>
                    <?php if(($user['tel']) == ""): ?><a href="javascript:void(0)" onclick="show_loginHtml()">登录 / 注册</a>
                        <?php else: ?>
                        <a href="<?php echo U('Individual/individual');?>"><?php echo ($user["user_name"]); ?></a>
                <li><a href="<?php echo U('Index/quit');?>" target="_parent">退出</a></li><?php endif; ?></li>
                <li><a href="#"><img src="/czq/Vrent/Public/Index/images/location.png" class="location_img"><span class="location_a"></span></a></li>
            </ul>

        </div>

    </nav>
</div>


<div class="content_big_div">

    <div class="box">
        <div class="left-pro">
            <div class="t1">
                <div id="showArea">
                    <a href="<?php echo ($model["pic"]); ?>" rel="zoom1" rev="<?php echo ($model["pic"]); ?>"><img src="<?php echo ($model["pic"]); ?>"/></a>
                    <a href="<?php echo ($carpic["pic"]); ?>" rel="zoom1" rev="<?php echo ($carpic["pic"]); ?>"><img src="<?php echo ($carpic["pic"]); ?>"/></a>
                    <a href="<?php echo ($carpic["pic2"]); ?>" rel="zoom1" rev="<?php echo ($carpic["pic2"]); ?>"><img src="<?php echo ($carpic["pic2"]); ?>"/></a>
                    <a href="<?php echo ($carpic["pic3"]); ?>" rel="zoom1" rev="<?php echo ($carpic["pic3"]); ?>"><img src="<?php echo ($carpic["pic3"]); ?>"/></a>

                </div>
            </div>
            <div class="t2">
                <a href="<?php echo ($model["pic"]); ?>" id="zoom1" class="MagicZoom"><img src="<?php echo ($model["pic"]); ?>" id="main_img"
                                                                         class="main_img img-responsive"/></a>
            </div>
        </div>
    </div>


    <div class="right_div">
        <div class="right_car_div">
            <span class="right_title"><?php echo ($model["intro"]["production"]); ?>年<?php echo ($model["brand_name"]); echo ($model["carkind_name"]); ?></span><span
                class="car_style"><?php echo ($model["car_number"]); ?></span>
        </div>
        <div class="t">
            <div class="r_price_div">
                <span class="price_s">￥<?php echo ($model["price"]); ?>/今日</span><img class="price_img"
                                                                    src="/czq/Vrent/Public/Index/images/images/price.png"><img
                    src="/czq/Vrent/Public/Index/images/images/goOrder_img.png" class="goOrder_img">
                    <?php if($user[user_id] == ''): ?><button type="button" class="goOrder_btn"  onclick="show_loginHtml()">马上订车</button>
                        <?php else: ?>
                <button type="button" class="goOrder_btn" onclick="go_order('订车成功')">马上订车</button><?php endif; ?></div>
            <div class="share_shou_div">
                <div class="share_div"><img src="/czq/Vrent/Public/Index/images/images/share.png" class="share_shou_img">分享
                </div>
                <div class="shou_div"><img src="/czq/Vrent/Public/Index/images/images/shou.png" class="shou_img">添加至收藏夹</div>
            </div>
        </div>

        <div class="person_div">
            <div class="headImg_div"><img src="<?php echo ($model["headimgurl"]); ?>" class="head_img"><?php echo ($model["user_name"]); ?>
            </div>
            <div class="person_detail_div">
                <div class="person_detail person_detail_1"><span>出租次数</span><span class="exp">10次</span></div>
                <div class="person_detail person_detail_2"><span>接单率</span><span class="exp">100%</span></div>
                <div class="person_detail person_detail_l"><span>自动接单</span><span class="exp">已开启</span></div>
            </div>
        </div>

        <div class="r_explain_div">
            <span>车主设置了接单要求，不满足车主接单要求的订单将无法提交：</span><span class="explain">租期：1天~30+天</span><span class="explain">不便交车时间：每天23：00~次日07：00</span>
        </div>
    </div>


    <div class="content_div">
        <div class="link_div">
            <ul>
                <li class="detail_li"><a href="#" class="detail_link">详情&nbsp;·</a></li>
                <li><a href="#evaluate">&nbsp;评价&nbsp;·&nbsp;</a></li>
                <li><a href="#location_div">位置&nbsp;·&nbsp;</a></li>
                <li><a href="#">联系车主</a></li>
            </ul>
        </div>

        <div class="car_detail_div">
            <span class="car_title">爱车介绍</span><span><?php echo ($model["intro"]["describe"]); ?></span>

            <span class="car_title car_title1">车辆细节</span>
            <ul>
                <li><img src="/czq/Vrent/Public/Index/images/images/1.png" class="car_detail_img">1.8L</li>
                <li><img src="/czq/Vrent/Public/Index/images/images/2.png" class="car_detail_img">92(93)号汽油</li>
                <li><img src="/czq/Vrent/Public/Index/images/images/2.png" class="car_detail_img"><?php echo ($model["gear_name"]); ?></li>
                <li><img src="/czq/Vrent/Public/Index/images/images/3.png" class="car_detail_img"><?php echo ($model["seat_name"]); ?>座</li>
                <li><img src="/czq/Vrent/Public/Index/images/images/21.png" class="car_detail_img">本地牌照</li>
                <li><img src="/czq/Vrent/Public/Index/images/images/22.png" class="car_detail_img">0.5-2万公里</li>
                <li><img src="/czq/Vrent/Public/Index/images/images/23.png" class="car_detail_img">当面交车</li>
                <li><img src="/czq/Vrent/Public/Index/images/images/24.png" class="car_detail_img"><?php echo ($model["intro"]["production"]); ?>
                </li>

                <li><img src="/czq/Vrent/Public/Index/images/images/31.png" class="car_detail_img">倒车雷达</li>
                <?php if(($model['intro']['window']) == "1"): ?><li><img src="/czq/Vrent/Public/Index/images/images/32.png" class="car_detail_img">全景天窗</li><?php endif; ?>
                <li><img src="/czq/Vrent/Public/Index/images/images/33.png" class="car_detail_img"><?php echo ($model["intro"]["seat_kind"]); ?>
                </li>
            </ul>
        </div>

        <div class="evaluate_div">
            <a href="#" name="evaluate"></a>
            <h2>评价</h2>
            <img src="/czq/Vrent/Public/Index/images/images/xing.png"><span class="evaluate_num"><?php echo ($count); ?>条评价</span>
            <div class="situation_div">
                <span>守时指数</span><span><img src="/czq/Vrent/Public/Index/images/images/xing.png"></span><span>车况指数</span><span><img
                    src="/czq/Vrent/Public/Index/images/images/xing.png"></span>
            </div>
        </div>

        <div class="sort_div">
            <span>按时间</span><img src="/czq/Vrent/Public/Index/images/images/down.png" class="down_img">
            <form action="#">
                <label class="select_label" for="all">
                    <input class="select_radio" type="radio" name="demo-radio" id="all" value="all" checked>
                    <span class="select_radioInput"></span>全部
                </label>
                <label class="select_label" for="pic">
                    <input class="select_radio" type="radio" name="demo-radio" id="pic" value="pic">
                    <span class="select_radioInput"></span>有图
                </label>
            </form>
        </div>

        <div class="comment_div">
            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="comm_head_div">
                    <div class="comm_head">
                        <img src="/czq/Vrent/Public/Index/images/images/head.png" class="head_img1"><span class="person_name">&nbsp;<?php echo ($vo["user_name"]); ?></span>
                        <time class="comm_time"><?php echo date('Y-m-d',$vo['addtime']);?></time>
                    </div>
                    <p class="comment_word"><?php echo ($vo["content"]); ?></p>

                </div><?php endforeach; endif; ?>


            <div class="pagin">
                <?php echo ($page); ?>
            </div>

        </div>


        <div class="address_big_div">
            <a href="#" name="location_div"></a>
            <h2>交车地址</h2>
            <span>交车地址：<?php echo ($model["address"]); ?></span>
            <div class="address_div">
                <div id="dituContent" class="map_div"></div>
            </div>

        </div>

    </div>


</div>

<div class="similar_car_div">
    <h3>相似车辆</h3>

    <div class="car_list">

        <div id="owl-example1" class="owl-carousel">
            <?php if(is_array($list2)): foreach($list2 as $key=>$vo): ?><div class="owl_list_div">
                    <div class="img_div gavinPlay"><a href="<?php echo U('Detail/detail',array('car_id'=>$vo['car_id']));?>"><img
                            src="<?php echo ($vo["pic"]); ?>" class="car_img"></a><img src="/czq/Vrent/Public/Index/images/images/shoucang.png"
                                                                     onclick="shoucang(this)" class="car_shou_img">
                    </div>
                    <div class="car_explain_div"><span class="explain1"><?php echo ($vo["intro"]["brand"]); echo ($vo["intro"]["kind"]); ?></span><span
                            class="address"><?php echo ($vo["address"]); ?></span><span class="price_t">$<?php echo ($vo["price"]); ?>今日</span><img
                            src="/czq/Vrent/Public/Index/images/images/xing.png" class="xing"><span class="xing_num">4.9</span>
                    </div>
                </div><?php endforeach; endif; ?>
        </div>
    </div>

</div>


<div class="bottom_div">
    <ul class="contact_ul">
        <li><a href="#" class="link">关于我们</a></li>
        <li><a href="#" class="link">联系我们</a></li>
        <li><a href="#" class="link">联系客服</a></li>
        <li><a href="#" class="link">合作招商</a></li>
        <li><a href="#" class="link">商家帮助</a></li>
        <li><a href="#" class="link">营销中心</a></li>
        <li><a href="#" class="link">手机京东</a></li>
        <li><a href="#" class="link">友情链接</a></li>
        <li><a href="#" class="link">销售联盟</a></li>
        <li><a href="#" class="link">京东社区</a></li>
        <li><a href="#" class="link">风险监测</a></li>
        <li><a href="#" class="link">隐私政策</a></li>
        <li><a href="#" class="link">京东公益</a></li>
        <li><a href="#" class="link">English Site</a></li>
        <li><a href="#" class="link last_link">Contact Us</a></li>
    </ul>
    <span class="bottom_detail">京公网安备 11000002000088号|京ICP证070359号|互联网药品信息服务资格证编号(京)-经营性-2014-0008|新出发京零 字第大120007号</span>
    <span class="bottom_detail">互联网出版许可证编号新出网证(京)字150号|出版物经营许可证|网络文化经营许可证京网文[2014]2148-348号|违法和不良信息举报电话：4006561155</span>
    <span class="bottom_detail">Copyright © 2004 - 2018  京东JD.com 版权所有|消费者维权热线：4006067733经营证照</span>
    <span class="bottom_detail">京东旗下网站：京东钱包|京东云</span>
    <div class="bottom_about_div"><img class="erweima" src="/czq/Vrent/Public/Index/images/ma.png"><img class="erweima"
                                                                                                 src="/czq/Vrent/Public/Index/images/ma.png">
    </div>


</div>


<script type="text/javascript" src="/czq/Vrent/Public/Index/js/jquery-1.9.1.min.js"></script>
<script src="/czq/Vrent/Public/Admin/js/common.js"></script>
<script src="/czq/Vrent/Public/Validform_v5.3.2/js/Validform_v5.3.2_min.js"></script>
<script src="/czq/Vrent/Public/layer/layer/layer.js"></script>
<script src="/czq/Vrent/Public/Index/owlcarousel/owl.carousel.js?v=beta.1.8"></script>
<script type="text/javascript" src="/czq/Vrent/Public/Index/js/bootstrap.js"></script>
<script type="text/javascript" src="/czq/Vrent/Public/Index/js/lrtk.js"></script>
<script type="text/javascript" src="/czq/Vrent/Public/Index/js/mzp-packed.js"></script>
<script src="/czq/Vrent/Public/Index/laydate/laydate.js"></script>
<script src="/czq/Vrent/Public/Index/js/jsRem.js"></script>

<script type="text/javascript">
    $(function(){
        $('.mainform').Validform({
            tiptype:4,

            showAllError: true,//提交表单时所有错误提示信息都会显示
            ajaxPost: true,//使用ajax方式提交表单数据，将会把数据POST到config方法或表单action属性里设定的地址
            beforeSubmit: function(curform) {
                loading("正在提交");
            },
            callback: function(data) {
                if (data.status == 1) {
                    msgOK(data.info);
                } else {
                    msgFaild(data.info);
                }
                if (data.url) {
                    loading(data.info + ",跳转中...");
                    hrefTo(data.url, 500)
                }
            }
        });
    });
</script>

<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script type="text/javascript">

    $(document).ready(function ($) {
        cityName=sessionStorage['cityName'];
        $('.location_a').text(cityName);
        $('#owl-example1').owlCarousel({
            autoplayHoverPause: true,
            nav: true,
            loop: true,
            slideSpeed: 100,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            dots: false,
            lazyLoad: true,
            navText: ['<img src="/czq/Vrent/Public/Index/images/images/left.png">', '<img src="/czq/Vrent/Public/Index/images/images/right.png">'],
            responsive: {
                /*480:{
                    items:2
                },*/
                350: {
                    items: 2
                },
                960: {
                    items: 3
                }
            }
        });


        var show_password = 0;
        $('.demo--label').click(function () {
            
            if (show_password == 0) {
                $(this).children("input:first-child").prop("checked", true);
                $(this).prev().attr('type', 'text');
                show_password = 1;
                return false;

            } else {
                $(this).children("input:first-child").prop("checked", false);
                $(this).prev().attr('type', 'password');
                show_password = 0;
                return false;
            }

        });
    });

    function confirm() {
        /*var know=$("input[type='checkbox']#go_order_know").is(':checked');
        console.log(know);
        if(know){
            console.log("ok");
            msgOK('成功');
        }else{
            console.log("errno");
            msgFaild('请先阅读并勾选租车需知');
        }
        if ($('.go_order_ipt3').val() == '') {
            msgFaild('取车时间不能为空');
        } else if($('#day_time2').val() == ''){
            msgFaild('还车时间不能为空');
        }*/
        
        
        //console.log($("input[type='checkbox']#go_order_know").is(':checked'));
    }

    var shou = 0;
    var adres0 = "/czq/Vrent/Public/Index/images/images/shoucang.png";
    var adres1 = "/czq/Vrent/Public/Index/images/images/shoucang2.png";

    function shoucang(obj) {
        if (shou == 0) {
            $(obj).prop("src", adres1);
            shou = 1;
        } else {
            $(obj).prop("src", adres0);
            shou = 0;
        }
    }


    function confirmByRegister(obj) {
        var pass = $('.password_ipt').val();
        var con_pass = $(obj).val();
        console.log(pass);
        console.log(con_pass);
        if (pass != con_pass) {
            //$.trim(pass) != $.trim(con_pass)
            console.log("no same");
            $('.explain3').text("两次密码不一致，请重新输入密码");
            $('.explain3').css("color", "red");
            $('.con_password_ipt').val("");
            return false;
        } else {
            $('.explain3').text("");
            $('.explain3').css("color", "#3d3d3d");
        }

    }

    function show_loginHtml() {
        $('.black_overlay').fadeIn();
        $('.register_div').fadeOut();
        $('.login_div').fadeIn();
    }

    function show_RegisterHtml() {
        $('.black_overlay').fadeIn();
        $('.register_div').fadeIn();
        $('.login_div').fadeOut();
    }

    function close_loginHtml() {
        $('.black_overlay').fadeOut();
        $('.login_div').fadeOut();
    }

    function close_RegisterHtml() {
        $('.black_overlay').fadeOut();
        $('.register_div').fadeOut();
    }


    function close_order() {
        $('.black_overlay').fadeOut();
        $('.go_order_div').fadeOut();
    }

    function go_order() {
        $('.black_overlay').fadeIn();
        $('.go_order_div').fadeIn();
    }

    //时间选择器
    laydate.render({
        elem: '#day_time1'
    });
    laydate.render({
        elem: '#day_time2'
    });

    function initMap() {
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        //addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap() {
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(113.678877, 24.780001);//定义一个中心点坐标
        map.centerAndZoom(point, 17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent() {
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl() {
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_LEFT, type: BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT, isOpen: 1});
        map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }

    initMap();//创建和初始化地图

</script>

</body>
</html>