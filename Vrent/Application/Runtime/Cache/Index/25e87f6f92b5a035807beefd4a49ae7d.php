<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">
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
<div class="tab mt10" id="tabid1">
	<form class="mainform" method="POST" action="<?php echo U('Individual/doAdd');?>" enctype="multipart/form-data">
		<table class="formtable">
			<tbody>
			<input type="hidden" name="user_id" value="<?php echo ($user["user_id"]); ?>">
			<tr id="" class="list_div2">
				<td class="ft_title span_title1">车牌号</td>
				<td colspan="3">
					<input value="<?php echo ($model["car_number"]); ?>" datatype="*" name="car_number" maxlength="50"
						   class="bds inp ipt w500" nullmsg="请填写车牌号" placeholder="请填写车牌号" type="text">
					<font class="need show_0"></font><span class="Validform_checktip">请填写车牌号</span>
				</td>
			</tr>
			<tr id="" class="list_div2">
				<td class="ft_title span_title1">押金</td>
				<td colspan="3">
					<input value="<?php echo ($model["cash"]); ?>" datatype="*" name="cash" maxlength="50" class="bds inp ipt w500"
						   nullmsg="请填写押金" placeholder="请填写押金" type="text">
					<font class="need show_0"></font><span class="Validform_checktip">请填写押金</span>
				</td>
			</tr>
			<tr id="" class="list_div2">
				<td class="ft_title span_title1">租金/日</td>
				<td colspan="3">
					<input value="<?php echo ($model["price"]); ?>" datatype="*" name="price" maxlength="50" class="bds inp ipt w500"
						   nullmsg="请填写押金" placeholder="请填写租金/日" type="text">
					<font class="need show_0"></font><span class="Validform_checktip">请填写租金/日</span>
				</td>
			</tr>
			<tr id="" class="list_div2">
				<td class="ft_title">车辆介绍</td>
				<td colspan="3">
					<input value="<?php echo ($model["intro"]["describe"]); ?>" name="describe" maxlength="50" datatype="*"
						   class="bds inp ipt w500"
						   nullmsg="请填写车辆介绍（必填）" placeholder="请填写车辆介绍（必填）" type="text">
					<font class="need show_0">*</font><span class="Validform_checktip">请填写车辆介绍（必填）</span>
				</td>
			</tr>
			<tr id="" class="list_div2">
				<td class="ft_title">座位</td>
				<td colspan="3">
					<select class="upload_select"  name="seat" datatype="*">
						<option value="" selected="selected">请选择座位</option>
						<?php if(is_array($seat)): foreach($seat as $key=>$vo): ?><option value="<?php echo ($vo["seat_id"]); ?>"><?php echo ($vo["seat_name"]); ?></option><?php endforeach; endif; ?>
					</select>
					<font class="need show_0"></font><span class="Validform_checktip">请选择座位</span>
				</td>
			</tr>
			<tr id="" class="list_div2">
				<td class="ft_title">品牌</td>
				<td colspan="3">
					<select class="upload_select"  name="brand" datatype="*">
						<option value="" selected="selected">请选择品牌</option>
						<?php if(is_array($brand)): foreach($brand as $key=>$vo): ?><option value="<?php echo ($vo["brand_id"]); ?>"><?php echo ($vo["brand_name"]); ?></option><?php endforeach; endif; ?>
					</select>
					<font class="need show_0"></font><span class="Validform_checktip">请选择品牌</span>
				</td>
			</tr>
			<tr id="" class="list_div2">
				<td class="ft_title">车型</td>
				<td colspan="3">
					<select class="upload_select"  name="carkind" datatype="*">
						<option value="" selected="selected">请选择车型</option>
						<?php if(is_array($carkind)): foreach($carkind as $key=>$vo): ?><option value="<?php echo ($vo["carkind_id"]); ?>"><?php echo ($vo["carkind_name"]); ?></option><?php endforeach; endif; ?>
					</select>
					<font class="need show_0"></font><span class="Validform_checktip">请选择车型</span>
				</td>
			</tr>
			<tr id="" class="list_div2">
				<td class="ft_title">挂挡类型</td>
				<td colspan="3">
					<select class="upload_select"  name="gear" datatype="*">
						<option value="" selected="selected">请选择挂挡类型</option>
						<?php if(is_array($gear)): foreach($gear as $key=>$vo): ?><option value="<?php echo ($vo["gear_id"]); ?>"><?php echo ($vo["gear_name"]); ?></option><?php endforeach; endif; ?>
					</select>
					<font class="need show_0"></font><span class="Validform_checktip">请选择挂挡类型</span>
				</td>
			</tr>
			<tr id="" class="list_div2">
				<td class="ft_title">天窗类型</td>
				<td colspan="3">
					<select class="upload_select"  name="window" datatype="*">
						<option value="" selected="selected">请选择天窗类型</option>
						<?php if(is_array($window)): foreach($window as $key=>$vo): ?><option value="<?php echo ($vo["window_id"]); ?>"><?php echo ($vo["window_name"]); ?></option><?php endforeach; endif; ?>
					</select>
					<font class="need show_0"></font><span class="Validform_checktip">请选择天窗类型</span>
				</td>
			</tr>

			<tr id="" class="list_div2">
				<td class="ft_title">公里数</td>
				<td colspan="3">
					<input value="<?php echo ($model["intro"]["mileage"]); ?>" name="mileage" maxlength="50" class="bds inp ipt w500"
						   nullmsg="请填写公里数" placeholder="请填写公里数" type="text">
					<font class="need show_0"></font><span class="Validform_checktip">请填写公里数</span>
				</td>
			</tr>
			<tr id="" class="list_div2">
				<td class="ft_title">生产日期</td>
				<td colspan="3">
					<input value="<?php echo ($model["intro"]["production"]); ?>" name="production" maxlength="50" class="bds inp ipt w500"
						   nullmsg="请填写生产日期" placeholder="请填写生产日期" type="text">
					<font class="need show_0"></font><span class="Validform_checktip">请填写座位</span>
				</td>
			</tr>

			<tr id="" class="list_div2">
				<td class="ft_title">座位配置</td>
				<td colspan="3">
					<input value="<?php echo ($model["intro"]["seat_kind"]); ?>" name="seat_kind" maxlength="50" class="bds inp ipt w500"
						   nullmsg="请填写座位配置" placeholder="请填写座位配置" type="text">
					<font class="need show_0"></font><span class="Validform_checktip">请填写座位配置</span>
				</td>
			</tr>

			<tr id="" class="list_div2">
				<td class="ft_title">自动应答</td>
				<td colspan="3">
					<select class="upload_select"  name="self">
						<?php if(($model['intro']['self']) == "1"): ?><option value="1" selected="selected">有</option>
							<option value="0">无</option>
							<?php else: ?>
							<option value="0" selected="selected">无</option>
							<option value="1">有</option><?php endif; ?>
					</select>
					<font class="need show_0"></font><span class="Validform_checktip">请选择有无</span>
				</td>
			</tr>
			<tr id="" class="">
				<td class="ft_title">地址</td>
				<td colspan="3">
					<div id="allmap"></div>
					<div>
						<label>位置:  </label>
						<span  id="weizhi" class="address" ></span>
						<input type="hidden" id="address" name="address" value="">
					</div>
				</td>
			</tr>
			<tr id="" class="">
				<td class="ft_title">封面</td>
				<td colspan="3">
					<div class="file_holder ">
						<div class="upimg_out">
							<img src=" " class="upimg"/>
							<input type="text" id="image1" value="" name="pic" class="upimg_btn"/>
						</div>
					</div>

				</td>
			</tr>

			<tr>
				
				<td colspan="3">
					<input type="submit" value="保 存" class="btn button_primary btnsave submit_btn" status="1">
				</td>
			</tr>

			</tbody>
		</table>
	</form>
