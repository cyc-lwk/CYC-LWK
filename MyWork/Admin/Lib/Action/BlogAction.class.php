<?php
// 本类由系统自动生成，仅供测试用途
class BlogAction extends AclAction {  
    public function add(){
    	$this->display();
    }

    public function insert(){
    	$blog=M("Blog");
    	$blog->create();
        $blog->content=htmlspecialchars($_POST['content']);
        $blog->time=time();
    	if($blog->add()){
    		$this->success('发布成功',U(add));
    	}
    }

}