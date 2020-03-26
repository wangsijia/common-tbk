<?php

namespace Wangsijia\Tbk\Jd\request;

class MessageGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "biz.message.get";
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
    private  $type;

    public function setType($type){
        $this->apiParas['type'] = $type;
    }
    public function getType(){
        return $this->apiParas['type'];
    }
}
