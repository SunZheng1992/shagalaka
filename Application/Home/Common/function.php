<?php

function uploadFileToQiniu()
{
	$qiniuConfig=C('UPLOAD_TYPE_CONFIG');
	$setting=array(
		'saveName'=>array('uniqid',''),
		);

	$Upload=new\Think\Upload($setting,C('FILE_UPLOAD_TYPE'),$qiniuConfig);
	$info=$Upload->upload($_FILES);

	echo $Upload->getError();
	var_dump($info);exit;
}