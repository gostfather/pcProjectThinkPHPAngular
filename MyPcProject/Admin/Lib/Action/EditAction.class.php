<?php
class EditAction extends Action {
    public function edit(){
    	$classify = I("classify");
    	$Edit = D("Edit");
		$res = $Edit -> getOne($classify);
		$this -> assign("data" , json_encode($res));
    	$this -> display("edit");
	}
	public function del(){
		$str = file_get_contents("php://input");
		$data = json_decode($str , true);
		$Edit = D("Edit");
		$res = $Edit -> del($data);
		if($res["status"] == 1){
			//删除文件
			unlink($data);
			$files = explode("/" , $data["imgurl"]);
			unset($files[2]);
			$DirName = implode("/", $files);
			//如果文件夹空了再删除文件夹
			$this -> removeDir($DirName);	
		}
		$this -> ajaxReturn($res);
	}
	public function subChange(){
		$str = file_get_contents("php://input");
		$data = json_decode($str , true);
		$Edit = D("Edit");
		$res = $Edit -> subChange($data);
		if($res["status"] == 1){
			$one = $Edit -> getOne($data['classify']);
			$this -> ajaxReturn($one);
		}else{
			$this -> ajaxReturn($res);
		}
	}
	public function upImg($sourseName,$tmpPath,$dirname){
		$type  = strrchr($sourseName,".");
		$fileName = $this -> randstr(6).$type;
		$data = $_POST;
		$data["addtime"] = $dirname;
		if(is_uploaded_file($tmpPath)){
			$res = move_uploaded_file($tmpPath, "shopImages/".$dirname."/".$fileName);
			if($res){
				//
				$Index = D("Edit");
				$data["imgurl"] =  "shopImages/".$dirname."/".$fileName;
				$resdata = $Index -> upload($data);
				if($resdata["status"] == 1){
					return "储存成功";
				}else{
					return "存储失败";
					unlink("shopImages/".$dirname."/".$fileName);
				}
			}else{
				return "存储失败";
				//删除文件
				unlink("shopImages/".$dirname."/".$fileName);
			}
		}
	}
	public function upload(){
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
			removeDir(("shopImages/".$dirname));
		};
		$this -> ajaxReturn($return);
	}
	//上传失败就删除文件夹
	function removeDir($path){
		if(file_exists($path)){
			$res = scandir($path);
			if(count($res) > 2){
				for( $k = 2 ; $k < count($res); $k++){
					$url = $path."/".$res[$k];
					if(is_file($url)){
						unlink($url);
					}else{
						removeDir($url);
					}
				}
			}
			$res = rmdir($path);
			return $res;
		}else{
			return "没有这个文件";
		}
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
	
}