</div>

<script>
    laydate.render({
      elem: '#day1'
      ,theme: '#25a7f5'
    });
    
</script>

<script type="text/javascript">
	$(function(){
  var editor = KindEditor.editor({
            uploadJson: "<?php echo U('Individual/pic');?>",
        });
        $('#image1').click(function () {
            editor.loadPlugin('image', function () {
                editor.plugin.imageDialog({
                    // showRemote : false,
                    imageUrl: KindEditor('#url1').val(),
                    clickFn: function (url, title, width, height, border, align) {
                        console.log("url:" + url);
                        $('#image1').val(url);
                        $('.upimg').attr('src', url);
                        editor.hideDialog();
                    }
                });
            });
        });

	});

</script>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    map.centerAndZoom("韶关",12);

    var point = new BMap.Point(112.244344,32.260929);
    map.centerAndZoom(point, 15);

    var marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);               // 将标注添加到地图中
    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画

    //单击获取点击的经纬度
    map.addEventListener("click",function(e){
        var jing_du_value = e.point.lng ;//e.point.lng以及e.point.lat是将经纬度的信息
        var wei_du_value =  e.point.lat;
        map_click(jing_du_value,wei_du_value);
    });

    // 百度地图API功能
    setTimeout(function(){
        map.setZoom(14);
    }, 2000);  //2秒后放大到14级
    map.enableScrollWheelZoom(true);


    function map_click(lng,lat){
        var point = new BMap.Point(lng,lat);
        var geoc = new BMap.Geocoder();
        geoc.getLocation(point,function(rs){
            var addComp = rs.addressComponents;
            weizhi=addComp.province +  addComp.city +addComp.district  + addComp.street   + addComp.streetNumber;
            $('.address').text(weizhi);
            $('#address').val(weizhi);
        });
    }
</script>