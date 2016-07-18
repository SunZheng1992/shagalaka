<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title></title>
        <meta name="Keywords" content="" />
        <meta name="Description" content="" /> 
        <link rel="stylesheet" type="text/css" href="/shagalaka/Public/css/base.css"> 
        <script type="text/javascript" src="/shagalaka/Public/js/jquery-3.1.0.min.js"></script>
    </head>    
    <script>
        $(function(){
            $('.logininfo').hover(function(){
                $('.loginlist').show();
            },function(){
                $('.loginlist').hide();
            });
        })
    </script>
    <body>
        <div class='top'>
            <div class='center'>
                <div class='nav fl'>
                    <a href='/shagalaka' target="_self"><div ></div>S站</a>
                </div>

                <div class='nav fl acitiv'>
                    <a target="_self" href="<?php echo U('detail/detailList');?>">线下活动</a>
                </div>
                <div class='nav fl'>
                    <a target="_self" href="<?php echo U('photographic/photolist');?>">摄影需求</a>
                </div>
                <?php if(1): ?><div class='nav fr logininfo'>
                        <span>livebabys</span> 
                        <nav class='loginlist'>
                            <a href='<?php echo U("user/index");?>'>个人中心</a>
                            <a href=''>资料修改</a>
                        </nav>       
                    </div>
                <?php else: ?>
                <div class='nav fr'>
                        <a href="
                        <?php echo U('login/index');?>">登录/注册</a>        
                </div><?php endif; ?>
                <div class='clear'></div>
            </div>
        </div>
<link rel="stylesheet" type="text/css" href="/shagalaka/Public/css/user.css">
<div class='main'>
         <div class='user_top'>
            <div class='user_top_left_face'>
                <img class='user_face' src='/shagalaka/Public/img/default_face.png'>
            </div>
            <div class='user_top_right'>
                <p>livebabys</p>
                <p>个人的人，个性的签名</p>
            </div>
            <div class='clear'></div>
       </div> 
       <div class='user_nav'>
            <ul>
                <li><a href="<?php echo U('user/index');?>">个人中心</a></li>
                <li><a href="<?php echo U('user/editinfo');?>">修改资料</a></li>
                <li><a href="<?php echo U('user/editface');?>">修改头像</a></li>
                <li><a href="<?php echo U('user/pic');?>">专辑</a></li>
            </ul>
            <div class='clear'></div>
       </div>
       <div class='user_content user_info'>
        <form method='post' action=''>
          <ul class=''>
            <li>
                <label>昵称:</label>
                <span>livebabys</span>
            </li>
            <li>
              <p><label>性别:</label>
                 <span>男</span>
              </p>
            </li>
            <li>
              <p>
                <label>地区:</label>
                <span>安徽</span>
                <span>淮南</span>
              </p>
            </li>
            <li>
              <p>
                <label>个人身份:</label>
                <span>摄影师</span>
              </p>
            </li>
            <li>
              <label>个性签名:</label>
              <span>我就是个性签名咯</span>
            </li>
            

          </ul>
          <div class='clear'></div> 
        </form> 

        <div class='clear'></div> 
       </div>
</div>
 <div class='bottom main'>
            <div>
                <ul>
                    <li>
                        <span>帮助中心:</span>

                        <span>
                            <a hreaf=''>
                                帮助帮助
                            </a>
                        </span>
                         <span>
                            <a hreaf=''>
                                帮助帮助
                            </a>
                        </span> 
                         <span>
                            <a hreaf=''>
                                帮助帮助
                            </a>
                        </span> 
                         <span>
                            <a hreaf=''>
                                帮助帮助
                            </a>
                        </span>  
                    </li>    
                </ul>
            </div>

            <div class='copyright'>

            </div>
        </div>
    </body>
</html>