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
        <div class='main'>
            <div class='fl slide'>
                <a>
                    <img src='/shagalaka/Public/img/2c223230471611e6a143272e3aec81e6.jpg' />
                </a>
            </div>
            <!-- <div class='homelogin fr pd5'>
                <div>
                    注册
                </div>
            </div> -->
            <div class='clear'>
            </div>

            <div class='main_content'>
                <div class='search'>
                    <div class='search_checkbox'>
                         <input type='checkbox' name='search[]' value='pic'>相册
                    </div>
                    <div class='search_checkbox'>
                        <input type='checkbox' name='search[]' value='say'>说说
                    </div>
                    <div class='search_checkbox'> 
                        <input type='checkbox' name='search[]' value='log'>日志
                    </div>
                    <div class='clear'></div>
                </div>
                <div class='content'>
                    <div class='box'>
                        <div class='box_top'>
                            <div class='face'>
                                <a href='#' class='user_face'>
                                    <img src='/shagalaka/Public/img/middle.jpg'>
                                </a>
                            </div>
                            
                            <div class='box_top_right'>
                                <div>
                                    <a href=''>
                                        小白爱吃小白菜QA_
                                    </a>
                                </div>
                               
                                <div class='box_top_time'>
                                    2天前
                                </div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='box_mid'>
                            <div class='box_mid_title'>
                                <a href='#' target='_blank'>
                                    泳池派对同人版阿狸
                                </a>
                            </div>
                            <div class='box_mid_content'>
                                <div>
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容...
                                    <a href='<?php echo U("detail/index");?>'>
                                        [全部内容]
                                    </a>
                                </div>
                                <div class='box_mid_img'>
                                    <img src='/shagalaka/Public/img/w650.jpg'>
                                </div>
                            </div>
                            <div>
                                <span class='button'>转发</span>
                                <span class='button'>赞</span>
                                <span class='button'>评论</span>
                            </div>
                        </div>
                        <div class='box_bom'>
                        </div> 
                    </div>
                </div>
                <div class='box'>
                        <div class='box_top'>
                            <div class='face'>
                                <a href='#' class='user_face'>
                                    <img src='/shagalaka/Public/img/middle.jpg'>
                                </a>
                            </div>
                            
                            <div class='box_top_right'>
                                <div>
                                    <a href=''>
                                        小白爱吃小白菜QA_
                                    </a>
                                </div>
                               
                                <div class='box_top_time'>
                                    2天前
                                </div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='box_mid'>
                            <div class='box_mid_title'>
                                <a href='#' target='_blank'>
                                    泳池派对同人版阿狸
                                </a>
                            </div>
                            <div class='box_mid_content'>
                                <div>
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容...
                                    <a href=''>
                                        [全部内容]
                                    </a>
                                </div>
                                <div class='box_mid_img'>
                                    <img src='/shagalaka/Public/img/w650.jpg'>
                                </div>
                            </div>
                            <div>
                                <span class='button'>转发</span>
                                <span class='button'>赞</span>
                                <span class='button'>评论</span>
                            </div>
                        </div>
                        <div class='box_bom'>
                        </div> 
                    </div>
                </div>
                <div class='box'>
                        <div class='box_top'>
                            <div class='face'>
                                <a href='#' class='user_face'>
                                    <img src='/shagalaka/Public/img/middle.jpg'>
                                </a>
                            </div>
                            
                            <div class='box_top_right'>
                                <div>
                                    <a href=''>
                                        小白爱吃小白菜QA_
                                    </a>
                                </div>
                               
                                <div class='box_top_time'>
                                    2天前
                                </div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='box_mid'>
                            <div class='box_mid_title'>
                                <a href='#' target='_blank'>
                                    泳池派对同人版阿狸
                                </a>
                            </div>
                            <div class='box_mid_content'>
                                <div>
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容...
                                    <a href=''>
                                        [全部内容]
                                    </a>
                                </div>
                                <div class='box_mid_img'>
                                    <img src='/shagalaka/Public/img/w650.jpg'>
                                </div>
                            </div>
                            <div>
                                <span class='button'>转发</span>
                                <span class='button'>赞</span>
                                <span class='button'>评论</span>
                            </div>
                        </div>
                        <div class='box_bom'>
                        </div> 
                    </div>
                    <div class='clear'></div>
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