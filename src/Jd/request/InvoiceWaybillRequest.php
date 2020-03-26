<?php

namespace Wangsijia\Tbk\Jd\request;

class InvoiceWaybillRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "biz.invoice.waybill";
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
    private  $markId;

    public function setMarkId($markId){
        $this->apiParas['markId'] = $markId;
    }
    public function getMarkId(){
        return $this->apiParas['markId'];
    }
}
