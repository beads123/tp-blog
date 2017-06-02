<?php
namespace Home\Controller;

/**
 * 博客控制器
 */
class BlogController extends CommonController{

	/**
	 * 前端博客
	 * @return [type] [description]
	 */
	public function front(){
	 	$data=D('Blog')->getFront();
	 	$this->assign('data',$data);
	 	$this->showNavbar('前端技术');	
	}

	/**
	 * 后端博客
	 * @return [type] [description]
	 */
	public function back(){
	 	$data=D('Blog')->getBack();
	 	$this->assign('data',$data);
	 	$this->showNavbar('后端技术');	
	}	
	
	/**
	 * 发布博客
	 * @return [type] [description]
	 */
	public function fabu(){
	  	if(IS_AJAX){
   			$model = D('Blog');
   			if($model->create($_POST,3)){
   				if($model->add()){
   					echo json_encode(array(
   						'code'=>200,
   						'message'=>'博客发布成功,需等待管理员通过验证'
   					));
   					return;
   				}else{
   					echo json_encode(array(
   						'code'=>500,
   						'message'=>$model->getError()
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
	 * 编辑博客
	 * @return [type] [description]
	 */
	public function edit(){
	  	if(IS_AJAX){
   			$model = D('Blog');
   			if($model->create($_POST,3)){
   				if($model->save()){
   					echo json_encode(array(
   						'code'=>200,
   						'message'=>'博客编辑成功'
   					));
   					return;
   				}else{
   					echo json_encode(array(
   						'code'=>500,
   						'message'=>$model->getError()
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
		//博客内容
		$blogData=D('Blog')->blogDetail(intval($_GET['id']));

		//评论内容
		$commentData=D('Comment')->getCommentsByBlogId(intval($_GET['id']));
		
		$this->assign(array(
			'blogData'=>$blogData,
			'commentData'=>$commentData
			)
		);
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

