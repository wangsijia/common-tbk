<?php

namespace Wangsijia\Tbk\Jd\request;

class KplOpenShopwechatIsvfollowndancelRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.shopwechat.isvfollowndancel";
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
    private  $body;

    public function setBody($body){
        $this->apiParas['body'] = $body;
    }
    public function getBody(){
        return $this->apiParas['body'];
    }
}
