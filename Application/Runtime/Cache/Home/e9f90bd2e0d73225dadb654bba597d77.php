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
<link rel="stylesheet" type="text/css" href="/shagalaka/Public/css/detail.css">
<div class='main detail'>
    <div class='detail_top'>
        <div class='detail_mid'>
            <form method='post' action=''>
                <p>标题：<input type='text' name='title' value=''></p>
                <p>我是：<select>
                            <option>请选择</option>
                            <option>摄影师</option>
                            <option>模特</option>
                            <option>店主</option>
                        </select>
                </p>
                <p>我需要：
                    <span>模特<input type='checkbox' name='need'></span>
                    <span>摄影<input type='checkbox' name='need'></span>
                    <span>店主<input type='checkbox' name='need'></span>
                </p>
                <p>收费金额：<input type='text' name='money' value=''> 
                </p>
                <p>摄影地点：<input type='text' name='address'></p>
                <p>详细描述：<textarea name='content'></textarea></p>
               <input type='submit' value='提交'>
        </form>
        </div>
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