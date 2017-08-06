<?php
// 本类由系统自动生成，仅供测试用途
class SearchACtion extends Action {
    public function search() {
		$this -> assign("keyWord" , I("keyWord"));
		$this -> display("search");
    }
	public function searchKeyWord() {
		$keyWord = I("keyWord");
		$page =I("page");
		if(empty($page)){
			$page = 0 ;
		}
		$search = D("Search");
		$res = $search -> searchKeyWord($keyWord,$page,4);
		$this -> ajaxReturn($res);
	}
	
}