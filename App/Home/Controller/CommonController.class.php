<?php
namespace Home\Controller;

/**
 * 公用控制器
 */
class CommonController extends \Think\Controller{

	/**
	 * 判断是否登陆,并且展示左侧的导航栏
	 * @param  string $title 标题
	 * @param  string $name  渲染的模板名称，默认是与操作相同
	 * @return void
	 */
	protected function showNavbar($title,$name=''){
		$this->assign(array(
			'title'=>$title,
			'isLogin'=>false
		));
		$this->display($name);
	}
}

