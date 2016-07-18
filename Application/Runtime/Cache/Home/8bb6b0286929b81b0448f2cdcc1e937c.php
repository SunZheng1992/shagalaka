<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title></title>
        <meta name="Keywords" content="" />
        <meta name="Description" content="" /> 
        <link rel="stylesheet" type="text/css" href="/shagalaka/Public/css/base.css"> 
    </head>    
    <body>
        <div class='top'>
            <div class='center'>
                <div class='nav fl'>
                    <a  target="_self"><div ></div>S站</a>
                </div>

                <div class='nav fl acitiv'>
                    <a target="_self" href="">M新闻</a>
                </div>

                <div class='nav fr'>
                        <a href="
                        <?php echo U('login/index');?>">登录/注册</a>      
                </div>
                <div class='clear'></div>
            </div>
        </div>
<div class='main registerdiv'>
    <div class='rigister'>
        <div class='regiset_top'>
            <div class='regiset_top_title'>
                注册
            </div>
            <div>
                返回登陆
            </div>
        </div>
        <div>
            <from action='' method='post'>
                <div class='regist_from'>
                    <div class='input_div'>
                        <label class='label'>手机号:</label>
                        <input class='input_text' type='text' name='phone' value=''>
                    </div>
                    <div class='input_div'>
                        <label class='label'>昵称:</label>
                        <input class='input_text' type='text' name='nickName' value=''>
                    </div>
                    <div class='input_div'>
                        <label class='label'>验证码</label>
                        <input class='input_text' type='text' name='validate' >
                        <span class='button'>获取验证码</span>
                    </div>
                    <div class='input_div'>
                        <label class='label'>密码</label>
                        <input  class='input_text' type='password' name='passwd' >
                    </div>
                    <div class='input_div'>
                        <label class='label'>确认密码</label>
                        <input class='input_text' type='password' name='confirmPassword' >
                    </div>
                </div>
                <div>
                    <input class='submit '  type='submit' name='提交'>
                </div>
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