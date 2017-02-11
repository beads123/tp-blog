<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {

	//注册时验证
	protected $_validate = array(
		array('username','require','用户名不能为空',1,'regex',3),
		array('username','','用户名已被占用',1,'unique'),
		array('password','require','密码不能为空',1,'regex',3),
		array('password', '5,20', '密码必须是5-20位的字符！', 1, 'length'),
		array('email', 'email', '邮箱格式不正确！', 1),
		array('email', '', '邮箱已被占用！', 1, 'unique')
	);

	//登陆时验证,一定要注意是public
	public $_login_validate = array(
		array('username','require','用户名不能为空',1,'regex',4),
		array('password','require','密码不能为空',1,'regex',4),
		array('password', '5,20', '密码必须是5-20位的字符！', 1, 'length',4)
	);

  	/**
     * 验证用户登陆
     */
    public function login(){
    	$username=$this->username;
		$password = $this->password;
		$user = $this->where(array('username'=>array('eq',$username)))->find();
		if($user){
			// 判断是否已经通过email验证
			if(empty($user['email_code'])){
				// 判断密码是否正确
				if($user['password'] == md5($password . C('MD5_KEY'))){
					//生成session
					session('uid', $user['id']);
					session('isLogin',true);
					return TRUE;
				}
				else {
					$this->error = '密码不正确！';
					return FALSE;
				}
			}
			else {
				$this->error = '账号还没有通过邮箱验证！';
				return FALSE;
			}
		}
		else {
			$this->error = '账号不存在！';
			return FALSE;
		}
	}

	/**
	 * 在会员记录插入到数据库之前先补充字段
	 */
	protected function _before_insert(&$data, $option){
		//注册时间
		$data['regtime'] = time();
		// 生成验证email用的验证码
		$data['email_code'] = md5(uniqid());
		// 先把会员的密码加密
		$data['password'] = md5($data['password'] . C('MD5_KEY'));
	}

	/**
	 * 在会员注册成功之后
	 */
	protected function _after_insert($data, $option){
		// heredoc的语法
		$content =<<<HTML
		<p>欢迎您成为本站会员，请点击以下链接地址完成email验证。</p>
		<p><a href="http://localhost/blog/index.php/Home/User/emailchk/code/{$data['email_code']}">点击完成验证</a></p>
HTML;
		// 把生成的验证码发到会员的邮箱中
		sendMail($data['email'], '书香阁博客邮箱验证',$content);
	}
}
