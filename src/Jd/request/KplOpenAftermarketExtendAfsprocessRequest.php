<?php

namespace Wangsijia\Tbk\Jd\request;

class KplOpenAftermarketExtendAfsprocessRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.aftermarket.extend.afsprocess";
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
    private  $afsServiceId;

    public function setAfsServiceId($afsServiceId){
        $this->apiParas['afsServiceId'] = $afsServiceId;
    }
    public function getAfsServiceId(){
        return $this->apiParas['afsServiceId'];
    }
}
