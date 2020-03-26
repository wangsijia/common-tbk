<?php

namespace Wangsijia\Tbk\Jd\request;

class YsdkSettlementSettlementApplyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ysdk.settlement.settlementApply";
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
                                    	                   			private $requestJson;
    	                        
	public function setRequestJson($requestJson){
		$this->requestJson = $requestJson;
         $this->apiParas["requestJson"] = $requestJson;
	}

	public function getRequestJson(){
	  return $this->requestJson;
	}

}





        
 

