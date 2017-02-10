<?php
namespace Home\Controller;

/**
 * 博客控制器
 */
class BlogController extends CommonController{

	/**
	 * 显示个人博客
	 */
	public function index(){
	 	if($_GET['type']=='front'){
	 		$this->showNavbar('前端技术');
	 	}
	 	elseif($_GET['type']=='back'){
	 		$this->showNavbar('后端技术');
	 	}
	}

	/**
	 * 发布博客
	 * @return [type] [description]
	 */
	public function fabu(){
	  	if(IS_AJAX){
   			$model = D('Blog');
   			if($model->create(I('post.'))){
   				if($model->add()){
   					echo json_encode(array(
   						'code'=>200,
   						'message'=>'博客发布成功,需等待管理员通过验证'
   					));
   					return;
   				}else{
   					echo json_encode(array(
   						'code'=>500,
   						'message'=>'服务器内部错误,请稍后再试'
   					));		
   					return;
   				}
   			}
   			echo json_encode(array(
   				'code'=>400,
   				'message'=>$model->getError()
   			));
   			return;
   		}
		$this->showNavbar('写博客');
	}

	/**
	 * 显示个人所有博客
	 */
	public function personal(){
		$data=D('Blog')->getPersonal();
		$this->assign('data',$data);
	 	$this->showNavbar('我的博客');
	}

	/**
	 * 博客详情
	 * @return [type] [description]
	 */
	public function detail(){
		$blogData=D('Blog')->blogDetail(intval($_GET['id']));
		$this->assign('blogData',$blogData);
	 	$this->showNavbar('博客详情');	
	}

	/**
	 * AJAX点赞
	 * @return [type] [description]
	 */
	public function zan(){
		if(IS_AJAX){
			echo D('Blog')->zan(I('post.'));
		}
	}

	/**
	 * AJAX设置浏览量
	 * @return [type] [description]
	 */
	public function see(){
		if(IS_AJAX){
			echo D('Blog')->see(I('post.'));
		}
	}
}

