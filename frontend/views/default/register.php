<?php 
use \yii\web\View;
use \yii\helpers\Url;

$this->registerJsFile('/v1/js/layer/layer.js', ['position'=>View::POS_END]);
$this->registerJsFile('/v1/js/validato.js', ['position'=>View::POS_END]);
$this->registerJsFile('/v1/js/common.js', ['position'=>View::POS_HEAD]);


?>


<div class="fluid-container">
    <div class="col-lg-10 col-lg-offset-1" style="margin-top: 10%;">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-5">
                <form action="" class="register-form form-inline col-lg-8">
                	<input type="hidden" name="_csrf" value="<?php echo \Yii::$app->request->getCsrfToken(); ?>">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="请输入邮箱">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email_code" class="form-control" placeholder="请输入邮箱验证码">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pwd" class="form-control" placeholder="请输入密码">
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirm_pwd" class="form-control" placeholder="请再次输入密码">
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-primary submit-btn" value="提交">
                        <input type="button" class="btn btn-warning cancel-btn" value="取消">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
$('.submit-btn').click(function(){
    // 表单验证配置
    var options = {
      rules:{
        email:{
          required:true, email:true, minlength:4,
        },
        email_code:{
          required:true, digits:true, fixlength:6,
        },
        pwd:{
          required:true, minlength:6,
        },
        confirm_pwd:{
          required:true, minlength:6, same:'pwd',
        }
      },
      errorTips:{
        email:{
          required:'请输入邮箱', email:'邮箱格式不正确',
        },
        email_code:{
          required:'请输入邮箱验证码', digits:'箱验证码只能是数字', fixlength:'邮箱验证码必须是6位',
        },
        pwd:{
          required:'请输入密码', minlength:'密码不能少于6个字符',
        },
        confirm_pwd:{
          required:'请输入确认密码', minlength:'确认密码不能少于6个字符', same:'确认密码必须与密码一致',
        },
      },
      errorPopType:['layer'],
      validatePassed:function(){
        // 验证通过以后进行注册
        var url = '<?php echo Url::to(['/default/reg-submit']) ?>';
        var data = $('.register-form').serialize();
        repeatLimit = true;
        var result = ajaxRequest(url, data);
        if ( result.status == 1 ) {
          // 注册成功
          setTimeout(function(){
            window.location.href = '<?php echo Url::to(['/default/login']) ?>';
          }, 1000);
          return false;
        } else {
          // 注册失败
          repeatLimit = false;
          layer.msg(result.msg);
          return false;
        }
      },
    };
    // 进行表单验证
    var tmp = $('.register-form').validato(options);
    return false;

})



</script>