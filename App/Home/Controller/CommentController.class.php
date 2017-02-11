<?php
namespace Home\Controller;

/**
 * 博客评论控制器
 */
class CommentController extends CommonController{

	/**
	 * AJAX发表评论
	 */
	public function comment(){
	 	if(IS_AJAX){
	 		$model=D('Comment');
	 		if($model->create(I('post.'),1)){
	 			if($id=$model->add()){
	 				$data=$model->getData($id);
	 				echo json_encode(array(
	 					'code'=>200,
	 					'message'=>'评论成功!',
	 					'data'=>$data
	 				));
	 				return;
	 			}
	 		}else{
	 	 		echo json_encode(array(
	 				'code'=>400,
	 				'message'=>$model->getError()
	 			));		
	 		}
	 	}
	}

	
}

