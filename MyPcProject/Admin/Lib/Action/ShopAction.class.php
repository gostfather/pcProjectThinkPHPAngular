<?php
class ShopAction extends Action {
    public function index(){
    	if(empty($_SESSION["AdminName"])){
    		header("location:index.php/Index/index");
    	}
    	$this->display("index");
	}
	public function upImg($sourseName,$tmpPath,$dirname){
		$type  = strrchr($sourseName,".");
		$fileName = $this -> randstr(6).$type;
		$data = $_POST;
		if(is_uploaded_file($tmpPath)){
			$res = move_uploaded_file($tmpPath, "shopImages/".$dirname."/".$fileName);
			if($res){
				$Index = D("Shop");
				$data["imgurl"] =  "shopImages/".$dirname."/".$fileName;
				$resdata = $Index -> upload($data);
				if($resdata["status"] == 1){
					return "储存成功";
				}else{
					return "存储失败";
				}
			}else{
				return "存储失败";
				//删除文件
			}
		}
	}
	
	
	public function upload(){
//		print_r($_POST);
	//	print_r($_FILES);
		//先保存图片到服务器
		
		if(!file_exists("shopImages")){
			mkdir("shopImages");
		};
		$dirname = time();
		if(!file_exists("shopImages/".$dirname)){
			mkdir("shopImages/".$dirname);
		};
		$success = true;
		for($i = 0 ; $i < count($_FILES) ; $i++){
			$sourseName = $_FILES['img'.$i]['name'];
			$tmpPath = $_FILES['img'.$i]['tmp_name'];
			$res = $this -> upImg($sourseName,$tmpPath,$dirname);
			if($res =="存储失败"){
				$success = false;
			}
		};
		if($success){
			$return["info"]="上传成功";
			$return["status"]=1;
		}else{
			$return["info"]="上传失败";
			$return["status"]=2;
		};
		$this -> ajaxReturn($return);
		
		
	}
	
	
	
	
	
	//修改上传文件名字
	public function randstr($num){
		$str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$newstr = "";
		for($i=0;$i<$num;$i++){
			$randNum = mt_rand(0, strlen($str)-1);
			$newstr .= $str[$randNum];
		}
		return $newstr;
	}


	//显示简单列表
	public function simpleList(){
		$Index = D("Shop");
		$res = $Index -> simpleList();
		$this -> ajaxReturn($res);
		
	}
}