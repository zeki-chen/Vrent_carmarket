<?php if (!defined('THINK_PATH')) exit();?>


<form action="<?php echo U('Individual/doedit');?>" method="post" class="mainform content_div">
	<input type="hidden" name="user_id" value="<?php echo ($user["user_id"]); ?>">
	<div class="list_div">
		<span class="span_title">昵称</span>
		<input type="text" name="user_name" placeholder="" class="ipt name_ipt" value="<?php echo ($user["user_name"]); ?>"><img src="/czq/Vrent/Public/Index/images/images/bitian.png" class="bitian_img"><img src="/czq/Vrent/Public/Index/images/images/cha.png" class="cha_img">
	</div>
	<div class="list_div">
		<span class="span_title">真实姓名</span>
		<span>陈植钦</span>
	</div>
	<div class="list_div">
		<span class="span_title">性别</span>
		
            <label class="select_label" for="man">
            <input class="select_radio" type="radio" name="sex" id="man" value="1" checked>
            <span class="select_radioInput"></span>男
            </label>
            <label class="select_label" for="woman">
            <input class="select_radio" type="radio" name="sex" id="woman" value="0">
            <span class="select_radioInput"></span>女
            </label>
            
	</div>
	<div class="list_div">
		<span class="span_title">邮箱</span>
		<input type="text" name="" placeholder="邮箱" class="ipt">
		<!--<img src="/czq/Vrent/Public/Index/images/images/bitian.png" class="bitian_img">-->
	</div>
	<div class="list_div">
		<span class="span_title">支付宝账号</span>
		<input datatype="*" type="text" name="zhifubao" value="<?php echo ($user["zhifubao"]); ?>" placeholder="支付宝账号" class="ipt"><img src="/czq/Vrent/Public/Index/images/images/bitian.png" class="bitian_img">
	</div>
	<div class="list_div">
		<span class="span_title">身份证<?php echo ($users["user_name"]); ?></span>
		<input type="text" name="idcard" placeholder="" value="<?php echo ($user["idcard"]); ?>"  class="ipt ipt2"><img src="/czq/Vrent/Public/Index/images/images/bitian.png" class="bitian_img">
	</div>
	<div class="list_div">
		<span class="span_title">驾照</span>
		<input type="text" name="driving" placeholder="驾照" value="<?php echo ($user["driving"]); ?>" class="ipt ipt2"><img src="/czq/Vrent/Public/Index/images/images/bitian.png" class="bitian_img">
	</div>
	<div class="list_div">
		<span class="span_title">联系电话</span>
		<span><?php echo ($user["tel"]); ?></span>
	</div>
	<div class="list_div">
		<span class="span_title">居住地</span>
        <div class="address_ddiv">
		  <select id="break-sort" name="break-sort">
                <option value="省份">省份</option>
           </select>
            <select id="break-site" name="break-site">
                <option value="城市">城市</option>
            </select>
            <select id="ci" name="ci">
                <option value="区/县">区/县</option>
            </select>
            <textarea placeholder="详细地址" rows="3" cols="34" class="textarea2"></textarea>
        </div>
	</div>
	</div>
	<button type="submit" class="submit_btn">保 存</button>
</form>



<script src="/czq/Vrent/Public/Index/js/sort.js"></script>
<script type="text/javascript" src="/czq/Vrent/Public/Index/js/bootstrap.js"></script>
<script src="/czq/Vrent/Public/Index/js/jsRem.js"></script>
<script src="/czq/Vrent/Public/Index/js/liandong.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

		$('.cha_img').click(function(){ 
			$('.name_ipt').val("");
		});



		select_html=$('.deLaw_div').html();
    var sort = $('.break-sort'), 
    site = $('.break-site');
    for(var i=0;i<sortList.length;i++){
        addEle(sort,sortList[i].sort);
    }
    function addEle(ele,value){
        var sortItem = "";
        sortItem = "<option value='"+value+"'>"+value+"</option>";
        ele.append(sortItem);
    }
    function removeEle(ele){
        ele.find('option').remove();
        var optionStart = "<option value="+"请选择项目"+">"+"请选择项目"+"</option>";
        ele.append(optionStart);
    }
    var sortText,siteItem;
});

	function selectChange(obj){
        //console.log("change?");
        sortText = $(obj).val();
        this_site_parent=$(obj).parent().next();
        this_site=this_site_parent.children('select');

        if(sortText!='其他'){
            this_site=this_site_parent.children('input');
            this_site.remove();
            this_site=this_site_parent.children('select');
                
                this_site.remove();
                var new_select="<select name='break-site' class='break-site'><option value="+"请选择项目"+">"+"请选择项目"+"</option></select>";
                
                this_site_parent.append(new_select);
                

        $.each(sortList,function(i,item){
            if(sortText == item.sort){
                siteItem = i;
                console.log(i);
                return siteItem;
            }

        });
        this_site=this_site_parent.children('select');
        console.log(this_site);
        removeEle(this_site);
        $.each(sortList[siteItem].siteList,function(i,item){
            addEle(this_site,item);
        });
        this_site.css({"left": "-0.03rem","position": "relative"});
        }
        
    }

</script>
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