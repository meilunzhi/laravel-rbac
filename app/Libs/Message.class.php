<?php

namespace App\Libs;

class Message {
	/*
	 * 定义通用报错列表
	*
	* @return	array
	*/
	static function setResponseInfo($errorkey , $data = '' , $code = '0001' , $msg = '未知错误' ){

			$error =  array(

				/**
				 *	通用错误
				 */
				'FAILED'	=> array('code'=>'0001' , "msg"=>'操作失败'),
				'SUCCESS'	=> array('code'=>'0000' , "msg"=>'操作成功'),

				/*
				 *model错误
				 *
				 */
				'NO_USER'				=> array('code'=>'5001' , 'msg'=>'没有此用户'),
				'PASSWORD_ERROR'		=> array('code'=>'5002' , 'msg'=>'密码错误'),
				'DATA_EMPTY'			=> array('code'=>'5004' , 'msg'=>'没有数据'),
				'VERTIFY_CODE_ERROR'	=> array('code'=>'5005' , 'msg'=>'验证码错误'),
				'VERTIFY_CODE_EXPIRE'	=> array('code'=>'5006' , 'msg'=>'验证码已过期'),

				/*
				 *	controll错误
				 *
				 */
				"PARAMETER_ERROR"				=> array('code'=>'4001' , 'msg'=>'参数错误'),
				"PASSWORD_IS_NOT_CONSISTENT"	=> array('code'=>'4002' , 'msg'=>'两次密码不一致'),
				'REGISTERED'					=> array('code'=>'4003' , 'msg'=>'账户已被注册'),
				'REGISTERED'					=> array('code'=>'4004' , 'msg'=>'账户没有注册'),
				'NO_PHONE'						=> array('code'=>'4005' , 'msg'=>'手机号格式不对'),

			);

			if(isset($error[strtoupper($errorkey)])){
				$response = $error[strtoupper($errorkey)];
				$response['data'] = $data;
				return $response;
			}else{
				return array('code' => $code , 'msg' => $msg , 'data' => $data);
			}

	}
	
}
