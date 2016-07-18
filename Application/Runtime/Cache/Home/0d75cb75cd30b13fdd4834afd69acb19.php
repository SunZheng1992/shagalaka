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
        <div class='detail_top_info'>
            <div class='fl'>
                <img class='detail_face' src='/shagalaka/Public/img/default_face.png'>
            </div>

            <div class=' detail_top_userinfo'>
                <span>livebabys</span>
                <span>三分钟前</span>
            </div>
            <div class='clear'></div>
        </div>
        <div class='detail_mid'>
            <p>活动主题：活动的主题信息</p>
            <p>活动时间：1998年10月24日 8点</p>
            <p>活动地点：安徽省淮南市田家庵区田东四号路</p>
            <div class='detail_content'>
                 <p>活动内容：本次活动以吹牛逼为主，什么都可以吹。人有多大胆地。有多大产</p>
                 這里可能会有图片
            </div>
           
        </div>
        
    </div>
    <div class='detail_content_list'>
        <div class='detail_content'>
            <div class='fl detail_content_left'>
                <p><img class='detail_face' src='/shagalaka/Public/img/default_face.png'></p>
                <p>用户昵称</p>
            </div>
            <div class='fl detail_content_div'>
                这个活动真牛逼，在哪里参加
            </div>
            <div class='clear'></div>
        </div>
         <div class='detail_content'>
            <div class='fl detail_content_left'>
                <p><img class='detail_face' src='/shagalaka/Public/img/default_face.png'></p>
                <p>用户昵称</p>
            </div>
            <div class='fl detail_content_div'>
                这个活动真牛逼，在哪里参加
            </div>
            <div class='clear'></div>
        </div>
    </div>
    <div>
        <form method='post' action=''>
            <textarea id='content'></textarea>
            <input class='detail_submit' type='submit' value='评论'>
        </form>
        <div class='clear'></div>
    </div>

</div>
<script type="text/javascript" charset="utf-8" src="/shagalaka/Public/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/shagalaka/Public/js/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript">
    $(function(){
        var ue = UE.getEditor('content');
    })
</script>
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