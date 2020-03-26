<?php

namespace Wangsijia\Tbk\Jd\request;

class KplOpenAlphaGetconfigurewithloginRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.alpha.getconfigurewithlogin";
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
    private  $baseInfo;

    public function setBaseInfo($baseInfo){
        $this->apiParas['baseInfo'] = $baseInfo;
    }
    public function getBaseInfo(){
        return $this->apiParas['baseInfo'];
    }
}
