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
		$images = M("images");
		$findOne = $images -> where("classify='".$_POST["classify"]."'") -> find();
		if($findOne){
			$return["info"]="已经有这个商品请通过管理修改";
			$return["status"]=3;
		}else{
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
		}
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