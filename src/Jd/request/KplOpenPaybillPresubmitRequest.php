<?php

namespace Wangsijia\Tbk\Jd\request;

class KplOpenPaybillPresubmitRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.paybill.presubmit";
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
    private  $submitOrderVO;

    public function setSubmitOrderVO($submitOrderVO){
        $this->apiParas['submitOrderVO'] = $submitOrderVO;
    }
    public function getSubmitOrderVO(){
        return $this->apiParas['submitOrderVO'];
    }
}
