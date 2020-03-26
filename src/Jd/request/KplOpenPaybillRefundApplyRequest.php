<?php

namespace Wangsijia\Tbk\Jd\request;

class KplOpenPaybillRefundApplyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.paybill.refund.apply";
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
    private  $refundVO;

    public function setRefundVO($refundVO){
        $this->apiParas['refundVO'] = $refundVO;
    }
    public function getRefundVO(){
        return $this->apiParas['refundVO'];
    }
}
