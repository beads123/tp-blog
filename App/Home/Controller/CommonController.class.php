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
		//导航栏最新评论
		$RecentComment=D('Comment')->getRecentComments();
		//导航栏热门博客
		$HotBlog=D('Blog')->getHotBlog();

		$this->assign(array(
			'title'=>$title,
			'isLogin'=>session('isLogin'),
			'uid'=>session('uid'),
			'RecentComment'=>$RecentComment,
			'HotBlog'=>$HotBlog
		));
		$this->display($name);
	}
}

