<?php
// 本类由系统自动生成，仅供测试用途
class SearchACtion extends Action {
    public function search() {
		$this -> assign("keyWord" , I("keyWord"));
		$this -> display("search");
    }
	public function searchKeyWord() {
		$keyWord = I("keyWord");
		/*$keyWord = I("keyWord");
		$img = D("Cate");
		$img -> getSearch($keyWord);*/
		$this -> ajaxReturn($keyWord);
	}
}