<?php
	class ItemAction extends Action {

	public function item(){
		$classify = I("item");
		$Item = D("Item");
		$res = $Item -> getList($classify);
		$this -> assign("classify",json_encode($res));
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