<?php

class AclAction extends Action {
	public function _initialize(){
		if(!$_SESSION['admin_login']){
    		$this->error('请先登录',U('Login/index'));
    		exit;
    	}
	}
}