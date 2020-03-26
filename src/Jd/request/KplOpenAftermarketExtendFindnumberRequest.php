<?php

namespace Wangsijia\Tbk\Jd\request;

class KplOpenAftermarketExtendFindnumberRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.aftermarket.extend.findnumber";
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
    private  $client;

    public function setClient($client){
        $this->apiParas['client'] = $client;
    }
    public function getClient(){
        return $this->apiParas['client'];
    }
    private  $availableNumberReq;

    public function setAvailableNumberReq($availableNumberReq){
        $this->apiParas['availableNumberReq'] = $availableNumberReq;
    }
    public function getAvailableNumberReq(){
        return $this->apiParas['availableNumberReq'];
    }
}
