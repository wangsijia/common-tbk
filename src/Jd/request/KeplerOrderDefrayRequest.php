<?php

namespace Wangsijia\Tbk\Jd\request;

class KeplerOrderDefrayRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kepler.order.defray";
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
    private  $defrayReqParam;

    public function setDefrayReqParam($defrayReqParam){
        $this->apiParas['defrayReqParam'] = $defrayReqParam;
    }
    public function getDefrayReqParam(){
        return $this->apiParas['defrayReqParam'];
    }
}
