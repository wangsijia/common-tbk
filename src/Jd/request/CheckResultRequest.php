<?php

namespace Wangsijia\Tbk\Jd\request;

class CheckResultRequest
{
	private $apiParas = array();

    private  $version;

    private $orderId;

    private $isSuccess;

    private $failedCode;

    private $failedMsg;
	
	public function getApiMethodName(){
	  return "jingdong.checkResult";
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

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }

	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

	public function setIsSuccess($isSuccess){
		$this->isSuccess = $isSuccess;
         $this->apiParas["isSuccess"] = $isSuccess;
	}

	public function getIsSuccess(){
	  return $this->isSuccess;
	}

	public function setFailedCode($failedCode){
		$this->failedCode = $failedCode;
         $this->apiParas["failedCode"] = $failedCode;
	}

	public function getFailedCode(){
	  return $this->failedCode;
	}

	public function setFailedMsg($failedMsg){
		$this->failedMsg = $failedMsg;
         $this->apiParas["failedMsg"] = $failedMsg;
	}

	public function getFailedMsg(){
	  return $this->failedMsg;
	}
}
