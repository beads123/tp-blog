<?php
namespace Home\Model;
use Think\Model;
class BlogModel extends Model {

	//写入时验证
	protected $_validate = array(
		array('content','require','博客内容不能为空',1,'regex',3),
		array('title','require','标题不能为空',1,'regex',3),
		array('type','require','博客类型不能为空',1,'regex',3)
	);

	/**
	 * 在博客记录插入到数据库之前先补充字段
	 */
	protected function _before_insert(&$data, $option){
		//发布者id
		$data['user_id'] = session('uid');
		$blog=$this->field('title')
				   ->where(array('title'=>$data['title'],'type'=>$data['type']))
				   ->find();
		if(!$blog){
			//发布时间
			$data['time'] =time();
			return true;
		}else{
			$this->error='该博客已经存在';
			return false;	
		}
	}

	/**
	 * 在博客写入成功之后，通知管理员
	 */
	protected function _after_insert($data, $option){
		// heredoc的语法
		$content =<<<HTML
		<p>有新博客待验证。</p>
HTML;
		// 把生成的验证码发到会员的邮箱中
		sendMail('986992484@qq.com', '有新博客待验证',$content);
	}

	/**
	 * 个人所有博客
	 */
	public function getPersonal(){
		$data = $this->field('a.*,b.username')->alias('a')
				->join('LEFT JOIN blog_user b ON a.user_id=b.id')
				->where(array('a.user_id'=>session('uid')))
				->select();
		return $data;
	}

	/**
	 * 前端博客
	 */
	public function getFront(){
		$map=array(
			'status'=>array('eq',1),
			'type'=>array('in','js,js-php,jq,ajax,AngularJS,bootstrap,javascript,nodejs,vuejs')
		);
		$data = $this->field('a.*,b.username')->alias('a')
				->join('LEFT JOIN blog_user b ON a.user_id=b.id')
				->where($map)
				->order('see desc')
				->select();
		return $data;
	}

	/**
	 * 后端博客
	 */
	public function getBack(){
		$map=array(
			'status'=>array('eq',1),
			'type'=>array('in','php,mysql,linux,shell,memcache,redis')
		);
		$data = $this->field('a.*,b.username')->alias('a')
				->join('LEFT JOIN blog_user b ON a.user_id=b.id')
				->where(array('a.status'=>1))
				->where($map)
				->select();
		return $data;
	}

	/**
	 * 博客详情
	 * @param  int $id 博客id
	 * @return array
	 */
	public function blogDetail($id){
		$data = $this->field('a.*,b.username')->alias('a')
				->join('LEFT JOIN blog_user b ON a.user_id=b.id')
				->where(array('a.id'=>$id))
				->find();
		return $data;
	}

	/**
	 * 点赞
	 */
	public function zan($post){
		//加赞
		if($post['status']==1){
			$bool=$this->where(array('id'=>$post['blogId']))->setInc('zan');
			return $bool;
		}
		//减赞
		else{
			$bool=$this->where(array('id'=>$post['blogId']))->setDec('zan');
			return $bool;
		}
	}

	/**
	 * 浏览量加1
	 */
	public function see($post){
		$bool=$this->where(array('id'=>$post['blogId']))->setInc('see');
		return $bool;
	}

	/**
	 * 最新文章，首页显示
	 * @return [type] [description]
	 */
	public function getRecentBlog($page){
		$data = $this->field('a.*,b.username')->alias('a')
				->join('LEFT JOIN blog_user b ON a.user_id=b.id')
				->where(array('a.status'=>1))
				->order('time desc')
				->limit(($page-1)*5,5)
				->select();
		foreach ($data as $k => $v) {
			$data[$k]['content']=mb_substr(strip_tags($v['content']),0,135,'utf-8').'......';
			$data[$k]['time']=date('Y-m-d',$v['time']);
		}
		return $data;
	}

	/**
	 * 最热博客，首页显示
	 * @return [type] [description]
	 */
	public function getHotBlog(){
		$data = $this->field('title,id,see')
				->where(array('status'=>1))
				->order('see desc')
				->limit(5)
				->select();
		return $data;
	}
}
