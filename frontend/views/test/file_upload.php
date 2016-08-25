<script type="text/javascript" src="/js/common/jquery.form.js"></script>


<?php
$two='222222222';
echo $this->render('one');
?>

<form class="user-form">
	
	<input type="hidden" class="csrf" name="_csrf" value="<?php echo Yii::$app->request->getCsrfToken(); ?>">

	<input type="text" name="mobile">

	<input type="file" name="fileOne" class="file-one">
	<input type="file" name="fileTwo" class="file-two">

</form>

<span class="progress">	
</span>

<script type="text/javascript">

$('.file-one').change(function(){
	var option = {};
	var _this = $(this);
	var fileData = _this.fieldSerialize(); // 只取指定元素值来提交
	console.log(fileData);
	$('.user-form').ajaxSubmit({
		type:'post',
		url:'/test/file-upload.html',
		data:fileData, // 只提交指定元素值
		dataType:'json',
		success:function(msg){
			console.log(msg);
			_this.clearFields();
		},
		uploadProgress:function(event, position, total, percent){
			// 显示进度条
			console.log(event);
			console.log(position);
			console.log(total);
			console.log(percent);
			console.log($('.progress').html(percent));
		},
		error:function(error){
			console.log(error);
			_this.clearFields();
		}
	});
	return false;
})


$('.file-two').change(function(){
	var option = {};
	var _this = $(this);
	var fileData = _this.fieldSerialize();
	console.log(fileData);
	$('.user-form').ajaxSubmit({
		type:'post',
		url:'/test/file-upload.html',
		data:fileData,
		// data:{_csrf:$('.csrf').val(), name:$(this).val()},
		dataType:'json',
		success:function(msg){
			console.log(msg);
			_this.clearFields();
		},
		error:function(error){
			console.log(error);
			_this.clearFields();
		}
	});
	return false;
})


</script>

