<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="Keywords" content="首页"/>
    <title>首页</title>

    <link href="/czq/Vrent/Public/Index/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/czq/Vrent/Public/Validform_v5.3.2/css/validform.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/czq/Vrent/Public/Index/css/search.css" rel="stylesheet" type="text/css" media="all"/>
</head>

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
            <form class="navbar-form navbar-right search_f" role="search">
                <!--<div class="form-group">-->
                <!--<input type="text" class="form-control search_ipt">-->
                <!--</div>-->
                <!--<button type="submit" class="search_btn btn btn-default"></button>-->
            </form>
            <ul class="nav navbar-nav">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li class="active"><a href="#">租车</a></li>
                <li><a href="<?php echo U('Index/index');?>#about_div">关于我们</a></li>
                <li>
                    <?php if(($user['tel']) == ""): ?><a href="javascript:void(0)" onclick="show_loginHtml()">登录 / 注册</a>
                        <?php else: ?>
                        <a href="<?php echo U('Individual/individual');?>"><?php echo ($user["user_name"]); ?></a>
                <li><a href="<?php echo U('Index/quit');?>" target="_parent">退出</a></li><?php endif; ?></li>
                <li><a href="#"><img src="/czq/Vrent/Public/Index/images/location.png" class="location_img">韶关</a></li>
            </ul>
        </div>
</div>


<div class="content_div">
    <form class="mainform" method="post" action="<?php echo U('Search/search');?>">
        <div class="car_div time_div">
            <div class="car_time_div">
                <span class="car_time">取车时间</span><input type="text" id="day1" class="demo-input day1"
                                                         placeholder="请选择"><!--  -->
            </div>
            <div class="car_time_div">
                <span class="car_time">还车时间</span><input type="text" id="day2" class="demo-input day1 day2"
                                                         placeholder="请选择">
            </div>
            <div class="car_rent_div">
                <span class="rent_time">租期：</span><span class="rent_time_detail"> </span>
                <button type="button" class="search_time_btn">搜&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;索</button>
            </div>
        </div>
    </form>
</div>
<div class="car_div car_detail">
    <div class="car_detail_div">
        <span class="cdetail_title">品牌：</span><a href="<?php echo U('Search2/search',array('brand'=>'路虎'));?>" class="active"><span>路虎</span></a><a href="<?php echo U('Search2/search',array('brand'=>'大众'));?>"><span>大众</span></a><a
            href="#"><span>奥迪</span></a><a href="#"><span>本田</span></a><a href="#"><span>Jeep</span></a>
    </div>
    <div class="car_detail_div car_detail_div1">
        <span class="cdetail_title">车型：</span>
        <div><img src="/czq/Vrent/Public/Index/images/car1.png"><span>经济型</span></div>
        <div><img src="/czq/Vrent/Public/Index/images/car2.png"><span>舒适型</span></div>
        <div><img src="/czq/Vrent/Public/Index/images/car1.png"><span>家庭型</span></div>
        <div><img src="/czq/Vrent/Public/Index/images/car2.png"><span>豪华型</span></div>
    </div>
    <div class="car_detail_div">
        <span class="cdetail_title">档位：</span><a href="<?php echo U('Search2/search',array('gear'=>'自动档'));?>" class="active"><span>自动档</span></a>
        <a href="<?php echo U('Search2/search',array('gear'=>'手动档'));?>"><span>手动档</span></a></div>
    <div class="car_detail_div car_detail_div2 car_detail_div3">
        <span class="cdetail_title">车辆配置：</span><a href="#"><span>真皮座椅</span></a><a href="#"><span>导航仪</span></a><a
            href="#"><span>行车记录仪</span></a><a href="#"><span>倒车辅助</span></a><a href="#"><span>四驱</span></a><a
            href="#"><span>天窗</span></a>

    </div>
</div>

<div class="car_div choose_div">
    <a href="#" class="zh">综合<img src="/czq/Vrent/Public/Index/images/down_red.png"></a><a href="#">距离<img
        src="/czq/Vrent/Public/Index/images/up.png"></a><a href="#">接单率<img src="/czq/Vrent/Public/Index/images/xia.png"></a><a
        href="#">价格</a>
    <div class="page_div"><span><&nbsp;&nbsp;</span><span class="page">1/20</span><span
            class="right_j">&nbsp;&nbsp;></span></div>
</div>

