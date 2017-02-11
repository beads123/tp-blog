<?php
namespace Home\Model;
use Think\Model;
class CommentModel extends Model {

	//写入时验证
	protected $_validate = array(
		array('content','require','评论内容不能为空!',1,'regex'),
		array('content', '1,200', '评论字数不能超过200字！', 1, 'length')
	);

	/**
	 * 钩子方法，评论前加上必要字段
	 */
	protected function _before_insert(&$data, $option){
		//发布者id
		$data['blog_id']=I('post.blogId');
		$data['user_id'] = session('uid');
		$data['time'] =time();
	}

	/**
	 * 发布成功后得到该条评论的所有信息
	 * @return [type] [description]
	 */
	public function getData($id){
		$data=$this->field('a.content,a.time,b.username')
				   ->alias('a')
				   ->join('LEFT JOIN blog_user b ON a.user_id= b.id and a.id='.$id)
				   ->find();
		$data['time']=date('Y-m-d',$data['time']);  //更换时间格式
	    return $data;
	}

	/**
	 * 根据博客查找所有的评论
	 * @return [type] [description]
	 */
	public function getCommentsByBlogId($id){
		$arr=$this->field('b.username,a.content,a.time')
				   ->alias('a')
				   ->join('LEFT JOIN blog_user b ON b.id = a.user_id')
				   ->where(array('blog_id'=>$id))
				   ->order('time desc')
				   ->select();	
	    foreach ($arr as $k=>$v) {
	    	$arr[$k]['time']= date('Y-m-d',$v['time']);
	    }
		return $arr;
	}

	/**
	 * 导航栏最新评论
	 */
	public function getRecentComments(){
		$arr=$this->field('a.*,b.username')
				   ->alias('a')
				   ->join('LEFT JOIN blog_user b ON b.id = a.user_id')
				   ->order('time desc')
				   ->limit(5)
				   ->select();	
	    foreach ($arr as $k=>$v) {
	    	$arr[$k]['time']= date('Y-m-d',$v['time']);
	    }
		return $arr;		
	}
}
