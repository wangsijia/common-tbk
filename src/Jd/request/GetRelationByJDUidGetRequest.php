<?php

namespace Wangsijia\Tbk\Jd\request;

class GetRelationByJDUidGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.getRelationByJDUid.get";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                    	                   			private $uid;
    	                        
	public function setUid($uid){
		$this->uid = $uid;
         $this->apiParas["uid"] = $uid;
	}

	public function getUid(){
	  return $this->uid;
	}


}
