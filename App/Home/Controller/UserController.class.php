<?php
namespace Home\Controller;

/**
 * 用户控制器
 */
class UserController extends CommonController{

	/**
	 * ajax登陆
	 * @return json
	 */
	public function login(){
		if(IS_AJAX){
   			$model = D('User');
   			if($model->validate($model->_login_validate)->create(I('post.'),4)){
   				if($model->login()){			
   					echo json_encode(array(
		   				'code'=>200,
		   				'message'=>'登陆成功'
   					));
   					return;
   				}		
   			}
   		    echo json_encode(array(
   				'code'=>400,
   				'message'=>$model->getError()
   			));
   		}
	}

	/**
	 * ajax注册
	 * @return json
	 */
	public function register(){
	 	if(IS_AJAX){
   			$model = D('User');
   			if($model->create(I('post.'),1)){
   				if($model->add()){
   					echo json_encode(array(
   						'code'=>200,
   						'message'=>'我们已发送验证码到你的邮箱，请立即验证'
   					));
   					return;
   				}
   			}
   			echo json_encode(array(
   				'code'=>400,
   				'message'=>$model->getError()
   			));
   		}
	}

	/**
	 * 接收会员传回来的邮箱验证码
	 */
	public function emailchk(){
		// 接收会员传回来的验证码
		$code = I('get.code');
		if($code){
			// 把这个验证码到数据库中比较一下即可
			$model = M('User');
			$email = $model->where(array('email_code'=>array('eq', $code)))->find();
			if($email){
				// 设置这个账号为已验证
				$model->where(array('id'=>array('eq', $email['id'])))->setField('email_code', '');
				$this->redirect('Home/Index/index',array(),2,'邮箱验证成功，现在可以登陆了');
				return;
			}
		}
	}

	/**
	 * 退出
	 */
	public function logout(){
		session('uid', null);
		session('isLogin',null);
		$this->redirect('Home/Index/index');
	}
}

