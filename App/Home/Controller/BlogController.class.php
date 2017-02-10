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
   			if($model->create(I('post.'),1)){
   				if($model->add()){
   					echo json_encode(array(
   						'code'=>200,
   						'message'=>'博客发布成功,需等待管理员通过验证'
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
	 * 显示个人博客
	 */
	public function personal(){
		$data=D('Blog')->getPersonal();
		$this->assign('data',$data);
	 	$this->showNavbar('我的博客');
	}
}

