<?php

namespace Wangsijia\Tbk\Jd\request;

class KplOpenJdrepairGetinfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.jdrepair.getinfo";
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
    private  $state;

    public function setState($state){
        $this->apiParas['state'] = $state;
    }
    public function getState(){
        return $this->apiParas['state'];
    }
}