<div class="car_div car_list_div">
    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="car_list">
            <div class="car_part car_part1">
                <img src="<?php echo ($vo["pic"]); ?>" class="car_img img-responsive">
            </div>
            <div class="car_part2">
                <span class="car_name"><?php echo ($vo["intro"]["brand"]); ?></span><span class="car_detail_s"><?php echo ($vo["intro"]["kind"]); ?>|2.0L|<?php echo ($vo["intro"]["gear"]); ?>|可载<?php echo ($vo["intro"]["seat"]); ?>人</span>
            </div>
            <div class="car_part2 car_part22">
                <img src="/czq/Vrent/Public/Index/images/location1.png" class="location1"><span><?php echo ($vo["address"]); ?></span>
            </div>
            <div class="car_part2 car_part3">
                <div><span class="price"><?php echo ($vo["price"]); ?></span><span class="day">/日均</span></div>
            </div>
            <div class="car_part2 car_part3">
                <div><a href="<?php echo U('Detail/detail',array('car_id'=>$vo['car_id']));?>">
                    <button type="button" class="order_btn">马上预定</button>
                </a></div>
            </div>
        </div><?php endforeach; endif; ?>
    <div class="pagin">
        <?php echo ($page); ?>
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
        <li><a href="#" class="link">Contact Us</a></li>
    </ul>
    <span class="bottom_detail">京公网安备 11000002000088号|京ICP证070359号|互联网药品信息服务资格证编号(京)-经营性-2014-0008|新出发京零 字第大120007号</span>
    <span class="bottom_detail">互联网出版许可证编号新出网证(京)字150号|出版物经营许可证|网络文化经营许可证京网文[2014]2148-348号|违法和不良信息举报电话：4006561155</span>
    <span class="bottom_detail">Copyright © 2004 - 2018  京东JD.com 版权所有|消费者维权热线：4006067733经营证照</span>
    <span class="bottom_detail">京东旗下网站：京东钱包|京东云</span>
    <div class="bottom_about_div"><img class="erweima" src="/czq/Vrent/Public/Index/images/ma.png"><img class="erweima"
                                                                                                 src="/czq/Vrent/Public/Index/images/ma.png">
    </div>
</div>


<script type="text/javascript" src="/czq/Vrent/Public/Index/js/jquery.1.9.1.min.js"></script>
<script src="/czq/Vrent/Public/Index/laydate/laydate.js"></script>
<script type="text/javascript">
    $(function(){
        $('.mainform').Validform({
            tiptype:4,
            //传入自定义datatype类型，可以是正则，也可以是函数
            // datatype:{
            //     "checkName":function(gets,obj,curform){
            //         var aname = gets;
            //         var url_check = "<?php echo U('Admin/checkName');?>";
            //         $.ajax({
            //             data:{'aname':aname},
            //             type:"POST",
            //             url:url_check,
            //             async:false,
            //             datatype:'json',
            //             success:function(data){
            //                 if(data.status==1){
            //                     flag = true;
            //                 }else{
            //                     flag = false;
            //                 }
            //             }
            //         });
            //         return flag;
            //     },
            // },
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
<script src="/czq/Vrent/Public/Admin/js/common.js"></script>
<script src="/czq/Vrent/Public/Validform_v5.3.2/js/Validform_v5.3.2_min.js"></script>
<script src="/czq/Vrent/Public/layer/layer/layer.js"></script>
<script type="text/javascript" src="/czq/Vrent/Public/Index/js/bootstrap.js"></script>
<script src="/czq/Vrent/Public/Index/js/jsRem.js"></script>
<script>
    //var date = new Date();
    $(document).ready(function ($) {

        laydate.render({
            elem: '#day1'
            , theme: '#25a7f5'
            , istoday: true
            //,start: laydate.now(0, 'YYYY-MM-DD hh:mm:ss')
            //,min: 'laydate.now()'
            //,value: '2018-5-20'
            , min: 0

            , done: function (value, date, endDate) {
                console.log(value); //得到日期生成的值，如：2017-08-18
                console.log(date); //得到日期时间对象：{year: 2017, month: 8, date: 18, hours: 0, minutes: 0, seconds: 0}
                /*console.log(date.year);*/
                datechange();
            }
        });
        laydate.render({
            elem: '#day2'
            , theme: '#25a7f5'
            //,value: '2018-5-21'
            , min: 0
            //,max: 360
            , done: function (value, date, endDate) {
                console.log(value); //得到日期生成的值，如：2017-08-18
                console.log(date); //得到日期时间对象：{year: 2017, month: 8, date: 18, hours:
                datechange();

            }
        });

        var show_password = 0;
        $('.demo--label').click(function () {
            //var this
            console.log("??");
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

    function datechange() {
        var date1 = $('.day1').val();
        var date2 = $('.day2').val();
        if (date2 != '') {
            var array1 = date1.split("-");
            var array2 = date2.split("-");
            var day1 = parseInt(array1[2]);
            var day2 = parseInt(array2[2]);
            var day_s = parseInt(day2 - day1);
            console.log(day1);
            console.log(day2);
            console.log(day_s);
            $('.rent_time_detail').html(day_s + '天');
        }


    }
</script>
</body>
</html>