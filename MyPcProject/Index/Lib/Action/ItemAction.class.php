<?php
	class ItemAction extends Action {

	public function item(){
		$classify = I("item");
		$this -> assign("classify",$classify);
		$this->display("item");
	}
	public function getList(){
		$classify = I("item");
		//查库
		$Item = D("Item");
		$res = $Item -> getList($classify);
		$this -> ajaxReturn($res);
	}
	
	
	
	
	
	
}
?>