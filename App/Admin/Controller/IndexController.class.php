<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller{

	//验证是否是管理员
	private function checkLogin(){
		$id=session('uid');
		if($id!=1){
			$this->redirect('Home/Index/index');
			exit;
		}
	}

	/**
	 * 显示首页
	 */
	public function index(){
		$this->checkLogin();

		//取数据
		$userCount=M('User')->field('id')->count();
		$blogCount=M('Blog')->field('id')->count();
		$commentCount=M('Comment')->field('id')->count();

		$this->assign(array(
			'userCount'=>$userCount,
			'blogCount'=>$blogCount,
			'commentCount'=>$commentCount
		));
		$this->display();
	}

	/**
	 * 管理用户信息
	 */
	public function user(){
		$this->checkLogin();

		//获取所有的用户信息
		$userInfo=M('User')->field('*')->select();
		foreach ($userInfo as $key => $value) {
			$userInfo[$key]['email_code']= $value['email_code']==''? '已验证':'未验证';
			$userInfo[$key]['regtime']= date('Y-m-d H:i:s',$value['regtime']);
		}
		$this->assign('userInfo',$userInfo);
		$this->display();
	}

	/**
	 * 管理博客信息
	 */
	public function blog(){
		//ajax获取某一条博客的内容
		if(IS_AJAX){
			$id=I('post.id');
			$data=M('Blog')->field('content,status')->where('id='.$id)->find();
			echo json_encode(array(
				'code'=>200,
				'data'=>$data
			));
			return;
		}

		//获取所有的博客信息
		$blogInfo=M('Blog')->field('*')->select();
		foreach ($blogInfo as $key => $value) {
			$blogInfo[$key]['status']= $value['status']==1? '已通过':'未通过';
			$blogInfo[$key]['time']= date('Y-m-d H:i:s',$value['time']);
		}
		$this->assign('blogInfo',$blogInfo);
		$this->display();
	}

	/**
	 * 管理评论信息
	 */
	public function comment(){
		$this->checkLogin();

		//获取所有的评论信息
		$commentInfo=M('Comment')->field('*')->select();
		foreach ($commentInfo as $key => $value) {
			$commentInfo[$key]['time']= date('Y-m-d H:i:s',$value['time']);
		}
		$this->assign('commentInfo',$commentInfo);
		$this->display();
	}

	/**
	 * ajax修改博客的状态
	 */
	public function UpdateBlogStatus(){
		if(IS_AJAX){
			$id=I('post.id');
			$bool=M('Blog')->where('id='.$id)->setField('status',1);
		    echo $bool;    	
		}		
	}

   /**
	 * ajax修改用户邮箱
	 */
	public function editEmail(){
		if(IS_AJAX){
			$data=array(
				'id'=>I('post.id'),
				'email'=>I('post.email')
			);
			$bool=M('user')->save($data);
		    echo $bool;    	
		}			
	}
}

