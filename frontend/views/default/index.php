<!-- 网站首页 -->

<div class="fluid-container" style="background-color: #974747; height: 100%; width:100%;position: absolute;">

    <div class="row text-center" >
        <div class="col-lg-6 col-lg-offset-3" style="background-color: #61A1E3; height:380px;margin-top: 10%;border-radius: 8px 8px;">
            <div class="row">

                <img src="/v1/img/paw_logo.png" class="img-responsive col-lg-offset-5" style="margin-top: 5%" alt="paw_logo">

                <div class="col-lg-8 col-lg-offset-2" style="margin-top: 3%; font-size: 40px; color: white; ">
                    eCho
                </div>
                
                <div class="col-lg-8 col-lg-offset-2" style="color: white; font-size:18px; margin-top: 1%">
                    面向Ubuntu使用者的即时聊天软件
                </div>

            </div>

            <div class="row" style="margin-top: 3%">
                <div class="col-lg-6 col-lg-offset-3 login-btn" data-url="/default/login.html" style="height:35px;width:120px;background-color:#61A1E3;line-height:35px;color:white;font-size:16px;cursor: pointer;border-radius: 3px 3px;">
                    登陆
                </div>
                <div class="col-lg-6 col-lg-offset-2 register-btn" data-url="/default/register.html" style="height:35px;width:120px;background-color:#61A1E3;line-height:35px;color:white;font-size:16px;cursor: pointer;border-radius: 3px 3px;">
                    注册
                </div>
            </div>
        </div>
    </div>

</div>



<script type="text/javascript">
$('.login-btn, .register-btn').hover(function(){
    var _this = $(this);
    _this.css('background-color', '#037120'); // 
},function(){
    var _this = $(this);
    _this.css('background-color', '#61A1E3'); // 
})



$('.login-btn, .register-btn').click(function(){
    var _this = $(this);
    window.location.href = _this.data('url');
})


</script>