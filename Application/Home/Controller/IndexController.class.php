<?php
namespace Home\Controller;
use Think\Controller;
use Org\Qiniu\Qiniu;
class IndexController extends Controller {
    public function index()
    {
    	
    	
        //var_dump($qiniu->delete('1468486240653705.jpeg'));exit;
        if(IS_POST)
        {
        	//uploadFileToQiniu();exit;
        	$qiniu = new Qiniu(C('UPLOAD_TYPE_CONFIG'));
        	$re = $qiniu->upload($_FILES['file']);
        }
        $this->display();
    }

    public function test()
    {
    	echo 1;
    }
   
}