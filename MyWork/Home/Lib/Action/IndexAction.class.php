<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$blog=M('Blog');
    	$rows=$blog->order('time desc')->select();
    	$this->assign('rows',$rows);
    	$this->display();
    }
}