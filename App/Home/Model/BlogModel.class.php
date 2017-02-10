<?php
namespace Home\Model;
use Think\Model;
class BlogModel extends Model {

	//写入时验证
	protected $_validate = array(
		array('title','require','标题不能为空',1,'regex',3),
		array('content','require','博客内容不能为空',1,'regex',3),
		array('type','require','博客类型不能为空',1,'regex',3)
	);

	/**
	 * 在博客记录插入到数据库之前先补充字段
	 */
	protected function _before_insert(&$data, $option){
		//发布者id
		$data['user_id'] = session('uid');
		//发布时间
		$data['time'] =time();
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
	 * 得到个人博客
	 */
	public function getPersonal(){
		$data = $this->field('a.*,b.username')->alias('a')
				->join('LEFT JOIN blog_user b ON a.user_id=b.id')
				->where(array('a.user_id'=>session('uid')))
				->select();
		return $data;
	}
}




















